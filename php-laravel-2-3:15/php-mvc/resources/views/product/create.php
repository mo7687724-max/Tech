<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Product</title>
</head>
<body>
    <h1>Add New Product</h1>
    <a href="<?= BASE_URL ?>/">Back to List</a>
    <br><br>

    <form action="<?= BASE_URL ?>/products/store" method="POST" enctype="multipart/form-data">
        <div>
            <label>Name:</label><br>
            <input type="text" name="name" required>
        </div>
        <br>
        <div>
            <label>Image:</label><br>
            <input type="file" name="image" accept="*">
        </div>
        <br>
        <div>
            <label>Description:</label><br>
            <textarea name="description" rows="4" cols="30"></textarea>
        </div>
        <br>
        <div>
            <label>Price:</label><br>
            <input type="number" name="price" step="0.01" required>
        </div>
        <br>
        <div>
            <label>Stock:</label><br>
            <input type="number" name="stock" value="0">
        </div>
        <br>
        <button type="submit">Save</button>
    </form>
</body>
</html>