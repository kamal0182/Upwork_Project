<?php
declare(strict_types=1);
require_once '../Core/database.php';

class Categorie {
    private ?int $id;
    private string $title;

    public function __construct(string $title, ?int $id = null) {
        $this->id = $id;
        $this->title = $title;
    }

    // Getters
    public function getId(): ?int { return $this->id; }
    public function getTitle(): string { return $this->title; }

    // Setters
    public function setTitle(string $title): void { $this->title = $title; }
    public function setId(?int $id): void { $this->id = $id; }

    // recherch par id
    public static function findById(int $id): ?Categorie {
        $stmt = Database::getInstance()->getConnection()->prepare("SELECT * FROM categorie WHERE id = ?");
        $stmt->execute([$id]);
        $row = $stmt->fetchObject(Categorie::class);

        return $row ? new Categorie(
            title: $row['title'],
            id: $row['id']
        ) : null;
    }

    // recherch par title

    public static function findByTitle(string $title): ?Categorie {
        $pdo = Database::getInstance()->getConnection();
        $stmt = $pdo->prepare("SELECT * FROM categorie WHERE title = ?");
        $stmt->execute([$title]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        return $row ? new Categorie(
            title: $row['title'],
            id: $row['id']
        ) : null;
    }

    // delet categorie
    public function delete(): bool {
        if (is_null($this->id)) {
            return false; // لا يمكن الحذف بدون ID
        }

        $pdo = Database::getInstance()->getConnection();
        $stmt = $pdo->prepare("DELETE FROM categorie WHERE id = ?");
        return $stmt->execute([$this->id]);
    }

    // affichage de all categories
    public static function getAll(): array {
        $pdo = Database::getInstance()->getConnection();
        $stmt = $pdo->query("SELECT * FROM categorie");
        $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return array_map(fn($row) => new Categorie(
            title: $row['title'],
            id: $row['id']
        ), $categories);
    }

    // update tite
    public function updateTitle(): void {
        if (is_null($this->id)) {
            throw new Exception("impossible de ubdate an categorie sans id");
        }

        $pdo = Database::getInstance()->getConnection();
        $stmt = $pdo->prepare("UPDATE categorie SET title = ? WHERE id = ?");
        $stmt->execute([$this->title, $this->id]);
    }
}
?>
