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

    <form action="<?= BASE_URL ?>/products/update?id=<?= $product['id']?>" method="POST" enctype="multipart/form-data">
        <div>
            <label>Name:</label><br>
            <input type="text" name="name" value="<?= $product['name'] ?>" >
        </div>
        <br>
        <div>
            <label>Image:</label><br>
            <input type="file" name="image" accept="*">
        </div>
        <br>
        <div>
            <label>Description:</label><br>
            <textarea name="description" rows="4" cols="30"><?= $product['description'] ?></textarea>
        </div>
        <br>
        <div>
            <label>Price:</label><br>
            <input type="number" name="price" step="0.01" value="<?= $product['price'] ?>">
        </div>
        <br>
        <div>
            <label>Stock:</label><br>
            <input type="number" name="stock"  value="<?= $product['stock'] ?>">
        </div>
        <br>
        <button type="submit">Save</button>
    </form>
</body>
</html>