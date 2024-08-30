<?php
$name = "ali";


$a[0] = 0;
$a[1] = "eathorne";
$a[2] = "june";
$a[] = "june2";
$a[] = "june3";
$a[] = "june4";
echo "<pre>";
print_r($a);
echo "</pre>";

// do soemthing and this is a comment!

// $x=0;
// while ($x<20) {
//     echo 1 . "<br>";
//     $x++;
// }

// $number = 30;
// if ($number <= 10)
// {
//     echo "inside if statement" . "<br>";
// } else if ($number >= 40){
//     echo "inside else if statement " . "<br>";
// } else {
//     echo "end";
// }

// function say_something($name, $name2, $name3){
//     echo "my name is " . $name . "<br>";
//     echo "my username is " . $name2 . "<br>";
//     echo "my third name is " . $name3 . "<br>";
// }

// say_something("eathorne", "ali", "jacob");

class myclass
{
    public $name = "someone";

    function one(){
        echo "one $this->name <br>";
    }
    function two(){
        echo "two <br>";
    }
}

$a = new myclass();

$a->one();
$a->two();
echo $a->name;

