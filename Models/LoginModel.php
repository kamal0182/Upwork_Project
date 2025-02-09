<?php
namespace app\Models;


class LoginModel extends Model{
    public string $email;
    public string $password;
    public function rules() : array {
        return [
            'email' => [self::RULE_REQUIRED ,self::RULE_EMAIL],
            'password' => [self::RULE_REQUIRED,[self::RULE_MIN,'min' => 8]]
        ];
    }
    public function login(){
        return "welcome Client";
    }
}