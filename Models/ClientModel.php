<?php 
namespace app\Models;

use app\Core\Config\Database;
use PDO;

class ClientModel
{
    private int $id;
    private string $firstname;
    private string $lastname;
    private string $email;
    private float  $rating;
    // private UserModel $user ;
    private array $Offres;
    private RoleModel $role;
    private PortfolioModel $portfolio;
    private string $photo;
    public function __construct(UserModel $user)
    {
      $this->id =  $user->getId();
        $this->firstname   = $user->getFirstName();
        $this->lastname  = $user->getLastname();
        $this->email = $user->getEmail();
        $this->photo = $user->getPhoto();
        // $this->role = $user->getRole();
    } 
    public function getId() 
    {
      return $this->id;
    }
    public function setId($value) 
    {
      $this->id = $value;
    }

    public function getFirstname() 
    {
      return $this->firstname;
    }
    public function setFirstname($value) 
    {
      $this->firstname = $value;
    }

    public function getLastname() 
    {
      return $this->lastname;
    }
    public function setLastname($value) 
    {
      $this->lastname = $value;
    }

    public function getEmail() 
    {
      return $this->email;
    }
    public function setEmail($value) 
    {
      $this->email = $value;
    }

    public function getRating() 
    {
      return $this->rating;
    }
    public function setRating($value) 
    {
      $this->rating = $value;
    }
    
    public function getOffres(){
        return $this->Offres;
    }
    public function getRole() 
    {
      return $this->role;
    }
    public function setRole($value) 
    {
      $this->role = $value;
    }
    public function getPortfolio() 
    {
      return $this->portfolio;
    }
    
    public function getPhoto() 
    {
        return $this->photo;
    }
    public function setPhoto($value) 
    {
        $this->photo = $value;
    }
    public function setOffre(OffreModel $offre)
    {
        $this->Offres[] = $offre;

    }
    public function  createAnOffre()
    {
        // $offre->create();
    }
    public function findByOne($id){
      $sql = 'SELECT  * from users WHERE id =  ' .$id ."'";
      $stmt = Database::getConnection()->prepare($sql);
      $stmt->execute();
      return $stmt->fetchObject(ClientModel::class);
    }
}