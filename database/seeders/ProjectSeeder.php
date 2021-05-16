<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([[
            'id'    => 1,
            'name' => "project 1"
        ],
        [
            'id'    => 2,
            'name' => "project 2"
        ]]);
    }
}
