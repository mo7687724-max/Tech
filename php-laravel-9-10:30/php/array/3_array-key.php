<!-- 
    JS = object 

        let object = {
                id : 101,
                name : "john",
                email : "john@gmail.com"
        }


    PHP = Array Key
        $object = [
            "id" => 101,
            "name" => "Test"
        ]
-->

<?php
// $product = [
//     "id" => 101,
//     "title" => "Computer",
//     "price" => 1220.11,
//     "qty" => 10,
// ]; 


// // output
// echo $product['title'];

// echo "<hr>";
// // input 
// $product['description'] = "product......";

// echo $product['description'];

// // print_r($product); 



?>


<?php

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

if ($email === "john@gmail.com" and $password === '123456') {
    $user = [
        'id' => 202,
        'name' => $username,
        'email' => $email,
        'password' => $password
    ];
    $message = "Login Successfully";
} else {
    $error = "Email or Password is not match";
    $message = "Login Failed";
}

?>

<main>
    <form method="post">
        <input type="text" name="username" placeholder="username"><br>
        <input type="text" name="email" placeholder="email"><br>
        <input type="text" name="password" placeholder="password"><br>
        <button type="submit">submit</button>
    </form>

    <?php if ($user): ?>
        <p><?= $message ?></p>
        <ul>
            <li><?= $user['id'] ?></li>
            <li><?= $user['name'] ?></li>
            <li><?= $user['email'] ?></li>
            <li><?= $user['password'] ?></li>
        </ul>
    <?php else: ?>
        <?php if($username): ?>
            <p><?= $message ?></p>
            <p><?= $error ?></p>
        <?php else: ?>
            <p></p>
        <?php endif ?>
        <p>User not found</p>
    <?php endif ?>
</main>