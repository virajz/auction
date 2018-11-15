<ol class="players">
    @foreach ($players as $player)
        <li class="flex justify-between">
            <a href="#" class="{{ $player->team_id ? 'picked' : '' }}">{{ $player->name }}</a>
            <span class="team-dot" style="background-color: {{ $player->color }}"></span>
        </li>
    @endforeach
</ol>