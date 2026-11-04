
<?php

$products = [
    [
        'id' => 101,
        'title' => 'Wireless Headphones',
        'price' => 59.99,
        'qty' => 25,
        'image' => 'https://picsum.photos/id/180/800/600',
        'description' => 'High-quality wireless headphones with comfortable ear cushions and clear sound.'
    ],
    [
        'id' => 102,
        'title' => 'Smart Watch',
        'price' => 89.99,
        'qty' => 18,
        'image' => 'https://picsum.photos/id/201/800/600',
        'description' => 'Modern smart watch with fitness tracking, notifications, and health features.'
    ],
    [
        'id' => 103,
        'title' => 'Laptop',
        'price' => 799.99,
        'qty' => 10,
        'image' => 'https://picsum.photos/id/1/800/600',
        'description' => 'Powerful laptop suitable for programming, study, office work, and entertainment.'
    ],
    [
        'id' => 104,
        'title' => 'Mechanical Keyboard',
        'price' => 74.99,
        'qty' => 30,
        'image' => 'https://picsum.photos/id/3/800/600',
        'description' => 'Mechanical keyboard with responsive keys and a comfortable typing experience.'
    ],
    [
        'id' => 105,
        'title' => 'Gaming Mouse',
        'price' => 39.99,
        'qty' => 45,
        'image' => 'https://picsum.photos/id/4/800/600',
        'description' => 'Ergonomic gaming mouse with accurate tracking and customizable buttons.'
    ],
    [
        'id' => 106,
        'title' => 'Backpack',
        'price' => 49.99,
        'qty' => 35,
        'image' => 'https://picsum.photos/id/21/800/600',
        'description' => 'Durable backpack with multiple compartments for laptops, books, and accessories.'
    ],
    [
        'id' => 107,
        'title' => 'Coffee Mug',
        'price' => 12.99,
        'qty' => 60,
        'image' => 'https://picsum.photos/id/30/800/600',
        'description' => 'Simple and stylish ceramic coffee mug for home or office use.'
    ],
    [
        'id' => 108,
        'title' => 'Running Shoes',
        'price' => 69.99,
        'qty' => 22,
        'image' => 'https://picsum.photos/id/21/800/600',
        'description' => 'Lightweight running shoes designed for everyday walking and exercise.'
    ],
    [
        'id' => 109,
        'title' => 'Camera',
        'price' => 599.99,
        'qty' => 8,
        'image' => 'https://picsum.photos/id/250/800/600',
        'description' => 'Digital camera for photography, travel, events, and creative projects.'
    ],
    [
        'id' => 110,
        'title' => 'Desk Lamp',
        'price' => 29.99,
        'qty' => 40,
        'image' => 'https://picsum.photos/id/1060/800/600',
        'description' => 'Modern desk lamp providing comfortable lighting for studying and working.'
    ]
];

if ($_SERVER['REQUEST_METHOD'] == 'GET'){
    $search = $_GET['search'];  // desktop
    // product = 'computer'
    // product = 'desktop'
    // product = 'mm'

    $searchResults = [];

    foreach($products as $product){
        // false      or        false
        if(empty($search) || stripos($product['title'], $search) !== false){
            $searchResults[] = $product;
            // $searchResults = [
                    //   [product = 'computer'],
                    //   [product = 'desktop'],

            // ]
        }
    }
}
?>

<main>
    <form method="get">
        <input type="text" name="search" value="<?= $search ?? '' ?>" placeholder="search..."><br>
        <button type="submit">search</button>
    </form>

    <table border="1">
        <thead>
            <tr>
                <th>id</th>
                <th>title</th>
                <th>price</th>
                <th>qty</th>
                <th>image</th>
                <th>description</th>
            </tr>
        </thead>
        <tbody>
            <?php if (empty($searchResults)): ?>
                <p>Product Not Found</p>
            <?php else: ?>
                <?php foreach ($searchResults as $product): ?>
                    <tr>
                        <td><?= $product['id'] ?></td>
                        <td><?= $product['title'] ?></td>
                        <td><?= $product['price'] ?></td>
                        <td><?= $product['qty'] ?></td>
                        <td>
                            <img src="<?= $product['image'] ?>" width="100px" alt="<?= $product['title'] ?>">
                        </td>
                        <td><?= $product['description'] ?></td>
                    </tr>
                <?php endforeach ?>
            <?php endif ?>
        </tbody>
    </table>

</main>

