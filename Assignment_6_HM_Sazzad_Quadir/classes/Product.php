<?php

class Product {
    private $id;
    private $name;
    private $description;
    private $price;

    public function __construct($id, $name, $description, $price) {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getPrice() {
        return $this->price;
    }

    public static function getAllProducts() {
        $products = json_decode(file_get_contents(__DIR__ . '/../data/products.json'), true);
        $productObjects = [];

        foreach ($products as $product) {
            $productObjects[] = new Product($product['id'], $product['name'], $product['description'], $product['price']);
        }

        return $productObjects;
    }
}
