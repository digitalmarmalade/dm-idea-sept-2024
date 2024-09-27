<?php

if (!isset($_SESSION['oauth2_access_token'])) {

    $state = hash('sha256', microtime(true) . rand()); // Generate a random state
    $_SESSION['oauth2_state'] = $state; // Save the state
    
    $params = array(
       'response_type' => 'code',
       'client_id' => 'G6gLEnsAKOUFVOrFh5SAxFtlh8hrzPKw',
       'redirect_uri' => 'https://dm.idea.org.uk/lifehacks/auth/callback.php',
       'scope' => 'openid',
       'state' => $state,
       'prompt' => 'none'
    );
    
    //  switched (again) from https://idea.eu.auth0.com/i/oauth2/authorize as per email from Rich Martell on 15.08.17
    $authUrl = 'https://idea.org.uk/oauth/authorize?' . http_build_query($params);
    
    header("Location: $authUrl"); // Redirect to Auth0
    exit;
}