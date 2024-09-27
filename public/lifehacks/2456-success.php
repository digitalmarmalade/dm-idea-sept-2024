<?php

session_start();
// include('auth/isauthenticated.php');

if (!isset($_SESSION['oauth2_access_token'])) {
    $state = hash('sha256', microtime(true).rand()); // Generate a random state
    $_SESSION['oauth2_state'] = $state; // Save the state

    $params = [
        'response_type' => 'code',
        'client_id' => 'G6gLEnsAKOUFVOrFh5SAxFtlh8hrzPKw',
        'redirect_uri' => 'https://dm.idea.org.uk/lifehacks/auth/callback.php',
        'scope' => 'openid',
        'state' => $state,
        'prompt' => 'none',
    ];

    $authUrl = 'https://idea.org.uk/oauth/authorize?'.http_build_query($params);

    header("Location: {$authUrl}"); // Redirect to Auth0

    exit;
}

require '../../vendor/autoload.php';

$client = new \GuzzleHttp\Client();
$res = $client->request(
    'POST',
    'https://idea.org.uk/api/result',
    [
        'headers' => [
            'Authorization' => 'Bearer '.$_SESSION['oauth2_access_token'],
        ],
        'json' => [
            'result' => 'pass',
        ],
    ]
);
$json = json_decode((string) $res->getBody(), true);

if (array_key_exists('error', $json)) {
    if (array_key_exists('REMOTE_ADDR', $_SERVER) and '31.221.29.221' == $_SERVER['REMOTE_ADDR']) {
        echo '<pre>'.var_export($_SESSION, true).'</pre>';
        echo '<pre>'.var_export($url, true).'</pre>';
        echo '<pre>'.var_export($fields, true).'</pre>';
        echo '<pre>'.var_export($fields_string, true).'</pre>';
        echo '<pre>'.var_export($json, true).'</pre>';
    }

    exit('An error has occurred, please go back and try again - "'.$json['error'].'"');
}
if (array_key_exists('redirect_uri', $json)) {
    header('location: '.$json['redirect_uri']);
}
if (array_key_exists('redirectUrl', $json)) {
    header('location: '.$json['redirectUrl']);
}

exit;
