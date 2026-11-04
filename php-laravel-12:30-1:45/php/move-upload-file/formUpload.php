<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $title = trim($_POST['title']);

    $fileName = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];

    $imagePath = "uploads/" . time() . '_' . $fileName;

    move_uploaded_file($tmp_name, $imagePath);

}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Image Upload</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            min-height: 100vh;

            display: flex;
            justify-content: center;
            align-items: center;

            padding: 30px;
        }

        .container {
            width: 100%;
            max-width: 500px;
        }

        .card {
            background: white;
            padding: 30px;
            border-radius: 16px;

            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }

        .title {
            text-align: center;
            margin-bottom: 25px;
        }

        .title h1 {
            font-size: 28px;
            color: #222;
            margin-bottom: 8px;
        }

        .title p {
            color: #777;
            font-size: 14px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-size: 14px;
            font-weight: bold;
            color: #333;
        }

        .form-group input[type="text"] {
            width: 100%;
            padding: 13px 15px;

            border: 1px solid #ddd;
            border-radius: 10px;

            outline: none;
            font-size: 15px;

            transition: 0.2s;
        }

        .form-group input[type="text"]:focus {
            border-color: #4f46e5;
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.1);
        }

        .file-box {
            border: 2px dashed #d5d5d5;
            border-radius: 12px;

            padding: 25px;
            text-align: center;

            cursor: pointer;
            transition: 0.2s;
        }

        .file-box:hover {
            border-color: #4f46e5;
            background: #f8f7ff;
        }

        .file-box input {
            display: none;
        }

        .file-box span {
            display: block;
            color: #666;
            font-size: 14px;
            margin-top: 8px;
        }

        .upload-icon {
            font-size: 35px;
        }

        .preview-container {
            text-align: center;
            margin-top: 20px;
        }

        #preview {
            width: 140px;
            height: 140px;

            object-fit: cover;

            border-radius: 12px;
            border: 1px solid #ddd;

            display: none;
        }

        .btn {
            width: 100%;
            border: none;

            padding: 13px;
            border-radius: 10px;

            background: #4f46e5;
            color: white;

            font-size: 15px;
            font-weight: bold;

            cursor: pointer;
            transition: 0.2s;
        }

        .btn:hover {
            background: #4338ca;
            transform: translateY(-1px);
        }

        .result {
            margin-top: 20px;
            padding: 20px;

            background: #f8fafc;
            border: 1px solid #e5e7eb;
            border-radius: 12px;

            text-align: center;
        }

        .result h3 {
            margin-bottom: 15px;
            color: #222;
        }

        .result ul {
            list-style: none;
        }

        .result li {
            margin-bottom: 12px;
        }

        .result img {
            width: 120px;
            height: 120px;

            object-fit: cover;

            border-radius: 10px;
            border: 1px solid #ddd;
        }

        .not-found {
            margin-top: 20px;
            padding: 15px;

            text-align: center;

            background: #fff;
            border-radius: 10px;

            color: #888;
        }

        @media (max-width: 500px) {

            body {
                padding: 15px;
            }

            .card {
                padding: 20px;
            }

        }
    </style>

</head>

<body>

    <div class="container">

        <div class="card">

            <div class="title">

                <h1>Upload Image</h1>

                <p>Upload your image with a title</p>

            </div>

            <form method="post" enctype="multipart/form-data">

                <div class="form-group">

                    <label>Title</label>

                    <input type="text" name="title" placeholder="Enter image title" required>

                </div>

                <div class="form-group">

                    <label>Image</label>

                    <label class="file-box">

                        <div class="upload-icon">📷</div>

                        <strong>Choose an image</strong>

                        <span>Click here to select your image</span>

                        <input type="file" name="image" accept="image/*" onchange="handleChange(this)" required>

                    </label>

                </div>

                <div class="preview-container">

                    <img id="preview">

                </div>

                <br>

                <button class="btn" type="submit">
                    Upload Image
                </button>

            </form>

            <?php if (!empty($title)): ?>

                <div class="result">

                    <h3>Uploaded Image</h3>

                    <ul>

                        <li>
                            <strong>Title:</strong>
                            <?= htmlspecialchars($title) ?>
                        </li>

                        <li>

                            <img src="<?= htmlspecialchars($imagePath) ?>" alt="<?= htmlspecialchars($title) ?>">

                        </li>

                    </ul>

                </div>

            <?php else: ?>

                <div class="not-found">
                    No image uploaded yet.
                </div>

            <?php endif ?>

        </div>

    </div>

    <script>

        function handleChange(input) {

            let preview = document.getElementById('preview');

            let file = input.files[0];

            if (file) {

                preview.src = URL.createObjectURL(file);

                preview.style.display = 'inline-block';

            }

        }

    </script>

</body>

</html>