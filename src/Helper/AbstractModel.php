<?php


namespace Helper;


abstract class AbstractModel
{
    protected $pdo;

    public function __construct()
    {
        $this->pdo = PDOConnect::getPdo();
    }

    public function errorHandler(\PDOStatement $stmt) {
        if ($stmt->errorCode() !== "00000") {
            throw new \Exception($stmt->errorInfo()[2]);
        }
    }
}