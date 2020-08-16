<?php
declare(strict_types=1);
namespace App\Repositories;
use App\Account;
use App\AuthMediator;
use App\OneTimePassword;
use App\User;
use App\Role;
use App\UserThirdParty;
use App\Contracts\UserRepositoryInterface;
use App\Dto\CredentialData;
use App\Dto\OneTimePasswordData;
use App\Dto\UserData;
use App\Dto\UserThirdPartyData;
use App\Dto\RegistrationCompletionData;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Hash;

class UserRepository implements UserRepositoryInterface {

    private $user;
    private $role;
    private $userThirdParty;
    private $account;
    private $oneTimePassword;

    public function __construct(
        User $user, 
        UserThirdParty $userThirdParty, 
        Account $account, 
        Role $role,
        OneTimePassword $oneTimePassword
    ) {
        $this->user = $user;
        $this->userThirdParty = $userThirdParty;
        $this->account = $account;
        $this->role = $role;
        $this->oneTimePassword = $oneTimePassword;
    }

    public function isUserExists(CredentialData $user) : bool {
       
        $userExist = $this->user
        ->where('email', $user->email_username)
        ->orwhere('username', $user->email_username)
        ->first();
        
        if ($userExist) {

            if (Hash::check($user->password, $userExist->password)) {
               
                return isset($userExist);
    
            }
            
        }
        
        return false;
    }

    public function getUserData(CredentialData $user) : UserData {
       
        $user = $this->user->where('email', $user->email_username)
        ->orwhere('username', $user->email_username)
        ->first();

        $authMediator = AuthMediator::find($user->auth_mediator_id);
        $authMediator->is_online = true;
        $authMediator->save();

        $role = $this->role->where('auth_mediator_id', $user->auth_mediator_id)
        ->where('status', true)
        ->first();

        $account = $this->account->where('auth_mediator_id', $user->auth_mediator_id)
        ->where('status', true)
        ->first();

        $userData = new UserData();
        $userData->success = true;
        $userData->id = $authMediator->id;
        $userData->user_id = null;
        $userData->email = $user->email;
        $userData->username = $authMediator->username;
        $userData->name = null;
        $userData->provider = "Local";

        if (isset($account)) {

            $userData->first_name = $account->first_name;
            $userData->middle_name = $account->middle_name;
            $userData->last_name = $account->last_name;
            $userData->extension_name = $account->extension_name;
            $userData->photo_url = $account->photo;

        }
        
        $userData->phone_number = $authMediator->phone_number;
        $userData->role_type = $role->role_type;
        $userData->last_online = $authMediator->last_online;
        $userData->created_at = $user->created_at;
        $userData->updated_at = $user->updated_at;
        $userData->verified = $authMediator->otp_status;

        return $userData;

    }

    public function logout(string $authId) {

        $authMediator = AuthMediator::find($authId);
        $authMediator->is_online = false;
        $authMediator->last_online = now();
        $authMediator->save();

        return true;
    }

