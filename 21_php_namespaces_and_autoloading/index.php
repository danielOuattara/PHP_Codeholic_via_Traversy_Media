<?php


// require_once 'app/Email.php';
// require_once 'app/Person.php';

// $email = new app\Email();
// $person = new app\Person();

//-------------------------------------------

// require_once 'vendor/autoload.php';

// $email = new app\Email();
// $person = new app\Person();
// ------------------------------------------

require_once 'vendor/autoload.php';

use app\Email;
use app\Person as P;

$email = new Email();
$person = new P();

use app2\Email as E2;
use app2\Person as P2;

$email2 = new E2();
$person2 = new P2();

//-------------------------------------------

$client = new \GuzzleHttp\Client();
$response = $client->request('GET', 'https://api.github.com/repos/guzzle/guzzle');

echo $response->getStatusCode(); // 200
echo $response->getHeaderLine('content-type'); // 'application/json; charset=utf8'
echo $response->getBody(); // '{"id": 1420053, "name": "guzzle", ...}'

//-------------------------------------------

// Send an asynchronous request.
// $request = new \GuzzleHttp\Psr7\Request('GET', 'http://httpbin.org');
// $promise = $client->sendAsync($request)->then(function ($response) {
//     echo 'I completed! ' . $response->getBody();
// });

// $promise->wait();