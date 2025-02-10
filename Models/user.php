<?php
// mod strict 😅
// 
declare(strict_types=1);
require_once '../Core/database.php';

class User {
    // private PDO $pdo;
    private ?int $id;
    private string $firstName;
    private string $lastName;
    private string $email;
    private string $motDePass;
    private ?float $rating;

    public function __construct(
        string $firstName,
        string $lastName,
        string $email,
        string $motDePass,
        ?int $id = null,
        ?float $rating = null
    ) {
        // $this->pdo = Database::getInstance()->getConnection();
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->motDePass = $motDePass;
        $this->rating = $rating;
    }

    // getr
    // public function getAllUsers() {
        // $stmt = $this->pdo->query("SELECT * FROM users");
        // return $stmt->fetchAll(); }
    public function getId(): ?int { return $this->id; }
    public function getFirstName(): string { return $this->firstName; }
    public function getLastName(): string { return $this->lastName; }
    public function getEmail(): string { return $this->email; }
    public function getMotDePass(): string { return $this->motDePass; }
    public function getRating(): ?float { return $this->rating; }

    // setr
    public function setFirstName(string $firstName): void { $this->firstName = $firstName; }
    public function setLastName(string $lastName): void { $this->lastName = $lastName; }
    public function setEmail(string $email): void { $this->email = $email; }
    public function setMotDePass(string $motDePass): void { $this->motDePass = $motDePass; }
    public function setRating(?float $rating): void { $this->rating = $rating; }

    // filtrage par id
    public static function findById(int $id): ?User {
        $pdo = Database::getInstance()->getConnection();
        $stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
        $stmt->execute([$id]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // output
        return $user ? new User(
            firstName: $user['first_name'],
            lastName: $user['last_name'],
            email: $user['email'],
            motDePass: $user['password'],
            id: $user['id'],
            rating: $user['rating']
        ) : null;
    }

    // filtrage par rating
    public static function findByRating(float $rating): array {
        $pdo = Database::getInstance()->getConnection();
        $stmt = $pdo->prepare("SELECT * FROM users WHERE rating = ?");
        $stmt->execute([$rating]);
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // output
        $userObjects = [];
        foreach ($users as $user) {
            $userObjects[] = new User(
                firstName: $user['first_name'],
                lastName: $user['last_name'],
                email: $user['email'],
                motDePass: $user['password'],
                id: $user['id'],
                rating: $user['rating']
            );
        }
        return $userObjects;
    }

    public function delete(): bool {
        if ($this->id === null) {
            return false; //  suprime imposible sans id
        }



        $pdo = Database::getInstance()->getConnection();
        $stmt = $pdo->prepare("DELETE FROM users WHERE id = ?");



        return $stmt->execute([$this->id]);
    }

    public static function getAll(): array {

        $pdo = Database::getInstance()->getConnection();
        $stmt = $pdo->query("SELECT * FROM users");
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
        

        // array_map "transformation bla foreach"
        // fn 
        // hiya arrow function
        //  shorter syntax w3endha mn function f cpu usage
        //  Katkhdm b syntax compact bla return
        return array_map(fn($user) => new User(
            $user['first_name'],
            $user['last_name'],
            $user['email'],
            $user['password'],
            $user['id'],
            $user['rating']
        ), $users);
    }
}
?>
