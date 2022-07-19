<?php
try {
    $dbh = new PDO("mysql:host=localhost;dbname=shop-book", 'root', '');
    $stmt = $dbh->query("SELECT * FROM `products`");
    // $results = $stmt->fetch(PDO::FETCH_ASSOC);
    $array_products = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die($e->getMessage());
}
