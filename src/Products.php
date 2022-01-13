<?php

namespace App;

use PDO;

class Products
{
    // Соединения с БД
    protected PDO $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    // Получить список товаров с ограничением количества выводимых товаров
    public function getProducts(int $limit): ?array
    {
        $statement = $this->connection->prepare(
            'SELECT * FROM Products  ORDER BY DATE_CREATE DESC LIMIT ' . $limit
        );

        $statement->execute();

        return $statement->fetchAll();
    }

    // Добавить значение HIDDEN в поле STATUS
    public function hideProduct(int $id)
    {
        $statement = $this->connection->prepare('UPDATE Products SET STATUS="HIDDEN" WHERE ID=' . $id);
        $statement->execute();
        return $statement->fetchAll();
    }

    // Увеличить кол-во товара (на +1)
    public function incrementProduct(int $id, int $quantity): ?array
    {
        $statement = $this->connection->prepare('UPDATE Products SET PRODUCT_QUANTITY=' . $quantity . ' WHERE ID=' . $id);
        $statement->execute();
        return $statement->fetchAll();
    }

    // Увеличить кол-во товара (на -1)
    public function decrementProduct(int $id, int $quantity): ?array
    {
        $statement = $this->connection->prepare('UPDATE Products SET PRODUCT_QUANTITY=' . $quantity . ' WHERE ID=' . $id);
        $statement->execute();
        return $statement->fetchAll();
    }
}