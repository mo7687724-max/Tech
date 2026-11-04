<?php

class ProductController extends Controller
{
    private Product $productModel;
    private string $uploadDir;

    public function __construct()
    {
        $this->productModel = new Product();

        $this->uploadDir = dirname(__DIR__, 2) . '/public/assets/uploads/';

        if (!is_dir($this->uploadDir)) {
            mkdir($this->uploadDir, 0755, true);
        }
    }

    // show all data
    public function index(): void
    {
        $products = $this->productModel->all();
        $this->view('product/index', ['products' => $products]);
    }

    // view create form
    public function create(): void
    {
        $this->view('product/create');
    }

    // create product 
    public function store(): void
    {
        $imageName = null;

        // Check if image was uploaded
        if (
            isset($_FILES['image']) &&
            $_FILES['image']['error'] === UPLOAD_ERR_OK
        ) {
            $originalName = $_FILES['image']['name'];
            $tmpName = $_FILES['image']['tmp_name'];
            // image.png
            // Get extension
            $extension = pathinfo($originalName, PATHINFO_EXTENSION); // .png

            // Generate unique filename
            $imageName = uniqid() . '.' . $extension;

            // Full upload path
            $imagePath = $this->uploadDir . $imageName;

            // Move uploaded file
            move_uploaded_file($tmpName, $imagePath);
        }

        $data = [
            'name' => trim($_POST['name'] ?? ''),
            'description' => trim($_POST['description'] ?? ''),
            'price' => (float) ($_POST['price'] ?? 0),
            'stock' => (int) ($_POST['stock'] ?? 0),
            'image' => $imageName,
        ];

        if ($this->productModel->create($data)) {
            $this->redirect('/');
        } else {
            echo "Failed to create product.";
        }

    }

    // get data for update 
    public function edit(): void
    {
        $id = (int) ($_GET["id"] ?? 0);
        $product = $this->productModel->find($id);
        if (!$product) {
            $this->redirect("/");
        }

        $this->view("/product/edit", ["product" => $product]);

    }

    // update product
    public function update(): void
    {
        $id = (int) ($_GET["id"] ?? 0);
        $product = $this->productModel->find($id);
        if (!$product) {
            $this->redirect("/");
            return;
        }
        $old_image = $product['image'];

        if (
            isset($_FILES['image']) &&
            $_FILES['image']['error'] === UPLOAD_ERR_OK
        ) {
            $originalName = $_FILES['image']['name'];
            $tmpName = $_FILES['image']['tmp_name'];
            // image.png
            // Get extension
            $extension = pathinfo($originalName, PATHINFO_EXTENSION); // .png

            // Generate unique filename
            $imageName = uniqid() . '.' . $extension;

            // Full upload path
            $imagePath = $this->uploadDir . $imageName;

            // Move uploaded file
            move_uploaded_file($tmpName, $imagePath);

            if ($old_image) {
                $imagePath = $this->uploadDir . $old_image;
                if ($imagePath && file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }

            $data = [
                'name' => trim($_POST['name'] ?? ''),
                'description' => trim($_POST['description'] ?? ''),
                'price' => (float) ($_POST['price'] ?? 0),
                'stock' => (int) ($_POST['stock'] ?? 0),
                'image' => $imageName,
            ];
            
            $this->productModel->update($id, $data);
            $this->redirect('/'); return;
        }

    }


    // delete product 
    public function destroy(): void
    {
        $id = (int) ($_GET["id"] ?? 0);
        if ($id <= 0) {
            $this->redirect('/');
            return;
        }
        $product = $this->productModel->find($id);
        if ($product && !empty($product['image'])) {
            $imagePath = $this->uploadDir . $product['image'];
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }
        $this->productModel->delete($id);
        $this->redirect('/');
        return;
    }

}