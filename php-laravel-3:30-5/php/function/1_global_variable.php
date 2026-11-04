<?php 

$salary = 1200; // global variable
function greet(){
    $name = "Test"; // local variable
    $age = 11;

    global $salary; 
    $salary += 100;

    echo $name . "<br>";
    echo $age . "<br>";
    echo $salary . "<br>";
}

greet();
echo $salary;

