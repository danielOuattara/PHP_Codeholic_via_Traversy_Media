<?php

/* 
 
In 16_php_files_sytems we used file_get_contents() function
to query ressources from outside

But file_get_contents() might be blocked for:
1- security reasons,
2- impossibility to post data 
3- impossibility to send headers sending.

That's where cURL comes in.

*/

$url = 'https://jsonplaceholder.typicode.com/users?_limit=3';


# Sample example to get data.
$resource = curl_init($url); # Initialize a cURL session => CurlHandle

echo ('$resource = ');
print_r($resource);
echo '<br/><br/>';

# Set an option for a cURL transfer
curl_setopt($resource, CURLOPT_RETURNTRANSFER, true);


# Perform a cURL session, make the execution on the resource
$usersJSON = curl_exec($resource);

# file_put_content data from jsonplaceholder
file_put_contents('data.json', $usersJSON);

$file_path = "./data.json";

$myfile = fopen($file_path, "a") or die("Unable to open file!");
fclose($myfile);

$users = json_decode($usersJSON, true);

echo '<pre>';
echo "users = ";
print_r($users);
echo '</pre>';

echo '</br>----------------------------------------------------------------------------</br>';

// Get response status code
$response = curl_getinfo($resource);

echo '<pre>';
echo "response = ";
print_r($response);
echo '</pre>';
curl_close($resource);


echo '</br>----------------------------------------------------------------------------</br>';

// Get response status code
$responseCode = curl_getinfo($resource, CURLINFO_HTTP_CODE);
echo "http_code = ", $responseCode;

curl_close($resource);

echo '</br>----------------------------------------------------------------------------</br>';


# Test Create User (POST)
$user = [
    'name' => 'John Doe',
    'username' => 'john',
    'email' => 'john@example.com'
];

$ch = curl_init($url);
curl_setopt_array($ch, [
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => json_encode($user),
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => array('Content-Type: application/json')
]);
$result = curl_exec($ch);
curl_close($ch);


echo '<pre>';
echo "response = ";
print_r($result);
echo '</pre>';

echo '</br>----------------------------------------------------------------------------</br>';
