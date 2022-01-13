<?php

namespace App;

require_once __DIR__ . '/../../vendor/autoload.php';

use App\getProducts;
use PDO;

/**
 *   Подключение к БД
 */
$config = include_once __DIR__ . '/../../config/database.php';                                  // Данные для подключения к БД
$dsn = $config['dsn'];
$username = $config['username'];    // Имя БД
$password = $config['password'];    // Пароль БД

try {
    $connection = new PDO($dsn, $username, $password);                                          // Подключение к БД с помощью встроенного класса PHP
    $connection->SetAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);         // Устанавливает атрибуты объекту PDO(режим сообщений об ошибках,выбрасывать исключения.)
    $connection->SetAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);    // Устанавливает атрибуты объекту PDO(режим выборки данных по умолчанию,)
} catch (\PDOException $exception) {
    echo 'Datebase error:' . $exception->getMessage();                                          // Поймать исключение в случае ошибки
    die();
}
//== Конец ==//


/**
 *   Получение списка товаров
 */

$products = new Products($connection);               // Создание объекта товаров
$productsFields = $products->getProducts(5);    // Получить список товаров с ограничением количества выводимых товаров
//== Конец ==//

/**
 *   Обработка запросов ajax
 */

// Добавить значение HIDDEN в поле STATUS
if (isset($_POST['id'])) {
    $products->hideProduct($_POST['id']);
}

// Увеличить количество товара на +1
if (isset($_POST['idIncrement']) && isset($_POST['productQuantity'])) {
    $products->incrementProduct(intval($_POST['idIncrement']), intval($_POST['productQuantity']));
}
// Уменьшить количество товара на -1
if (isset($_POST['idDecrement']) && isset($_POST['productQuantity'])) {
    $products->decrementProduct(intval($_POST['idDecrement']), intval($_POST['productQuantity']));
}
//== Конец ==//



