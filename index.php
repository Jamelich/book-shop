<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Интернет-магазин книг</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="wrap_menu">
        <span>Меню и заголовок</span>
    </div>

    <h1>Интернет-магазин книг</h1>
    <?php
    try {
        $dbh = new PDO("mysql:host=localhost;dbname=shop-book", 'root', '');
        $stmt = $dbh->query("SELECT * FROM `products`");
        // $results = $stmt->fetch(PDO::FETCH_ASSOC);
        $array_products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        die($e->getMessage());
    }
    
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
    ?>

    <div class="wrap_footer">
        <span>Подвал</span>
    </div>


</body>

</html>