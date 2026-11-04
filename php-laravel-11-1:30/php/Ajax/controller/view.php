<?php 

    require_once '../config/db.php';

    $id = $_GET['id'];

    $post = $conn->query("SELECT * FROM posts WHERE id = $id")->fetch_assoc();

?>
    <ul>
        <li><?= $post['id'] ?></li>
        <li><?= $post['title'] ?></li>
        <li><?= $post['command'] ?></li>
        <li>
            <img src="<?= $post['image'] ?>" alt="<?= $post['title'] ?>" width="200px">
        </li>
        <button type="button" id="btn-back">Back</button>
    </ul>