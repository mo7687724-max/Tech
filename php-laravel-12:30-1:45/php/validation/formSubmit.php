<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = trim($_POST['name']);
    $age = trim($_POST['age']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    $errors = [];
    // $errors = [
    //      "name" => 'Name must be at least 3 character.'
    // ]

    if (empty($name)) {
        $errors['name'] = 'Name is required.';
    } elseif (strlen($name) < 3) {
        $errors['name'] = 'Name must be at least 3 characters.';
    }


    if (empty($age)) {
        $errors['age'] = 'Age cannot be empty.';
    } elseif ($age <= 0) {
        $errors['age'] = 'Age must be greater than 0.';
    }


    if (empty($email)) {
        $errors['email'] = 'Email is required.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Please enter a valid email address.';
    }


    if (empty($password)) {
        $errors['password'] = 'Password is required.';
    } elseif (strlen($password) < 6) {
        $errors['password'] = 'Password must be at least 6 characters.';
    }

    if (empty($errors)) {
        $success = 'Create Data Successfully.';

        $user = [
            'name' => $name,
            'age' => $age,
            'email' => $email,
            'password' => password_hash($password, PASSWORD_DEFAULT)
        ];
    }
}

?>

<main>
    <form method="post">
        <p style="color: green;"><?= $success ?? '' ?></p>
        <input type="text" name="name" placeholder="name"><br>
        <p style="color: red;"><?= $errors['name'] ?? '' ?></p>
        <input type="number" name="age" placeholder="age"><br>
        <p style="color: red;"><?= $errors['age'] ?? '' ?></p>
        <input type="text" name="email" placeholder="email"><br>
        <p style="color: red;"><?= $errors['email'] ?? '' ?></p>
        <input type="password" name="password" placeholder="password">
        <p style="color: red;"><?= $errors['password'] ?? '' ?></p>
        <button type="submit">submit</button>
    </form>
    <hr>
    <?php if ($user): ?>
        <ul>
            <p style="color: green;"><?= $success ?? '' ?></p>
            <li><?= $user['name'] ?? '' ?></li>
            <li><?= $user['age'] ?? '' ?></li>
            <li><?= $user['email'] ?? '' ?></li>
            <li><?= $user['password'] ?? '' ?></li>
        </ul>
    <?php else: ?>
        <p>Product Invalid</p>
    <?php endif ?>
    
</main>