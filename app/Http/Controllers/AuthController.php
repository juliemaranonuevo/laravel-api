<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AuthService;
use App\Dto\CredentialData;
use App\Dto\UserData;
use App\Dto\UserThirdPartyData;
use App\Dto\OneTimePasswordData;
use App\Dto\RegistrationCompletionData;
use Illuminate\Http\JsonResponse;

class AuthController extends Controller
{

    private $authService;

    public function __construct(AuthService $authService) {
        $this->authService = $authService;
    }
    
    public function authenticate(Request $request): JsonResponse {
        $user = new CredentialData();
        // $user->email = $request->input('email');

        $user->email_username = $request->input('email_username');
        $user->password = $request->input('password');
        
        $message = $this->authService->authenticate($user);

        return $message;
    }

    public function thirdPartyAuthenticate(Request $request): JsonResponse {

        $userData = new UserData();
        $userData->uId = $request->input('uId');
        $userData->email = $request->input('email');
        $userData->name = $request->input('name');
        $userData->first_name = $request->input('first_name');
        $userData->middle_name = $request->input('middle_name');
        $userData->last_name = $request->input('last_name');
        $userData->photo_url = $request->input('photo_url');
        $userData->provider = $request->input('provider');
        
        // dd($userSocialData->uId);
        $message = $this->authService->thirdPartyAuthenticate($userData);

        return $message;
    }

    public function signupstore(Request $request): JsonResponse {
        $userData = new UserData();
        $userData->email = $request->input('email');
        $userData->username = $request->input('username');
        $userData->password = $request->input('password');
        $userData->role_type = $request->input('role_type');
        $userData->phone_number = $request->input('phone_number');

        $message = $this->authService->signupstore($userData);

        return $message;
    }

    public function isExistsInAuth(Request $request): JsonResponse {
        $uniqueInSignUp = $request->query('uniqueInSignUp');
        $isExistsInAuth = $this->authService->isExistsInAuth($uniqueInSignUp);
        return $isExistsInAuth;
    }

    public function registrationCompletion(Request $request): JsonResponse {
        $registrationCompletionData = new RegistrationCompletionData();
        $registrationCompletionData->id = $request->input('auth_id');
        $registrationCompletionData->email = $request->input('email');
        $registrationCompletionData->phone_number = $request->input('phone_number');
        
        // dd($registrationCompletionData);
        $message = $this->authService->registrationCompletion($registrationCompletionData);

        return $message;
    }

    public function oneTimePasswordVerification(Request $request): JsonResponse {
        $oneTimePasswordData = new OneTimePasswordData();
        $oneTimePasswordData->id = $request->input('auth_id');
        $oneTimePasswordData->email = $request->input('email');
        $oneTimePasswordData->phone_number = $request->input('phone_number');
        $oneTimePasswordData->one_time_password = $request->input('one_time_password');

        // dd($oneTimePasswordData);
        $message = $this->authService->oneTimePasswordVerification($oneTimePasswordData);

        return $message;
    }

    public function logout(Request $request): JsonResponse {
        $accountId = $request->input('accountId');
        $isLogout = $this->authService->logout($accountId);
        return response()->json($isLogout);
    }
}
