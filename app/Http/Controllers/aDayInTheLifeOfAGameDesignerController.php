<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use GuzzleHttp;

use Illuminate\Cookie\CookieJar as Cookie;

class aDayInTheLifeOfAGameDesignerController extends defaultBadgeController
{

    protected $cookieName = 'game-design-user';

    protected $userId = null;

    protected $badgeSlug = 'a-day-in-the-life-of-a-game-designer';

    protected $oauthClientId = '22';

    protected $oauthClientSecret = 'uKQ6ivHq5TBnVi6vmodMHWQKOMluZz7fdrCYL85pdB3NQ8X5-kVktNOkwMQkQijM';

    public function __construct(Request $request)
    {
        parent::__construct($request);

        $cookie_name = 'game-design-user';
        if (!isset($_COOKIE[$this->cookieName])) {
            $this->userId = date('U');
            setcookie($this->cookieName, date('U'), time() + (60 * 60 * 24 * 365 * 10), "/");
        } else {
            $this->userId = $_COOKIE[$this->cookieName];
        }

        \View::share('localStorageKey', $this->badgeSlug);
    }

    /**
     * create an array of links to use throughout page
     * @return array
     */
    public function getLinks($step = null, $unit = null)
    {
        $links = parent::getLinks($step, $unit);
        $links['edit'] = action('badgesController@step', [$this->badgeSlug, 4]);
        $links['publish'] = action('badgesController@publish', [$this->badgeSlug]);
        $links['dir'] = action('badgesController@catchall', [$this->badgeSlug, 'dir']);

        return $links;
    }

    /**
     * handle publishing finalised game
     * @param string $badgeSlug
     * @param string $result  pass|fail
     * @return redirect
     */
    public function publish(Request $request, $badgeSlug)
    {
        $post = $request->all();
        $gameData = json_decode($post['json'], true);
        $userid = $this->userId;

        $this->saveGameJson($gameData, $userid, $badgeSlug);
        $this->addGameToDirectory($gameData, $userid, $badgeSlug);

        return redirect()->action('badgesController@catchall', [$badgeSlug, 'your-game']);
    }

    private function isThisGameUrlUnique($url, $userid, $badgeSlug)
    {
        $directoryFile = $badgeSlug . '/_directory.json';
        if (!\Storage::exists($directoryFile)) {
            return true;
        }
        $directory = json_decode(\Storage::get($directoryFile), true);

        $games = $directory['games'];
        unset($games[$userid]);

        $allUrls = array_column($games, 'url');
        return !in_array($url, $allUrls);

    }

    private function saveGameJson($gameData, $userid, $badgeSlug)
    {
        \Storage::makeDirectory($badgeSlug);

        $json = [
            'title' => $gameData['meta']['title'],
            'url' => str_slug($gameData['meta']['title']),
            'user' => $userid,
            'timestamp' => date('U'),
            'plays' => 0,
            'game' => $gameData
        ];

        $isUniqueUrl = $this->isThisGameUrlUnique($json['url'], $userid, $badgeSlug);
        if (!$isUniqueUrl) {
            $json['url'] .= '-' . $userid;
        }

        \Storage::put($badgeSlug . '/' . $userid . '.json', json_encode($json));

    }

    private function addGameToDirectory($gameData, $userid, $badgeSlug)
    {
        $directoryFile = $badgeSlug . '/_directory.json';
        if (\Storage::exists($directoryFile)) {
            $directory = json_decode(\Storage::get($directoryFile), true);
        } else {
            $directory = [
                'games' => []
            ];
        }

        $directory['games'][$userid] = [
            'title' => $gameData['meta']['title'],
            'url' => str_slug($gameData['meta']['title']),
            'summary' => $gameData['meta']['summary'],
            'bg' => $gameData['branding']['main-bg'],
            'fg' => $gameData['branding']['main-fg'],
            'timestamp' => date('U'),
            'plays' => 0
        ];

        $isUniqueUrl = $this->isThisGameUrlUnique($directory['games'][$userid]['url'], $userid, $badgeSlug);
        if (!$isUniqueUrl) {
            $directory['games'][$userid]['url'] .= '-' . $userid;
        }

        \Storage::put($directoryFile, json_encode($directory));

    }



    /**
     * handle any non-standard routes
     * @param string $badgeSlug
     * @param string $slug
     * @return false
     */
    public function catchall(Request $request, $badgeSlug, $slugs)
    {
        $this->badgeSlug = $badgeSlug;

        $slugParts = explode('/', $slugs);
        $slug = array_shift($slugParts);

        switch($slug) {

            case 'dir':
            return $this->showGameDirectory();

            case 'game':
            return $this->showUserGame();

            case 'your-game':
            return $this->yourGame($badgeSlug);

            default:
                $this->abort(404);
            break;
        }

    }

