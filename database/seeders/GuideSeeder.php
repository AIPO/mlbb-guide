<?php

namespace Database\Seeders;

use App\Models\Guide;
use Illuminate\Database\Seeder;

class GuideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Guide::factory()->create([
            'hero_id' => 1,
            'title'=> 'test 1',
        ]);
        Guide::factory()->create([
            'hero_id' => 1,
            'title'=> 'test 2',
        ]);
    }
}
