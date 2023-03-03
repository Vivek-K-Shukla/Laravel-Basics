<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Member;
use Faker\Factory as Faker;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    //    $member=new Member;
    //    $member->name="Adil";
    //    $member->email="Adil@gmail.com";
    //    $member->password="Adil@123";
    //    $member->address="Allahabad"; 
    //    $member->save();

    $faker=Faker::create();
    for($i=1;$i<=100;$i++){
    $member=new Member;
       $member->name="$faker->name";
       $member->email="$faker->email";
       $member->password="$faker->password";
       $member->address="$faker->address"; 
       $member->save();
    }
}
}
