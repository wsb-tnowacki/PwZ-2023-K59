<?php

namespace Database\Seeders;

use App\Models\Posty;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Posty::factory(5)->create();
        /* Posty::factory()->create([
            'tytul' => 'Wpis testowy',
            'autor' => 'Tester',
            'email' => 'test@example.com',
            'tresc' => 'Treść wpisu tekstowego', 
        ]); */

      /*   User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' => password_hash('tester', PASSWORD_DEFAULT),
    ]);

    User::factory()->create([
        'name' => 'Test User',
        'email' => 'test@gmail.com',
        'password' => password_hash('tester', PASSWORD_DEFAULT),
]);
User::factory()->create([
    'name' => 'model',
    'email' => 'model@wp.com',
    'password' => password_hash('tester', PASSWORD_DEFAULT),
]);
User::factory()->create([
    'name' => 'user',
    'email' => 'user@one.com',
    'password' => password_hash('tester', PASSWORD_DEFAULT),
]); */
            
            
    }
}
