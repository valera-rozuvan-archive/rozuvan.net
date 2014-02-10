<?php

require_once('TwitterAPIExchange.php');

/*
 * The file twitter_settings.php contains Twitter API credentials. It is a
 * simple array that contains 4 entries. An example of this file:
 *
 * <?
 * return array(
 *     'oauth_access_token'        => "!! oauth_access_token",
 *     'oauth_access_token_secret' => "!! oauth_access_token_secret",
 *     'consumer_key'              => "!! consumer_key",
 *     'consumer_secret'           => "!! consumer_secret",
 * );
 *
 */
$settings = require('twitter_settings.php');

$url           = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
$getfield      = '?screen_name='.$_GET['screen_name'].'&count='.$_GET['count'];
$requestMethod = 'GET';
$twitter       = new TwitterAPIExchange($settings);

header('Content-Type: application/json');

$response = $twitter->setGetfield($getfield)
                    ->buildOauth($url, $requestMethod)
                    ->performRequest();

echo json_encode($response);
