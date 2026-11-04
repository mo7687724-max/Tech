<?php

class ProductController extends Controller
{
    private Product $productModel;
    private string $uploadDir;

    public function __construct()
    {
        $this->productModel = new Product();
        $this->uploadDir = dirname(__DIR__, 2) . "/public/asset/uploads/";
        if (!is_dir($this->uploadDir)) {
            mkdir($this->uploadDir, 777, true);
        }
    }

    public function index()
    {
        $products = $this->productModel->getAll();
        return $this->view("crud-product/index", ["products" => $products]);
    }

    public function create()
    {
        return $this->view("crud-product/create");
    }

    public function handleUpload(?array $file): ?string
    {
        if (!$file || $file["error"] !== UPLOAD_ERR_OK) {
            return null;
        }
        $allowedTypes = ['image/jpeg', 'image/png', 'image/webp'];
        if (!in_array(mime_content_type($file['tmp_name']), $allowedTypes, true)) {
            return null;
        }

        // image.png
        $ext = pathinfo($file['name'], PATHINFO_EXTENSION);
        // $ext = png
        $filename = uniqid('prod_', true) . "." . $ext;
        // $filename = prod_123123.png
        $destination = $this->uploadDir . $filename;
        return move_uploaded_file($file['tmp_name'], $destination) ? $filename : null;
    }

    public function store()
    {
        $imageName = $this->handleUpload($_FILES['image'] ?? null);

        $product = [
            'title' => trim($_POST['title'] ?? ''),
            'price' => (float) trim($_POST['price'] ?? ''),
            'stock' => (int) trim($_POST['stock'] ?? ''),
            'image' => $imageName,
            'description' => trim($_POST['description'] ?? '')
        ];

        if (!empty($product['title']) && $product['price'] > 0) {
            $this->productModel->create($product);
            $this->redirect('/');
            return;
        }

        return $this->redirect('/create');

    }

    public function delete()
    {
        $id = (int) ($_POST['id'] ?? $_GET['id'] ?? 0);
        if ($id <= 0) {
            $this->redirect('/');
            return;
        }

        $product = $this->productModel->find($id);
        if ($product && !empty($product['image'])) {
            $filePath = $this->uploadDir . $product['image'];
            if (file_exists($filePath)) {
                unlink($filePath);
            }
        }

        $this->productModel->delete($id);
        $this->redirect('/');
    }

    public function edit()
    {
        $id = (int) ($_GET['id'] ?? 0);
        $product = $this->productModel->find($id);
        if (!$product) {
            return $this->redirect('/');
        }
        return $this->view('crud-product/edit', ['product' => $product]);
    }

    public function update()
    {
        $id = (int) ($_POST['id'] ?? 0);
        $product = $this->productModel->find($id);
        if (!$product) {
            $this->redirect('/');
            return;
        }
        $imageName = $product['image'];
        if (!empty($_FILES['image']['name'])) {
            $newImage = $this->handleUpload($_FILES['image']);
            if ($newImage) {
                if ($imageName && file_exists($this->uploadDir . $imageName)) {
                    unlink($this->uploadDir . $imageName);
                }
                $imageName = $newImage;
            }
        }

        $product = [
            'title' => trim($_POST['title']),
            'price' => (float) ($_POST['price']),
            'stock' => (int)($_POST['stock']),
            'image' => $imageName,
            'description' => trim($_POST['description']),
        ];

        $this->productModel->update($id, $product);
        $this->redirect('/'); return;
    }


}