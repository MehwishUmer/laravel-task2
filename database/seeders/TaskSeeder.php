<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
    {
        DB::table('tasks')->insert([[
            'name' => "Task5",
            'project_id' =>"1",
            "priority"   =>"4"

        ],[        
            'name' => "Task1",
            'project_id' =>"1",
            "priority"   =>"3"
        ],[        
            'name' => "Task2",
            'project_id' =>"1",
            "priority"   =>"2"
        ],[        
            'name' => "Task0",
            'project_id' =>"1",
            "priority"   =>"1"
        ],[
            'name' => "Task5",
            'project_id' =>"2",
            "priority"   =>"4"

        ],[        
            'name' => "Task1",
            'project_id' =>"2",
            "priority"   =>"3"
        ],[        
            'name' => "Task2",
            'project_id' =>"2",
            "priority"   =>"2"
        ],[        
            'name' => "Task0",
            'project_id' =>"2",
            "priority"   =>"1"
        ]]);

        
    }
}
