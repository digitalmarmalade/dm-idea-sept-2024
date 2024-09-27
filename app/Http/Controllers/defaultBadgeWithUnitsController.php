<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use GuzzleHttp;

use Illuminate\Cookie\CookieJar as Cookie;

class defaultBadgeWithUnitsController extends defaultBadgeController
{

    protected $compulsoryUnits = [];

    protected $hasUnits = true;

    protected $units = [];

    public function __construct(Request $request)
    {
        parent::__construct($request);

        $this->units = $this->getBadgeUnits();

    }

    /**
     * expand user defined units into an array
     * @return array
     */
    private function getBadgeUnits()
    {
        $basicUnits = $this->defineBadgeUnits();

        $badgeUnits = [];

        foreach ($basicUnits as $unitId => $basicUnit) {

            $basicUnit['unit'] = $unitId;

            $basicUnit['slug'] = isset($basicUnit['slug']) ? $basicUnit['slug'] : str_slug($basicUnit['name']);

            if (isset($basicUnit['home'])) {
                $basicUnit['home'] = $basicUnit['home'] === false ? null : $basicUnit['home'];
            } else {
                $basicUnit['home'] = $basicUnit['slug'];
            }

            $basicUnit['compulsory'] = isset($basicUnit['compulsory']) ? $basicUnit['compulsory'] : true;
            $basicUnit['submittable'] = isset($basicUnit['submittable']) ? $basicUnit['submittable'] : true;
            $basicUnit['success'] = isset($basicUnit['success']) ? $basicUnit['success'] : true;
            $basicUnit['summary'] = isset($basicUnit['summary']) ? $basicUnit['summary'] : $basicUnit['slug'] . '-summary';

            $steps = [];

            if (is_int($basicUnit['steps'])) {
                for ($stepsIdx = 1; $stepsIdx <= $basicUnit['steps']; $stepsIdx++) {
                    $steps[$stepsIdx] = [
                        'unit' => $unitId,
                        'step' => $stepsIdx,
                        'url' => $basicUnit['slug'] . '-' . $stepsIdx,
                        'tpl' => $basicUnit['slug'] . '-' . $stepsIdx,
                    ];
                }
            } else {
                $stepsIdx = 0;
                foreach ($basicUnit['steps'] as $url => $tpl) {
                    $stepsIdx++;
                    $steps[$stepsIdx] = [
                        'unit' => $unitId,
                        'step' => $stepsIdx,
                        'url' => $url,
                        'tpl' => $tpl
                    ];
                }
            }
            $basicUnit['steps'] = $steps;

            $badgeUnits[$unitId] = $basicUnit;

            if ($basicUnit['compulsory'] === true) {
                $this->compulsoryUnits[] = $unitId;
            }

        }

        return $badgeUnits;

    }

    /**
     * define a list of units
     * THIS METHOD SHOULD BE OVERRIDDEN
     * @return array
     */

    protected function defineBadgeUnits()
    {
        $this->abort(500, 'This badge has units but none are defined');

    }

    /**
     * handle any non-standard routes
     * @param string $badgeSlug
     * @param string $slug
     * @return false
     */
    public function catchall(Request $request, $badgeSlug, $slug)
    {
        if ($slug === 'intro') {
            return $this->showIntro($request, $badgeSlug, $slug);
        }
        $unitStep = $this->getUnitStepFromSlug($slug);

        if ($unitStep === false) {
            $this->abort(404, 'unknown page #' . __LINE__);
        }

        if (isset($unitStep['home'])) {
            return $this->showUnitHomepage($request, $badgeSlug, $unitStep['home']);
        }

        if (isset($unitStep['summary'])) {
            return $this->showUnitSummary($request, $badgeSlug, $unitStep['summary']);
        }

        $bespokeStep = $this->processBespokeUnitStep($request, $badgeSlug, $unitStep);

        if ($bespokeStep === null) {
            return $this->step($request, $badgeSlug, $unitStep['step'], $unitStep['unit']);
        } else {
            return $bespokeStep;
        }

    }

    /**
     * handle any bespoked routing to the steps
     * @param string $badgeSlug
     * @param array $unitstep
     * @return view or null
     */
    protected function processBespokeUnitStep($request, $badgeSlug, $unitStep)
    {
        return null;
    }

    /**
     * handle routing to the success page
     * @param string $badgeSlug
     * @return view
     */
    public function success(Request $request, $badgeSlug)
    {
        foreach ($this->units as $unit) {
            if ($unit['success']) {                   
                $this->checkForCompletionCookie($request, $badgeSlug, count($unit['steps']) + 1, $unit);
            }
        }

        $dataApi = $request->session()->get('data_for_' . $badgeSlug);
        $allUnitsCompleted = true;

        foreach ($this->units as $unit) {
            if ($unit['compulsory']) {
                if (!isset($dataApi['units'][$unit['unit']]['progress']) OR $dataApi['units'][$unit['unit']]['progress'] < count($unit['steps'])) {
                    $allUnitsCompleted = false;
                }
            }
        }

        if ($allUnitsCompleted === false) {
            $this->abort(404);
        }

        $this->badgeSlug = $url['slug'] = $badgeSlug;
        $url['viewDir'] = $this->getBadgeViewDir();
        $this->view = $this->badgeViewDir . $this->badgeSlug . '.success';
        $links = $this->getLinks();

        return view($this->view, compact('url', 'links'));

    }

