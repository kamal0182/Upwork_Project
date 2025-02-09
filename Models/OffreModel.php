<?php 
namespace app\Models;
class OffreModel
{
    private  int  $id;
    private  string $title;
    private  string $description;
    private string $budjet;
    private string $duree;
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