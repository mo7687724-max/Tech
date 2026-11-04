<?php

class Bank{
    private $account_id;
    private $account_name;
    private $bank_name;
    private $balance = 1000;
    private $deposited;
    private $withdraw;


    // function setter
    public function set_account_id($account_id){
        $this->account_id = $account_id;
    }

    public function set_account_name($account_name){
        $this->account_name = $account_name;
    }

    public function set_bank_name($bank_name){
        $this->bank_name = $bank_name;
    }
    public function set_deposited($deposited,){
        $this->deposited = $deposited;
    }
    public function set_withdraw($withdraw){
        $this->withdraw = $withdraw;
    }

    // function getter

    public function get_account_id(){
        return $this->account_id;
    }
    public function get_account_name(){
        return $this->account_name;
    }
    public function get_bank_name(){
        return $this->bank_name;
    }
    public function get_deposited(){
        if ($this->deposited == null || $this->deposited == "") {
            return $this->balance;
        }else{
            // $this->balance = $this->balance + $this->deposited
            return $this->balance += $this->deposited;
        }
    }
    public function get_withdraw(){
        if ($this->balance >= $this->withdraw){
            return $this->balance -= $this->withdraw;
        }else{
            echo "Balance is not enough.";
        }
        
    }

    public function get_balance(){
        
        return $this->balance;
    }

    

}

$aba = new Bank();

$aba->set_account_id(101);
$aba->set_account_name("Test");
$aba->set_bank_name("ABA");
$aba->set_deposited(2000);

echo "==================== DEPOSITED ========================<br>";
echo "Account ID : " . $aba->get_account_id() . "<hr>" ;
echo "Account Name : " . $aba->get_account_name() . "<hr>";
echo "Bank Name : " . $aba->get_bank_name() . "<hr>";
echo "Balance : " . $aba->get_balance() . "<hr>";
echo "Balance after Deposited : " . $aba->get_deposited() . "<hr>";
echo "=======================================================<br>";


