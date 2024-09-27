<?php

namespace App\Http\Controllers;

use GuzzleHttp;
use Illuminate\Http\Request;

class defaultBadgeController extends Controller
{
    protected $apiKey = 'a8f5f167f44f4964e6c998dee827110c';

    protected $apiUrl = 'https://idea.org.uk/api/result';

    protected $apiToken;

    protected $testToken = 'TestToken - Will not submit to API';

    protected $badgeViewDir = 'vendor.digitalmarmalade.badges.';

    protected $callbackErrorUrl = 'https://idea.org.uk/';

    protected $hasUnits = false;

    protected $isDevMode = false;

    protected $oauthClientId;

    protected $oauthClientSecret;

    protected $oauthUrlGetAccessToken = 'https://idea.org.uk/oauth/token';

    //  switched (again) from https://idea.eu.auth0.com/i/oauth2/authorize as per email from Rich Martell on 15.08.17
    protected $oauthUrlGetAuthorisationCode = 'https://idea.org.uk/oauth/authorize';

    protected $viewAnyStep = false;

    public function __construct(Request $request)
    {
        $this->isDevMode = 'local' == config('app.env') or 'dev' == config('app.env') or 'qa' == config('app.env');
    }

    /**
     * handle routing to the home page.
     *
     * @param string $badgeSlug
     *
     * @return view
     */
    public function home($badgeSlug, Request $request)
    {
        //  if we have a progress value in URL then save to session in case we redirect for auth
        if (isset($_GET['progress'])) {
            $request->session()->put('get_progress_for_'.$badgeSlug, $_GET['progress']);
            $request->session()->save();
        }

        //  if no token set then if in dev mode set one else send to login page
        if (!$request->session()->has('oauth2_access_token_for_'.$badgeSlug)) {
            if ($this->isDevMode) {
                $request->session()->put('oauth2_access_token_for_'.$badgeSlug, $this->testToken);
            } else {
                return redirect()->action('badgesController@authLogin', [$badgeSlug]);
            }
        }

        //  get the user's progress through this badge if not already got
        if (!$request->session()->has('progress_for_'.$badgeSlug)) {
            $this->getUserProgress($request, $badgeSlug);
        }

        //  if we have progress saved in session then remove it and process
        if ($request->session()->has('get_progress_for_'.$badgeSlug)) {
            $key = 'get_progress_for_'.$badgeSlug;
            $val = $request->session()->pull($key);
            $request->session()->save();
            $request->session()->put('progress_for_'.$badgeSlug, $val);
            $this->handleProgress($badgeSlug, $request, $val);
        }

        //  show badge home page
        $this->badgeSlug = $url['slug'] = $badgeSlug;
        $url['viewDir'] = $this->getBadgeViewDir();
        $this->view = $this->badgeViewDir.$this->badgeSlug.'.home';
        $links = $this->getLinks(0);

        return view($this->view, compact('url', 'links'));
    }

    public function getUserProgress(Request $request, $badgeSlug, $step = null)
    {
        if ($this->isDevMode) {
            return $this->getDevUserProgress($request, $badgeSlug, $step);
        }

        $bearer_token = $request->session()->get('oauth2_access_token_for_'.$badgeSlug);

        $client = new \GuzzleHttp\Client();

        $res = $client->request(
            'GET',
            'https://idea.org.uk/api/user',
            [
                'http_errors' => false,
                'headers' => [
                    'Authorization' => 'Bearer '.$bearer_token,
                ],
            ]
        );

        if (null === $res || null === $res->getBody()) {
            return redirect()->action('badgesController@authLogin', [$badgeSlug]);
        }
        $user = json_decode($res->getBody());
        if (null === $user) {
            return redirect()->action('badgesController@authLogin', [$badgeSlug]);
        }
        if (!property_exists($user, 'progress')) {
            $request->session()->put('progress_for_'.$badgeSlug, 1);
        } else {
            $request->session()->put('progress_for_'.$badgeSlug, (int) $user->progress);
        }

        if (property_exists($user, 'data')) {
            $request->session()->put('data_for_'.$badgeSlug, json_decode($user->data, true));
        }
    }

