<?php 

    $products = [

    [
        "id" => 1,
        "title" => "Wireless Headphones",
        "price" => 89.99,
        "qty" => 25,
        "image" => "https://images.unsplash.com/photo-1505740420928-5e560c06d30e",
        "description" => "High-quality wireless headphones with noise cancellation.",
    ],

    [
        "id" => 2,
        "title" => "Smart Watch",
        "price" => 149.99,
        "qty" => 18,
        "image" => "https://images.unsplash.com/photo-1523275335684-37898b6baf30",
        "description" => "Modern smartwatch with fitness tracking and notifications.",
    ],

    [
        "id" => 3,
        "title" => "Running Shoes",
        "price" => 79.99,
        "qty" => 32,
        "image" => "https://images.unsplash.com/photo-1542291026-7eec264c27ff",
        "description" => "Comfortable running shoes designed for everyday training.",
    ],

    [
        "id" => 4,
        "title" => "Leather Backpack",
        "price" => 59.99,
        "qty" => 14,
        "image" => "https://images.unsplash.com/photo-1553062407-98eeb64c6a62",
        "description" => "Stylish backpack suitable for work, school, and travel.",
    ],

    [
        "id" => 5,
        "title" => "Coffee Mug",
        "price" => 14.99,
        "qty" => 45,
        "image" => "https://images.unsplash.com/photo-1514228742587-6b1558fcf93a",
        "description" => "Ceramic coffee mug with a simple modern design.",
    ],

    [
        "id" => 6,
        "title" => "Mechanical Keyboard",
        "price" => 99.99,
        "qty" => 20,
        "image" => "https://images.unsplash.com/photo-1587829741301-dc798b83add3",
        "description" => "Mechanical keyboard with responsive switches and RGB lighting.",
    ],

];
        
    
    echo $products[2]['description'];

    // if(10>10){
    //     echo 'true';
    // }else{
    //     echo 'false';
    // }
    // echo 10<10 ? 'true' : 'false';

    // $check = 'True';
    // echo $check ?? 'false';


?>

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
        <?php foreach($products as $product):?>
            <tr>
                <td><?= $product['id'] ?></td>
                <td><?= $product['title'] ?></td>
                <td><?= $product['price'] ?></td>
                <td><?= $product['qty'] ?></td>
                <td>
                    <img src="<?= $product['image'] ?>" alt="<?= $product['title'] ?>" width="100px">
                </td>
                <td><?= $product['description'] ?></td>
            </tr>
        <?php endforeach?>
    </tbody>
</table>