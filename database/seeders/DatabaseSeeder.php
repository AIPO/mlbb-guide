<?php

namespace Database\Seeders;

use App\Models\Hero;
use App\Models\HeroStats;
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
        $this->call(UserSeeder::class);
        $this->call(HeroRoleSeeder::class);
        $this->call(HeroLineSeeder::class);
        $this->call(HeroSeeder::class);
        $this->call(GuideSeeder::class);
    }
}
