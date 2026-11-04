<?php

    $id = 101; // int
    $name = 'John'; // string
    $salary = 1200.12; // float
    $active = true; // bool
    
    echo "<h1>Id: $id</h1>";
    echo "<h1>Name: $name</h1>";
    echo "<h1>Salary: $salary</h1>";
    echo "<h1>Active: $active</h1>";

?>
<hr>

<main >
    <table border="1">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>salary</th>
                <th>active</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $id ?></td>
                <td><?= $name ?></td>
                <td><?= $salary ?></td>
                <td><?= $active ?></td>
            </tr>
        </tbody>
    </table>
</main>

