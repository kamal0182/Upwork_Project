<?php 
namespace app\Models;

use app\Core\Config\Database;
use PDO;

class OffreModel extends Model
{
    private  int  $id;
    public  string $titre ;
    public  string $description ;
    public string $budget ;
    public string  $duration ;
    public string $status = "non-valide";
    public  $photo ;
    private ClientModel $clientmodal;
    private  $freelancer;
    private ProjectModel $project;
    public function __call($name, $arguments)
    {
        if($name == "constructer"){
            $this->titre = $arguments[0];
            $this->description = $arguments[1];
            $this->budget = $arguments[2];
            $this->duration = $arguments[3];
            $this->clientmodal = $arguments[4];
        }
        if($name== "createInstanceWithId"){
          $this->id = $arguments[0];
        }
    }
    public function rules(): array {
      return [
        "titre" => [self::RULE_REQUIRED],
        'description'=>[self::RULE_REQUIRED],
        'budget' =>[self::RULE_REQUIRED],
        'duration' => [self::RULE_REQUIRED]
      ];
    }
    
    public function getId()
    {
      return $this->id;
    }
    public function setId($value) {
      $this->id = $value;
    }
    public function getTitle() {
      return $this->titre;
    }
    public function setTitle($value) {
      $this->titre = $value;
    }

    public function getDescription() {
      return $this->description;
    }
    public function setDescription($value) {
      $this->description = $value;
    }

    public function getBudjet() {
      return $this->budget;
    }
    public function setBudjet($value) {
      $this->budget = $value;
    }

    public function getDuree() {
      return $this->duration;
    }
    public function setDuree($value) {
      $this->duration = $value;
    }

    public function getClient() {
      return $this->clientmodal;
    }
    public function setClientmodal(ClientModel $clientmodal) {
      $this->clientmodal = $clientmodal;
    }
      public function create(){
        $sql = "INSERT INTO offres (titre  , description  , budget  , duration, status , client)  values ('{$this->titre}' , '{$this->description}', '{$this->budget}','{$this->duration}','{$this->status}' ,'{$this->getclient()->getId()}')" ;
        $stmt = Database::getConnection()->prepare($sql);
        $stmt->execute();
        return  Database::getConnection()->lastInsertId();
    }
    public function findAll(){
      $sql = "SELECT * FROM offres  where  client = " .$this->getClient()->getId();
      $stmt = Database::getConnection()->prepare($sql);
      $stmt->execute();
      return $stmt->fetchAll(PDO::FETCH_CLASS,OffreModel::class);
    }
    public function findByOne($id){
      $sql  = "SELECT * FROM offres WHERE id = " .$id ;
      $stmt = Database::getConnection()->prepare($sql);
      $stmt->execute();
    }
    public function delete(){
      $sql  = "delete   FROM offres WHERE id = " .$this->id ;
      echo $sql ;
      $stmt = Database::getConnection()->prepare($sql);
      $stmt->execute();
    }
}