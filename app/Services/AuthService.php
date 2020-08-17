<?php
declare(strict_types=1);
namespace App\Services;
use App\Contracts\UserRepositoryInterface;
use App\Dto\CredentialData;
use App\Dto\OneTimePasswordData;
use App\Dto\UserData;
use App\Dto\UserThirdPartyData;
use App\Dto\RegistrationCompletionData;
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

    public function thirdPartyAuthenticate(UserData $userData): JsonResponse {
       
        $isUniqueIdExists = $this->repository->isUniqueIdExists($userData->user_id);
      
        if ($isUniqueIdExists) {
            
            $userData = $this->repository->getUserThirdPartyData($userData->email);
           
        } else {

            $userData = $this->repository->storeUserThirdPartyData($userData);
            
        }

        if ($userData->success == true) { 
       
            $accessToken = $this->tokenService->createToken($userData);
            // dd($accessToken);
            return response()->json(['accessToken' => $accessToken]);

        } else {

            if ($userData->error_code == 409) { 

                $message = $userData->error_message;
                $code = 409 ;

            } else {
               
                $message = "Something went wrong in the server. Please try again.";
                $code = 500;
               
            }

            return response()->json(['message' => $message], $code);
        }
    }

    public function signupstore(UserData $userData): JsonResponse {

        $isSuccessful = $this->repository->signupstore($userData);
       
        if ($isSuccessful->success == true) { 
            
            $accessToken = $this->tokenService->createToken($isSuccessful);
            
            return response()->json(['accessToken' => $accessToken]);

        } else {

            if ($isSuccessful->error_code == 409) { 

                $message = "Duplicate Entry!";
                $code = 409 ;

            } else {

                $message = "Something went wrong in the server. Please try again.";
                $code = 500;
                
            }

            return response()->json(['message' => $message], $code);

        }
        
    }

    public function registrationCompletion(RegistrationCompletionData $registrationCompletionData): JsonResponse {


        $oneTimePassword = $this->repository->registrationCompletion($registrationCompletionData);
       
        if ($oneTimePassword->success == true) { 
            
            $userData = $this->repository->getUserThirdPartyData($oneTimePassword->email);

            $accessToken = $this->tokenService->createToken($userData);

            return response()->json(['accessToken' => $accessToken, 'phone_number' => $oneTimePassword->phone_number]);

        } else {

            if ($oneTimePassword->error_code == 409) { 
                $message = "Duplicate Entry!";
                // $message = $isSuccessful->error_message;
                $code = 409 ;
            } else {
                $message = "Something went wrong in the server. Please try again.";
                $code = 500;
            }

            return response()->json(['message' => $message], $code);

        }
        
    }

    public function oneTimePasswordVerification(OneTimePasswordData $oneTimePasswordData): JsonResponse {

        $ifotpExist = $this->repository->oneTimePasswordExist($oneTimePasswordData);

        if ($ifotpExist) {

            $oneTimePasswordVerification = $this->repository->oneTimePasswordVerification($oneTimePasswordData);
            if ($oneTimePasswordVerification) { 

                $userData = $this->repository->getUserThirdPartyData($oneTimePasswordVerification->email);
                
                $accessToken = $this->tokenService->createToken($userData);
               
                return response()->json(['accessToken' => $accessToken]);
    
            } else {

                if ($oneTimePasswordVerification->error_code == 409) { 
                    $message = "Duplicate Entry!";
                    $code = 409 ;
                } else {
                    $message = "Something went wrong in the server. Please try again.";
                    $code = 500;
                }

            }

        } else {

            $message = "You have entered an invalid one time password. Please click resend to get your new otp code.";
            $code = 401;

        }

        return response()->json(['message' => $message], $code);

    }

    public function isExistsInAuth(string $uniqueInSignUp): JsonResponse {

        $isExistsInAuth = $this->repository->isExistsInAuth($uniqueInSignUp);

        return response()->json($isExistsInAuth);

    }

    public function logout(string $authId): JsonResponse {

        $isUserExists = $this->repository->logout($authId);

        return response()->json($isUserExists);
        
    }

}
