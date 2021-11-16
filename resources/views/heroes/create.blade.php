@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">{{ __('New hero') }}</div>
        <div class="card-body">
            <form method="POST" action="{{ route('heroes.store') }}">
                @csrf
                <div class="card">
                    <div class="card-header">Main info</div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text"
                                       class="form-control @error('name') is-invalid @enderror"
                                       name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="description"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>
                            <div class="col-md-6">
                                <textarea class="form-control @error('description') is-invalid @enderror"
                                          name="description" cols="30" rows="10"
                                          autofocus
                                          required>
                                    {{old('description')}}
                                </textarea>
                                @error('description')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="roles"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Roles') }}</label>
                            <div class="col-md-6">
                                <select class="form-control" name="roles[]" multiple>
                                    @foreach ($roles as $role)
                                        <option value="{{$role->id}}">
                                            {{$role->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">Stats</div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-sm-8 col-form-label" for="movement_SPD">Movement SPEED</label>
                            <div class="col-sm-4">
                                <input type="number" class="form-control" name="movement_SPD">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-8 col-form-label" for="magic_power">Magic Power</label>
                            <div class="col-sm-4">
                                <input type="number" class="form-control" name="magic_power">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-8 col-form-label" for="magic_defense">Magic DEF</label>
                            <div class="col-sm-4">
                                <input type="number" class="form-control" name="magic_defense">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-8 col-form-label" for="mana">Mana</label>
                            <div class="col-sm-4">
                                <input type="number" class="form-control" name="mana">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-8 col-form-label" for="HP_regen">HP_regen</label>
                            <div class="col-sm-4">
                                <input type="number" class="form-control" name="HP_regen">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-8 col-form-label" for="basic_attack_crit_chance">Basic Attack Critical
                                Chance</label>
                            <div class="col-sm-4">
                                <input type="number" class="form-control" name="basic_attack_crit_chance">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-8 col-form-label" for="physical_ATK">Physical ATK</label>
                            <div class="col-sm-4">
                                <input type="number" class="form-control" name="physical_ATK">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-8 col-form-label" for="physical_defense">Physical DEF</label>
                            <div class="col-sm-4">
                                <input type="number" class="form-control" name="physical_defense">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-8 col-form-label" for="hp">HP</label>
                            <div class="col-sm-4">
                                <input type="number" class="form-control" name="hp">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-8 col-form-label" for="attack_speed">Attack Speed</label>
                            <div class="col-sm-4">
                                <input type="number" class="form-control" name="attack_speed">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-8 col-form-label" for="mana_regen">Mana Regen</label>
                            <div class="col-sm-4">
                                <input type="number" class="form-control" name="mana_regen">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-8 col-form-label" for="skill_crit_chance">Skill Critical Chance</label>
                            <div class="col-sm-4">
                                <input type="number" class="form-control" name="skill_crit_chance">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-8 col-form-label" for="spell_vamp">Spell Vamp</label>
                            <div class="col-sm-4">
                                <input type="number" class="form-control" name="spell_vamp">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-8 col-form-label" for="physical_vamp">Physical Vamp</label>
                            <div class="col-sm-4">
                                <input type="number" class="form-control" name="physical_vamp">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Create Hero') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
