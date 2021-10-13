<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
use App\Models\Comment;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Task::factory(20)->create([
            'taskcreator_id' => User::factory(),
            'assigneduser_id' => User::factory()
        ]);
    
    }     
       
}
