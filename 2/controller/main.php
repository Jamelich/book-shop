<?php

function main(){
    $block = 'list_product'; //Анализировать url, в зависимости от этого присваивать list_product или news
    $array_products = getProducts();

    if(!empty($_GET['page']) == 'news'){
        $block = 'news'; //Анализировать url, в зависимости от этого присваивать list_product или news
    }

    return include 'view/index.php';
}