    public function showGameDirectory()
    {
        $url['slug'] = $this->badgeSlug;
        $this->view = $this->badgeViewDir . $this->badgeSlug . '.dir';

        $allGames = $this->getListOfGames();

        $games['plays-d'] = $this->arraySortByField($allGames['games'], 'plays', 'd', true);
        $games['time-d'] = $this->arraySortByField($allGames['games'], 'timestamp', 'd', true);

        return view($this->view, compact('url', 'games'));
    }

    public function showUserGame()
    {
        $url['slug'] = $this->badgeSlug;
        $this->view = $this->badgeViewDir . $this->badgeSlug . '.game';

        return view($this->view, compact('url'));
    }

    public function showGame(Request $request, $gameUrl)
    {
        $games = $this->getListOfGames();

        $gameToPlay = [];
        foreach ($games['games'] as $thisUserId => $thisGame) {
            if ($thisGame['url'] === $gameUrl) {
                $gameToPlay = json_decode(\Storage::get($this->badgeSlug . '/' . $thisUserId . '.json'), true);
            }
        }
        if (count($gameToPlay) < 1) {
            $this->abort(404, 'Game not found');
        }
        $url['slug'] = $this->badgeSlug;
        $gameData = $gameToPlay['game'];
        $gameData['id'] = $thisUserId;
        $gameData['api'] = action('badgesController@api', [$this->badgeSlug, 'game']);
        $gameJson = json_encode($gameData, true);

        $this->view = $this->badgeViewDir . $this->badgeSlug . '.game';

        return view($this->view, compact('url', 'gameJson', 'id'));

    }

    private function getListOfGames()
    {
        $directoryFile = $this->badgeSlug . '/_directory.json';
        if (!\Storage::exists($directoryFile)) {
            return [];
        }
        return json_decode(\Storage::get($directoryFile), true);

    }

    private function getUserGame($userid = null)
    {
        $userid = $userid !== null ? $userid : $this->userId;
        $games = $this->getListOfGames();

        if (array_key_exists($userid, $games['games'])) {
            return $games['games'][$userid];
        }
        return [];
    }

    private function arraySortByField($aArrayToSort, $sKeyToSort, $sDir = 'a', $bIsNumber = false)
    {
        foreach ($aArrayToSort as $key => $data) {
            if (!array_key_exists($sKeyToSort, $aArrayToSort[$key])) {
                return $aArrayToSort;
            }
            $aArrayTmp[$key] = $aArrayToSort[$key][$sKeyToSort] . '----' . $key;
        }
        if ($bIsNumber == false) {
            if ($sDir == 'a') {
                asort($aArrayTmp);
            } else {
                rsort($aArrayTmp);
            }
        } else {
            natsort($aArrayTmp);
            if ($sDir != 'a') {
                $aArrayTmp = array_reverse($aArrayTmp);
            }
        }
        foreach ($aArrayTmp as $key => $val) {
            $aArrayToSortTmp = explode('----', $val);
            $aSortedArray[$aArrayToSortTmp[1]] = $aArrayToSort[$aArrayToSortTmp[1]];
        }
        return $aSortedArray;
    }




    public function yourGame($badgeSlug)
    {
        $this->badgeSlug = $url['slug'] = $badgeSlug;
        $url['viewDir'] = $this->getBadgeViewDir();

        $this->view = $this->badgeViewDir . $this->badgeSlug . '.your-game';
        $links = $this->getLinks(9);

        $progress = $this->getProgress(9);

        $game = $this->getUserGame();

        if (count($game) < 1) {
            return redirect()->action('badgesController@home', [$badgeSlug]);
        }

        if (!view()->exists($this->view)) {
            $this->abort(404, 'View does not exist "' . $this->view . '"');
        }

        return view($this->view, compact('url', 'links', 'progress', 'game'));

    }

    /**
     * handle API class
     * @param string $badgeSlug
     * @param string $slug
     * @return view
     * @return mixed
     */

