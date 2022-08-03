<?php
require 'views/header.php';
?>

<h1>Интернет-магазин книг</h1>

<h2>Наш сайт типа работает). Ты попал на главную страницу</h2>

<?php
$connect = new DB;
$array_products = $connect->getAllProducts();

echo '<div class="wrap_products_all">';
foreach ($array_products as $product) {
    $html_out_product = '<div class="wrap_product">';
    $html_out_product .= '<span>' . $product['name'] . '</span>';
    $html_out_product .= '<p>' . $product['description'] . '</p>';
    $html_out_product .= '<span> Цена: ' . $product['price'] . '</span>';
    $html_out_product .= '</div>';
    echo $html_out_product;
}
?>
<?php require 'views/footer.php';
