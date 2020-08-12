<?php
namespace App\Contracts;
use App\Dto\CredentialData;
use App\Dto\UserData;
use App\Dto\UserThirdPartyData;

interface UserRepositoryInterface {
    
    public function logout(string $user);
    
    public function isUserExists(CredentialData $user);
    
    public function getUserData(CredentialData $user);
    
    public function signupstore(UserData $userData);

    public function isExistsInAuth(string $uniqueInSignUp);

    public function isUniqueIdExists(string $isExistThirdPartyUid);

    public function storeUserThirdPartyData(UserThirdPartyData $userThirdPartyData);

    public function getUserThirdPartyData(UserThirdPartyData $userThirdPartyData);


}
