<?php
// setcookie('username', 'test', time() + 10, '/');


// if (isset($_COOKIE['username'])) {
//     echo "Username: " . $_COOKIE['username'];
// } else {
//     echo "Cookie not found!";
// }
?>



<?php

if (isset($_POST['submit'])) {
    $message = $_POST['message'];

    setcookie('message', $message, time()+20, '/');

    header("location: ". $_SERVER['PHP_SELF']);
    exit();
}

?>

<main>
    <form method="post">
        <input type="text" name="message" placeholder="message"><br>
        <button type="submit" name="submit">submit</button>
    </form>

    <h3><?= $_COOKIE['message'] ?? '' ?></h3>
</main>