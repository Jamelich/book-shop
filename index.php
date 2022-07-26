<?php
header('Content-Type: text/html; charset=utf-8');

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
if ($uri === '/')
    $file = 'controllers/homepage.php';
elseif ($uri === '/about')
    $file = 'about.php';
else
    $file = 'controllers/404.php';

// require 'config.php';
require $file;

class OutProducts
{
    private $db;
    private static $instance;
    public function __construct()
    {
        $this->db = new PDO("mysql:host=localhost;dbname=shop-book", 'root', '');
    }

    // Операции над БД
    public function query($sql, $params = [])
    {
        // Подготовка запроса
        $stmt = $this->db->prepare($sql);

        // Обход массива с параметрами 
        // и подставление значений
        if (!empty($params)) {
            foreach ($params as $key => $value) {
                $stmt->bindValue(":$key", $value);
            }
        }

        // Выполняем запрос
        $stmt->execute();
        // Возвращаем ответ
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getInstance(): self
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }
}

$db = OutProducts::getInstance();
echo "<pre>";
print_r($db->query('SELECT * FROM `products`'));

$db1 = OutProducts::getInstance();
echo "<pre>";
print_r($db1->query('SELECT * FROM `products`'));
