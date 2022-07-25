<?php
defined('VG_ACCESS') or die('Not defined');

try {
    $dbh = new PDO("mysql:host=localhost;dbname=shop-book", 'root', '');
} catch (PDOException $e) {
    die($e->getMessage());
}