    /**
     * handle submitting result to API
     * @param string $badgeSlug
     * @param string $result  pass|fail
     * @return redirect
     */
    public function submit(Request $request, $badgeSlug, $result = 'pass')
    {
        $dataApi = $request->session()->get('data_for_' . $badgeSlug);
        $allUnitsCompleted = true;

        foreach ($this->units as $unit) {
            if ($unit['compulsory']) {
                if (!isset($dataApi['units'][$unit['unit']]['progress']) OR $dataApi['units'][$unit['unit']]['progress'] < count($unit['steps'])) {
                    $allUnitsCompleted = false;
                }
            }
        }

        if ($allUnitsCompleted === false) {
            $this->abort(404);
        }

        $this->badgeSlug = $url['slug'] = $badgeSlug;
        $url['viewDir'] = $this->getBadgeViewDir();
        $this->view = $this->badgeViewDir . $this->badgeSlug . '.success';
        $links = $this->getLinks();

        $bearer_token = $request->session()->get('oauth2_access_token_for_' . $badgeSlug);

        if ($bearer_token === null OR $bearer_token === $this->testToken) {
            $this->abort(404, 'Not submitted as invalid bearer token: "' . $bearer_token . '"');
        }

        $client = new \GuzzleHttp\Client();
        $res = $client->request(
            'POST',
            $this->apiUrl,
            [
                'headers' => [
                    'Authorization' => 'Bearer ' . $bearer_token,
                ],
                'json' => [
                    'result' => 'pass'
                ]
            ]
        );
        $json = json_decode((string) $res->getBody(), true);

        if ($json === null) {
            #\Storage::put(date('U') . '.json', json_encode($json, true));
            $this->abort(404, 'JSON not received');
        }

        if (array_key_exists('redirect_uri', $json)) {
            header('location: ' . $json['redirect_uri']);
        }
        if (array_key_exists('redirectUrl', $json)) {
            header('location: ' . $json['redirectUrl']);
        }
        die();

    }

    private function getUnitStepFromSlug($slug)
    {
        foreach ($this->units as $unitId => $unit) {
            if ($unit['slug'] === $slug AND $unit['home'] !== null) {
                return ['home' => $unit];
            }
            if ($unit['summary'] === $slug) {
                return ['summary' => $unit];
            }
            foreach ($unit['steps'] as $unitStep) {
                if ($unitStep['url'] === $slug) {
                    return $unitStep;
                }
            }
        }

        return false;

    }

    private function showIntro(Request $request, $badgeSlug, $unit)
    {
        $this->badgeSlug = $url['slug'] = $badgeSlug;
        $this->unit = $unit;
        $url['viewDir'] = $this->getBadgeViewDir();

        $this->view = $this->badgeViewDir . $badgeSlug . '.intro';
        $links = [];//$this->getLinks(null, $unit['unit']);

        if (!view()->exists($this->view)) {
            $this->abort(404, 'View does not exist "' . $this->view . '"');
        }

        return view($this->view, compact('url', 'links', 'progress'));
    }

    private function showUnitHomepage(Request $request, $badgeSlug, $unit)
    {
        $this->badgeSlug = $url['slug'] = $badgeSlug;
        $this->unit = $unit;
        $url['viewDir'] = $this->getBadgeViewDir();

        $this->view = $this->badgeViewDir . $badgeSlug . '.' . $unit['home'];
        $links = $this->getLinks(null, $unit['unit']);

        if (!view()->exists($this->view)) {
            $this->abort(404, 'View does not exist "' . $this->view . '"');
        }

        return view($this->view, compact('url', 'links', 'progress'));
    }

    private function showUnitSummary(Request $request, $badgeSlug, $unit)
    {
        $this->badgeSlug = $url['slug'] = $badgeSlug;
        $this->unit = $unit;
        $url['viewDir'] = $this->getBadgeViewDir();

        $this->view = $this->badgeViewDir . $badgeSlug . '.' . $unit['summary'];
        $links = $this->getLinks(null, $unit['unit']);

        if (!view()->exists($this->view)) {
            $this->abort(404, 'View does not exist "' . $this->view . '"');
        }

        if (!$this->isDevMode) {
            $this->checkForCompletionCookie($request, $badgeSlug, count($unit['steps']) + 1, $unit);
        }

        return view($this->view, compact('url', 'links', 'progress'));
    }

