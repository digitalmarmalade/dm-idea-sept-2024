<?php
//error_reporting(E_ALL);
//ini_set('display_errors', 'on');
session_start();

require '../../../vendor/autoload.php';

if (isset($_GET['error'])) {
    $error = $_GET['error'];
    if ($error === 'login_required' || $error === 'consent_required' || $error === 'interaction_required') {
        header('Location: https://idea.org.uk/');
        die();
    }
}

$state = $_GET['state'];
$code = $_GET['code'];

if (!isset($code)) {
   exit('Failed to get an authorization code');
}

if (isset($state) && $state !== $_SESSION['oauth2_state']) { // Check the state is valid
   session_destroy();
   exit('OAuth2 invalid state!');
}

#$client = new Guzzle\Http\Client();
#$request = $client->post('https://idea.eu.auth0.com/oauth/token');

$requestData = array(
    'client_id' => 'G6gLEnsAKOUFVOrFh5SAxFtlh8hrzPKw',
    'client_secret' => 'rzytmWftXpOsgHTv1iB2AtC8XeBEm-fl5fH0FzLFpbSpNi6sdIROByFI2uYEGCRE',
    'redirect_uri' => 'https://dm.idea.org.uk/lifehacks/auth/callback.php',
    'code' => $code,
    'grant_type' => 'authorization_code'
);
#echo '<pre>'.var_export($requestData, true).'</pre>';die('<pre>Exit at Line '.__LINE__.' of <span title="'.__FILE__.'">'.str_replace(array(__DIR__, '\\'), '', __FILE__).'</span> @ '.date('H:i:s'));


$client = new \GuzzleHttp\Client();
$response = $client->request(
    'POST',
    'https://idea.org.uk/oauth/token',
    ['form_params' => $requestData]
);

$json = json_decode($response->getBody(true));

$_SESSION['oauth2_access_token'] = $json->access_token;
$_SESSION['oauth2_id_token'] = $json->id_token;
header('Location: https://dm.idea.org.uk/lifehacks/index.php');
die();