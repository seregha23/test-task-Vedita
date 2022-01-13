<?php
require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/src/model/functions.php'
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Тестовое задание Vedita</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/main.css">
</head>

<body>
<div class="container">
    <h1 class="pt-3 pb-3">Тестовое задание Vedita</h1>
    <div class="table-responsive-md mx-auto">
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>PRODUCT_ID</th>
                <th>PRODUCT_NAME</th>
                <th>PRODUCT_PRICE</th>
                <th>PRODUCT_ARTICLE</th>
                <th>PRODUCT_QUANTITY</th>
                <th>DATE_CREATE</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($productsFields as $productField): ?>
                <tr>
                    <!-- id -->
                    <td class="id"><?php echo($productField['ID']) ?></td>
                    <!-- id продукта -->
                    <td><?php echo($productField['PRODUCT_ID']) ?></td>
                    <!-- Название продукта -->
                    <td><?php echo($productField['PRODUCT_NAME']) ?></td>
                    <!-- Стоимость продукта -->
                    <td><?php echo($productField['PRODUCT_PRICE']) ?></td>
                    <!-- Артикул продукта -->
                    <td><?php echo($productField['PRODUCT_ARTICLE']) ?></td>
                    <!-- Количество продуктов -->
                    <td>
                        <span class="product_quantity"><?php echo($productField['PRODUCT_QUANTITY']) ?></span>
                        <div class="btn-group" style="width: 100%">
                            <!-- Кнопка уменьшения кол-ва товара -->
                            <span class="decrement btn btn-secondary py-1 px-2">-</span>
                            <!-- Кнопка увеличения кол-ва товара -->
                            <span class="increment btn btn-secondary py-1 px-2">+</span>
                        </div>
                    </td>
                    <!-- Дата создания продукта -->
                    <td>
                        <?php echo($productField['DATE_CREATE']) ?>
                        <a href="javascript:void(0);" class="btn btn-secondary hide" id="hide">Скрыть</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="/assets/js/main.js"></script>
</body>
</html>

