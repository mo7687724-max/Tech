<?php
// $host = "localhost";
// $username = "root";
// $password = "";
// $database = "php_12_1";

// $conn = new mysqli($host, $username, $password, $database);

$conn = new mysqli("localhost", "root", "", "php_12_1");

if ($conn->connect_error) {
    die("Connection Failed" . $conn->connect_error);
}

// $sql = "SELECT * FROM products LIMIT 5";
// $products = $conn->query($sql);

$products = $conn->query("SELECT * FROM products LIMIT 5");
// print_r($products);


?>


<main>
    <ul>
        <?php while ($row = $products->fetch_assoc()): ?>
            <li>Product ID: <?= $row['product_id'] ?></li>
            <li>Category ID: <?= $row['category_id'] ?></li>
            <li>Name: <?= $row['product_name'] ?></li>
            <li>Price: $<?= $row['product_price'] ?></li>
            <li>Stock: <?= $row['product_stock'] ?></li>
        <hr>
        <?php endwhile ?>
    </ul>
</main>