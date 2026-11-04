<?php 


// function calculator(): string{
//     $sum = 0;
//     $text = '';
//     for($i = 1 ; $i <= 10 ; $i++){
//         $sum += $i; // 3
//         $text .= $i;    // '' . 1 . '+' . 2
//         if($i < 10){
//             $text .= "+";  // '' . 1 . '+' . 2 . '+'
//         }else{
//             $text .= ' = ' . $sum;
//         }
//     }

//     return $text;
// }

// $result = calculator();

// echo $result;


?>



<?php 
    function add($num1, $num2): float{
        return $num1 + $num2;
    }
    function minus($num1, $num2): float{
        return $num1 - $num2;
    }

    if(isset($_POST['add'])){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $result = add($num1, $num2);
    }

    if(isset($_POST['minus'])){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $result = minus($num1, $num2);
    }
?>
<!-- 
<main>

    <form method="post">
        <input type="number" name="num1" value="<?= $num1 ?>" placeholder="num1"><br>
        <input type="number" name="num2" value="<?= $num2 ?>" placeholder="num2"><br>
        <button type="submit" name="add">+</button>
        <button type="submit" name="minus">-</button>
        <button><a href="">clear</a></button>
    </form>
    <div>
        <h1><?= $result ?? '' ?></h1>
    </div>
</main>


<hr> -->

<?php 

    function withdraw($amount, $balance){
        if($balance < $amount){
        }
    }

    if(isset($_POST['withdraw'])){
        $bank = $_POST['bank'];
        switch($bank){
            case 'aba': {
                $balance = 1000;
                $amount = $_POST['num'];
                withdraw($amount, $balance);

            }
            case 'ac':{

            }
            case 'wing':{

            }

        }
    }
     if(isset($_POST['deposit'])){
        
    }

    echo "ABA Bank";
    echo "balance 1000";
    echo "Amount 300";
    echo "after deposit balance 1300";
    echo "Process Successfully";
?>

<h1>Balance ABA 1000</h1>
<h1>Balance AC 1300</h1>
<h1>Balance Wing 2000</h1>
<form >
    <input type="number" name="num" placeholder="amount"><br>
    <button name="deposit">deposit</button>
    <button name="withdraw">withdraw</button>
    <select name="bank" >
        <option value="aba">ABA</option>
        <option value="ac">AC</option>
        <option value="wing">Wing</option>
    </select>
</form>