    public function getDevUserProgress(Request $request, $badgeSlug, $step = null)
    {
        $steps = $this->getNumberOfSteps($badgeSlug);

        $request->session()->put('progress_for_'.$badgeSlug, $steps);

        $request->session()->put('data_for_'.$badgeSlug, []);
    }

    /**
     * get the number of steps this badge contains.
     *
     * @param mixed $badgeSlug
     *
     * @return int
     */
    public function getNumberOfSteps($badgeSlug)
    {
        $totalSteps = 1;
        while (view()->exists($this->badgeViewDir.$badgeSlug.'.step'.($totalSteps + 1))) {
            ++$totalSteps;
        }

        return $totalSteps;
    }

    /**
     * handle routing to the steps.
     *
     * @param string     $badgeSlug
     * @param int        $step
     * @param null|mixed $unit
     *
     * @return view
     */
    public function step(Request $request, $badgeSlug, $step, $unit = null)
    {
        if (!$request->session()->has('oauth2_access_token_for_'.$badgeSlug)) {
            if ($this->isDevMode) {
                $request->session()->put('oauth2_access_token_for_'.$badgeSlug, $this->testToken);
            } else {
                return redirect()->action('badgesController@authLogin', [$badgeSlug]);
            }
        }

        if (!$request->session()->has('progress_for_'.$badgeSlug)) {
            $this->getUserProgress($request, $badgeSlug, $step);
        }

        $this->badgeSlug = $url['slug'] = $badgeSlug;
        $this->step = $url['step'] = $step;
        $this->unit = $unit;
        $url['viewDir'] = $this->getBadgeViewDir();

        if ($this->hasUnits) {
            $url['step'] = $this->getProgressStepFromUnitStep($unit, $step);
        }

        $this->view = $this->getStepView($badgeSlug, $step, $unit);
        $links = $this->getLinks($step, $unit);

        $progress = $this->isDevMode ? null : $this->getProgress();

        $data = [];
        if (method_exists($this, 'getDataForStep'.$step)) {
            $method = 'getDataForStep'.$step;
            $data = $this->{$method}($badgeSlug, $step);
        }

        if (!view()->exists($this->view)) {
            $this->abort(404, 'View does not exist "'.$this->view.'"');
        }

        if (!$this->isDevMode) {
            $this->checkForCompletionCookie($request, $badgeSlug, $step, $unit);
        }

        $this->console($this->view, 'view');
        $this->console($url, 'url');
        $this->console($links, 'links');
        $this->console($progress, 'progress');
        $this->console($data, 'data');
        $this->console($request->session()->get('progress_for_'.$badgeSlug), 'session:progress_for_'.$badgeSlug);
        $this->console($request->session()->get('data_for_'.$badgeSlug), 'session:data_for_'.$badgeSlug);

        return view($this->view, compact('url', 'links', 'progress', 'data'));
    }

    /**
     * handle routing to the overlays.
     *
     * @param string $badgeSlug
     * @param int    $step
     * @param int    $overlay
     *
     * @return view
     */
    public function overlay($badgeSlug, $step, $overlay)
    {
        $this->badgeSlug = $url['slug'] = $badgeSlug;
        $this->step = $step;
        $this->overlay = $overlay;

        $this->view = $this->badgeViewDir.$this->badgeSlug.'.step'.$this->step.'-overlay'.$this->overlay;

        return view($this->view, compact('url'));
    }

    /**
     * handle routing to the success page.
     *
     * @param string $badgeSlug
     *
     * @return view
     */
    public function success(Request $request, $badgeSlug)
    {
        $this->badgeSlug = $url['slug'] = $badgeSlug;
        $this->step = $this->getNumberOfSteps($badgeSlug) + 1;
        $url['viewDir'] = $this->getBadgeViewDir();

        $this->view = $this->badgeViewDir.$this->badgeSlug.'.success';
        $links = $this->getLinks();

        $lastStep = explode('-', $links['last']);
        $lastStep = array_pop($lastStep);

        $this->checkForCompletionCookie($request, $badgeSlug, $lastStep);

        return view($this->view, compact('url', 'links'));
    }

