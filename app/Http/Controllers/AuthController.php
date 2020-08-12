<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AuthService;
use App\Dto\CredentialData;
use App\Dto\UserData;
use App\Dto\UserThirdPartyData;
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

        $userThirdPartyData = new UserThirdPartyData();
        $userThirdPartyData->uId = $request->input('uId');
        $userThirdPartyData->email = $request->input('email');
        $userThirdPartyData->name = $request->input('name');
        $userThirdPartyData->first_name = $request->input('first_name');
        $userThirdPartyData->middle_name = $request->input('middle_name');
        $userThirdPartyData->last_name = $request->input('last_name');
        $userThirdPartyData->photo_url = $request->input('photo_url');
        $userThirdPartyData->provider = $request->input('provider');
        
        // dd($userSocialData->uId);
        $message = $this->authService->thirdPartyAuthenticate($userThirdPartyData);

        return $message;
    }

    public function logout(Request $request): JsonResponse {
        $accountId = $request->input('accountId');
        $isLogout = $this->authService->logout($accountId);
        return response()->json($isLogout);
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

    
}
