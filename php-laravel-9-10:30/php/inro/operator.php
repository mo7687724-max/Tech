<?php
// Assignment operators
    $sum = 0;
    $sum += 10;
    echo $sum;

    echo "<hr>";

// Comparison operators
    echo ("10" !== 10) . "<br>";
        //      false
    echo !((10 !== 30 && 40 < 55) || !(10 == 90 || 40 === "40"));


$num1 = 789;
$num2 = 5678;

$sum = $num1 + $num2;

?>
<table>
    <thead>
        <tr>
            <th>sum</th>
        </tr>   
    </thead>
    <tbody>
        <tr>
            <td><? $sum ?></td>
        </tr>
    </tbody>
</table>
