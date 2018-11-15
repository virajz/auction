<div class="teams flex-col">
    @foreach ($teams as $team)
        <div class="team flex-col flex-1" style="background-color: {{ $team->color }}; color: #fff">
            <h3>{{ $team->name }}</h3>
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