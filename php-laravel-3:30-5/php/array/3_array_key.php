<?php

// $product = [
//     "id" => 101,
//     "title" => "computer",
//     "price" => 1200.22,
//     "qty" => 19
// ];

// // output
// echo $product['title'];

// echo "<hr>";
// // input
// $product['description'] = "product...";
// echo $product['description'];

// echo "<hr>";
// // update

?>



<!-- 
    input = name, email, password

    $name
    $email
    $password


    $user = [
        'name' => $name ,
        'email' => $email,
    ]


    echo $user['name'];

    


-->



<?php
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

if ($email === 'test@gmail.com' and $password == '123456') {
    $user = [
        'id' => 202,
        'name' => $name,
        'email' => $email,
        'password' => $password
    ];

    $message = "Login Successfully.";

} else {
    $error = "Email and Password is not match.";
    $message = "Login Failed, pls try again.";
}
?>


<main>
    <form method="post">
        <input type="text" name="name" placeholder="name"><br>
        <input type="email" name="email" placeholder="email"><br>
        <input type="text" name="password" placeholder="password"><br>

        <button type="submit">submit</button>
    </form>
    <hr>

    <div>
        <?php if ($user ?? ''): ?>
            <ul>
                <li><?= $user['id'] ?></li>
                <li><?= $user['name'] ?></li>
                <li><?= $user['email'] ?></li>
                <li><?= $user['password'] ?></li>
            </ul>
            <p><?= $message ?></p>
        <?php else: ?>
            <?php if ($email): ?>
                <p><?= $error ?></p>
                <p><?= $message ?></p>
            <?php else: ?>
                <p>Account not found.</p>
            <?php endif ?>
        <?php endif ?>
    </div>
</main>