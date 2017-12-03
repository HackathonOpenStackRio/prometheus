<?php
namespace Seeders;

use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = resolve('Faker');
        \DB::table('students')->insert([
           'registration' => uniqid(),
           'name'         => $faker->name,
           'gender'       => 'F'
        ]);
    }   
}
