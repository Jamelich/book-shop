<?php
function out_list_products()
{
    $stmt = $dbh->query("SELECT * FROM `products`");
    $array_products = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
