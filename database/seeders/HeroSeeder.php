<?php

namespace Database\Seeders;

use App\Models\Hero;
use App\Models\HeroLine;
use App\Models\HeroRole;
use Illuminate\Database\Seeder;

class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $hero = Hero::factory()->create([
            'name' => 'Myia',
            'subtitle' => 'Moonlight Archer',
            'description' => 'A Moon-blessed Marksman.',
            'movement_SPD' => 240,
            'magic_power' => 0,
            'magic_defense' => 15,
            'mana' => 445,
            'HP_regen' => 6,
            'basic_attack_crit_chance' => 0,
            'physical_ATK' => 100,
            'physical_defense' => 17,
            'hp' => 2524,
            'attack_speed' => 0.85,
            'mana_regen' => 3,
            'skill_crit_chance' => 0,
            'spell_vamp' => 0,
            'physical_vamp' => 0,
        ]);
        $hero->roles()->attach(HeroRole::find(5));
        $hero->lines()->attach(HeroLine::find(2));
        $hero->save();
    }
}
