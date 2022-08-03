<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        DB::table("students")->insert(
            [
                'name' => $faker->name(),
                "email" => $faker->safeEmail,
                "mobile" => $faker->phoneNumber,
                "created_at" => now(),
                "updated_at" =>  now()
            ]
            );
    }
}