    /**
     * handle submitting result to API.
     *
     * @param string $badgeSlug
     * @param string $result    pass|fail
     *
     * @return redirect
     */
    public function submit(Request $request, $badgeSlug, $result = 'pass')
    {
        $this->badgeSlug = $url['slug'] = $badgeSlug;
        $this->step = $this->getNumberOfSteps($badgeSlug) + 1;
        $url['viewDir'] = $this->getBadgeViewDir();
        $links = $this->getLinks();
        $lastStep = explode('-', $links['last']);
        $lastStep = array_pop($lastStep);
        $this->checkForCompletionCookie($request, $badgeSlug, $lastStep);

        if ((int) $request->session()->get('progress_for_'.$badgeSlug) < (int) $this->getNumberOfSteps($badgeSlug)) {
            $this->abort(404);
        }

        $bearer_token = $request->session()->get('oauth2_access_token_for_'.$badgeSlug);

        if (null === $bearer_token or $bearer_token === $this->testToken) {
            $this->abort(404, 'Not submitted as invalid bearer token: "'.$bearer_token.'"');
        }

        $client = new \GuzzleHttp\Client();
        $res = $client->request(
            'POST',
            $this->apiUrl,
            [
                'headers' => [
                    'Authorization' => 'Bearer '.$bearer_token,
                ],
                'json' => [
                    'result' => 'pass',
                ],
            ]
        );
        $json = json_decode((string) $res->getBody(), true);

        if (null === $json) {
            // \Storage::put(date('U') . '.json', json_encode($json, true));
            $this->abort(404, 'JSON not received');
        }

        if (array_key_exists('redirect_uri', $json)) {
            header('location: '.$json['redirect_uri']);
        }
        if (array_key_exists('redirectUrl', $json)) {
            header('location: '.$json['redirectUrl']);
        }

        exit;
    }

    /**
     * handle any non-standard routes.
     *
     * @param string $badgeSlug
     * @param string $slug
     * @param mixed  $slugs
     *
     * @return false
     */
    public function catchall(Request $request, $badgeSlug, $slugs)
    {
        $this->abort(404);

        return false;
    }

    /**
     * send result to PAI.
     *
     * @param string $result pass|fail
     *
     * @return guzzle response
     */
    public function sendPassToApi($result = 'pass')
    {
        if ($this->apiToken === $this->testToken) {
            exit('Test token used, will not submit to API');
        }

        $getParameters = [
            'apiKey' => $this->apiKey,
            'token' => $this->apiToken,
        ];

        $client = new GuzzleHttp\Client();

        return $client->request('POST', $this->apiUrl.'?'.http_build_query($getParameters), ['json' => ['result' => $result]]);
    }

    public function getView()
    {
        $view = $this->badgeViewDir.$this->badgeSlug.'.home';
        if (!view()->exists($view)) {
            $this->abort(404, 'View does not exist "'.$view.'"');
        }

        return $this->badgeViewDir;
    }

    /**
     * check url matches a badge.
     *
     * @return string
     */
    public function getBadgeViewDir()
    {
        $view = $this->badgeViewDir.$this->badgeSlug.'.home';
        if (!view()->exists($view)) {
            $this->abort(404, 'View does not exist "'.$view.'"');
        }

        return $this->badgeViewDir;
    }

