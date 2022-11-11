<?php

// What is class and instance

require_once './Person.php';
require_once './Student.php';

echo " initial counter = ", Person::$counter, "<br>";


$p = new Person('Zura', 28, null);

echo "counter = ", Person::$counter, "<br>";
echo "<pre>";
print_r($p);
echo "<pre>";

echo "------\n";

echo "name : ", $p->name . '<br>';
echo "age : ", $p->age . '<br>';
echo "salary : ", $p->getSalary() . '<br>';
echo "counter : ", $p->getCounter() . '<br>';

echo "------\n";

$p->setSalary(85000);
echo "salary : ", $p->getSalary() . '<br>';


//-----------------------------------------------
echo "----------------------------\n";


$s = new Student("Brad", '42', 21);

echo "counter = ", Person::$counter, "<br>";

echo "<pre>";
print_r($s);
echo "--------\n";
echo "<pre>";


echo "name : ", $s->name . '<br>';
echo "age : ", $s->age . '<br>';
echo "salary : ", $s->getSalary() . '<br>';
echo "counter : ", $s->getCounter() . '<br>';

echo "------\n";

$s->setSalary(85000);
echo "salary : ", $s->getSalary() . '<br>';
