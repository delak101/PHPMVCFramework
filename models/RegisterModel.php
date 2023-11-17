<?php
namespace app\models;
use app\core\Model;
class RegisterModel extends Model
{
    public string $name = ''; 
    public string $email = ''; 
    public string $password = ''; 
    public string $passwordconfirmation = ''; 

    public function register()
    {
        echo "creating new user...";
    }
    public function rules(): array
    {
        return [
            'name' =>[self::RULE_REQUIRED],
            'email' =>[self::RULE_REQUIRED, self::RULE_EMAIL],
            'password' =>[self::RULE_REQUIRED, [self::RULE_MIN, 'min' => 8], [self::RULE_MAX, 'max' => 24]],
            'passwordconfirmation' =>[self::RULE_REQUIRED, [self::RULE_MATCH, 'match' => 'password']]
        ];
    }
}