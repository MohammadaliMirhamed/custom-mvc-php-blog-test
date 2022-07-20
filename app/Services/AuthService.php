<?php

namespace App\Services;

use App\Libs\Request;
use App\Models\User;

class AuthService
{
    
    /**
     * Register user
     * 
     * @param  Request $request
     * @return mixed
     */
    public function Register(Request $request) :mixed
    {  
        // TODO - implement validation

        $user = new User();
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = sha1($request->get('password'));
        $user->save();
        
        return $user;
        
    } 

    /**
     * Login user
     * 
     * @param  Request $request
     * @return mixed
     */
    public function Login(Request $request) :mixed
    {
        // TODO - implement validation

        $user = User::where('email', $request->get('email'))
            ->where('password', sha1($request->get('password')))
            ->first();
        
        // TODO - set session
        
        return $user;
        
    }
}