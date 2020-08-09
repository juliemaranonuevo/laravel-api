<?php
declare(strict_types=1);
namespace App\Services;
use \Firebase\JWT\JWT;

class TokenService {

    private $iss;
    private $aud;
    private $iat;
    private $exp;
    private $accountId;
    private $email;
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
            "accountId" => $userData->id,
            "email" => $userData->email,
            "type" => $userData->role_type
        ];

        return JWT::encode($payload, $this->key);
    }
}
