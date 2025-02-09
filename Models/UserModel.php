<?php 
namespace app\Models;
class UserModel 
{
    private int $id ; 
    private string $firstname;
    private string $lastname;
    private string $email;
    private RoleModel $role;
    private string $photo;
    public function __construct($firstname , $lastname ,$email , RoleModel $role,$photo = "not found yet" )
    {
        $this->firstname = $firstname;
        $this->lastname =$lastname ;
        $this->email =$email ;
        $this->role = $role ;
        $this->photo = $photo;
    }
    public function getFirstName(){
        return $this->firstname;
    }
    public function getLastname(){
        return $this->lastname;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getRole(){
        return $this->role;
    }
    public function getphoto(){
        return $this->photo;
    }
   
}