<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeroesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('heroes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('subtitle');
            $table->text('description');
            $table->decimal('movement_SPD')->default(0);
            $table->decimal('magic_power')->default(0);
            $table->decimal('magic_defense')->default(0);
            $table->decimal('mana')->default(0);
            $table->decimal('HP_regen')->default(0);
            $table->decimal('basic_attack_crit_chance')->default(0);
            $table->decimal('physical_ATK')->default(0);
            $table->decimal('physical_defense')->default(0);
            $table->decimal('hp')->default(0);
            $table->decimal('attack_speed')->default(0);
            $table->decimal('mana_regen')->default(0);
            $table->decimal('skill_crit_chance')->default(0);
            $table->decimal('spell_vamp')->default(0);
            $table->decimal('physical_vamp')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('heroes');
    }
}
