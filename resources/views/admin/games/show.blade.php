@extends('layouts.app')

@section('main')
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6">
                    <div class="card mb-3">
                        <img src="{{$game->thumb}}" alt="">
                        <div class="p-3">
                            <h3 class="card-title">original title: {{$game->original_title}}</h3>
                            <div>title: {{$game->title}}</div>
                            <div>description: {{$game->description}}</div>
                            <div>developer: {{$game->developer}}</div>
                            <div>publisher: {{$game->publisher}}</div>
                            <div>released: {{$game->released == 0 ? '❌' : '✔'}}</div>
                            <div>release date: {{$game->release}}</div>
                            <div>price: {{$game->price}}</div>
                            <div>required space: {{$game->required_space}}</div>
                            <div>genres: {{$game->genres}}</div>
                            <div>singleplayer: {{$game->singleplayer == 0 ? '❌' : '✔'}}</div>
                            <div>multiplayer: {{$game->multiplayer == 0 ? '❌' : '✔'}}</div>
                            <div>local multiplayer: {{$game->local_multiplayer == 0 ? '❌' : '✔'}}</div>
                            <div>cross play: {{$game->cross_play == 0 ? '❌' : '✔'}}</div>
                            {{-- <div>audio language: {{$game->audio_language}}</div>
                            <div>interface language: {{$game->interface_language}}</div> --}}
                            <h3>Language: {{ $game->language?->name ?: 'Nessun tipo' }}</h3>
                            <div>dx version: {{$game->dx_version}}</div>
                            <div>vote: {{$game->vote}}</div>
                            <div>pegi: {{$game->pegi}}</div>
                            <div>ram: {{$game->ram}}</div>
                            <div>discount value: {{$game->discount_value}}</div>
                            <div>realese version: {{$game->realese_version}}</div>
                        </div>                     
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
