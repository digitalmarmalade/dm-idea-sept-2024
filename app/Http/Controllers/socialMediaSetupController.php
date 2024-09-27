<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class socialMediaSetupController extends defaultBadgeWithUnitsController
{

    protected $oauthClientId = 'A4dJY4dZpkdOCm3g7Vo6FIicMcJXApNw';

    protected $oauthClientSecret = 'V_DRewdtC1B7c-f3WmABf4EK5KN8EnPrX2gp-fzuPadjI8aFJDm4jPMAEBtWIAXe';

    protected $viewAnyStep = true;

    protected function defineBadgeUnits()
    {
        $facebook = [
            'name' => 'Facebook',
            'compulsory' => false,  //  optional - defaults to true
            'submittable' => false,  //  optional - defaults to true
            'steps' => 7,
            //'slug' => 'slug-here',  //  optional - defaults to slug of unit name
            //'home' => false,  //  optional - defaults to slug of unitname - set to false if unit has no home
            'success' => false,  //  whether has success page - optional - defaults to true which uses default route
        ];

        $twitter = [
            'name' => 'Twitter',
            'compulsory' => false,  //  optional - defaults to true
            'submittable' => false,  //  optional - defaults to true
            'steps' => 7,
            //'slug' => 'slug-here',  //  optional - defaults to slug of unit name
            //'home' => false,  //  optional - defaults to slug of unitname - set to false if unit has no home
            'success' => false,  //  whether has success page - optional - defaults to true which uses default route
        ];

        $instagram = [
            'name' => 'Instagram',
            'compulsory' => false,  //  optional - defaults to true
            'submittable' => false,  //  optional - defaults to true
            'steps' => 7,
            //'slug' => 'slug-here',  //  optional - defaults to slug of unit name
            //'home' => false,  //  optional - defaults to slug of unitname - set to false if unit has no home
            'success' => false,  //  whether has success page - optional - defaults to true which uses default route
        ];

        $linkedIn = [
            'name' => 'Linked In',
            'compulsory' => false,  //  optional - defaults to true
            'submittable' => false,  //  optional - defaults to true
            'steps' => 8,
            'slug' => 'linkedin',
            //'home' => false,  //  optional - defaults to slug of unitname - set to false if unit has no home
            'success' => false,  //  whether has success page - optional - defaults to true which uses default route
        ];

        $snapchat = [
            'name' => 'Snapchat',
            'compulsory' => false,  //  optional - defaults to true
            'submittable' => false,  //  optional - defaults to true
            'steps' => 6,
            //'slug' => 'slug-here',  //  optional - defaults to slug of unit name
            //'home' => false,  //  optional - defaults to slug of unitname - set to false if unit has no home
            'success' => false,  //  whether has success page - optional - defaults to true which uses default route
        ];

        $youtube = [
            'name' => 'You Tube',
            'compulsory' => false,  //  optional - defaults to true
            'submittable' => false,  //  optional - defaults to true
            'steps' => 4,
            'slug' => 'youtube',
            //'home' => false,  //  optional - defaults to slug of unitname - set to false if unit has no home
            'success' => false,  //  whether has success page - optional - defaults to true which uses default route
        ];

        $quiz = [
            'name' => 'Quiz',
            'home' => false,
            //'success' => false,
            'submittable' => true,
            'summary' => false,
            'steps' => [
                'quiz' => 'quiz'
            ]
        ];

        $badgeUnits[1] = $facebook;
        $badgeUnits[2] = $twitter;
        $badgeUnits[3] = $instagram;
        $badgeUnits[4] = $linkedIn;
        $badgeUnits[5] = $snapchat;
        $badgeUnits[6] = $youtube;
        $badgeUnits[7] = $quiz;

        return $badgeUnits;

    }

    /**
     * handle any bespoked routing to the steps
     * @param string $badgeSlug
     * @param array $unitstep
     * @return view or null
     */
    protected function processBespokeUnitStep($request, $badgeSlug, $unitStep)
    {
        switch($unitStep['url']) {

            case 'quiz':
                $allUnitsCompleted = true;
                $units = [];

                $data = $request->session()->get('data_for_' . $badgeSlug);

                // $data['units'][4]['progress'] = 1;

                //  1. facebook;
                if (isset($data['units'][1]['progress']) AND $data['units'][1]['progress'] >= 1) {
                    $units['facebook'] = true;
                } else {
                    $units['facebook'] = false;
                    $allUnitsCompleted = false;
                }
                //  2. twitter;
                if (isset($data['units'][2]['progress']) AND $data['units'][2]['progress'] >= 2) {
                    $units['twitter'] = true;
                } else {
                    $units['twitter'] = false;
                    $allUnitsCompleted = false;
                }
                //  3. instagram;
                if (isset($data['units'][3]['progress']) AND $data['units'][3]['progress'] >= 3) {
                    $units['instagram'] = true;
                } else {
                    $units['instagram'] = false;
                    $allUnitsCompleted = false;
                }
                //  4. linkedIn;
                if (isset($data['units'][4]['progress']) AND $data['units'][4]['progress'] >= 3) {
                    $units['linkedIn'] = true;
                } else {
                    $units['linkedIn'] = false;
                    $allUnitsCompleted = false;
                }
                //  5. snapchat;
                if (isset($data['units'][5]['progress']) AND $data['units'][5]['progress'] >= 5) {
                    $units['snapchat'] = true;
                } else {
                    $units['snapchat'] = false;
                    $allUnitsCompleted = false;
                }
                //  6. youtube;
                if (isset($data['units'][6]['progress']) AND $data['units'][6]['progress'] >= 4) {
                    $units['youtube'] = true;
                } else {
                    $units['youtube'] = false;
                    $allUnitsCompleted = false;
                }

                if ($allUnitsCompleted === true) {
                    return null;
                }

                //  show badge home page
                $this->badgeSlug = $url['slug'] = $badgeSlug;
                $url['viewDir'] = $this->getBadgeViewDir();
                $this->view = $this->badgeViewDir . $this->badgeSlug . '.home';
                $links = $this->getLinks(0);
            return view($this->badgeViewDir . 'social-media-setup.quiz-disabled', compact('url', 'links', 'units'));

            default:
            return null;
        }

    }

}
