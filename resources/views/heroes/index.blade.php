@extends('layouts.app')
@section('content')
        <ul class="list-group">
            @foreach($heroes as $hero)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a href="{{route('heroes.show', $hero)}}">{{$hero->name}}</a>
                    @foreach($hero->roles as $role)
                        <span class="badge
                        @switch($role->id)
                        @case (1)
                            badge-primary
                        @break
                        @case (2)
                            badge-secondary
                        @break
                        @case (3)
                            badge-success
                        @break
                        @case (4)
                            badge-warning
                        @break
                        @case (5)
                            badge-danger
                        @break
                        @default
                        @endswitch
                            badge-pill">{{$role->name}}</span>
                    @endforeach
                </li>
            @endforeach
        </ul>
@endsection
