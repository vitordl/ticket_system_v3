<?php

namespace Database\Seeders;

use App\Models\Reply;
use App\Models\Ticket;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        // User::factory()->create([
        //     'name' => 'admin ticket',
        //     'email' => 'adminticket@teste.com',
        //     'password' => bcrypt('admin123'),
        //     'isAdmin' => 1,
        // ]);

        // User::factory()->create([
        //     'name' => 'user',
        //     'email' => 'usertest@teste.com',
        //     'password' => bcrypt('useruser123'),
        // ]);

        // User::factory()->create([
        //     'name' => 'user2',
        //     'email' => 'usertest2@teste.com',
        //     'password' => bcrypt('useruser123'),
        // ]);

        // User::factory(20)->create();

      
        Ticket::factory(12)->create();

        // Reply::factory(7)->create();

    }
}
