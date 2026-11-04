<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main id="app-container">
        <h1>Product Management</h1>
        <a href="create.php" id="createForm">create post</a>
        <table border="1">
        <thead>
                <tr>
                    <th>id</th>
                    <th>title</th>
                    <th>command</th>
                    <th>image</th>
                    <th>action</th>
                </tr>
        </thead>
        <tbody id="demo">

        </tbody>
        </table>
    </main>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="../controller/api.js?v=<?= time() ?>"></script>
    <script>
        $(document).ready(function(){

            // Load the create.php view into the container without refreshing
            $('#app-container').on('click', '#createForm', function(e){
                e.preventDefault()
                $('#app-container').load('create.php');
            })

            // Handle create post submit without refreshing
            $('#app-container').on('submit', '#formSubmit', createPost);

            // Handle update post submit without refreshing
            $('#app-container').on('submit', '#formUpdate', function(e){
                e.preventDefault();
                updatePost(this);
            });

            // Image preview handler
            $('#app-container').on('change', '#image', function(){
                imagePreview(this, '#preview')
            })

            // Back / Cancel button handler to return to list view
            $('#app-container').on('click', '#btn-back', function(e){
                e.preventDefault()
                loadIndex();
            })

            // Clear create form handler
            $('#app-container').on('click', '#clearCreateBtn', function(){
                $('#formSubmit')[0].reset();
                $('#preview').attr('src', '').hide();
            })

            // refresh table
            loadData();
        })
    </script>
</body>
</html>