<?php

class Person1
{
    public string $name;
    public int $age;
}


$brad = new Person1();

$brad->name = "Brad Traversy";
$brad->age = 40;

echo '<pre>';
var_dump($brad);
echo '</pre>';


echo '</br>-----------------------</br>';

echo '<pre>';
print_r($brad);
echo '</pre>';

echo '</br>-----------------------</br>';


#===================================================================

class Person2
{
    public string $name;
    public int $age;
    private ?float $salary;
    static int $counter = 0;

    public function __construct($name, $age, $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
        self::$counter++;
    }

    public function getSalary()
    {
        return $this->salary;
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    public static function getCounter()
    {
        return self::$counter;
    }
}


$brad2 = new Person2("Brad Traversy", 40, 300000);
$dany = new Person2("Danny Boy", 38, 1534);

echo '<pre>';
var_dump($brad2);
echo '</pre>';

echo '</br>-----------------------</br>';

echo '<pre>';
print_r($brad2);
echo '</pre>';

echo '</br>-----------------------</br>';


echo $brad2->getSalary();
echo '</br>-----------------------</br>';


echo Person2::getCounter();
echo '</br>-----------------------</br>';
