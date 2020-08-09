<?php
declare(strict_types=1);
namespace App\Services;
use App\Contracts\UserRepositoryInterface;
use App\Dto\CredentialData;
use App\Dto\UserData;
use App\Services\TokenService;
use Illuminate\Http\JsonResponse;

class AuthService {

    private $repository;
    private $tokenService;

    public function __construct(UserRepositoryInterface $repository, TokenService $tokenService) {
        $this->repository = $repository;
        $this->tokenService = $tokenService;
    }

    public function authenticate(CredentialData $user): JsonResponse {

        $isUserExists = $this->repository->isUserExists($user);

        if ($isUserExists) {

            $userData = $this->repository->getUserData($user);
            // $accessToken = $this->tokenService->createToken($userData->id);
            $accessToken = $this->tokenService->createToken($userData);

            return response()->json([
                'accessToken' => $accessToken, 
                'id' => $userData->id,
                'email' => $userData->email,
                'role_type' => $userData->role_type
            ]);

            // return response()->json([
            //     'accessToken' => $accessToken, 
            //     'userData' => $userData
            // ]);

        } else {

            return response()->json(['message' => 'You have entered an invalid credentials. Please try again.'], 401);

        }
    }

    public function signupstore(UserData $userData): JsonResponse {

        $isSuccessful = $this->repository->signupstore($userData);
    
        if ($isSuccessful) { 

            $accessToken = $this->tokenService->createToken($isSuccessful);

            return response()->json(['accessToken' => $accessToken]);

        } else {

            return response()->json(['message' => 'Invalid Credential'], 401);

        }
        
    }

    public function logout(string $accountId): JsonResponse {

        $isUserExists = $this->repository->logout($accountId);

        return response()->json($isUserExists);
        
    }

}
