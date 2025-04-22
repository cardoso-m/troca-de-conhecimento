<?php
class Database {
    private static $instance;

    public static function getConnection() {
        if (!self::$instance) {
            self::$instance = new PDO("mysql:host=localhost;dbname=troca_conhecimentos", "root", "");
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$instance;
    }
}
