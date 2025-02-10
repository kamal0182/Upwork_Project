<?php 
namespace app\Models;



class UserModel extends GeniriqueModel{
    private int $id ;
    private string $firstname;
    private string $lastname;
    private string $email;
    private string $password;
    private RoleModel $role ;
    private float $rating ;
    private string $photo;
    private string $phone;
    // public function __construct($firstname , $lastname ,$email , RoleModel $role,$photo = "not found yet")
    // {
    //     $this->firstname = $firstname;
    //     $this->lastname =$lastname ;
    //     $this->email =$email ;
    //     $this->role = $role ;
    //     $this->photo = $photo;
    // }
    public function __call($name, $arguments)
    {
        if($name == "createInstanceWithEmailAndPassword"){
            $this->email =$arguments[0] ;
            $this->password = $arguments[1];
        }
        if($name == 'createInstanceWithoutId'){
            $this->firstname = $arguments[0];
            $this->lastname = $arguments[1];
            $this->email = $arguments[2];
            $this->password = $arguments[3];
            $this->photo = $arguments[4];
            $this->phone = $arguments[5];
            
        }
        
    }
    public function tablename() : string {
        return 'User' ;
    }
    public function columns (): array {
        return ["firstname"=>$this->firstname,"lastname"=>$this->lastname,"email"=>$this->email,"password"=>$this->password,
        "photo"=>$this->photo,'rating' => 0 , 'phone'=>$this->phone];
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