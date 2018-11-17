@extends('app')

@section('content')
    <div class="container">
        <header style="background-color: {{ $team->color }};">
            <h1>{{ $team->name }}</h1>
            <span>Points Remaining: {{ $team->points - $team->spent }}</span>
        </header>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Points</th>
                </tr>
            </thead>
            <tbody>
                @foreach($team->players as $key=>$player)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $player->name }}</td>
                        <td>{{ $player->points }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection