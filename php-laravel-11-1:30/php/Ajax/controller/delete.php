<?php 

    require_once '../config/db.php';

    $id = $_POST['id'];

    $post = $conn->query("SELECT * FROM posts WHERE id = $id")->fetch_assoc();

    if(isset($post['image'])){
        unlink(($post['image']));
    }

    $delete = $conn->query("DELETE FROM posts WHERE id = '$id'");




