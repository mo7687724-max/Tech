<?php
    require_once '../config/db.php';
    $id = $_GET['id'];
    $post = $conn->query("SELECT * FROM posts WHERE id = $id")->fetch_assoc();

?>

<main>
    <form id="formUpdate" enctype="multipart/form-data" method="post">
        <h3>Edit post</h3>
        <input type="hidden" name="id" value="<?= $post['id'] ?>">
        <input type="text" name="title" value="<?= $post['title'] ?>" placeholder="title"><br>
        <input type="text" name="command" value="<?= $post['command'] ?>" placeholder="command"><br>
        <input type="file" name="image" id="image"><br>
        <img  id="preview" src="<?= $post['image'] ?>" alt="" width="100px"><br>
        <button type="submit">Update</button>
        <button type="button" id="btn-back">Back</button>
    </form>
</main>