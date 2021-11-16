@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-title">{{$hero->name}}</div>
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-text">{{$hero->description}}</p>
            <div class="table-responsive-sm">
                <table class="table">
                    <tr>
                        <td>Name</td>
                        <td>{{$hero->name}}</td>
                    </tr>
                    <tr>
                        <td>Movement SPD</td>
                        <td>{{$hero->movement_SPD}}</td>
                    </tr>
                    <tr>
                        <td>Magic Power</td>
                        <td>{{$hero->magic_power}}</td>
                    </tr>
                    <tr>
                        <td>Magic DEF</td>
                        <td>{{$hero->magic_defense}}</td>
                    </tr>
                    <tr>
                        <td>Mana</td>
                        <td>{{$hero->mana}}</td>
                    </tr>
                    <tr>
                        <td>HP Regen (hp/s)</td>
                        <td>{{$hero->HP_regen}}</td>
                    </tr>
                    <tr>
                        <td>Basic Att Crit Chance (%)</td>
                        <td>{{$hero->basic_attack_crit_chance}}</td>
                    </tr>
                    <tr>
                        <td>P Atk</td>
                        <td>{{$hero->physical_ATK}}</td>
                    </tr>
                    <tr>
                        <td>P Def</td>
                        <td>{{$hero->physical_defense}}</td>
                    </tr>
                    <tr>
                        <td>HP</td>
                        <td>{{$hero->hp}}</td>
                    </tr>
                    <tr>
                        <td>Att Speed</td>
                        <td>{{$hero->attack_speed}}</td>
                    </tr>
                    <tr>
                        <td>MP regen</td>
                        <td>{{$hero->mana_regen}}</td>
                    </tr>
                    <tr>
                        <td>M Crit (%)</td>
                        <td>{{$hero->skill_crit_chance}}</td>
                    </tr>
                    <tr>
                        <td>Spell Vamp</td>
                        <td>{{$hero->spell_vamp}}</td>
                    </tr>
                    <tr>
                        <td>Physical Vamp</td>
                        <td>{{$hero->physical_vamp}}</td>
                    </tr>
                </table>
            </div>
            <a href="{{route('heroes.edit', $hero)}}"> Update hero</a>
        </div>
    </div>
@endsection
