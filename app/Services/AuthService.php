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

            return response()->json(['accessToken' => $accessToken]);

        } else {

            return response()->json(['message' => 'You have entered an invalid credentials. Please try again.'], 401);

        }
    }

    public function signupstore(UserData $userData): JsonResponse {

        $isSuccessful = $this->repository->signupstore($userData);
        // dd($isSuccessful);

        if ($isSuccessful->success == true) { 
            $accessToken = $this->tokenService->createToken($isSuccessful);

            return response()->json(['accessToken' => $accessToken]);

        } else {

            if ($isSuccessful->error_code == 409) { 
                // $message = "Duplicate Entry!";
                $message = $isSuccessful->error_message;
                $code = 409 ;
            } else {
                $message = "Something went wrong in the server. Please try again.";
                $code = 0;
            }

            return response()->json(['message' => $message], $code);

        }
        
    }

    public function isExistsInAuth(string $uniqueInSignUp): JsonResponse {

        $isExistsInAuth = $this->repository->isExistsInAuth($uniqueInSignUp);

        return response()->json($isExistsInAuth);

    }

    public function logout(string $accountId): JsonResponse {

        $isUserExists = $this->repository->logout($accountId);

        return response()->json($isUserExists);
        
    }

}
