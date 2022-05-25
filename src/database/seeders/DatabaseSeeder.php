<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $this->callTables();
    }
    public function callTables(){
        $this->call(GroupSeeder::class);
        $this->call(TeacherSeeder::class);
        $this->call(TeacherGroupSeeder::class);
    }
/*    private function truncateTables()
    {
        DB::table('teacher_groups')->truncate();
        DB::table('groups')->truncate();
        DB::table('teachers')->truncate();
    }*/
}
