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
        User::factory(20)->create();

      
        Ticket::factory(12)->create();

        Reply::factory(7)->create();

    }
}
