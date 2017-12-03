<?php
namespace App\Http\Controllers\Api;

use App\Repositories\UserRepositoryEloquent;
use  Services\JWT\JWTParser;
use Illuminate\Http\Request;

class UserController
{
    private $userRepositoryEloquent;

    public function __construct(UserRepositoryEloquent $userRepositoryEloquent)
    {
        $this->userRepositoryEloquent = $userRepositoryEloquent;
    }

    public function login(Request $request)
    {

       $user = $this->userRepositoryEloquent->findWhere(
            [
               'login' => $request->get('login'),
               'password' => $request->get('password')
            ]);
        if ($userExists)
        {
            return JWTParser::encode($user);
        }   
    }
}