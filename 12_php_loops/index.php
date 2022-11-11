<?php

// while
/* 
while (true) { 
    # Infinite loop: DON'T run this
    # Do something constantly
} 
*/

// Loop with $counter
$counter = 0; // When counter is 10 ??
while ($counter < 10) {
    echo $counter . '<br>';
    // if ($counter > 5) break;
    $counter++;
}
echo '<br>';

// do - while
$counter = 0; // When counter is 10?
do {
    // Do some code right here
    $counter++;
} while ($counter < 10);

echo '<br>';

// for
for ($i = 0; $i < 10; $i++) {
    echo $i . "<br>";
}

echo '<br>';

// foreach
$fruits = ["Banana", "Apple", "Orange"];
foreach ($fruits as $fruit) {
    echo  $fruit . '<br>';
}

echo '<br>';

foreach ($fruits as $index => $fruit) {
    echo $index . ' ' . $fruit . '<br>';
}

echo '<br>';

// Iterate Over associative array.
$person = [
    'name' => 'Brad',
    'surname' => 'Traversy',
    'age' => 30,
    'hobbies' => ['Tennis', 'Video Games'],
];

foreach ($person as $key => $value) {
    if ($key === 'hobbies') {
        foreach ($person['hobbies'] as $key => $value) {
            echo $key . " " . $value . "<br />";
        }
        break;
    }
    echo $key . ' ' . $value . '<br>';
}
