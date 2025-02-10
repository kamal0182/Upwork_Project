<?php 
namespace app\Models;
class OffreModel extends Model
{
    private  int  $id;
    public  string $title = '';
    public  string $description = '';
    public string $budjet = '0';
    public string $duree = '0' ;
    private ClientModel $clientmodal;
    // public function ($budjet,$duree,$description, $title,$clientmodal)
    // {
        
    // }
    public function __call($name, $arguments)
    {
        if($name == "constructer"){
            $this->title = $arguments[0];
            $this->description = $arguments[1];
            $this->budjet = $arguments[2];
            $this->duree = $arguments[3];
            $this->clientmodal = $arguments[4];
        }
    }
    public function rules(): array {
      return [
        "title" => [self::RULE_REQUIRED],
        'description'=>[self::RULE_REQUIRED],
        'budget' =>[self::RULE_REQUIRED],
        'durre' => [self::RULE_REQUIRED]
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
      return $this->title;
    }
    public function setTitle($value) {
      $this->title = $value;
    }

    public function getDescription() {
      return $this->description;
    }
    public function setDescription($value) {
      $this->description = $value;
    }

    public function getBudjet() {
      return $this->budjet;
    }
    public function setBudjet($value) {
      $this->budjet = $value;
    }

    public function getDuree() {
      return $this->duree;
    }
    public function setDuree($value) {
      $this->duree = $value;
    }

    public function getClient() {
      return $this->clientmodal;
    }
    public function setClientmodal(ClientModel $clientmodal) {
      $this->clientmodal = $clientmodal;
    }
    public function Create()
    {

    }
}