<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teachers')->insertOrIgnore([
            ['firstname' => 'Jake', 'lastname' => 'Paul','subject'=>'Math','age'=>25,'salary'=>2900,'date_of_employment'=>'2022-05-05'],
            ['firstname' => 'Michael', 'lastname' => 'Smith','subject'=>'English','age'=>32,'salary'=>3000,'date_of_employment'=>'2022-04-02'],
            ['firstname' => 'Robin', 'lastname' => 'Ferguson','subject'=>'Chemistry','age'=>38,'salary'=>3200,'date_of_employment'=>'2022-01-02'],

        ]);
    }
}
