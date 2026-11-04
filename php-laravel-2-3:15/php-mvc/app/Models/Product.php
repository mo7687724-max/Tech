<?php

class Product extends Model
{
    protected string $table = 'products';

    // get all products
    public function all(): array
    {
        $stmt = Database::connection()->query("SELECT * FROM {$this->table} ORDER BY id DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // create product 
    public function create(array $data){
        $stmt = Database::connection()->prepare("INSERT INTO {$this->table} 
                (name, price, stock, image, description)
                VALUES (:name, :price, :stock, :image, :description)");

        return $stmt->execute([
            "name"        => $data["name"],
            "price"       => $data["price"],
            "stock"       => $data["stock"],
            "image"       => $data["image"],
            "description" => $data["description"],
        ]);
    }

    // update product 
    public function update(int $id, array $data): bool
    {
        $stmt = Database::connection()->prepare(
            "UPDATE {$this->table} 
            SET name = :name, description = :description, price = :price, stock = :stock, image = :image 
            WHERE id = :id"
        );
        return $stmt->execute([
            'id' => $id,
            'name' => $data['name'],
            'description' => $data['description'] ?? null,
            'price' => $data['price'],
            'stock' => $data['stock'] ?? 0,
            'image' => $data['image'] ?? null,
        ]);
    }

    // delete product
    public function delete(int $id){
        $stmt = Database::connection()->prepare("DELETE FROM {$this->table} WHERE id = :id");
        return $stmt->execute(['id'=> $id]);
    }

    // function find 
    public function find (int $id): ?array{
        $stmt = Database::connection()->prepare("SELECT * FROM {$this->table} WHERE id = :id");
        $stmt->execute(["id"=> $id]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC); 
        return $result ?: null;
    }


}


