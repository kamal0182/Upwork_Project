<?php
namespace app\Models;

use MessageFormatter;
use PDO;

abstract class Model 
{
    public const RULE_REQUIRED = "require";
    public const RULE_EMAIL = "email";
    public const RULE_MAX = "max";
    public const RULE_MIN = "min";
    public const RULE_MATCH = "match";
    public array  $errors  = []  ; 
    public function loadData(array $data){
        foreach($data as $key=>$value)
        {
            $this->{$key} = $value ;
        }
    }
    abstract public function rules(): array ; 
    public function validate()
    {
        
        foreach($this->rules() as $attribute => $rules){
            

            
            $value = $this->{$attribute};
            foreach($rules as $rule){
               
           
                $rulename = $rule;
                if(!is_string($rulename))
                {
                    $rulename = $rule[0];
                }
                    if($rulename === self::RULE_REQUIRED && empty($value))
                    {
                    $this->addErorrs($attribute, self::RULE_REQUIRED , $rule);
                    }
                    if($rulename === self::RULE_EMAIL && !filter_var($value , FILTER_VALIDATE_EMAIL))
                    {
                    $this->addErorrs($attribute, self::RULE_EMAIL, $rule);
                    }
                    if($rulename === self::RULE_MIN && strlen($value) < 8)
                    {
                    $this->addErorrs($attribute, self::RULE_MIN, $rule);
                    }
                    if($rulename === self::RULE_MATCH && $value !== $this->{$rule['match']}  )
                    {
                    $this->addErorrs($attribute, self::RULE_MATCH, $rule);
                    }
            }
        }
         return empty($this->errors);        
    }
    public function addErorrs($attribute ,$rule , $params = []){
        $message = $this->errorMessage()[$rule] ?? ''; 
           

       if(is_array($params)){
        foreach($params as $key=>$value)
        {
            $message = str_replace("{{$key}}", $value,$message);
        }
    }
        $this->errors[$attribute][] =  $message ;   
    }
    public function errorMessage(){
        return [
            self::RULE_REQUIRED => 'this field is required',
             self::RULE_MIN => 'Min length of this field be {min}',
             self::RULE_MATCH => 'this field is must match {match}',
             self::RULE_EMAIL => 'this field must be valid email addres',
             self::RULE_MAX => 'Min length of this field must be {max}',
        ];
    }
    public function hasError($attribute)
    {
        return $this->errors[$attribute] ?? false ;
    }
    public function getFirstError($attribute)
    {
        return $this->errors[$attribute][0] ?? '';
    }
    public function getAttribute($attribute)
     {
        return $this->{$attribute};
     }
}



?>