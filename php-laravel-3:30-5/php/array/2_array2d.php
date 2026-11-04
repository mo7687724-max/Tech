<?php 
    $nested = [
        ['cpp', 'python', 'js'],
        ['ts', 'jq', 'C#']
    ];

    echo "<hr>";
    echo $nested[1][1];

    echo "<hr>";
    $nested[0][3] = "Java";
    echo $nested[0][3];

    echo "<hr>";
    $nested[1][0] = "Next";
    echo $nested[1][0];

    echo "<hr>";

    foreach($nested as $item){
        echo "Course : " . $item[0] . "<br>";
        echo "Course : " . $item[1] . "<br>";
        echo "Course : " . $item[2] . "<br>";
    }

?>