<?php 
namespace app\Models ;

use app\Core\Config\Database;

abstract class GeniriqueModel{
    public array $Models = [
        'users' => UserModel::class ,
        'offres' => OffreModel::class
    ];
    abstract public function columns():array ;
    abstract public function tablename() :string ;
    public function matchclassswithdatabase(){
        $tabalename =  strtolower($this->tablename())."s";
        return $tabalename ;
      }
    public function delete($id){

    }
    // public function update($id){
        
    //     $updatearray = [];
    //     foreach($this->columns() as $key=>$value){
    //         $updatearray []  =  $key  ." = '" .$value ."'";
    //     }
    //     $matchwithquery = implode(" , ",$updatearray);
    //     $sql  = "UPDATE  {$this->matchwithclass()}   SET $matchwithquery WHERE id = " .$id .";"; 
    //     $stmt =  Database::getConnection()->prepare($sql);
    //      $stmt->execute();
    //      $result = $stmt->fetchObject($this->checkclass());
    // }
}