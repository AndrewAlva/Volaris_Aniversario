<?php

/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
    'oauth_access_token' => "2551752218-KIskWxfV9ps2QXZcBncJsOmCWAm1bWMIX3ZFf0X",
    'oauth_access_token_secret' => "I2O8x9LNcqFKWZugG4tAbsVjwuxhFRVZnlu8oR3wcb9yI",
    'consumer_key' => "tDDf3ERSoODfn8krQu8mBw0uX",
    'consumer_secret' => "rpbtRTQTCYzELGwyO5ZBpEfSxEQyddhlRAfHwmpq2eRAj2Sp6Q"
);

/** URL for REST request, see: https://dev.twitter.com/docs/api/1.1/ **/
$url = 'https://api.twitter.com/1.1/blocks/create.json';
$requestMethod = 'POST';

/** POST fields required by the URL above. See relevant docs as above **/
$postfields = array(
    'screen_name' => 'usernameToBlock', 
    'skip_status' => '1'
);



/** Perform a GET request and echo the response **/
/** Note: Set the GET field BEFORE calling buildOauth(); **/
$url = 'https://api.twitter.com/1.1/search/tweets.json';
$getfield = '?q=%23unaniversarioalasexta&result_type=recent&count=1000';
$requestMethod = 'GET';


$twitter = new TwitterAPIExchange($settings);      
$tweets = $twitter->setGetfield($getfield)
                  ->buildOauth($url, $requestMethod)
                  ->performRequest();
$tweetsArray = json_decode($tweets,true);





