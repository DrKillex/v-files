<header>
    <div class="container text-center">
        <h1>Header</h1>
        <ul class="d-flex list-unstyled gap-2 justify-content-center">
            <li><a href="{{ route('admin.games.index') }}">Games</a></li>   
            <li><a href="{{ route('admin.games.create') }}">create</a></li>
            <li><a href="{{ route('admin.developers.index') }}">Developers</a></li>
            <li><a href="{{ route('admin.genres.index') }}">genres</a></li> 
        </ul>
    </div>
</header>
