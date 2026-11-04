<!-- 
    JS = [{}]
    PHP = [[]]
-->

<?php 

    $products = [
        [
            "id" => 101,
            "title" => "mouse",
            "price" => 24.22,
            "qty" => 12,
            "image" => "mouse.png",
            "description" => '..........'
        ],
        [
            "id" => 102,
            "title" => "laptop",
            "price" => 200.22,
            "qty" => 32,
            "image" => "laptop.png",
            "description" => '..........'
        ],
        [
            "id" => 101,
            "title" => "desktop",
            "price" => 3040.22,
            "qty" => 33,
            "image" => "desktop.png",
            "description" => '..........'
        ]
    ];


    // output 
    // print_r($products);
    echo $products[1]['title'];
    echo "<img src='./images/" .$products[1]['image'] . "' width='100px'>";


    echo "<hr>";
    // input 
    $products[3] =  [
            "id" => 104,
            "title" => "new product",
            "price" => 12346.22,
            "qty" => 123,
            "image" => "image.png",
            "description" => 'new ..........'
        ];
    echo $products[3]['title'];



    echo "<hr>";
    // update one recode
    $products[1] =  [
            "title" => "update recode",
            "price" => 421.22,
            "qty" => 3,
            "image" => "image.png",
            "description" => 'update recode ..........'
        ];
    echo $products[1]['title'];
    echo "<img src='./images/" .$products[1]['image'] . "' width='100px'>";

    
    echo "<hr>";
    // update one column
    $products[1]['title'] = "update one column";
    echo $products[1]['title'];


    echo "<hr>";
    // delete one recode
    // $products[0] = [];
?>

<main>
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
            <?php foreach($products as $product): ?>
                <tr>
                    <td><?= $product['id'] ?></td>
                    <td><?= $product['title'] ?></td>
                    <td><?= $product['price'] ?></td>
                    <td><?= $product['qty'] ?></td>
                    <td>
                        <img src="./images/<?= $product['image'] ?>" width="100px" alt="<?= $product['title'] ?>">
                    </td>
                    <td><?= $product['description'] ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</main>