<?php
header('Content-Type: text/html; charset=utf-8');

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
if ($uri === '/')
    $file = 'controllers/homepage.php';
elseif ($uri === '/about')
    $file = 'about.php';
else
    $file = 'controllers/404.php';

require $file;

