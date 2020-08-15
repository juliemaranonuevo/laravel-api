<?php
namespace App\Contracts;
use App\Dto\CredentialData;
use App\Dto\OneTimePasswordData;
use App\Dto\UserData;
use App\Dto\UserThirdPartyData;
use App\Dto\RegistrationCompletionData;

interface UserRepositoryInterface {
    
    public function isUserExists(CredentialData $user);

    public function getUserData(CredentialData $user);

    public function storeUserThirdPartyData(UserData $userData);

    public function getUserThirdPartyData(string $userData);
    
    
    public function signupstore(UserData $userData);
    
    public function isExistsInAuth(string $uniqueInSignUp);
    
    public function isUniqueIdExists(string $isExistThirdPartyUid);
    
    
    public function registrationCompletion(RegistrationCompletionData $registrationCompletionData);
    
    public function oneTimePasswordVerification(OneTimePasswordData $oneTimePasswordData);
    
    public function logout(string $user);


}
