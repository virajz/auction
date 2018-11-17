@extends('app')

@section('content')
    <div class="flex" id="app">
        @include('players')
        @include('form')
        @include('teams')
    </div>
@endsection