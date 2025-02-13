<?php
namespace app\Core\Config;

use PDO;
use PDOException;

class Database {
        private static $conn;
        // public static $host = 'localhost';
        // public static $port = '5432';
        // public static $db_name = 'Upwork';
        // public $username = 'postgres';
        // public $password = 'kamal1234';
        public static function getConnection() {
            if (is_null(self::$conn)) {
                return $conn  = new Self;
            } else {
                try {
                    $password = 'kamal1234';
                    $username = 'postgres';
                    $db_name = 'Upwork';
                    $port = '5432';
                    $host = 'localhost';
                    self::$conn = new PDO("pgsql:host=$host;port=$port;dbname=$db_name", $username, $password);
                    return self::$conn;
                } catch (PDOException $e) {
                    die("Erreur de connexion : " . $e->getMessage());
                }
            
            }
        }
    }