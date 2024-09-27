<?php

$data['meta'] = [
    'title' => 'Sports Superstars',
    'summary' => 'Do you know your sports stars - what they do and where they are from - see if you know your Zlatans from your Serenas. <br/><br/>See if you can top our leader board and be our own Superstar',
    'instructions' => 'Choose from 3 categories to see if you can match the fact with the sports person - swipe left for correct and right for incorrect - let\'s see if you can complete the quiz and get 100%'
];

$data['branding'] = [
    'default-fg' => [0, 128, 0],
    'main-bg' => [0, 0, 0],
    'main-fg' => [255, 255, 255],
    'accent-bg' => [255, 255, 255],
    'accent-fg' => [0, 0, 0]
];

$data['actions']['swipes'] = [
    'left' => 'correct',
    'right' => 'pass',
    'down' => 'incorrect',
    'up' => false
];

$data['settings'] = [
    'hasCategorySelectOption' => true,
    'hasLeaderboard' => true,
    'hasTimer' => true,
    'pointsPerCorrectAnswer' => 1000,
    'stopOnIncorrectAnswer' => false
];

$data['levels'][] = [
    'name' => 'Easy',
    'answersInLevel' => 5,
    'categories' => [1],
    'correctAnswerPercentage' => 50
];
$data['levels'][] = [
    'name' => 'Medium',
    'answersInLevel' => 5,
    'categories' => [1, 2],
    'correctAnswerPercentage' => 50
];
$data['levels'][] = [
    'name' => 'Hard',
    'answersInLevel' => 5,
    'categories' => [1, 2, 3],
    'correctAnswerPercentage' => 50
];

$data['grid']['labels'] = ['Person', 'Profession', 'Nation', 'Fact'];

$data['grid']['data'][] = ['Ronaldo', 'Footballer', 'Portugal', 'Plays for Real Madrid'];
$data['grid']['data'][] = ['Anthony Joshua', 'Boxer', 'England', 'IBF World Champion'];
$data['grid']['data'][] = ['Andy Murray', 'Tennis Player', 'Scotland', 'US Open Champion'];
$data['grid']['data'][] = ['Rory McIlroy', 'Golfer', 'Northern Ireland', 'Been awarded MBE'];
$data['grid']['data'][] = ['Serena Williams', 'Tennis Player', 'USA', 'Has 4 sisters'];
$data['grid']['data'][] = ['LeBron James', 'Basketball Player', 'USA', 'Has won 2 gold medals'];
$data['grid']['data'][] = ['Ronda Rousey', 'UFC Fighter', 'USA', 'Is a Vegan'];
$data['grid']['data'][] = ['Dame Ellen MacArthur', 'Sailor', 'England', 'Won Top Gear\'s Fastest Driver of Year Award'];
$data['grid']['data'][] = ['Chris Froome', 'Cyclist ', 'Kenya', 'Has competed for Kenya'];
$data['grid']['data'][] = ['Freddie Flintoff', 'Cricketer', 'England', 'His real name is Andrew'];



echo json_encode(['data' => $data], true);

?>