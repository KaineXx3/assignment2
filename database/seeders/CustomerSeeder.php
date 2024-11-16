<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker= Faker::create();
        foreach(range(1,100)as $value){
            DB::table('customers')->insert([
                'name'=>$faker->name,
                'email'=>$faker->safeEmail,
                'address'=>$faker->address,
                'phoneNumber'=>$faker->phoneNumber,
                'gender'=>$faker->randomElement(['Male','Female']),
                'birthday' => $faker->dateTimeBetween('-60 years', '-18 years')->format('Y-m-d'),

            ]);
        }
    }
}
