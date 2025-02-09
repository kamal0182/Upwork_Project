<?php 
namespace app\Models;



class RegisterModel extends Model
{
    public string $firstname = '';
    public string $lastname = '';
    public string  $email = '' ;
    public string  $password = '' ;
    public string  $confirm_password = '';
    public string $photo = ''; 
    
    public function register()
    {
        return "create a new User";
    }
     public function rules(): array  {
        return [
            "firstname" => [self::RULE_REQUIRED],
            "lastname" => [self::RULE_REQUIRED],
            "email" => [self::RULE_REQUIRED, self::RULE_EMAIL],
            "password" => [self::RULE_REQUIRED,[self::RULE_MIN , 'min' => 8]],
            "confirm_password" => [self::RULE_REQUIRED , [self::RULE_MATCH , 'match' => 'password'] ],
            "photo" => [ self::RULE_REQUIRED ]
        ];
     }
     public function get($attribute)
     {
        return $this->{$attribute};
     }
   
}

?> 