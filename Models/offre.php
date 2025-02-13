<?php
// mod strict 😅
declare(strict_types=1);
require_once '../Core/database.php';

class offre {
    private ?int $id;
    private string $title;
    private string $durée;
    private string $prix;
    private ?float $methodeDePaiment;
    private string $status;

    public function __construct(
        string $title,
        string $durée,
        string $prix,
        ?float $methodeDePaiment,
        string $status = 'non valide',
        ?int $id = null
    ) {
        $this->id = $id;
        $this->title = $title;
        $this->durée = $durée;
        $this->prix = $prix;
        $this->methodeDePaiment = $methodeDePaiment;
        $this->status = $status;
    }

    // Getr
    public function getId(): ?int { return $this->id; }
    public function getTitle(): string { return $this->title; }
    public function getDurée(): string { return $this->durée; }
    public function getPrix(): string { return $this->prix; }
    public function getMethodeDePaiment(): ?float { return $this->methodeDePaiment; }
    public function getStatus(): string { return $this->status; }

    // Setr
    public function setTitle(string $title): void { $this->title = $title; }
    public function setDurée(string $durée): void { $this->durée = $durée; }
    public function setPrix(string $prix): void { $this->prix = $prix; }
    public function setMethodeDePaiment(?float $methodeDePaiment): void { $this->methodeDePaiment = $methodeDePaiment; }
    public function setStatus(string $status): void { $this->status = $status; }
    // Find by ID
    public static function findById(int $id): ?User {
        $pdo = Database::getInstance()->getConnection();
        $stmt = $pdo->prepare("SELECT * FROM offre WHERE id = ?");
        $stmt->execute([$id]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        return $user ? new User(
            title: $user['title'],
            durée: $user['durée'],
            prix: $user['prix'],
            methodeDePaiment: (float)$user['methodeDePaiment'],
            status: $user['status'],
            id: $user['id']
        ) : null;
    }

    // Find by status
    public static function findByStatus(string $status): array {
        $pdo = Database::getInstance()->getConnection();
        $stmt = $pdo->prepare("SELECT * FROM offre WHERE status = ?");
        $stmt->execute([$status]);
        $offre = $stmt->fetchAll(PDO::FETCH_ASSOC);

        
        return array_map(fn($user) => new User(
            title: $user['title'],
            durée: $user['durée'],
            prix: $user['prix'],
            methodeDePaiment: (float)$user['methodeDePaiment'],
            status: $user['status'],
            id: $user['id']
        ), $offre);
    }

    // sup user
    public function delete(): bool {
        if ($this->id === null) {
            return false; // imposi suprimée sans ID
        }

        $pdo = Database::getInstance()->getConnection();
        $stmt = $pdo->prepare("DELETE FROM offre WHERE id = ?");
        return $stmt->execute([$this->id]);
    }


    public static function getAll(): array {
        $pdo = Database::getInstance()->getConnection();
        $stmt = $pdo->query("SELECT * FROM offre");
        $offre = $stmt->fetchAll(PDO::FETCH_ASSOC);

        
        return array_map(fn($user) => new User(
            title: $user['title'],
            durée: $user['durée'],
            prix: $user['prix'],
            methodeDePaiment: (float)$user['methodeDePaiment'],
            status: $user['status'],
            id: $user['id']
        ), $offre);
    
    public function validate(): void {
        $this->status = 'valide';
        $this->updateStatus();
    }
    public function invalidate(): void {
        $this->status = 'non valide';
        $this->updateStatus();
    }
    private function updateStatus(): void {
        $pdo = Database::getInstance()->getConnection();
        $stmt = $pdo->prepare("UPDATE offre SET status = ? WHERE id = ?");
        $stmt->execute([$this->status, $this->id]);
    }
}
?>
