<?php

$num1 = 200;
$num2 = 88;

if ($num1 !== $num2) {
    echo "Block True";
} else {
    echo "Block False";
}

echo "<hr>";

$id = 101; // 1
$title = 'Product'; // 2
$price = 100.33; // 3
$qty = 30; // 4
$description = 'product ......'; // 5

$total = $qty * $price; // 5

if ($total >= 1000) {
    $dis = $total * 0.5; // 7
} else if ($total >= 800) {
    $dis = $total * 0.4;
} else if ($total >= 600) {
    $dis = $total * 0.3;
} else if ($total >= 400) {
    $dis = $total * 0.2;
} else if ($total >= 200) {
    $dis = $total * 0.1;
}else{
    $dis = $total * 1;
}

$pay = $total - $dis; // 8


?>

<table border="1">
    <thead>
        <tr>
            <th>id</th>
            <th>title</th>
            <th>price</th>
            <th>qty</th>
            <th>description</th>
            <th>total</th>
            <th>discount</th>
            <th>payment</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?= $id ?></td>
        </tr>
    </tbody>
</table>


<?php 
    echo "<hr>";
    $a = 10;
    $b = 20;

    // traditional 
    if($a > $b){
        echo "True";
    }else{
        echo "False";
    }

    // ternary
    echo "<hr>";
    $result1 = $a < $b ? 'True' :  'False';

    echo $result1;
    
    echo "<hr>";
    $result2 = $a ?? 'Not found';
    
    echo $result2;





echo "<hr>";
$email = 'test@gmail.com';
$pwd = "123456";
$pin_code = "123";
$balance = 5000;
$withdraw = 1000;

if ($email === 'test@gmail.com' && $pwd === '123456'){
    if ($pin_code === "123"){
        echo "<hr>";
        echo 'Welcome to .....<br>';
        echo "Your Balance : $$balance<br>";
        echo "Your Withdraw : $$withdraw<br>";
        echo "Pending.....<br>";
        echo "<hr>";
        if($withdraw >= 500){
            if ($withdraw <= $balance){
                $balance -= $withdraw;
                echo "Balance after withdraw : $$balance<br>";
                echo "Withdraw : $$withdraw<br>";
                echo "Successfully.<br>";
                echo "<hr>";
            }else{
                echo "Balance not enough ";
            }
        }else{
            echo "Can't withdraw";
        }
    }else{
        echo "Wrong pin code";
    }
}else {echo "Email or Password is not match";}


echo "<hr>";


$op = 2;

switch($op){
    case 1: echo "Create Product<br>"; break;
    case 2: echo "Read Product<br>"; break;
    case 3: echo "Update Product<br>"; break;
    case 4: echo "Delete Product<br>"; break;
    default: echo "Wrong option"; break;
}



