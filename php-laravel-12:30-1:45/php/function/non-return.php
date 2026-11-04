<?php

    function non_return_non_parameter(){
        $num1 = 100;
        $num1 = 300;

        $total = $num1 + $num1;

        echo "Total : $total";
    }

    non_return_non_parameter();

    echo "<hr>";

    $name = "John";
    $email = "john@gmail.com";
    function non_return_has_parameter($name, $email){
        echo "Name : $name<br>";
        echo "Email : $email";
    }
    non_return_has_parameter($name, $email);
    

