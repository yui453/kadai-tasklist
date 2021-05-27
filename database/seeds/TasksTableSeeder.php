<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('tasks')->insert([
            'content' => 'content 1',
            'status' => 'status 1'
        ]);
        DB::table('tasks')->insert([
            'content' => 'content 2',
            'status' => 'status 2',
        ]);
        DB::table('tasks')->insert([
            'content' => 'content 3',
            'status' => 'status 3',
        ]);
    }
}