    protected function checkForCompletionCookie(Request $request, $badgeSlug, $step = null, $unit = null)
    {
        if (isset($_COOKIE[$badgeSlug])) {
            $cookie = json_decode($_COOKIE[$badgeSlug], true);
            $stepsCompleted = (int) $cookie['stepsCompleted'];
            $unit = isset($unit['unit']) ? $unit['unit'] : $unit;
            if ($stepsCompleted === (int) ($this->getProgressStepFromUnitStep($unit, $step) - 1)) {
                $this->sendUserProgress($request, $badgeSlug, $step, $unit);
            }
            setcookie($badgeSlug, null);
        }
        $this->redirectIfUserNotFinishedPreviousStep($request, $badgeSlug, $step, $unit);
    }

    protected function handleProgress($badgeSlug, Request $request, $progressGet)
    {
        $progressGet = (int) $progressGet;

        $step = $progressGet % 100;
        $unit = ($progressGet - $step) / 100;
        $dataApi = $request->session()->get('data_for_' . $badgeSlug);

        if (!isset($dataApi['units'][$unit]['progress'])) {
            return false;
        }

        $actualStep = (int) $dataApi['units'][$unit]['progress'];

        if (!isset($this->units[$unit]['steps'][$actualStep]['url'])) {
            return false;
        }

        $url = $this->units[$unit]['steps'][$actualStep]['url'];

        $url = action('badgesController@catchall', [$badgeSlug, $url]);

        header("Location: $url");
        die();

    }

    protected function getProgressStepFromUnitStep($unit, $step)
    {
        return ($unit * 100) + $step;
    }

    private function getUnitStepFromInt($int)
    {
        $step = $int % 100;

        $unit = ($int - $step) / 100;

        return [
            'unit' => $unit,
            'step' => $step
        ];

    }

    /**
     * create an array of links to use throughout page
     * @return array
     */
    public function getLinks($step = null, $unit = null)
    {
        $links = [];

        if ($unit === null) {
            $links['submit'] = action('badgesController@submit', [$this->badgeSlug]);
            return $links;
        }

        //  badge home
        $links['home'] = action('badgesController@home', [$this->badgeSlug]);

        //  unit home
        $links['unitHome'] = action('badgesController@catchall', [$this->badgeSlug, $this->units[$unit]['home']]);

        //  prev
        if ($step > 1) {
            $links['last'] = action('badgesController@catchall', [$this->badgeSlug, $this->units[$unit]['steps'][$step - 1]['url']]);
        } else {
            if ($this->units[$unit]['home'] !== null) {
                $links['last'] = action('badgesController@catchall', [$this->badgeSlug, $this->units[$unit]['home']]);
            }
        }

        //  next
        if ($step < count($this->units[$unit]['steps'])) {
            $links['next'] = action('badgesController@catchall', [$this->badgeSlug, $this->units[$unit]['steps'][$step + 1]['url']]);
        } else {
            if ($this->units[$unit]['success'] === true) {
                $links['next'] = $links['success'] = action('badgesController@success', [$this->badgeSlug]);
            } else {
                if ($this->units[$unit]['summary'] !== false) {
                    $links['next'] = action('badgesController@catchall', [$this->badgeSlug, $this->units[$unit]['summary']]);
                }
            }
        }

        //  submit
        if ($this->units[$unit]['submittable'] === true) {
            $links['submit'] = action('badgesController@submit', [$this->badgeSlug]);
        }

        return $links;
    }


    public function redirectIfUserNotFinishedPreviousStep(Request $request, $badgeSlug, $step, $unit = null)
    {
        if ($step <= 1) {
            return true;
        }

        if (!$request->session()->has('progress_for_' . $badgeSlug)) {
            $this->getUserProgress($request, $badgeSlug, $step);
        }

        $apiData = $request->session()->get('data_for_' . $badgeSlug);

        if (isset($unit['unit'])) {
            $unit = $unit['unit'];
        }

        if (!isset($apiData['units'][$unit]['progress'])) {
            $url = action('badgesController@catchall', [$badgeSlug, $this->units[$unit]['steps'][1]['url']]);
            header("Location: $url");
            die();
        }

        $thisUnitData = $apiData['units'][$unit];

        $real_user_progress = (int) $thisUnitData['progress'];

        $this_step = (int) $step;

        if ($this_step > $real_user_progress) {
            $url = action('badgesController@catchall', [$badgeSlug, $this->units[$unit]['steps'][$real_user_progress]['url']]);
            header("Location: $url");
            die();
        }

    }

    protected function getStepView($badgeSlug, $step, $unit = null)
    {
        return $this->badgeViewDir . $badgeSlug . '.' . $this->units[$unit]['steps'][$step]['tpl'];

    }




    public function getDevUserProgress(Request $request, $badgeSlug, $step = null)
    {
        $progress = 0;

        $data = [];

        foreach ($this->units as $unit) {
            $data['units'][$unit['unit']]['progress'] = count($unit['steps']);
            $progress = ($unit['unit'] * 100) + count($unit['steps']);
        }

        $request->session()->put('progress_for_' . $badgeSlug, $progress);

        $request->session()->put('data_for_' . $badgeSlug, $data);

    }


}
