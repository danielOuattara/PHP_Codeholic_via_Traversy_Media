<?php

// Function which prints "Hello I am Zura"
function hello()
{
    echo 'Hello I am Zura<br>';
}

hello();
hello();
hello();
echo '<br>';


// Function with argument
function hello2($name)
{
    echo "Hello I am $name <br/>";
}

hello2("Daniel");
echo '<br>';


// Create sum of two functions
function sum($a, $b)
{
    return $a + $b;
}

echo sum(4, 5), " <br/>";
echo sum(9, 10), " <br/>";
echo '<br>';


// Create function to sum all numbers using ...$nums
function sum2(...$nums)
{
    $sum = 0;
    foreach ($nums as $num) $sum += $num;
    return $sum;
}

echo sum2(1, 2, 3, 4, 6);
echo "<br/>";

//-------------------------------------------
function sum2Bis(...$nums)
{
    $sum = 0;
    $length = sizeof(func_get_args());
    for ($i = 0; $i < $length; $i++) {
        $sum += $nums[$i];
    }
    foreach ($nums as $num) $sum += $num;
    return $sum;
}

echo sum2Bis(1, 2, 3, 4, 6);
echo "<br/>";

//-------------------------------------------
function sum2Ter(...$nums)
{
    $sum = 0;
    for ($i = 0; $i < func_num_args(); $i++) {
        $sum += $nums[$i];
    }
    foreach ($nums as $num) $sum += $num;
    return $sum;
}

echo sum2Ter(1, 2, 3, 4, 6);
echo "<br/>";


function sum3(...$nums)
{
    $sum = 0;
    for ($i = 0; $i < count($nums); $i++) {
        $sum += $nums[$i];
    }
    return $sum;
}

echo sum3(1, 2, 3, 4, 6);
echo "<br/>";


// Arrow functions

$hello3 = fn () =>  'Hello I am Zura<br>';


echo $hello3();

//-----------------------

$hello4 = fn ($name) => "Hello I am $name <br/>";


echo $hello4("Daniel");

//-----------------------

$sum3_b = fn ($a, $b) => $a + $b;


echo $sum3_b(4, 5), " <br/>";


//-----------------------

function sum4(...$nums)
{
    return array_reduce($nums, fn ($carry, $n) => $carry + $n);
}
echo sum4(1, 2, 3, 4, 5, 6);
echo "<br/>";

//-----------------------

$sum5 = fn (...$nums) => array_reduce($nums, fn ($carry, $n) => $carry + $n);
echo $sum5(1, 2, 3, 4, 5, 6);
echo "<br/>";


$sum6 = fn (...$nums) => array_reduce([...$nums], fn ($carry, $n) => $carry + $n);
echo $sum6(1, 2, 3, 4, 5, 6);
echo "<br/>";