    /**
     * create an array of links to use throughout page.
     *
     * @param null|mixed $step
     * @param null|mixed $unit
     *
     * @return array
     */
    public function getLinks($step = null, $unit = null)
    {
        $step = null === $step ? $this->step : $step;
        $links = [];

        //  home
        $links['home'] = action('badgesController@home', [$this->badgeSlug]);

        //  prev
        if (view()->exists($this->badgeViewDir.$this->badgeSlug.'.step'.($step - 1))) {
            $links['last'] = action('badgesController@step', [$this->badgeSlug, $step - 1]);
        } else {
            $links['last'] = action('badgesController@home', [$this->badgeSlug]);
        }

        //  next
        if (view()->exists($this->badgeViewDir.$this->badgeSlug.'.step'.($step + 1))) {
            $links['next'] = action('badgesController@step', [$this->badgeSlug, $step + 1]);
        } else {
            $links['next'] = action('badgesController@success', [$this->badgeSlug]);
        }

        //  success
        $links['success'] = action('badgesController@success', [$this->badgeSlug]);

        //  submit
        $links['submit'] = action('badgesController@submit', [$this->badgeSlug]);

        return $links;
    }

    /**
     * create an array of information about page progress.
     *
     * @param null|mixed $step
     *
     * @return array
     */
    public function getProgress($step = null)
    {
        $step = null === $step ? $this->step : $step;
        $totalSteps = $this->getNumberOfSteps($this->badgeSlug);

        return [
            'this' => $step,
            'total' => $totalSteps,
            'remain' => $totalSteps - $step,
            'percentage' => round($step / ($totalSteps + 1) * 100, 2),
        ];
    }

    public function authLogin(Request $request, $badgeSlug)
    {
        if (null === $this->oauthClientId) {
            $this->abort(404, 'No oauth client id supplied');
        }

        if (null === $this->oauthClientSecret) {
            $this->abort(404, 'No oauth client secret supplied');
        }

        $this->oauth2_state = hash('sha256', microtime(true).rand());
        $request->session()->put('oauth2_state', $this->oauth2_state);

        $params = [
            'response_type' => 'code',
            'client_id' => $this->oauthClientId,
            'redirect_uri' => action('badgesController@authCallback', [$badgeSlug]),
            'prompt' => 'none',
            'scope' => 'openid',
            'state' => $this->oauth2_state,
        ];
        $authUrl = $this->oauthUrlGetAuthorisationCode.'?'.http_build_query($params);

        header("Location: {$authUrl}");

        exit;
    }

    public function authCallback(Request $request, $badgeSlug)
    {
        if (isset($_GET['error'])) {
            $error = $_GET['error'];
            if ('login_required' === $error || 'consent_required' === $error || 'interaction_required' === $error) {
                header('Location: '.$this->callbackErrorUrl);

                exit;
            }
        }

        if (!isset($_GET['code'])) {
            $this->abort(404, 'Failed to get an authorization code');
        }
        $code = $_GET['code'];

        if (!isset($_GET['state'])) {
            $this->abort(404, 'Failed to get a state');
        }
        $state = $_GET['state'];

        // if (!$request->session()->has('oauth2_state')) {
        // $this->abort(404, 'Failed to get session state');
        // }
        $this->idea_token = $request->session()->get('idea_token');

        // if ($state !== $this->idea_token) { // Check the state is valid
        // $this->abort(404, 'OAuth2 invalid state!');
        // }

        $this->form_params = [
            'client_id' => $this->oauthClientId,
            'client_secret' => $this->oauthClientSecret,
            'redirect_uri' => action('badgesController@authCallback', [$badgeSlug]),
            'code' => $code,
            'grant_type' => 'authorization_code',
        ];

        $client = new \GuzzleHttp\Client();
        $res = $client->request(
            'POST',
            $this->oauthUrlGetAccessToken,
            ['form_params' => $this->form_params]
        );
        // \Log::info(print_r($this->form_params, true));

        $json = json_decode($res->getBody());

        if (!property_exists($json, 'access_token')) {
            //  todo: should restart the authorisation process
            $this->abort(404, 'Access token not found');
        }

        $request->session()->put('oauth2_access_token_for_'.$badgeSlug, $json->access_token);
        $request->session()->put('oauth2_id_token', $json->id_token);

        return redirect()->action('badgesController@home', [$badgeSlug]);

        exit;
    }

    public function authLogout(Request $request, $badgeSlug)
    {
        // \Storage::put(date('U') . '.json', 'andyetst');
        $request->session()->flush();

        return \Redirect::to('https://idea.org.uk', 302);
    }

