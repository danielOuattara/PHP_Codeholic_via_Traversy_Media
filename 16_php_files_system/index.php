<?php

# Magic constants
echo "DIR = ", __DIR__ . '<br>';
echo "FILE = ", __FILE__ . '<br>';
echo "LINE = ", __LINE__ . '<br>';

echo "<br />----------------------------------<br />";


# Create directory
mkdir('test');
// mkdir('test-1');


# Rename directory
rename('test', 'test2');


# Delete directory
rmdir('test2');


# file_get_contents, file_put_contents
$lorem = file_get_contents('lorem.txt');
echo $lorem;
echo "<br />-------------------<br />";

file_put_contents('lorem.txt', "First line" . PHP_EOL . $lorem);
echo $lorem;
echo "<br />-------------------<br />";


# Read folders inside directory
$current_folder = scandir('./');

echo '<pre>';
echo "current_folder_content = ";
print_r($current_folder);
echo '</pre>';

echo '<pre>';
echo "upper_folder_content = ";
print_r(scandir('./../'));
echo '</pre>';

echo "<br />-------------------<br />";


# file_get_contents from URL
$jsonContent = file_get_contents('https://jsonplaceholder.typicode.com/users?_limit=5');
$users = json_decode($jsonContent, true);

echo '<pre>';
echo "users = ";
print_r($users);
echo '</pre>';

echo "<br />-------------------<br />";


# file_put_content data from jsonplaceholder
file_put_contents('lorem.json', $jsonContent);

# Check if file exists or not
echo "file_exists =  ", file_exists('lorem.json'); // true

echo "<br />-------------------<br />";

# Get file size
echo "filsize ", filesize('lorem.json');

echo "<br />-------------------<br />";

# Delete file
// unlink('lorem-delete.txt');


// https://www.php.net/manual/en/book.filesystem.php