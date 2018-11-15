<div class="teams flex-col">
    @foreach ($teams as $team)
        <team :obj="{{ $team }}"></team>
    @endforeach
</div>