    public function redirectIfUserNotFinishedPreviousStep(Request $request, $badgeSlug, $step, $unit = null)
    {
        if ($this->viewAnyStep) {
            return false;
        }

        if (!$request->session()->has('progress_for_'.$badgeSlug)) {
            $this->getUserProgress($request, $badgeSlug, $step);
        }

        $real_user_progress = (int) $request->session()->get('progress_for_'.$badgeSlug);
        $this_step = (int) $step;

        if ($this_step > $real_user_progress) {
            $stepToJumpTo = $real_user_progress < 1 ? 1 : $real_user_progress;
            $url = '/'.$badgeSlug.'/step-'.$stepToJumpTo;
            if ($stepToJumpTo !== $this_step) {
                header("Location: {$url}");

                exit;
            }
        }
    }

    public function sendUserData(Request $request, $badgeSlug)
    {
        $data = $request->session()->get('data_for_'.$badgeSlug);
        if (empty($data)) {
            $data = $request->except(['_token']);
        } else {
            $data = array_merge($request->except(['_token']), $data);
        }
        // if (!$this->isDevMode) {
        $res = $this->postToUserApi($request, $badgeSlug, null, $data);
        // }
        $response = json_decode($res->getBody());
        // \Log::info(print_r([$res, $response, $data], true));
        // dd($res, $response, $postData, $bearer_token);
    }

    public function sendUserProgress(Request $request, $badgeSlug, $step = null, $unit = null)
    {
        $progress = $step;
        $data = $request->session()->get('data_for_'.$badgeSlug);

        if (null !== $unit) {
            if (null === $data) {
                $data = [];
            }
            $data['units'][$unit]['progress'] = $step;
            $progress = ($unit * 100) + $step;
        }

        $request->session()->put('progress_for_'.$badgeSlug, $progress);
        $request->session()->put('data_for_'.$badgeSlug, $data);

        // if (!$this->isDevMode) {
        $this->postToUserApi($request, $badgeSlug, $progress, $data);
        // }
    }

    public function postToUserApi(Request $request, $badgeSlug, $progress = null, $data = null)
    {
        $bearer_token = $request->session()->get('oauth2_access_token_for_'.$badgeSlug);

        $client = new \GuzzleHttp\Client();

        $postData = [];

        if (null !== $progress) {
            $postData['progress'] = (int) $progress;
        }

        if (null !== $data) {
            $postData['data'] = json_encode($data, true);
        }

        //  add any requested step answers
        //  set by adding "oBadges.getStepAnswers()" to js file
        if (isset($_COOKIE[$badgeSlug])) {
            $cookie = json_decode($_COOKIE[$badgeSlug], true);
            if (isset($cookie['answers'])) {
                $postData['answers'] = $cookie['answers'];
            }
        }

        $res = $client->request(
            'POST',
            'https://idea.org.uk/api/progress',
            [
                'http_errors' => false,
                'headers' => [
                    'Authorization' => 'Bearer '.$bearer_token,
                ],
                'json' => $postData,
            ]
        );

        return $res;
        // $response = json_decode($res->getBody());
        // \Log::info(print_r([$res, $response, $postData, $bearer_token], true));
        // dd($res, $response, $postData, $bearer_token);
    }

    public function apiDump(Request $request, $badgeSlug)
    {
        if (!$this->isDeveloper()) {
            $this->abort(404);
        }

        $bearer_token = $request->session()->get('oauth2_access_token_for_'.$badgeSlug);

        if (null === $bearer_token or $bearer_token === $this->testToken) {
            $res = null;
        } else {
            $client = new \GuzzleHttp\Client();

            $res = $client->request(
                'GET',
                'https://idea.org.uk/api/user',
                [
                    'http_errors' => false,
                    'headers' => [
                        'Authorization' => 'Bearer '.$bearer_token,
                    ],
                ]
            );
        }

        if (null === $res || null === $res->getBody()) {
            $user = null;
        } else {
            $user = json_decode($res->getBody());
        }

        dd($badgeSlug, $bearer_token, $user, $res, $request->session());
    }

