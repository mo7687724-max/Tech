<?php
// [{}]
// [[]]


$products = [
    [
        "id" => 101,
        "title" => "mouse",
        "price" => 1220.22,
        "qty" => 20,
        "image" => "mouse.png",
        "description" => "......."
    ],
    [
        "id" => 102,
        "title" => "desktop",
        "price" => 2220.22,
        "qty" => 30,
        "image" => "desktop.png",
        "description" => "......."
    ],
    [
        "id" => 103,
        "title" => "laptop",
        "price" => 1420.22,
        "qty" => 10,
        "image" => "laptop.png",
        "description" => "......."
    ]
];

// output
echo $products[0]['title'];

echo "<hr>";

// input
$products[3] = [
    "id" => 104,
    "title" => "new product",
    "price" => 1220.44,
    "qty" => 30,
    "image" => '',
    "description" => ".........."
];

echo $products[3]['title'];


// update one recode
echo "<hr>";
$products[0] = [
    "id" => 101,
    "title" => "product update",
    "price" => 1000.10,
    "qty" => 10,
    "image" => "mouse.png",
    "description" => "update"
];

echo $products[0]['title'];

// update one column
echo "<hr>";
$products[1]['description'] = "update one column";
echo $products[1]['description'];

// delete one recode
echo "<hr>";
// $products[0] = [];

// print_r($products[1]);

?>

<main>
    <ul>
        <?php foreach ($products as $product): ?>
            <li><?= $product['id'] ?></li>
            <li><?= $product['title'] ?></li>
            <li><?= $product['price'] ?></li>
            <li><?= $product['qty'] ?></li>
            <li>
                <img src="./images/<?= $product['image'] ?>" width="100px" alt="<?= $product['title'] ?>">
            </li>
            <li><?= $product['description'] ?></li>
        <?php endforeach ?>
    </ul>
</main>