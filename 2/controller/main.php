<?php

function main(){
    $page = 'list_product'; //Анализировать url, в зависимости от этого присваивать list_product или single_product
    $array_products = getProducts();

    if(!empty($_GET['page']) == 1){
        $page = 'single_product'; //Анализировать url, в зависимости от этого присваивать list_product или single_product
    }

    return include 'view/index.php';
}