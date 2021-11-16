<?php

namespace Database\Seeders;

use App\Models\HeroRole;
use Illuminate\Database\Seeder;

class HeroRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HeroRole::create(['name'=> 'Tank']);
        HeroRole::create(['name'=> 'Fighter']);
        HeroRole::create(['name'=> 'Assassin']);
        HeroRole::create(['name'=> 'Mage']);
        HeroRole::create(['name'=> 'Marksman']);
        HeroRole::create(['name'=> 'Support']);
    }
}
