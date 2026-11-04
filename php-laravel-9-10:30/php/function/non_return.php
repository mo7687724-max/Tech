<?php
echo "Global Variable<br>";
    $name = "John"; // global variable
    $salary = 1200.33;
    function great(){
        // $name = "Thomas"; // local variable
        global  $salary; // global variable

        $salary += 20;

        // echo $name;
    }
    great();

    echo $salary;



echo "<hr>";

echo "non-return function non-parameter<br>";
function non_return_non_param (): void {
    $id = 101;
    $name = "john";
    $email = "john@gmail.com";
    $pwd = '123456';

    if($email === "john@gmail.com" and $pwd === '123456'){
        echo "Login Successfully<br>";
        echo "ID : $id<br>";
        echo "Name : $name<br>";
        echo "Email : $email<br>";
        echo "Password : $pwd<br>";
    }else{

    }
}

non_return_non_param();



echo "<hr>";
echo "non-return function has-parameter<br>";

function provide(){
    $price = 1200;
    $qty = 20;
    non_return_has_param($price, $qty);
}
function non_return_has_param($price, $qty){
    $total = $price * $qty;

    echo "$$price <br>";
    echo "$qty<br>";
    echo "$$total<br>";
}
provide();




















