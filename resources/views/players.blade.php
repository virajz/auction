<ol class="players">
    @foreach ($players as $player)
        <player :obj="{{ $player }}"></player>
    @endforeach
</ol>