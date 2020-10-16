<?php

// A great thing about Composer is that it takes care of requiring all the necessary libraries as long as they are placed correctly in the vendor folder and Composer knows about them.

// All you have to do is use them.

// All the logic of requiring those files is in the /vendor/autoload.php file.

require_once './vendor/autoload.php';

// if (class_exists('GuzzleHttp\Client')) {
//     echo 'Guzzle HTTP client is ready to be used';
// } else {
//     echo 'Guzzle HTTP client is not loaded';
// }

$client = new GuzzleHttp\Client();
 
$res = $client->request('GET', 'https://www.imdb.com/title/tt5848272', [
    'verify' => false
]);
 
echo $res->getBody();