<?php

namespace Tests\Feature;

use App\Models\Teacher;
use App\Models\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ValidateApiLoginTest extends TestCase
{
    use DatabaseTransactions;

    public function testLogin()
    {
       $faker = resolve('Faker');
       $user = new \App\Models\User;
       $user->login = $faker->userName;
       $user->password = $faker->password;
       $user->save();
       $result = $this->call('POST', ['login' => $user->login, 'password' => $user->password]);
    }
}
