<?php
namespace App\Contracts;
use App\Dto\CredentialData;
use App\Dto\UserData;

interface UserRepositoryInterface {
    
    public function logout(string $user);
    
    public function isUserExists(CredentialData $user);
    
    public function getUserData(CredentialData $user);
    
    public function signupstore(UserData $userData);
}
