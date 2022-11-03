<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Listing;
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

        User::factory()->create([
            'name' => 'Steve',
            'email' => 'steve@gmail.com'
        ]);

        Listing::factory(50)->create([
            'user_id' => '1'
        ]);

        User::factory()->create([
            'name' => 'marko',
            'email' => 'marko@gmail.com',
            'password' => '$10$knrBIPw3yMAhqQkqLtzhwuEf91BJWmFPjfDGv1nBvUs8w2OLcrYsG'
        ]);

        Listing::factory(50)->create([
            'user_id' => '2'
        ]);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
