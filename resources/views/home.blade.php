@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-8">Main</div>
        <div class="col-md-4">
            <div class="p-4 mb-3">
                <h4>{{__('Newest Guides')}}</h4>
                <ol class="list-unstyled">
                    @foreach($newestGuides as $guide)
                        <li>
                            <a href="{{route('heroes.guide.show', [$guide->hero, $guide])}}">
                                {{$guide->title}}</a>
                        </li>
                    @endforeach
                </ol>
            </div>
        </div>
    </div>
@endsection
