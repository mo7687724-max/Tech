<main>
    <form action="<?= BASE_URL ?>/update" method="POST" enctype="multipart/form-data">
        <h1>Update Product</h1>

        <input type="hidden" name="id" value="<?= $product['id'] ?>">

        <input type="text" name="title" value="<?= $product['title'] ?>"><br>
        <input type="number" name="price" value="<?= $product['price'] ?>"><br>
        <input type="number" name="stock" value="<?= $product['stock'] ?>"><br>

        <input type="file" name="image" onchange="previewImage(this)"><br>

        <img src="<?= BASE_URL ?>/asset/uploads/<?= $product['image'] ?>" width="100px" id="preview"><br>

        <input type="text" name="description" value="<?= htmlspecialchars($product['description']) ?>"><br>

        <button type="submit">Update</button>
        <button type="reset" onclick="resetPreview()">Reset</button>
    </form>

    <a href="<?= BASE_URL ?>/">Back</a>
</main>

<script>
    const preview = document.getElementById('preview');


    function previewImage(input) {

        preview.src = URL.createObjectURL(input.files[0]);

    }


</script>