<?php

use Illuminate\Database\Seeder;
use Seeders\EntitySeeder;
use Seeders\StudentSeeder;
use Seeders\TeacherSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(EntitySeeder::class);
        $this->call(StudentSeeder::class);
        $this->call(TeacherSeeder::class);
    }
}
