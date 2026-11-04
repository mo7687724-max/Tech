<?php

$product = [101, 'product', 1220.11, 20, 'product....'];

echo "<hr>for loop<br>";
for ($i = 0; $i < count($product); $i++) {
    echo $product[$i] . "<br>";
}

echo "<hr>while loop<br>";
$i=0;
while($i < count($product)){
    echo $product[$i] . "<br>";
    $i++;
}

echo "<hr>foreach loop<br>";
foreach ($product as $value) {
    echo $value . "<br>";
}


echo "<hr>";
$multi = 5;
for($i=1 ; $i<=10 ; $i++){
    $sum = $multi * $i;
    echo "$multi x $i = $sum<br>";
}



