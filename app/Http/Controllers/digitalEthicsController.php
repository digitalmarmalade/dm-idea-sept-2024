<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class digitalEthicsController extends defaultBadgeController
{

    protected $oauthClientId = 'UYyU7ci0SajJUfCs9REc16K4ujZYvKPe';

    protected $oauthClientSecret = 'o7aDjubqI9zpN5K1Y1yVmlS68cGJlHgvcIK9TM9p';

    protected $testToken = 'TestToken - Will not submit to API';

    /**
     * handle routing to the steps
     * @param string $badgeSlug
     * @param int $step
     * @return view|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function step(Request $request, $badgeSlug, $step, $unit = null)
    {
        if (!$request->session()->has('oauth2_access_token_for_' . $badgeSlug)) {
            if ($this->isDevMode) {
                $request->session()->put('oauth2_access_token_for_' . $badgeSlug, $this->testToken);
            } else {
                return redirect()->action('badgesController@authLogin', [$badgeSlug]);
            }
        }

        if (!$request->session()->has('progress_for_' . $badgeSlug)) {
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

        $data = array();
        if (method_exists($this, 'getDataForStep' . $step)) {
            $method = 'getDataForStep' . $step;
            $data = $this->$method($badgeSlug, $step);
        }

        if (!view()->exists($this->view)) {
            $this->abort(404, 'View does not exist "' . $this->view . '"');
        }

        if (!$this->isDevMode) {
            $this->checkForCompletionCookie($request, $badgeSlug, $step, $unit);
        }

        if ($step === '2') {
            $data = $this->getData();
        }

        $this->console($this->view, 'view');
        $this->console($url, 'url');
        $this->console($links, 'links');
        $this->console($progress, 'progress');
        $this->console($data, 'data');
        $this->console($request->session()->get('progress_for_' . $badgeSlug), 'session:progress_for_' . $badgeSlug);
        $this->console($request->session()->get('data_for_' . $badgeSlug), 'session:data_for_' . $badgeSlug);

        return view($this->view,[
            'url' => $url,
            'links' => $links,
            'progress' => $progress,
            'case' => $data]
        );

    }

    public function getData () {
        return [
            1 => [
                'dataActivity1' => [
                    'questions' => [
                        [
                            'number' => 1,
                            'statement' => 'Social service workers save time by not having to manually process claims.',
                            'answer' => 'pos'
                        ],
                        [
                            'number' => 2,
                            'statement' => 'People who can use the system gain more independence and control over their finances.',
                            'answer' => 'pos'
                        ],
                        [
                            'number' => 3,
                            'statement' => 'It will not be possible for people who are digitally excluded to access the system independently.',
                            'answer' => 'neg'
                        ],
                        [
                            'number' => 4,
                            'statement' => 'As a result of the savings from the more efficient system, the government could invest in other key services to benefit the country.',
                            'answer' => 'pos'
                        ],
                        [
                            'number' => 5,
                            'statement' => 'Certain groups may be disproportionately affected by changes to the system.',
                            'answer' => 'neg'
                        ],
                        [
                            'number' => 6,
                            'statement' => 'If everyone around the world is able to use an online welfare system to access appropriate support, then the world could become a more fair and equal place.',
                            'answer' => 'pos'
                        ],
                    ],
                    'feedbacks' => [
                        'success' => 'Well done! Next, let’s consider the scale of impact on individuals, society and the world.'
                    ],
                    'openingStatement' => 'Take a look at some of the potential consequences of the digitisation of welfare services and decide whether they might be positive or negative.',
                ],
                'dataActivity2' => [
                    'questions' => [
                        'individual' => [
                            'low' => 'The individuals that use the new digital service could be greatly affected by the consequences. Remember that different people can be impacted in different ways and to varying levels. ',
                            'medium' => 'Implementing the new digital system could impact the people who use it quite highly. Remember that different people can be affected in different ways and to varying levels.',
                            'high' => 'Good thinking! Rolling out the new digital system is likely to have a high impact on the individuals who use it. Remember that different people can be impacted in different ways and to varying levels.'
                        ],
                        'society' => [
                            'low' => 'This innovation could have a significant impact on the people and communities who administer and use the system.',
                            'medium' => 'Nice work! The implementation of the new digital system for welfare services could have a significant impact on people and communities.',
                            'high' => 'Nice work! This innovation could significantly impact people who administer the system as well as those who use it to access support.'
                        ],
                        'global' => [
                            'low' => 'Something has a global impact if it happens in all parts of the world, or affects all parts of the world. If all countries adopt the digital system, then it could have a considerable global impact.',
                            'medium' => 'If all countries adopt the digital system, people and economies around the world could potentially be impacted.',
                            'high' => 'If all countries adopt the digital system, people and economies around the world could potentially be impacted.'
                        ],
                    ],
                    'feedbacks' => [
                        'success' => 'Nice work! How did your selections compare with the feedback? 
                        When you’re ready, let’s move on to the next case study.',
                    ],
                    'openingStatement' => 'Please use the sliders to show the scale of impact you think the digitisation of welfare services could have on',
                ],
            ],
            2 => [
                'dataActivity1' => [
                    'questions' => [
                        [
                            'number' => 1,
                            'statement' => 'Learners feel safe knowing that their data is protected. ',
                            'answer' => 'pos'
                        ],
                        [
                            'number' => 2,
                            'statement' => 'Those who don’t have access to connectivity or a device for learning might get left behind.',
                            'answer' => 'neg'
                        ],
                        [
                            'number' => 3,
                            'statement' => 'Benefits from learning could help individuals to improve their lives and the lives of their families.',
                            'answer' => 'pos'
                        ],
                        [
                            'number' => 4,
                            'statement' => 'Employers could recruit digitally skilled and confident colleagues. ',
                            'answer' => 'pos'
                        ],
                        [
                            'number' => 5,
                            'statement' => 'If the charity is not able to keep learner data safe and secure and there is a security breach, then learner data could be exposed.  ',
                            'answer' => 'neg'
                        ],
                        [
                            'number' => 6,
                            'statement' => 'Making digital skills education free, fun and accessible to all could help to close global skills gaps and increase employment rates around the world. ',
                            'answer' => 'pos'
                        ],
                    ],
                    'feedbacks' => [
                        'success' => 'Nicely done! Next, consider the scale of impact on individuals, society and the world. ',
                    ],
                    'openingStatement' => 'Take a look at some of the potential consequences of this online learning platform and decide whether they might be positive or negative.',
                ],
                'dataActivity2' => [
                    'questions' => [
                        'individual' => [
                            'low' => 'People can be impacted by different things in different ways and to varying levels and this innovation seems like it could have a considerable impact on those that use it.',
                            'medium' => 'Good thinking! There could be a considerable impact on individuals who trust and use this platform for learning online.',
                            'high' => 'The platform could have a considerable impact on individuals that use it.'
                        ],
                        'society' => [
                            'low' => 'This innovation could impact many different aspects of society to differing degrees. For example, it could affect people’s attitudes, their productivity, or how similar organisations within the industry operate.',
                            'medium' => 'Well done! This learning platform could impact many different aspects of society, such as people’s attitudes, their productivity, and how similar organisations within the industry may operate.',
                            'high' => 'This innovation has the potential for making a considerable impact on society. For example, it could affect people’s attitudes and behaviours, their productivity, or how organisations operate.'
                        ],
                        'global' => [
                            'low' => 'If the platform is used by people in all parts of the world, or if it affects all parts of the world then it will have a global impact.',
                            'medium' => 'Nice work! If the platform is used by people in all parts of the world and helps to educate people on a global scale, it could have a considerable impact!',
                            'high' => 'If the platform is used in all parts of the world, or if it affects people in all parts of the world then it will have a global impact. The level of impact could be quite considerable!'
                        ],
                    ],
                    'feedbacks' => [
                        'success' => 'Nice work! Did your selections match the feedback?
                        When you’re ready, let’s move on to the next case study.',
                    ],
                    'openingStatement' => 'Please use the sliders to show the scale of impact you think this online platform could have on',
                ],
            ],
            3 => [
                'dataActivity1' => [
                    'questions' => [
                        [
                            'number' => 1,
                            'statement' => 'Social media can give people a voice and a platform to share information.',
                            'answer' => 'pos'
                        ],
                        [
                            'number' => 2,
                            'statement' => 'Social media can help bring light to important issues and place them on a global stage.',
                            'answer' => 'pos'
                        ],
                        [
                            'number' => 3,
                            'statement' => 'Echo chambers can prevent people from gaining a well-rounded picture of different viewpoints and ideologies. ',
                            'answer' => 'neg'
                        ],
                        [
                            'number' => 4,
                            'statement' => 'Whole communities can be influenced or led to believe something that is not factual if a topic goes viral on social media.',
                            'answer' => 'neg'
                        ],
                        [
                            'number' => 5,
                            'statement' => 'Social media can democratise access to information and can enable people who use it to broadcast information to a global audience that they might otherwise not be able to reach.',
                            'answer' => 'pos'
                        ],
                        [
                            'number' => 6,
                            'statement' => 'On a large scale, social media could impact society by fueling political polarisation and growing social mistrust. ',
                            'answer' => 'neg'
                        ],
                    ],
                    'feedbacks' => [
                        'success' => 'Great work! Next, please think about the scale of impact on individuals, society and the world. ',
                    ],
                    'openingStatement' => 'Take a look at some of the potential consequences of social media and echo chambers and decide whether they might be positive or negative.',
                ],
                'dataActivity2' => [
                    'questions' => [
                        'individual' => [
                            'low' => 'Social media could have a significant impact on individuals - for people who use it for connecting and communicating with others and to source and share information.',
                            'medium' => 'Social media could have a significant impact on individuals - both for those who use it to send and share information, and for those who use it to find information.',
                            'high' => 'Well done! This innovation could have a significant impact on individuals that use the service.'
                        ],
                        'society' => [
                            'low' => 'Social media and echo chambers could have a significant impact on society.',
                            'medium' => 'Social media and echo chambers could have a significant impact on society. ',
                            'high' => 'Good thinking! The widespread use of social media could have a significant impact on society.'
                        ],
                        'global' => [
                            'low' => 'As the number of people around the world who use social media increases, it can have a significant global impact.',
                            'medium' => 'Nice work! More than half of the world now uses social media and this rate continues to rise. Social media already has a significant global impact and we can see this in the areas of politics, lifestyle and global trends.',
                            'high' => 'Nice work! More than half of the world now uses social media and this rate continues to rise. Social media already has a significant global impact and we can see this in the areas of politics, lifestyle and global trends. '
                        ],
                    ],
                    'feedbacks' => [
                        'success' => 'Nicely done! What did you think of the feedback?
You’re half way through these case studies now. When you’re ready, please move on to the next one.',
                    ],
                    'openingStatement' => 'Please use the sliders to show the scale of impact you think social media and echo chambers could have on',
                ],
            ],
            4 => [
                'dataActivity1' => [
                    'questions' => [
                        [
                            'number' => 1,
                            'statement' => 'Staff in the admissions department can work more efficiently.',
                            'answer' => 'pos'
                        ],
                        [
                            'number' => 2,
                             'statement' => "The algorithm is &lt;span  class='tooltip-trigger jsTooltip' data-tooltip-content='#tooltip10_content' &gt;biased&lt;/span&gt; due to being created with unrepresentative data and so certain applicants could face discrimination.",
                            'answer' => 'neg'
                        ],
                        [
                            'number' => 3,
                            'statement' => 'If the biased algorithm results in the university having a predominantly male student body, this could limit diversity in the ideas and experiences that this university offers. ',
                            'answer' => 'neg'
                        ],
                        [
                            'number' => 4,
                            'statement' => 'There is less opportunity for human error, subjectivity, or preferential treatment in the initial screening process.',
                            'answer' => 'pos'
                        ],
                        [
                            'number' => 5,
                            'statement' => 'If the biased algorithm caused fewer non-male candidates to get in to the university then there will be fewer non-male university graduates entering the job market.',
                            'answer' => 'neg'
                        ],
                        [
                            'number' => 6,
                            'statement' => 'A lack of representative role models in higher education and leadership roles which could have a multi-generational knock-on effect.',
                            'answer' => 'neg'
                        ],
                    ],
                    'feedbacks' => [
                        'success' => 'Brilliant! Next, consider the scale of impact on individuals, society and the world.',
                    ],
                    'openingStatement' => 'Please take a look at some of the potential consequences of the machine learning algorithm and decide whether they might be positive or negative.',
                ],
                'dataActivity2' => [
                    'questions' => [
                        'individual' => [
                            'low' => 'The machine learning algorithm could have a significant impact on the university applicants and the staff that work there.',
                            'medium' => 'The machine learning algorithm could have a significant impact on the university applicants and the staff that work there.',
                            'high' => 'Great job! The machine learning algorithm could certainly have a high impact on both the applicants and the staff that work in recruitment.'
                        ],
                        'society' => [
                            'low' => 'The implementation of the machine learning algorithm could have a significant impact on society. At the very least, it will probably affect a whole community of university applicants.',
                            'medium' => 'Good thinking! The implementation of the machine learning algorithm could have a significant impact on society. At the very least, it will probably affect a whole community of university applicants.',
                            'high' => 'Good thinking! The implementation of the machine learning algorithm could have a significant impact on society. At the very least, it will probably affect a whole community of university applicants. '
                        ],
                        'global' => [
                            'low' => 'Something has a global impact if it happens in all parts of the world, or affects all parts of the world. People applying to the university and people who graduate from the university could be living and working all over the world so there are potential impacts on a global level.',
                            'medium' => 'Something has a global impact if it happens in all parts of the world, or affects all parts of the world. People applying to the university and people who graduate from the university could be living and working all over the world so there can be knock-on effects that create a global impact.',
                            'high' => 'Something has a global impact if it happens in all parts of the world, or affects all parts of the world. People applying to the university and people who graduate from the university could be living and working all over the world so there are potential impacts on a global level.'
                        ],
                    ],
                    'feedbacks' => [
                        'success' => 'Nice work! What did you find most interesting from the feedback?
Please move on to the next case study when you’re ready.',
                    ],
                    'openingStatement' => 'Please use the sliders to show the scale of impact you think the implementation of the machine learning algorithm could have on',
                ],
            ],
            5 => [
                'dataActivity1' => [
                    'questions' => [
                        [
                            'number' => 1,
                            'statement' => 'Less manual labour is required from farmers to fertilise their crops and prevent pests.',
                            'answer' => 'pos'
                        ],
                        [
                            'number' => 2,
                            'statement' => 'Automation and less manual labour required could mean less jobs for farmers.',
                            'answer' => 'neg'
                        ],
                        [
                            'number' => 3,
                            'statement' => 'Higher crop yields mean more income for farmers and a more stable food supply.',
                            'answer' => 'pos'
                        ],
                        [
                            'number' => 4,
                            'statement' => 'The high investment required by farmers to procure the technology and equipment could create barriers for smaller, local farmers to maintain their livelihood.',
                            'answer' => 'neg'
                        ],
                        [
                            'number' => 5,
                            'statement' => 'Less direct contact with chemicals for farm workers could lead to improved health conditions.',
                            'answer' => 'pos'
                        ],
                        [
                            'number' => 6,
                            'statement' => 'The use of sensors and automated machinery could result in less fertilisers and pesticides being released into the environment as chemicals can be used only as required.',
                            'answer' => 'pos'
                        ],
                    ],
                    'feedbacks' => [
                        'success' => 'Well done! Next, let’s consider the scale of impact on individuals, society and the world.',
                    ],
                    'openingStatement' => 'Take a look at some of the potential consequences of the automated machinery and decide whether they might be positive or negative.',
                ],
                'dataActivity2' => [
                    'questions' => [
                        'individual' => [
                            'low' => 'This innovation could have a significant impact on the farmers and their staff who will be using the automated machinery. ',
                            'medium' => 'This innovation could have a significant impact on the farmers and their staff who can use the automated machinery to disperse chemical fertilisers and pesticides.',
                            'high' => 'Nice work! This innovation could have a significant impact on the farmers and their staff who can use the automated machinery to disperse chemical fertilisers and pesticides.'
                        ],
                        'society' => [
                            'low' => 'This technology could have a significant impact on society as it affects the farmers who use it, the communities that may benefit from improved crop yields, as well as the land that the chemical fertilisers and pesticides are being used on.',
                            'medium' => 'Nice work! The use of automated machinery for dispersing chemical fertilisers and pesticides can have a significant impact on communities and the environment beyond just the farmer and their farm.',
                            'high' => 'Nice work! The automation of dispersing chemical fertilisers and pesticides can have a significant impact on communities and the environment beyond just the farmer and their farm. '
                        ],
                        'global' => [
                            'low' => 'The use of automated machinery for dispersing chemical fertilisers and pesticides could have a significant global impact, especially if it enables chemicals to be used more widely around the world. ',
                            'medium' => 'The use of automated machinery for dispersing chemical fertilisers and pesticides could have a significant global impact, especially if it enables chemicals to be used more widely around the world.',
                            'high' => 'Good thinking! The use of automated machinery for dispersing chemical fertilisers and pesticides could have significant global impacts on people, the economy and ecosystems.'
                        ],
                    ],
                    'feedbacks' => [
                        'success' => 'Nice work! Have your thoughts about the levels of impact shifted after reading the feedback?
                        The next case study is the final one.',
                    ],
                    'openingStatement' => 'Please use the sliders to show the scale of impact you think the automated machinery could have on',
                ],
            ],
            6 => [
                'dataActivity1' => [
                    'questions' => [
                        [
                            'number' => 1,
                            'statement' => 'Practices such as this contribute to a global online community that is fair and safe for all. ',
                            'answer' => 'pos'
                        ],
                        [
                            'number' => 2,
                            'statement' => 'There will be less opportunities for people who are not able to pass the background checks to be employed by the company.',
                            'answer' => 'neg'
                        ],
                        [
                            'number' => 3,
                            'statement' => 'It is less likely that customer data will be exposed due to the policies and procedures in place.',
                            'answer' => 'pos'
                        ],
                        [
                            'number' => 4,
                            'statement' => 'It is more likely that customers will have a good experience with the business as staff are properly trained, keep up with training and are accountable.',
                            'answer' => 'pos'
                        ],
                        [
                            'number' => 5,
                            'statement' => 'If a data or security breach occurs and the company ceases trading, even temporarily, potentially millions of people, including customers, employees, suppliers and investors may suffer.',
                            'answer' => 'neg'
                        ],
                        [
                            'number' => 6,
                            'statement' => 'When team members are well trained and well informed, they can feel confident that they can handle the unexpected.',
                            'answer' => 'pos'
                        ],
                    ],
                    'feedbacks' => [
                        'success' => 'Excellent work! Next, please consider the scale of impact on individuals, society and the world.',
                    ],
                    'openingStatement' => "Take a look at some of the potential consequences of the online retailer's privacy and security practices and decide whether they might be positive or negative.",
                ],
                'dataActivity2' => [
                    'questions' => [
                        'individual' => [
                            'low' => 'The way that this online retailer operates could have a significant impact on its customers, employees and the company’s own brand and reputation.',
                            'medium' => 'Good thinking! The way that this online retailer operates could have a big impact on its customers, employees and the company’s own brand and reputation.',
                            'high' => 'Nice work! This online retailer values protecting the security and privacy of its customers and ensuring that their employees are properly trained which could have a significant impact on individuals who use and work for this company!'
                        ],
                        'society' => [
                            'low' => 'The steps taken by the retailer to protect customers could have a considerable impact on various communities within its industry.',
                            'medium' => 'Great job! The steps taken by the retailer to protect customers could have a considerable impact on its industry and the local economies that it operates in.',
                            'high' => 'The steps taken by the retailer to protect customers could have a considerable impact on various communities within its industry.'
                        ],
                        'global' => [
                            'low' => 'As this global online retailer has the best interest of its customers and  employees in mind and values protecting the global online community, it could have a considerable impact in many parts of the world!',
                            'medium' => 'Nice work! This online retailer has the potential to impact many people and markets around the world and to be a leader in creating a safe global online community.',
                            'high' => 'As this global online retailer has the best interest of its customers and  employees in mind and values protecting the global online community, it could have a considerable impact in many parts of the world!'
                        ],
                    ],
                    'feedbacks' => [
                        'success' => '',
                    ],
                    'openingStatement' => "Please use the sliders to show the scale of impact you think the online retailer's privacy and security practices could have on",
                ],
            ],
        ];
    }


    public function getDataActivity2 () {
        $dataCase1Activity2 = [
            'individual' => [
                'low' => 'The individuals that use the new digital service could be greatly affected by the consequences. Remember that different people can be impacted in different ways and to varying levels. ',
                'medium' => 'Implementing the new digital system could impact the people who use it quite highly. Remember that different people can be affected in different ways and to varying levels.',
                'high' => 'Good thinking! Rolling out the new digital system is likely to have a high impact on the individuals who use it. Remember that different people can be impacted in different ways and to varying levels.'
            ],
            'society' => [
                'low' => 'This innovation could have a significant impact on the people and communities who administer and use the system.',
                'medium' => 'Nice work! The implementation of the new digital system for welfare services could have a significant impact on people and communities.',
                'high' => 'Nice work! This innovation could significantly impact people who administer the system as well as those who use it to access support.'
            ],
            'global' => [
                'low' => 'Something has a global impact if it happens in all parts of the world, or affects all parts of the world. If all countries adopt the digital system, then it could have a considerable global impact.',
                'medium' => 'If all countries adopt the digital system, people and economies around the world could potentially be impacted.',
                'high' => 'If all countries adopt the digital system, people and economies around the world could potentially be impacted.'
            ],
        ];

        $dataCase2Activity2 = [
            'individual' => [
                'low' => 'People can be impacted by different things in different ways and to varying levels and this innovation seems like it could have a considerable impact on those that use it.',
                'medium' => 'Good thinking! There could be a considerable impact on individuals who trust and use this platform for learning online.',
                'high' => 'The platform could have a considerable impact on individuals that use it.'
            ],
            'society' => [
                'low' => 'This innovation could impact many different aspects of society to differing degrees. For example, it could affect people’s attitudes, their productivity, or how similar organisations within the industry operate.',
                'medium' => 'Well done! This learning platform could impact many different aspects of society, such as people’s attitudes, their productivity, and how similar organisations within the industry may operate.',
                'high' => 'This innovation has the potential for making a considerable impact on society. For example, it could affect people’s attitudes and behaviours, their productivity, or how organisations operate.'
            ],
            'global' => [
                'low' => 'If the platform is used by people in all parts of the world, or if it affects all parts of the world then it will have a global impact.',
                'medium' => 'Nice work! If the platform is used by people in all parts of the world and helps to educate people on a global scale, it could have a considerable impact!',
                'high' => 'If the platform is used in all parts of the world, or if it affects people in all parts of the world then it will have a global impact. The level of impact could be quite considerable!'
            ],
        ];

        $dataCase3Activity2 = [
            'individual' => [
                'low' => 'Social media could have a significant impact on individuals - for people who use it for connecting and communicating with others and to source and share information.',
                'medium' => 'Social media could have a significant impact on individuals - both for those who use it to send and share information, and for those who use it to find information.',
                'high' => 'Well done! This innovation could have a significant impact on individuals that use the service.'
            ],
            'society' => [
                'low' => 'Social media and echo chambers could have a significant impact on society.',
                'medium' => 'Social media and echo chambers could have a significant impact on society. ',
                'high' => 'Good thinking! The widespread use of social media could have a significant impact on society.'
            ],
            'global' => [
                'low' => 'As the number of people around the world who use social media increases, it can have a significant global impact.',
                'medium' => 'Nice work! More than half of the world now uses social media and this rate continues to rise. Social media already has a significant global impact and we can see this in the areas of politics, lifestyle and global trends.',
                'high' => 'Nice work! More than half of the world now uses social media and this rate continues to rise. Social media already has a significant global impact and we can see this in the areas of politics, lifestyle and global trends. '
            ],
        ];

        $dataCase4Activity2 = [
            'individual' => [
                'low' => 'The machine learning algorithm could have a significant impact on the university applicants and the staff that work there.',
                'medium' => 'The machine learning algorithm could have a significant impact on the university applicants and the staff that work there.',
                'high' => 'Great job! The machine learning algorithm could certainly have a high impact on both the applicants and the staff that work in recruitment.'
            ],
            'society' => [
                'low' => 'The implementation of the machine learning algorithm could have a significant impact on society. At the very least, it will probably affect a whole community of university applicants.',
                'medium' => 'Good thinking! The implementation of the machine learning algorithm could have a significant impact on society. At the very least, it will probably affect a whole community of university applicants.',
                'high' => 'Good thinking! The implementation of the machine learning algorithm could have a significant impact on society. At the very least, it will probably affect a whole community of university applicants. '
            ],
            'global' => [
                'low' => 'Something has a global impact if it happens in all parts of the world, or affects all parts of the world. People applying to the university and people who graduate from the university could be living and working all over the world so there are potential impacts on a global level.',
                'medium' => 'Something has a global impact if it happens in all parts of the world, or affects all parts of the world. People applying to the university and people who graduate from the university could be living and working all over the world so there can be knock-on effects that create a global impact.',
                'high' => 'Something has a global impact if it happens in all parts of the world, or affects all parts of the world. People applying to the university and people who graduate from the university could be living and working all over the world so there are potential impacts on a global level.'
            ],
        ];

        $dataCase5Activity2 = [
            'individual' => [
                'low' => 'This innovation could have a significant impact on the farmers and their staff who will be using the automated machinery. ',
                'medium' => 'This innovation could have a significant impact on the farmers and their staff who can use the automated machinery to disperse chemical fertilisers and pesticides.',
                'high' => 'Nice work! This innovation could have a significant impact on the farmers and their staff who can use the automated machinery to disperse chemical fertilisers and pesticides.'
            ],
            'society' => [
                'low' => 'This technology could have a significant impact on society as it affects the farmers who use it, the communities that may benefit from improved crop yields, as well as the land that the chemical fertilisers and pesticides are being used on.',
                'medium' => 'Nice work! The use of automated machinery for dispersing chemical fertilisers and pesticides can have a significant impact on communities and the environment beyond just the farmer and their farm.',
                'high' => 'Nice work! The automation of dispersing chemical fertilisers and pesticides can have a significant impact on communities and the environment beyond just the farmer and their farm. '
            ],
            'global' => [
                'low' => 'The use of automated machinery for dispersing chemical fertilisers and pesticides could have a significant global impact, especially if it enables chemicals to be used more widely around the world. ',
                'medium' => 'The use of automated machinery for dispersing chemical fertilisers and pesticides could have a significant global impact, especially if it enables chemicals to be used more widely around the world.',
                'high' => 'Good thinking! The use of automated machinery for dispersing chemical fertilisers and pesticides could have significant global impacts on people, the economy and ecosystems.'
            ],
        ];

        $dataCase6Activity2 = [
            'individual' => [
                'low' => 'The way that this online retailer operates could have a significant impact on its customers, employees and the company’s own brand and reputation.',
                'medium' => 'Good thinking! The way that this online retailer operates could have a big impact on its customers, employees and the company’s own brand and reputation.',
                'high' => 'Nice work! This online retailer values protecting the security and privacy of its customers and ensuring that their employees are properly trained which could have a significant impact on individuals who use and work for this company!'
            ],
            'society' => [
                'low' => 'The steps taken by the retailer to protect customers could have a considerable impact on various communities within its industry.',
                'medium' => 'Great job! The steps taken by the retailer to protect customers could have a considerable impact on its industry and the local economies that it operates in.',
                'high' => 'The steps taken by the retailer to protect customers could have a considerable impact on various communities within its industry.'
            ],
            'global' => [
                'low' => 'As this global online retailer has the best interest of its customers and  employees in mind and values protecting the global online community, it could have a considerable impact in many parts of the world!',
                'medium' => 'Nice work! This online retailer has the potential to impact many people and markets around the world and to be a leader in creating a safe global online community.',
                'high' => 'As this global online retailer has the best interest of its customers and  employees in mind and values protecting the global online community, it could have a considerable impact in many parts of the world!'
            ],
        ];


        $data = [];

        //dd($data['step2-case1-activity1']);
        return $data;
    }
}
