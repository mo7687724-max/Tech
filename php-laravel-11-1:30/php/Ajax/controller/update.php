<?php


require_once "../config/db.php";

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $command = $_POST['command'];

    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $oldImage = $conn->query("SELECT * FROM posts WHERE id = $id")->fetch_assoc();
        if (!empty($oldImage['image']) && file_exists($oldImage['image'])) {
            unlink($oldImage['image']);
        }

        $imageName = $_FILES['image']['name'];
        $tmp_name = $_FILES['image']['tmp_name'];

        $imagePath = '../uploads/' . time() . '_' . $imageName;

        move_uploaded_file($tmp_name, $imagePath);

        $conn->query("UPDATE posts SET title = '$title', command ='$command', image = '$imagePath' WHERE id = $id");
    }else{
        $conn->query("UPDATE posts SET title = '$title', command ='$command' WHERE id = $id");
    }
}

?>