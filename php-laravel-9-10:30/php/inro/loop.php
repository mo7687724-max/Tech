<!-- <?php

for ($i = 1; $i <= 20; $i++) {
    if ($i % 2 === 0) {
        echo "Even number is $i<br>";
    }
}

echo "<hr>";
?>

<main>
    <?php for ($i = 1; $i <= 20; $i++): ?>
        <?php if ($i % 2 === 0): ?>
            <p>Even number is <?= $i ?></p>
        <?php endif ?>
    <?php endfor ?>
</main> -->



<!-- <?php
for ($i = 1; $i <= 10; $i++) {
    if ($i === 5) {
        continue;
    }
    echo "number : $i<br>";
}

echo "<hr>";

$sum = 0;
$size = 5;
for($j=1 ; $j<=$size ; $j++){
    $sum += $j; // 1+2+3+4+5
    echo $j; // 1+2+3+4+5 = 15
    if($j < $size){
        echo "+";
    }
}
echo " = $sum";

?>

<main>
    
</main> -->


<?php
    $product = [101, "Product", 1200.11, 20, 'product ...'];

    for($i=0 ; $i<=count($product) ; $i++){
        echo  $product[$i] . "<br>";
    }

    foreach($product as $value){
        echo $value . "<br>";
    }
?>

<main>
    <hr>
    <?php foreach($product as $value): ?>
        <p><?= $value ?></p>
    <?php endforeach ?>
</main>




