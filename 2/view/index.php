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
<?php include 'menu.php'; ?>

<!-- Страницы --!>
<?php if($block == 'list_product'){ ?>
    <?php include 'list_product/index.php'; ?>
<?php }?>
<?php else if($block == 'single_product') { ?>
<?php include 'single_product/index.php'; ?>
<?php } ?>
<!-- Страницы --!>

<?php include 'footer.php'; ?>

</body>
</html>