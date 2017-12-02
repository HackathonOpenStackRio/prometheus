<?php
namespace Seeders;

use Illuminate\Database\Seeder;

class EntitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = resolve('Faker');
        \DB::table('entities')->insert([
            'name' => $faker->company,
            'cnpj' => $faker->cnpj(false),
        ]);
    }
}