    public function signupstore(UserData $userData) : UserData {
        // dd($userData);
        DB::beginTransaction();

        try { 

            $authMediator = new AuthMediator();
            $authMediator->email = $userData->email;
            $authMediator->username = $userData->username;
            $authMediator->phone_number = $userData->phone_number;
            $authMediator->is_online = true;
            $authMediator->terms_policy = true;
            $authMediator->save();
        
            $role = new Role();
            $role->role_type = $userData->role_type;
            $role->status = true;
            $role->auth_mediator_id = $authMediator->id;
            $role->save();

            $user = new User();
            $user->email = $userData->email;
            $user->username = $userData->username;
            $user->password = bcrypt($userData->password);
            $user->auth_mediator_id = $authMediator->id;
            $user->save();

            $random_number = intval( "0" . rand(1,9) . rand(1,9) . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9) );
            
            $oneTimePassword = new OneTimePassword();
            $oneTimePassword->otp = $random_number;
            $oneTimePassword->status = false;
            $oneTimePassword->auth_mediator_id = $authMediator->id;
            $oneTimePassword->save();

            $userData = new UserData();
            $userData->success = true;
            $userData->id = $authMediator->id;
            $userData->user_id = null;
            $userData->email = $user->email;
            $userData->username = $authMediator->username;
            $userData->name = null;
            $userData->provider = "Local";
            $userData->first_name = null;
            $userData->middle_name = null;
            $userData->last_name = null;
            $userData->extension_name = null;
            $userData->phone_number = $authMediator->phone_number;
            $userData->role_type = $role->role_type;
            $userData->photo_url = null;
            $userData->last_online = null;
            $userData->created_at = $user->created_at;
            $userData->updated_at = $user->updated_at;
            $userData->verified = $authMediator->otp_status;

            DB::commit();

            $response = $userData;

        } catch ( \Exception $e ) {
                
            DB::rollBack();
            $userData = new UserData();
            $userData->success = false;

            if ( $e->getCode() == 23000 ) {
                
                $userData->error_code =  409;
                $userData->error_message = $e->errorInfo[2];

            } 

            // $userData->error_message = $e->getMessage();

            $response = $userData;

        }
        // dd($response);
        return $response;

    }


    public function isExistsInAuth(string $uniqueInSignUp) {
        $uniqueInSignUp = AuthMediator::where('email', $uniqueInSignUp)
        ->orwhere('username', $uniqueInSignUp)
        ->orwhere('phone_number', $uniqueInSignUp)
        ->get();

        return $uniqueInSignUp->isNotEmpty();
    }

    public function isUniqueIdExists(string $isExistThirdPartyuser_id) {
        $isUniqueIdExists = UserThirdParty::where('user_id', $isExistThirdPartyuser_id)
        ->get();

        return $isUniqueIdExists->isNotEmpty();
    }

    public function storeUserThirdPartyData(UserData $userData) : UserData {

        DB::beginTransaction();

        try { 

            $authMediator = new AuthMediator();
            $authMediator->email = $userData->email;
            $authMediator->username = null;
            $authMediator->phone_number = null;
            $authMediator->is_online = true;
            $authMediator->terms_policy = true;
            $authMediator->save();
        
            $role = new Role();
            $role->role_type = 3;
            $role->status = true;
            $role->auth_mediator_id = $authMediator->id;
            $role->save();

            $userThirdParty = new UserThirdParty();
            $userThirdParty->user_id = $userData->user_id;
            $userThirdParty->email = $userData->email;
            $userThirdParty->name = $userData->name;
            $userThirdParty->provider = $userData->provider;
            $userThirdParty->auth_mediator_id = $authMediator->id;
            $userThirdParty->save();

            $account = new Account();
            $account->first_name = $userData->first_name;
            $account->middle_name = $userData->middle_name;
            $account->last_name = $userData->last_name;
            $account->photo = $userData->photo_url;
            $account->status = true;
            $account->auth_mediator_id = $authMediator->id;
            $account->save();
            
            $userData = new UserData();
            $userData->success = true;
            $userData->id = $authMediator->id;
            $userData->user_id = $userThirdParty->user_id;
            $userData->email = $userThirdParty->email;
            $userData->name = $userThirdParty->name;
            $userData->provider = $userThirdParty->provider;
            $userData->first_name = $account->first_name;
            $userData->middle_name = $account->middle_name;
            $userData->last_name = $account->last_name;
            $userData->extension_name = $account->extension_name;
            $userData->phone_number = $authMediator->phone_number;
            $userData->role_type = $role->role_type;
            $userData->photo_url = $account->photo;
            $userData->last_online = $authMediator->last_online;
            $userData->created_at = $userThirdParty->created_at;
            $userData->updated_at = $userThirdParty->updated_at;
            $userData->verified = $authMediator->otp_status;

            DB::commit();

            $response = $userData;

        } catch ( \Exception $e ) {
                
            DB::rollBack();
            $userData = new UserData();
            $userData->success = false;

            if ( $e->getCode() == 23000 ) {
                
                $userData->error_code =  409;
                $userData->error_message = $e->errorInfo[2];

            } 

            $response = $userData;

        }
    
        return $response;

    }

    public function getUserThirdPartyData(string $userData) : UserData {
        
        DB::beginTransaction();

        try { 

            $userThirdParty = $this->userThirdParty->where('email', $userData)
            ->first();

            $authMediator = AuthMediator::find($userThirdParty->auth_mediator_id);
            $authMediator->is_online = true;
            $authMediator->save();

            $role = $this->role->where('auth_mediator_id', $userThirdParty->auth_mediator_id)
            ->where('status', true)
            ->first();

            $account = $this->account->where('auth_mediator_id', $userThirdParty->auth_mediator_id)
            ->where('status', true)
            ->first();
            
            $userData = new UserData();
            $userData->success = true;
            $userData->id = $authMediator->id;
            $userData->user_id = $userThirdParty->user_id;
            $userData->email = $userThirdParty->email;
            $userData->name = $userThirdParty->name;
            $userData->provider = $userThirdParty->provider;
            $userData->first_name = $account->first_name;
            $userData->middle_name = $account->middle_name;
            $userData->last_name = $account->last_name;
            $userData->extension_name = $account->extension_name;
            $userData->phone_number = $authMediator->phone_number;
            $userData->role_type = $role->role_type;
            $userData->photo_url = $account->photo;
            $userData->last_online = $authMediator->last_online;
            $userData->created_at = $userThirdParty->created_at;
            $userData->updated_at = $userThirdParty->updated_at;
            $userData->verified = $authMediator->otp_status;

            DB::commit();

            $response = $userData;

        } catch ( \Exception $e ) {
                
            DB::rollBack();
            $userData = new UserData();
            $userData->success = false;

            if ( $e->getCode() == 23000 ) {
                
                $userData->error_code =  409;
                $userData->error_message = $e->errorInfo[2];

            } 
            $userData->error_message = $e->getMessage();

            $response = $userData;

        }
    
        return $response;

    }

    public function registrationCompletion(RegistrationCompletionData $registrationCompletionData) : RegistrationCompletionData { 
        $random_number = intval( "0" . rand(1,9) . rand(1,9) . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9) );

        DB::beginTransaction();

        try { 

            $authmediator = AuthMediator::find($registrationCompletionData->id);
            $authmediator->phone_number = $registrationCompletionData->phone_number;
            $authmediator->save();

            $oneTimePassword = $this->oneTimePassword->where('auth_mediator_id', $authmediator->id)->first();
            if (!isset($oneTimePassword)) {

                $oneTimePassword = new OneTimePassword();
                $oneTimePassword->otp = $random_number;
                $oneTimePassword->status = false;
                $oneTimePassword->auth_mediator_id = $authmediator->id;
                $oneTimePassword->save();

            } else {
            
                $oneTimePassword->otp =  $random_number;
                $oneTimePassword->status = false;
                $oneTimePassword->save();

            }
        
            $registrationCompletionData = new RegistrationCompletionData();
            $registrationCompletionData->success = true;
            $registrationCompletionData->otp = $oneTimePassword->otp;
            $registrationCompletionData->email = $authmediator->email;
            $registrationCompletionData->phone_number = $authmediator->phone_number;

            DB::commit();

            $response = $registrationCompletionData;

        } catch ( \Exception $e ) {
                
            DB::rollBack();
            $registrationCompletionData = new RegistrationCompletionData();
            $registrationCompletionData->success = false;

            if ( $e->getCode() == 23000 ) {
                
                $registrationCompletionData->error_code =  409;
                $registrationCompletionData->error_message = $e->errorInfo[2];

            } 
            $registrationCompletionData->error_message = $e->getMessage();

            $response = $registrationCompletionData;

        }
        
        return $response;
 
    }

    public function oneTimePasswordExist(OneTimePasswordData $oneTimePasswordData) {
       
        $oneTimePassword = $this->oneTimePassword->where('auth_mediator_id', $oneTimePasswordData->id)
        ->where('otp', $oneTimePasswordData->one_time_password)
        ->get();

        return $oneTimePassword->isNotEmpty();

    }

    public function oneTimePasswordVerification(OneTimePasswordData $oneTimePasswordData) : OneTimePasswordData { 

        DB::beginTransaction();

        try { 

            $authmediator = AuthMediator::find($oneTimePasswordData->id);
            $authmediator->otp_status = true;
            $authmediator->save();

            $oneTimePassword = $this->oneTimePassword->where('auth_mediator_id', $authmediator->id)->first();
            $oneTimePassword->status = true;
            $oneTimePassword->save();

            $oneTimePasswordData = new OneTimePasswordData();
            $oneTimePasswordData->id = $authmediator->id;
            $oneTimePasswordData->email = $authmediator->email;
            $oneTimePasswordData->success = true;

            DB::commit();

            $response = $oneTimePasswordData;

        } catch ( \Exception $e ) {

            DB::rollBack();
            $oneTimePasswordData = new OneTimePasswordData();
            $oneTimePasswordData->success = false;

            if ( $e->getCode() == 23000 ) {
                
                $oneTimePasswordData->error_code =  409;
                $oneTimePasswordData->error_message = $e->errorInfo[2];

            } 
            $oneTimePasswordData->error_message = $e->getMessage();

            $response = $oneTimePasswordData;

        }
      
        return $response;
    }
}
