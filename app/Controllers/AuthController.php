<?php

namespace App\Controllers;

use App\Controllers\Controller;
use App\Services\AuthService;

class AuthController extends Controller
{

    protected $authService;

    /**
     * AuthController constructor.
     */
    public function __construct()
    {
        Parent::__construct();
        $this->authService = new AuthService();
    }

    /**
    * Register 
    *
    * @return Response
    */
    public function register() :Response
    {
        $response = $authService->register($this->request->all());
        
        // TODO - handle response
    }

    /**
     * Login
     * 
     * @return Response
     */
    public function Login() :Response 
    {
        $response = $authService->Login($request);
        
        // TODO - handle response
    }

}
