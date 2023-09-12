<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Listings;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(5)->create();
        Listings::factory(5)->create();
        // Listings::create([
        //     'title' => 'zarp namosan',
        //     'tags' => "laravel javascript",
        //     'company' => 'EvilCorp',
        //     'location' => 'san fransisco',
        //     'email' => 'email@gmail.com',
        //     'website' => 'https://www.zarp.com',
        //     'description' => '
        //     Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
        //     Qui dolore possimus necessitatibus 
        //     perferendis magni neque vero sed eveniet sapiente voluptate quis at impedit eaque,
        //      minus saepe? Laudantium enim ab reprehenderit?'
        // ]);
        
        
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}