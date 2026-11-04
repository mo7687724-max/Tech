<?php

// echo "<hr>";
// echo "return function non-parameter<br>";

// function return_function_non_param(){
//     $sum = 0;
//     $text = ''; // $text = 1+
//     for($i=1 ; $i<=10 ; $i++){
//         $sum += $i;
//         $text .= $i; // $text = 1+2+
//         if($i < 10){
//             $text .= '+'; // $text =
//         }else{
//             $text .= ' = ' . $sum;
//         }
//     }

//     return $text;
// }

// $result = return_function_non_param();
// echo $result;
?>






<!-- <?php
echo "<hr>";
echo "return function has-parameter<br>";
function add($num1, $num2): float
{
    return $num1 + $num2;
}
function minus($num1, $num2): float
{
    return $num1 - $num2;
}

if (isset($_POST['add'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $result = add($num1, $num2);
}
if (isset($_POST['minus'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $result = minus($num1, $num2);
}

?>

<main>
    <form method="post">
        <input type="number" name="num1" value="<?= $num1 ?>" placeholder="enter num1"><br>
        <input type="number" name="num2" value="<?= $num2 ?>" placeholder="enter num2"><br>
        <button type="submit" name="add">+</button>
        <button type="submit" name="minus">-</button>
        <button><a href="return_function.php">reset</a></button>
    </form>
    <main>
        <h1><?= $result ?></h1>
    </main>
</main>
-->



<form action="">
    <h1>Balance ABA 1000</h1>
    <input type="text" name="" ><br>
    <button name="">deposit</button>
    <button>withdraw</button>
    <select name="">
        <option value="">ABA</option>
        <option value="">AC</option>
        <option value="">WING</option>
    </select>
</form>