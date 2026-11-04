<?php
$num1 = 30;
$num2 = 50;

if ($num2 >= $num1) {
    echo "Block True";
} else {
    echo "Block False";
}


echo "<hr>";

$id = 101;
$title = "Product";
$price = 100.55;
$qty = 20;
$description = "Product ....";

$total = $qty * $price;

if ($total >= 1000) {
    $dis = $total * 0.5;
} elseif ($total >= 800) {
    $dis = $total * 0.4;
} else if ($total >= 600) {
    $dis = $total * 0.3;
} else if ($total >= 400) {
    $dis = $total * 0.2;
} else if ($total >= 100) {
    $dis = $total * 0.1;
} else {
    $dis = $total * 1;
}

$pay = $total - $dis;

?>



<!-- display table -->
<table>
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

        </tr>
    </tbody>
</table>


<?php 
echo "<hr>";
    // ternary 
    $a = 10;
    $b = 20;

    // traditional
    if($a < $b){
        echo "True";
    }else{
        echo "False";
    }
    echo "<hr>";

    // ternary
    $result1 = $a > $b ? $a : $b;

    echo $result1;
    echo "<hr>";

    $result2 = $a ?? $b;

    echo $result2;



    echo "<hr>";

    $email = 'test@gmail.com';
    $pwd = '123456';
    $pin_code = '123';
    $balance = 5000;
    $withdraw = 2000;

    if($email === 'test@gmail.com' && $pwd === "123456"){
        if($pin_code === "123"){
            echo "<hr>";
            echo "Welcome to .....<br>";
            echo "Balance : $$balance<br>";
            echo "Withdraw : $$withdraw<br>";
            echo "Pending .....<hr>";
            if($withdraw >= 500){
                if($withdraw <= $balance){
                    $balance -= $withdraw;
                    echo "Balance after withdraw : $$balance<br>";
                    echo "Withdraw : $$withdraw<br>";
                    echo "Withdraw Successfully<hr>";
                }else{
                    echo "Balance is not enough<hr>";
                }
            }else{
                echo "Can't Withdraw<hr>";
            }
        }else{
            echo "Wrong Pin Code<hr>";
        }
    }else{
        echo "Email or Password is not match<hr>";
    }




echo "<hr>";

$grade = 'gff';

switch($grade){
    case 'A': echo "Grade A"; break;
    case 'B': echo "Grade B"; break;
    // ... 
    case 'E': echo "Grade E"; break;
    default: echo "Wrong Options"; break;
}


?>


