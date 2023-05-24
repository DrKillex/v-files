@extends('layouts.app')

@section('main')
    <main>
        <div class="container">
            <h2>{{ $genre->name }}</h2>
            <ul>
                @foreach ($genre->games as $game)
                    <li><a href="{{ route('admin.games.show', $game) }}">{{ $game->original_title }}</a></li>
                @endforeach
            </ul>
        </div>
    </main>
@endsection
