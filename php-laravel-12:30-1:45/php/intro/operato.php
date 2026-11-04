<?php 
    /* operator 
        1. Arithmetic operators (+, -, *, /, %)
        2. Assignment operators (+=, -=, *=, /=)
        3. Comparison operators (==, ===, >, <, >=, <=, !=)
        4. Logical operators (and(&&), or(||), !)
    */

    // echo (10 > 10) && (10 < 30);

    // echo !(!(10 != 40) || !(100 != 10));

    $id = 101;
    $title = "Product 1";
    $price = 1000.123;
    $qty = 100;
    $image = "https://ordinarytech.ca/cdn/shop/files/Ordinary9800X3DPremiumReady-BuiltGamingPC9800X3DRTX5090DDR5Gen5Nvme_3.png?v=1755604932&width=1445";
    $description = "product1...";
    $total = $price * $qty;
?>

<main>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>TITLE</th>
                <th>PRICE</th>
                <th>QTY</th>
                <th>IMAGE</th>
                <th>DESCRIPTION</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $id ?></td>
                <td><?= $title ?></td>
                <td><?= $price ?></td>
                <td><?= $qty ?></td>
                <td>
                    <img src="<?= $image ?>" alt="<?= $title ?>" width="100px">
                </td>
                <td><?= $description ?></td>
                <td>
                    <button>view</button>
                    <button>edit</button>
                    <button>delete</button>
                </td>
            </tr>
        </tbody>
    </table>
</main>
