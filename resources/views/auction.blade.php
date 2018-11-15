@extends('app')

@section('content')
    <ol class="players">
        @foreach ($players as $player)
            <li>
                <a href="#">{{ $player->name }}</a>
            </li>
        @endforeach
    </ol>
    <div class="content flex-col flex-1">
        <div class="form flex-1">
        hi</div>
        <div class="teams">
            @foreach ($teams as $team)
                <div class="team flex-col">
                    <h3>
                        {{ $team->name }}
                    </h3>
                    <div class="flex">
                        <div class="flex-1">
                            <p>Points</p>
                            <h4>{{ $team->points - $team->spent }}</h4>
                        </div>
                        <div class="flex-1">
                            <p>Players Taken</p>
                            <h4>{{ $team->players->count() }}</h4>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection