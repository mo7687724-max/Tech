<?php

interface PaymentMethod
{
    public function payment(float $amount): void;
}

class ABA implements PaymentMethod
{
    public function payment(float $amount): void
    {
        echo "Payment with ABA<br>";
        echo "Payment amount : $amount<br>";
        echo "Payment Successfully<br>";
    }
}

class AC implements PaymentMethod
{
    public function payment(float $amount): void
    {
        echo "Payment with AC<br>";
        echo "Payment amount : $amount<br>";
        echo "Payment Successfully<br>";
    }
}

class Wing implements PaymentMethod
{
    public function payment(float $amount): void
    {
        echo "Payment with Wing<br>";
        echo "Payment amount : $amount<br>";
        echo "Payment Successfully<br>";
    }
}
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $aba = new ABA();
    $ac = new AC();
    $wing = new Wing();

    $amount = $_POST["amount"];
    $bank = $_POST["bank"];

    switch ($bank) {
        case "aba":
            $aba->payment($amount);
            break;
        case "ac":
            $ac->payment($amount);
            break;
        case "wing":
            $wing->payment($amount);
            break;
        default:
            "Not Found";
            break;
    }
}
?>

<main>
    <form method="POST">
        <input type="number" name="amount" placeholder="amount"> <br>
        <select name="bank">
            <option value="aba">ABA</option>
            <option value="ac">AC</option>
            <option value="wing">Wing</option>
        </select><br>
        <button type="submit">payment</button>
    </form>
</main>