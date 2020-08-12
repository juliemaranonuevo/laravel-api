<?php
declare(strict_types=1);
namespace App\Repositories;
use App\Account;
use App\AuthMediator;
use App\User;
use App\Role;
use App\UserThirdParty;
use App\Contracts\UserRepositoryInterface;
use App\Dto\CredentialData;
use App\Dto\UserData;
use App\Dto\UserThirdPartyData;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Hash;

class UserRepository implements UserRepositoryInterface {

    private $user;
    private $role;
    private $userThirdParty;
    private $account;

    public function __construct(User $user, UserThirdParty $userThirdParty, Account $account, Role $role) {
        $this->user = $user;
        $this->userThirdParty = $userThirdParty;
        $this->account = $account;
        $this->role = $role;
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
        $userData->email = $user->email;
        $userData->username = $user->username;

        if (isset($account)) {

            $userData->first_name = $account->first_name;
            $userData->middle_name = $account->middle_name;
            $userData->last_name = $account->last_name;
            $userData->extension_name = $account->extension_name;
            $userData->photo_url = $account->photo;

        }
        
        $userData->role_type = $role->role_type;
        $userData->created_at = $user->created_at;
        $userData->updated_at = $user->updated_at;

        return $userData;

    }

    public function logout(string $accountId) {

        $authMediator = AuthMediator::find($accountId);
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

            $userData = new UserData();
            $userData->success = true;
            $userData->id = $authMediator->id;
            $userData->email = $user->email;
            $userData->username = $authMediator->username;
            $userData->role_type = $role->role_type;
            $userData->created_at = $user->created_at;
            $userData->updated_at = $user->updated_at;

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

    public function isUniqueIdExists(string $isExistThirdPartyUid) {
        $isUniqueIdExists = UserThirdParty::where('uid', $isExistThirdPartyUid)
        ->get();

        return $isUniqueIdExists->isNotEmpty();
    }

    public function storeUserThirdPartyData(UserThirdPartyData $userThirdPartyData) : UserThirdPartyData {

        DB::beginTransaction();

        try { 

            $authMediator = new AuthMediator();
            $authMediator->email = $userThirdPartyData->email;
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
            $userThirdParty->uid = $userThirdPartyData->uId;
            $userThirdParty->email = $userThirdPartyData->email;
            $userThirdParty->name = $userThirdPartyData->name;
            $userThirdParty->provider = $userThirdPartyData->provider;
            $userThirdParty->auth_mediator_id = $authMediator->id;
            $userThirdParty->save();

            $account = new Account();
            $account->first_name = $userThirdPartyData->first_name;
            $account->middle_name = $userThirdPartyData->middle_name;
            $account->last_name = $userThirdPartyData->last_name;
            $account->photo = $userThirdPartyData->photo_url;
            $account->status = true;
            $account->auth_mediator_id = $authMediator->id;
            $account->save();

            $userThirdPartyData = new UserThirdPartyData();
            $userThirdPartyData->success = true;
            $userThirdPartyData->id = $authMediator->id;
            $userThirdPartyData->uId = $userThirdParty->uid;
            $userThirdPartyData->email = $userThirdParty->email;
            $userThirdPartyData->name = $userThirdParty->name;
            $userThirdPartyData->provider = $userThirdParty->provider;
            $userThirdPartyData->first_name = $account->first_name;
            $userThirdPartyData->middle_name = $account->middle_name;
            $userThirdPartyData->last_name = $account->last_name;
            $userThirdPartyData->extension_name = $account->extension_name;
            $userThirdPartyData->role_type = $role->role_type;
            $userThirdPartyData->photo_url = $account->photo;
            $userThirdPartyData->last_online = $role->last_online;
            $userThirdPartyData->created_at = $userThirdParty->created_at;
            $userThirdPartyData->updated_at = $userThirdParty->updated_at;

            DB::commit();

            $response = $userThirdPartyData;

        } catch ( \Exception $e ) {
                
            DB::rollBack();
            $userThirdPartyData = new UserThirdPartyData();
            $userThirdPartyData->success = false;

            if ( $e->getCode() == 23000 ) {
                
                $userThirdPartyData->error_code =  409;
                $userThirdPartyData->error_message = $e->errorInfo[2];

            } 

            $response = $userThirdPartyData;

        }
    
        return $response;

    }

    public function getUserThirdPartyData(UserThirdPartyData $userThirdPartyData) : UserThirdPartyData {

        DB::beginTransaction();

        try { 

            $userThirdParty = $this->userThirdParty->where('email', $userThirdPartyData->email)
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

            $userThirdPartyData = new UserThirdPartyData();
            $userThirdPartyData->success = true;
            $userThirdPartyData->id = $authMediator->id;
            $userThirdPartyData->uId = $userThirdParty->uid;
            $userThirdPartyData->email = $userThirdParty->email;
            $userThirdPartyData->name = $userThirdParty->name;
            $userThirdPartyData->provider = $userThirdParty->provider;
            $userThirdPartyData->first_name = $account->first_name;
            $userThirdPartyData->middle_name = $account->middle_name;
            $userThirdPartyData->last_name = $account->last_name;
            $userThirdPartyData->extension_name = $account->extension_name;
            $userThirdPartyData->role_type = $role->role_type;
            $userThirdPartyData->photo_url = $account->photo;
            $userThirdPartyData->last_online = $role->last_online;
            $userThirdPartyData->created_at = $userThirdParty->created_at;
            $userThirdPartyData->updated_at = $userThirdParty->updated_at;

            DB::commit();

            $response = $userThirdPartyData;

        } catch ( \Exception $e ) {
                
            DB::rollBack();
            $userThirdPartyData = new UserThirdPartyData();
            $userThirdPartyData->success = false;

            if ( $e->getCode() == 23000 ) {
                
                $userThirdPartyData->error_code =  409;
                $userThirdPartyData->error_message = $e->errorInfo[2];

            } 
            $userThirdPartyData->error_message = $e->getMessage();

            $response = $userThirdPartyData;

        }
      
        return $response;

    }
}
