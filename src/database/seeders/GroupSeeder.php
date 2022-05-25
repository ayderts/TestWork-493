<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('groups')->insertOrIgnore([
            ['name' => 'Monday-12', 'number_of_students' => 22],
            ['name' => 'Monday 12.1', 'number_of_students' => 18],
            ['name' => 'Monday 14.2', 'number_of_students' => 23],
            ['name' => 'Tuesday 15.2', 'number_of_students' => 19],
            ['name' => 'Tuesday 15.3', 'number_of_students' => 24],
            ['name' => 'Tuesday 16.1', 'number_of_students' => 14],
        ]);
    }
}
