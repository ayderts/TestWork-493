<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeacherGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teacher_groups')->insertOrIgnore([
            ['teacher_id' => 1, 'group_id' => 1],
            ['teacher_id' => 1, 'group_id' => 2],
            ['teacher_id' => 2, 'group_id' => 3],
            ['teacher_id' => 2, 'group_id' => 4],
            ['teacher_id' => 2, 'group_id' => 5],
            ['teacher_id' => 3, 'group_id' => 1],
            ['teacher_id' => 3, 'group_id' => 2],
            ['teacher_id' => 3, 'group_id' => 5],
            ['teacher_id' => 3, 'group_id' => 6],
        ]);
    }
}
