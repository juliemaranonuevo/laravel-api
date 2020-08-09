<?php
declare(strict_types=1);
namespace App\Repositories;
use App\Account;
use App\AuthMediator;
use App\User;
use App\Contracts\UserRepositoryInterface;
use App\Dto\CredentialData;
use App\Dto\UserData;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Hash;

class UserRepository implements UserRepositoryInterface {

    private $user;

    public function __construct(User $user) {
        $this->user = $user;
    }

    public function isUserExists(CredentialData $user) : bool {

        $userExist = $this->user
        ->where('email', $user->email)
        ->first();

        if ($userExist) {

            if (Hash::check($user->password, $userExist->password)) {

                return isset($userExist);
    
            }
            
        }
        
        return false;
    }

    public function getUserData(CredentialData $user) : UserData {
       
        $user = $this->user->where('email', $user->email)->first();
        $user->status = true;
        $user->save();

        $userData = new UserData();
        $userData->id = $user->id;
        $userData->email = $user->email;
        $userData->username = $user->username;
        // $userData->password = $user->password;
        $userData->role_type = $user->role_type;
        $userData->created_at = $user->created_at;
        $userData->updated_at = $user->updated_at;

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

        $authMediator = new AuthMediator();
        $authMediator->email = $userData->email;
        $authMediator->phone_number = $userData->phone_number;
        $authMediator->terms_policy = true;
        $authMediator->save();
    
        $user = new User();
        $user->email = $userData->email;
        $user->password = bcrypt($userData->password);
        $user->status = true;
        $user->role_type = $userData->role_type;
        $user->auth_mediator_id = $authMediator->id;
        $user->save();

        $userData = new UserData();
        $userData->id = $user->id;
        $userData->email = $user->email;
        $userData->username = $user->username;
        $userData->role_type = $user->role_type;
        $userData->created_at = $user->created_at;
        $userData->updated_at = $user->updated_at;

        return $userData;

    }
}
