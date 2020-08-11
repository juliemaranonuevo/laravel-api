<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AuthService;
use App\Dto\CredentialData;
use App\Dto\UserData;
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
