<?php
class DB
{
    // public function __construct($dbh = null)
    // {

    //     try {
    //         $dbh = new PDO("mysql:host=localhost;dbname=shop-book", 'root', '');
    //         $stmt = $dbh->query("SELECT * FROM `products`");
    //         // $results = $stmt->fetch(PDO::FETCH_ASSOC);
    //         $array_products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //     } catch (PDOException $e) {
    //         die($e->getMessage());
    //     }
    //     var_dump($array_products);
    //     return $array_products;
    // }
    // private $db_connect;
    // private function connect()
    private $dbh;
    public function __construct()
    {
        try {
            // $dbh = new PDO("mysql:host=localhost;dbname=shop-book", 'root', '');
            $this->dbh = new PDO("mysql:host=localhost;dbname=shop-book", 'root', '');
            // $stmt = $this->dbh->query("SELECT * FROM `products`");
            // $results = $stmt->fetch(PDO::FETCH_ASSOC);
            // $array_products = $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public $array_products;
    public function getAllProducts()
    {
        $stmt = $this->dbh->query("SELECT * FROM `products`");
        $this->array_products = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $this->array_products;
    }
}
