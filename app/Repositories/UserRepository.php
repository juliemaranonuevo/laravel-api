<?php
declare(strict_types=1);
namespace App\Repositories;
use App\Account;
use App\AuthMediator;
use App\User;
use App\Role;
use App\Contracts\UserRepositoryInterface;
use App\Dto\CredentialData;
use App\Dto\UserData;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Hash;

class UserRepository implements UserRepositoryInterface {

    private $user;
    private $role;

    public function __construct(User $user, Role $role) {
        $this->user = $user;
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
        $user->status = true;
        $user->save();

        $role = $this->role->where('auth_mediator_id', $user->auth_mediator_id)
        ->where('status', true)
        ->first();

        $userData = new UserData();
        $userData->id = $user->id;
        $userData->email = $user->email;
        $userData->username = $user->username;
        $userData->role_type = $role->role_type;
        $userData->created_at = $user->created_at;
        $userData->updated_at = $user->updated_at;
        // dd($userData);
        return $userData;

    }

    public function logout(string $accountId) {

        $user = User::find($accountId);
        $user->status = false;
        $user->last_online = now();
        $user->save();

        return true;
    }

    public function signupstore(UserData $userData) : UserData {

        DB::beginTransaction();

        try { 

            $authMediator = new AuthMediator();
            $authMediator->email = $userData->email;
            $authMediator->username = $userData->username;
            $authMediator->phone_number = $userData->phone_number;
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
            $user->status = true;
            $user->auth_mediator_id = $authMediator->id;
            $user->save();

            $userData = new UserData();
            $userData->success = true;
            $userData->id = $user->id;
            $userData->email = $user->email;
            $userData->username = $user->username;
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

            $response = $userData;

        }

        return $response;

    }

    public function isExistsInAuth(string $uniqueInSignUp) {
        $uniqueInSignUp = AuthMediator::where('email', $uniqueInSignUp)
        ->orwhere('username', $uniqueInSignUp)
        ->orwhere('phone_number', $uniqueInSignUp)
        ->get();

        return $uniqueInSignUp->isNotEmpty();
    }
}
