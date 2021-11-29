<?php

namespace Database\Seeders;

use App\Models\HeroLine;
use Illuminate\Database\Seeder;

class HeroLineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HeroLine::create(['title' => 'Gold Line']);
        HeroLine::create(['title' => 'Mid Line']);
        HeroLine::create(['title' => 'EXP Line']);
        HeroLine::create(['title' => 'Jungler']);
        HeroLine::create(['title' => 'Roamer']);
    }
}
