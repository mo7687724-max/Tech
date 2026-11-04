<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Products</title>
</head>

<body>

    <h1>Products</h1>
    <a href="<?= BASE_URL ?>/products/create">Create</a>
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($products as $product): ?>
                <tr>
                    <td><?= htmlspecialchars($product['id']) ?></td>
                    <td>
                        <?php if ($product['image']): ?>
                            <img src="<?= str_starts_with($product['image'], 'http') ? htmlspecialchars($product['image']) : BASE_URL . '/assets/uploads/' . htmlspecialchars($product['image']) ?>" width="60" height="60" style="object-fit: cover;">
                        <?php else: ?>
                            No Image
                        <?php endif; ?>
                    </td>
                    <td><?= htmlspecialchars($product['name']) ?></td>
                    <td><?= htmlspecialchars($product['description'] ?? '') ?></td>
                    <td>$<?= number_format($product['price'], 2) ?></td>
                    <td><?= htmlspecialchars($product['stock']) ?></td>
                    <td>
                        <a href="<?= BASE_URL ?>/products/edit?id=<?= $product['id'] ?>">edit</a>
                        <form action="<?= BASE_URL ?>/products/destroy?id=<?= $product['id'] ?>" method="POST">
                            <button type="submit">delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>

</html>