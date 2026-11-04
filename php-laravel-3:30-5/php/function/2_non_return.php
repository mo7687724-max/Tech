<?php 

echo "<hr>";
echo "1. Non-return Non-parameter<br>";
function non_return_non_params(): void{
    for($i=1 ; $i<=10 ; $i++){
        if($i % 2 != 0){
            continue;
        }
        echo "Event number is $i<br>";
        // if($i % 2 === 0){
        //     echo "Event number is $i<br>";
        // }
    }
}
non_return_non_params();

echo "<hr>";
echo "1. Non-return Has-parameter<br>";

function borrow(): void{
    $principle = 1000;
    $rate = 5;
    $time = 3;
    
    non_return_has_params($principle, $rate, $time);
}
function non_return_has_params($principle, $rate, $time):void{
    $interest = ($principle * $rate * $time) / 100;
    $total = $principle + $interest;
    echo "Principle : $$principle<br>";
    echo "Rate (5% in one year) : $rate%<br>";
    echo "Time (years) : $time years<br>";
    echo "Interest : $$interest<br>";
    echo "Total : $$total<br>";
}
borrow();

