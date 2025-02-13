<?php
class Database {
    private static ?Database $instance = null;
    private ?PDO $pdo = null;
    private function __construct() {
        try {
            $dsn = "pgsql:host=localhost;port=5432;dbname=admin_dashboard";
            $username = "postgres";
            $password = "E94L72assal";
            $this->pdo = new PDO($dsn, $username, $password, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);
        } catch (PDOException $e) {
            error_log("Erreur de connexion : " . $e->getMessage());
            die("Erreur de connexion, vérifiez les logs.");
        }
    }
    

    public static function getInstance(): Database {
        if (self::$instance === null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    public function getConnection(): PDO {
        return $this->pdo;
    }
}
?>
