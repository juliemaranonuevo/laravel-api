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
        $user->email = $request->input('email');
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
        $userData->password = $request->input('password');
        $userData->role_type = $request->input('role_type');
        $userData->phone_number = $request->input('phone_number');

        $message = $this->authService->signupstore($userData);

        return $message;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
