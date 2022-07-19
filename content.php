<h1>Интернет-магазин книг</h1>
<?php
// print_r($array_products);
echo '<div class="wrap_products_all">';
foreach ($array_products as $product) {
    $html_out_product = '<div class="wrap_product">';
    $html_out_product .= '<span>' . $product['name'] . '</span>';
    $html_out_product .= '<p>' . $product['description'] . '</p>';
    $html_out_product .= '<span> Цена: ' . $product['price'] . '</span>';
    $html_out_product .= '</div>';
    echo $html_out_product;
}

echo '</div>';