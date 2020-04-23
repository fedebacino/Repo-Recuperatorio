<main class="row">
    <aside class="bg-light border-right" id="sidebar-wrapper">
        @foreach ($genres as $genre)
        <div class="list-group list-group-flush">
            <a href="/genres/listbyGenre/{{$genre->id}}" class="btn">{{ $genre->name }}</a>
        </div>
        @endforeach
    </aside>