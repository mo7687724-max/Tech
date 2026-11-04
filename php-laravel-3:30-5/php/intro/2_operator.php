<?php

echo 10 === 10;
echo "<hr>";
echo 10 !== "10";

echo "<hr>";

echo !(!(10 != "30" or "30" != "40") and !(100 > 60 or 0 != 0));



$num1 = 6789;
$num2 = 123;

$add = $num1 + $num2;

?>

<ul>
    <li>Num1 + Num2 = <?= $add ?></li>
</ul>