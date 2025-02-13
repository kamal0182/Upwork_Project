<?php 
namespace app\Models;

use app\Core\Config\Database;
use PDO;

class CompetenceModel
{
    private $id;
    private $name;
    public function __call($name, $arguments)
    {
        if($name == "createInstanceWithId"){
            $this->id  = $arguments[0];
        }
        if($name == "createInstanceWithName"){
            $this->name = $arguments[0];
        }
    }
    public function getId() {
      return $this->id;
    }
    public function setId($value) {
      $this->id = $value;
    }

    public function getName() {
      return $this->name;
    }
    public function setName($value) {
      $this->name = $value;
    }
    public function create (){
        $sql = 'INSERT INTO competences name =' .$this->name ;
        $stmt  = Database::getConnection()->prepare($sql);
        $stmt->execute();
    }
    public function  delete(){
        $sql = 'DELETE from competence id =' .$this->id; 
        $stmt  = Database::getConnection()->prepare($sql);
        $stmt->execute();

    }
    public function  update(){
        $sql = "Update table competence  set  name = {$this->name} where id = {$this->id}" ; 
        $stmt  = Database::getConnection()->prepare($sql);
        $stmt->execute();
    }
    public function findByname(){
        $sql = "SELECT * FROM competence where name =  {$this->name}";
        $stmt  = Database::getConnection()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS,CompetenceModel::class);
    }
    public function findById(){
        $sql = "SELECT * FROM competence where id =  {$this->id}";
        $stmt  = Database::getConnection()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS,CompetenceModel::class);
    }
    
}