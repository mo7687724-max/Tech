<main>
    <form action="<?= BASE_URL ?>/store" method="POST" enctype="multipart/form-data">
        <h1>Create Product</h1>
        <input type="text" name="title" placeholder="title"> <br>
        <input type="number" name="price" placeholder="price"> <br>
        <input type="number" name="stock" placeholder="stock"> <br>
        <input type="file" name="image" onchange="previewImage(this)" placeholder="image"> <br>
        <img width="100px" id="preview" alt=""><br>
        <input type="text" name="description" placeholder="description"> <br>
        <button type="submit">Create</button> <br>
        <button type="reset">Reset</button>
    </form>
    <a href="<?= BASE_URL ?>/">Back</a>
</main>

<script>
    const preview= document.getElementById('preview');

    function previewImage(input) {

        preview.src = URL.createObjectURL(input.files[0]);

    }


</script>