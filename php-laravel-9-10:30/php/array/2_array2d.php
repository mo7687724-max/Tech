<!-- 
    $array2 = [[],[]];
-->

<?php 

    $array2 = [
        [1,2,3,4,5],
        [6,7,8,9,10]
    ];

    // print_r($array2);
    echo  $array2[1][3];

    echo "<hr>";

    // $array2[1][5] = 100;

    // echo $array2[1][5];
    // print_r($array2);

    echo "<hr>";

    foreach($array2 as $array1){
        echo $array1[0] . " | ";
        echo $array1[1]. " | ";
        echo $array1[2]. " | ";
        echo $array1[3]. " | ";
        echo $array1[4]. " | ";
        echo "<br>";
    }
?>