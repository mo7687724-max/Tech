<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Product List</h1>
    <a href="<?= BASE_URL ?>/create">create</a>
    <table border="1">
        <thead>
            <tr>
                <th>id</th>
                <th>title</th>
                <th>price</th>
                <th>stock</th>
                <th>image</th>
                <th>description</th>
                <th>
                    <a href="">edit</a>
                    <form action=""></form>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product): ?>
                <tr>
                    <td><?= $product['id'] ?></td>
                    <td><?= $product['title'] ?></td>
                    <td><?= $product['price'] ?></td>
                    <td><?= $product['stock'] ?></td>
                    <td>
                        <?php if (!empty($product['image'])): ?>
                            <img src="<?= BASE_URL ?>/asset/uploads/<?= $product['image'] ?>" alt="" width="100px">
                        <?php endif; ?>
                    </td>
                    <td><?= $product['description'] ?></td>
                    <td>
                        <a href="<?= BASE_URL ?>/edit?id=<?= $product['id'] ?>">edit</a> 
                        <form action="<?= BASE_URL ?>/delete?id=<?= $product['id'] ?>" method="POST"
                            onsubmit="return confirm('Delete this product?');">
                            <input type="hidden" name="id" value="<?= $product['id'] ?>">
                            <button type="submit">delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>