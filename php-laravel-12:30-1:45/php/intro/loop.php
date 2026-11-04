<?php
    // for($i=0 ; $i<10 ; $i++){
    //     echo "number : $i <br>";
    // }

    // echo "<hr>";

    // $i = 0;
    // while($i<10){
    //     echo "number : $i, ";
    //     $i+=2;
    // }

    // echo "<hr>";

    // $i = 0;
    // do{
    //     echo "number : $i, ";
    //     $i++;
    // }while($i <5);

    // echo "<hr>";

    // for ($i= 1; $i< 20; $i++){
    //     if($i %2 == 0){
    //         echo "Even Number : $i <br>";
    //     }
    // }

    // echo "<hr>";
    
    // for ($i= 1; $i< 20; $i++){
    //     if($i %2 != 0){
    //         echo "Odd Number : $i <br>";
    //     }
    // }

    // echo "<hr>";
    // $courses = ['php', 'laravel', 'vue', 'react'];

    // foreach($courses as $co){
    //     echo "Course : $co <br>";
    // }

    // echo "<hr>";
    // $size = 10;
    // for($i=0 ; $i < $size ; $i++){
    //     if($i == 5){
    //         continue;
    //     }
    //     // if($i == 5){
    //     //     break;
    //     // }
    //     echo "number is : $i<br>";
    // }
    // echo "<hr>";

    // 1+2+3+4+5+...+n = result
    if(isset($_POST['formSubmit'])){
        $size = $_POST['size']; // 10
        $result = 0; 
        for($i=1 ; $i <= $size ; $i++){
            $result += $i; // result = 6
            echo $i; // 1+2+3+
            if($i < $size){
                echo "+";
            }
        }
        echo " = $result";
    }
?>

<main>
    <form method="post">
        <input type="number" name="size" placeholder="....."><br>
        <button type="submit" name="formSubmit">submit</button>
    </form>
</main>
    