    public function api(Request $request, $badgeSlug, $slugs)
    {
        $post = $request->all();

        if (!array_key_exists('action', $post)) {
            return response()->json(['message' => 'No action specified'], 400);
        }

        switch($post['action']) {

            case 'increasePlayCount':
                if (!array_key_exists('id', $post)) {
                    return response()->json(null, 418);
                }
                $resp = $this->increasePlayCount($post['id'], $badgeSlug);
                if (!$resp) {
                    return response()->json(null, 400);
                }
            return $resp;

            case 'checkNameAvailability':
                if (!array_key_exists('name', $post)) {
                    return response()->json(['message' => 'Nothing to check'], 400);
                }
                $resp = $this->checkNameAvailability($post['name'], $badgeSlug);
            return response()->json($resp);

            default:
            return response()->json(['message' => 'Method Not Allowed'], 405);
        }

        die();
    }

    public function increasePlayCount($userid, $badgeSlug)
    {
        $game = $this->getUserGame($userid);
        if (count($game) < 1) {
            die();
            return false;
        }

        $directoryFile = $badgeSlug . '/_directory.json';
        if (\Storage::exists($directoryFile)) {
            $directory = json_decode(\Storage::get($directoryFile), true);
        } else {
            return false;
        }

        $directory['games'][$userid]['plays'] = $directory['games'][$userid]['plays'] + 1;

        \Storage::put($directoryFile, json_encode($directory));
        return response()->json(['message' => 'Count increased to ' . $directory['games'][$userid]['plays']]);
    }

    public function checkNameAvailability($name, $badgeSlug)
    {
        $thisUrl = str_slug($name);
        $existingGames = $this->getListOfGames();
        $urlIsAvailable = true;

        if (!array_key_exists('games', $existingGames) OR $existingGames['games'] == '') {
            return true;
        }

        foreach ($existingGames['games'] as $userid => $game) {

            if ($userid != $this->userId AND $game['url'] === $thisUrl) {
                $urlIsAvailable = false;
            }
        }

        return $urlIsAvailable;

    }

    private function getCategoriesJson($badgeSlug)
    {
        $categories = file_get_contents(\Request::root() . '/badge-assets/' . $badgeSlug . '/the-game/categories.json');
        $categories = json_decode($categories, true);
        $categories = $categories['data']['categories'];
        return $categories;
    }

    /**
     * get data for individual steps
     * @param string $badgeSlug
     * @param int $step
     * @return array or JSON
     */

    public function getDataForStep4($badgeSlug, $step)
    {
        return $this->getArrayOfCategoriesWithAnswers($badgeSlug);
    }

    public function getDataForStep6($badgeSlug, $step)
    {
        return $this->getArrayOfCategoriesWithAnswers($badgeSlug);
    }

    public function getDataForStep8($badgeSlug, $step)
    {
        return $this->getJsonListOfCategories($badgeSlug);
    }

    public function getDataForStep9($badgeSlug, $step)
    {
        return $this->getJsonListOfCategories($badgeSlug);
    }

    public function getDataForStep12($badgeSlug, $step)  //   was 9
    {
        return $this->getArrayOfCategoriesWithAnswers($badgeSlug);
    }

    public function getDataForStep13($badgeSlug, $step)  //  was 10
    {
        return $this->getJsonListOfCategories($badgeSlug);
    }

    public function getDataForStep14($badgeSlug, $step)  //  was 10
    {
        return $this->getJsonListOfCategories($badgeSlug);
    }

    public function getDataForStep15($badgeSlug, $step)  //  was 10
    {
        return $this->getJsonListOfCategories($badgeSlug);
    }

    public function getDataForStep18($badgeSlug, $step)  //  was 12
    {
        return $this->getArrayOfCategoriesWithAnswers($badgeSlug);
    }

    public function getDataForStep19($badgeSlug, $step)  //  was 13
    {
        return $this->getJsonListOfCategories($badgeSlug);
    }

    public function getDataForStep20($badgeSlug, $step)  //  was 13
    {
        return $this->getJsonListOfCategories($badgeSlug);
    }

    public function getDataForStep21($badgeSlug, $step)  //  was 13
    {
        return $this->getJsonListOfCategories($badgeSlug);
    }


    public function getArrayOfCategoriesWithAnswers($badgeSlug)
    {
        $data['categories'] = $this->getCategoriesJson($badgeSlug);
        uasort(
            $data['categories'],
            function($a, $b) {
                return strnatcmp($a['name'], $b['name']);
            }
        );

        return $data;
    }


    public function getJsonListOfCategories($badgeSlug)
    {
        $data = array();
        $categories = $this->getCategoriesJson($badgeSlug);

        foreach ($categories as $key => $category) {
            $data['categories'][$key] = $category['name'];
        }
        $data['categories'] = json_encode($data['categories'], true);

        return $data;
    }

}
