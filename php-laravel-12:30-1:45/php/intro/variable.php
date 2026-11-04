<?php
    // echo "Hello PHP";
    // echo "<hr>";
    // echo "Hello Laravel";

    $name = "John";
    $age = 100;
    $salary = 300.44;
    $active = true;

    // echo "<h1>Name : $name</h1>";
    // echo "<h1>Age : $age</h1>";
    // echo "<h1>Salary : $salary</h1>";
    // echo "<h1>Active : $active</h1>";
    // echo "<hr>";
    // echo "Name : " . $name;
?>
<main>
    <ul>
        <!-- <li><?php echo $name ?></li> -->
        <li><?= $name ?></li>
        <li><?= $age ?></li>
        <li><?= $salary ?></li>
        <li><?= $active ?></li>
    </ul>
</main>



