@extends('layout.app')

@section('main')
    <main>
        <div class="container">
            @if ($errors->any())
                <div class="alert alert-danger mb-3 mt-3">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('games.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="original_title" class="form-label">Original Title</label>
                    <input type="text" class="form-control" id="original_title" name="original_title" value="{{ old('title') }}">
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3">{{ old('description') }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" class="form-control" id="price" name="price" step="0.01" min="0.01" value="{{ old('price') }}">
                </div>
                <div class="mb-3">
                    <label for="developer" class="form-label">Developer</label>
                    <input type="text" class="form-control" id="developer" name="developer" value="{{ old('developer') }}">
                </div>
                <div class="mb-3">
                    <label for="publisher" class="form-label">Publisher</label>
                    <input type="text" class="form-control" id="publisher" name="publisher" value="{{ old('publisher') }}">
                </div>
                <div class="mb-3">
                    <label for="released" class="form-label">released</label>
                    <input type="checkbox" class="form-control" id="released" name="released" value="{{ old('released') }}">
                </div>
                <div class="mb-3">
                    <label for="release" class="form-label">Release</label>
                    <input type="date" class="form-control" id="release" name="release" value="{{ old('release') }}">
                </div>
                <div class="mb-3">
                    <label for="required_space" class="form-label">Required space</label>
                    <input type="number" class="form-control" id="required_space" name="required_space" value="{{ old('required_space') }}">
                </div>
                <div class="mb-3">
                    <label for="genres" class="form-label">genres</label>
                    <input type="text" class="form-control" id="genres" name="genres" value="{{ old('genres') }}">
                </div>
                <div class="mb-3">
                    <label for="singleplayer" class="form-label">singleplayer</label>
                    <input type="radio" class="form-control" id="singleplayer" name="singleplayer" value="{{ old('singleplayer') }}">
                </div>
                <div class="mb-3">
                    <label for="multiplayer" class="form-label">multiplayer</label>
                    <input type="checkbox" class="form-control" id="multiplayer" name="multiplayer" value="{{ old('multiplayer') }}">
                </div>
                <div class="mb-3">
                    <label for="local_multiplayer" class="form-label">local multiplayer</label>
                    <input type="checkbox" class="form-control" id="local_multiplayer" name="local_multiplayer" value="{{ old('local_multiplayer') }}">
                </div>
                <div class="mb-3">
                    <label for="cross_play" class="form-label">cross play</label>
                    <input type="checkbox" class="form-control" id="cross_play" name="cross_play" value="{{ old('cross_play') }}">
                </div>
                <div class="mb-3">
                    <label for="audio_language" class="form-label">audio language</label>
                    <input type="text" class="form-control" id="audio_language" name="audio_language" value="{{ old('audio_language') }}">
                </div>
                <div class="mb-3">
                    <label for="interface_language" class="form-label">interface language</label>
                    <input type="text" class="form-control" id="interface_language" name="interface_language" value="{{ old('interface_language') }}">
                </div>
                <div class="mb-3">
                    <label for="dx_version" class="form-label">dx_version</label>
                    <input type="number" class="form-control" id="dx_version" name="dx_version" value="{{ old('dx_version') }}" min="0" max="254">
                </div>
                <div class="mb-3">
                    <label for="vote" class="form-label">Vote</label>
                    <input type="number" class="form-control" id="vote" name="vote" value="{{ old('vote') }}" min="0" max="254">
                </div>
                <div class="mb-3">
                    <label for="pegi" class="form-label">Pegi</label>
                    <input type="number" class="form-control" id="pegi" name="pegi" value="{{ old('pegi') }}" min="0" max="254">
                </div>
                <div class="mb-3">
                    <label for="ram" class="form-label">Ram</label>
                    <input type="number" class="form-control" id="ram" name="ram" value="{{ old('ram') }}" min="0" max="254">
                </div>
                <div class="mb-3">
                    <label for="discount_value" class="form-label">Discount value</label>
                    <input type="number" class="form-control" id="discount_value" name="discount_value" value="{{ old('discount_value') }}" min="0" max="254">
                </div>
                <div class="mb-3">
                    <label for="realese_version" class="form-label">Realese version</label>
                    <input type="text" class="form-control" id="realese_version" name="realese_version" value="{{ old('realese_version') }}">
                </div>
                <input type="hidden" name="thumb" id="thumb" value="https://via.placeholder.com/640x480.png/004466?text=animals+omnis">

                <button type="submit" class="btn btn-primary">Aggiungi</button>
            </form>
        </div>
    </main>
@endsection
