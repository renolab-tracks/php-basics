<?php


class Database
{

    public $pdo;

    public function __construct($dsn)
    {
        $this->pdo = new PDO($dsn);
    }

    function query($sql, $data = [])
    {
        $statement = $this->pdo->prepare($sql);
        $statement->execute($data);
        return $statement;
    }
}
