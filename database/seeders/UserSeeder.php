<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Factories\UserFactory;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserFactory::times(100)->create();
        User::factory()->create([
            'email' => 'test@test.app',
            'is_admin' => true
        ]);
    }
}
