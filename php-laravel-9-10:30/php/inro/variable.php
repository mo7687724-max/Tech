<?php 

$id = 101; // int
$title = "Product"; // string
$price = 100.11; // float
$active = true; // bool

echo "<h1>Id : $id </h1>";
echo "<h1>Title : $title</h1>";
echo "<h1>Price : $price</h1>";
echo "<h1>Active : $active</h1>";



?>
<hr>
<main>
    <table border="1">
        <thead>
            <tr>
                <th>id</th>
                <th>title</th>
                <th>price</th>
                <th>active</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $id ?></td>
                <td><?= $title ?></td>
                <td><?= $price ?></td>
                <td><?= $active ?></td>
            </tr>
        </tbody>
    </table>
</main>




