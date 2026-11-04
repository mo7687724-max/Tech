<?php 

    require_once '../config/db.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $title = trim($_POST['title']) ?? '';
        $command = trim($_POST['command']) ??'';

        $imagePath = null;

        if(isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK){
            $imageName = $_FILES['image']['name'];
            $tmp_name = $_FILES['image']['tmp_name'];

            $imagePath = '../uploads/'. time() . '_' . $imageName;

            move_uploaded_file($tmp_name, $imagePath);

            $insert = $conn->query("INSERT INTO posts (title, command, image)
                                        VALUE ('$title', '$command', '$imagePath')");
            if($insert){
                setcookie('success', 'Create Posts Successfully', time() + 10, '/');
                exit;
            }
        }

    }