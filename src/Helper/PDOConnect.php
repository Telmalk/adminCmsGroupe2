<?php


namespace Helper;


class PDOConnect
{
    private static $pdo;

    public static function getPdo() {
        if (is_null(self::$pdo)) {
            try {
                self::$pdo = new \PDO('mysql:host=localhost;dbname=cmsg2b', "root", "");
            } catch (\PDOException $e) {
                die($e->getMessage());
            }
        }
        return self::$pdo;
    }
}