    public function isDeveloper()
    {
        $serverjson = json_encode($_SERVER, true);

        if (false !== strpos($serverjson, '127.0.0.1')) {
            return true;
        }

        if (false !== strpos($serverjson, '31.221.29.221')) {
            return true;
        }

        if (false !== strpos($serverjson, 'DigitalMarmalade')) {
            return true;
        }

        return false;
    }

    protected function handleProgress($badgeSlug, Request $request, $progressGet)
    {
        $progressGet = (int) $progressGet;
        $progressGet = $progressGet < 1 ? 1 : $progressGet;

        $progressApi = (int) $request->session()->get('progress_for_'.$badgeSlug);
        $progressApi = $progressApi < 1 ? 1 : $progressApi;

        $step = $progressGet > $progressApi ? $progressApi : $progressGet;

        $url = '/'.$badgeSlug.'/step-'.$step;

        header("Location: {$url}");

        exit;
    }

    protected function checkForCompletionCookie(Request $request, $badgeSlug, $step = null, $unit = null)
    {
        if (isset($_COOKIE[$badgeSlug])) {
            $cookie = json_decode($_COOKIE[$badgeSlug], true);
            $stepsCompleted = (int) $cookie['stepsCompleted'];
            if ($this->shouldSendUserProgress($step, $stepsCompleted)) {
                $this->sendUserProgress($request, $badgeSlug, $step, $unit);
            }
            setcookie($badgeSlug, null);
        }
        $this->redirectIfUserNotFinishedPreviousStep($request, $badgeSlug, $step, $unit);
    }

    protected function shouldSendUserProgress($step, $stepsCompleted)
    {
        return $stepsCompleted === (int) $step - 1;
    }

    protected function getCompletedCookieOrAbort($cookieName = null)
    {
        if (null === $cookieName) {
            $cookieName = $this->getCompletedCookieName();
        }

        if (!isset($_COOKIE[$cookieName])) {
            $this->abort(404);
        }

        return $_COOKIE[$cookieName];
    }

    protected function getCompletedCookieName()
    {
        return 'completed/'.$this->badgeSlug;
    }

    protected function getAddr()
    {
        $addr = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : $_SERVER['SERVER_ADDR'];

        return $addr;
    }

    protected function getUserData($badgeSlug)
    {
        if (!$request->session()->has('data_for_'.$badgeSlug)) {
            return [];
        }

        return $request->session()->get('data_for_'.$badgeSlug);
    }

    protected function getStepView($badgeSlug, $step, $unit = null)
    {
        return $this->badgeViewDir.$badgeSlug.'.step'.$step;
    }

    protected function abort($code, $message = '', array $headers = [])
    {
        if ($this->isDevMode or $this->isDeveloper()) {
            $this->console($message);
        }
        abort($code, $message, $headers);
    }

    protected function console($data = null, $title = null)
    {
        if (null === $data or !$this->isDeveloper()) {
            return false;
        }

        if (null !== $title) {
            echo '<script>console.groupCollapsed(\''.$title.'\');</script>';
        }

        echo '<script>console.log('.json_encode($data, true).');</script>';

        echo '<script>console.groupCollapsed(\'backtrace\');</script>';
        $calls = debug_backtrace();
        foreach ($calls as $call) {
            if (isset($call['function']) and isset($call['class'])) {
                $class = $call['class'];
                $class = str_replace('\\', '/', $class);
                $function = $call['function'];
                echo '<script>console.log("'.$class.' @ '.$function.'");</script>';
            } else {
                if (isset($call['file'])) {
                    $file = $call['file'];
                    $file = str_replace(base_path(), '', $file);
                    $file = str_replace('\\', '/', $file);
                    $line = $call['line'];
                    echo '<script>console.log("@ line '.$line.' of '.$file.'");</script>';
                }
            }
        }
        echo '<script>console.groupEnd();</script>';

        if (null !== $title) {
            echo '<script>console.groupEnd();</script>';
        }
    }
}
