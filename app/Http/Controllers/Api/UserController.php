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


    /**
    * @api {post} /api/login Request User information
    * @apiName UserLogin
    * @apiGroup User
    *
    * @apiParam {String} user login
    * @apiParam {String} user password
    * @apiSuccess {String} Hash    
    */
    /**
    *   Authenticate a user to access system
    *   @author Carlos Eduardo L. Braz    <carloseduardolbraz@gmail.com>
    *   @param Illuminate\Http\Request $request
    *   @return mixed
    */
    public function login(Request $request)
    {        
        $user = $this->userRepositoryEloquent->findWhere(
            [
               'login' => $request->get('login'),
               'password' => $request->get('password')
            ]);
        if ($user->isNotEmpty()) {
            return JWTParser::encode($user);
        }
        http_response_code(403);
        return json_encode(['msg' => 'Login ou senha inválidos', 'status' => '403']);
    }
}