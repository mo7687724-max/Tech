<?php 

// abstract class can't create object
abstract class Remote
{ // abstract class 
    public $toggle = ''; // data member

    abstract function pressPowerButton($toggle);  // abstract method

    abstract function message();
}

class TV extends Remote
{
    public function pressPowerButton($toggle)
    {
        $this->toggle = $toggle;
    }
    public function message()
    {
        if ($this->toggle == 'off') {
            echo "TV Button is off";
        } else {
            echo "TV Button is on";
        }
    }
}

class Light extends Remote
{
    public function pressPowerButton($toggle)
    {
        $this->toggle = $toggle;
    }
    public function message()
    {
        if ($this->toggle == 'off') {
            echo "Light Button is off";
        } else {
            echo "Light Button is on";
        }
    }
}


if ($_POST["remote"] == "tv") {
    $toggle = $_POST["toggle"];
    $tv = new TV();
    $tv->pressPowerButton($toggle);
    $tv->message();
}elseif($_POST["remote"] == "light"){
    $toggle = $_POST["toggle"];
    $tv = new Light();
    $tv->pressPowerButton($toggle);
    $tv->message();
}





?>

<main>


    <form method="post">
        <select name="remote">
            <option value="tv">TV</option>
            <option value="light">Light</option>
        </select>
        <select name="toggle">
            <option value="on">on</option>
            <option value="off">off</option>
        </select>
        <button type="submit" name="on">TV Remote</button>
    </form>
</main>