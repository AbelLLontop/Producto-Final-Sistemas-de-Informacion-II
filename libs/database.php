<?php

class Database {

    private static $pdo = null;

    public static function getConnect() {
        if (isset(self::$pdo)) {
            return self::$pdo;
        } else {
            try {
                $connection = "mysql:host=" . constant('HOST') . ";dbname=" . constant('DB') . ";charset=" . constant('CHARSET');
                $options = [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_EMULATE_PREPARES => false,
                ];
                self::$pdo = new PDO($connection, constant('USER'), constant('PASSWORD'), $options);
                return self::$pdo;
            } catch (PDOException $e) {
                print_r('Error connection' . $e->getMessage());
            }
        }
    }

}

?>