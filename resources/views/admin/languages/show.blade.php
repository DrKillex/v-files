@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="fs-4 text-secondary my-4">
            {{ $language->name }}
        </h2>


        <ul>
        @foreach ($language->games as $game)
            <li><a href="{{ route('admin.games.show', $game) }}">{{ $game->title }}</a></li>
        @endforeach
        </ul>
        {{-- <hr>
        <a href="{{ route('admin.languages.edit', $language) }}" class="btn btn-sm btn-warning">Edit</a> --}}

    </div>
@endsection