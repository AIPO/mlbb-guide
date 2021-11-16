<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    use HasFactory, Sluggable;

    protected $guarded = [];

    public function roles()
    {
        return $this->belongsToMany(HeroRole::class);
    }

    public function lines()
    {
        return $this->belongsToMany(HeroLine::class);
    }

    public function sluggable(): array
    {
        return ['slug' => ['source' => 'name']];
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }


    public function guides()
    {
        return $this->hasMany(Guide::class);
    }
}
