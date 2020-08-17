<?php
declare(strict_types=1);
namespace App\Services;
use \Firebase\JWT\JWT;

class TokenService {

    private $iss;
    private $aud;
    private $iat;
    private $exp;
    private $auth_id;
    private $user_id;
    private $email;
    private $username;
    private $first_name;
    private $middle_name;
    private $last_name;
    private $extension_name;
    private $photo_url;
    private $provider;
    private $phone_number;
    private $verified;
    private $type;
    private $key;

    public function __construct() {
        $this->iss = "http://buyCycle.com";
        $this->aud = "http://buyCycle.com";
        $this->iat = time();
        $this->exp = 1357000000;
        $this->key = "3vaO0vWD30";
    }

    public function createToken($userData) : string {

        $payload = [
            "iss" => $this->iss,
            "aud" => $this->aud,
            "iat" => $this->iat,
            "exp" => $this->exp,
            "auth_id" => $userData->id,
            "user_id" => $userData->user_id,
            "email" => $userData->email,
            "username" => $userData->username,
            "first_name" => $userData->first_name,
            "middle_name" => $userData->middle_name,
            "last_name" => $userData->last_name,
            "extension_name" => $userData->extension_name,
            "photo_url" => $userData->photo_url,
            "provider" => $userData->provider,
            "phone_number" => $userData->phone_number,
            "type" => $userData->role_type,
            "verified" => $userData->verified
        ];

        return JWT::encode($payload, $this->key);
    }
}
