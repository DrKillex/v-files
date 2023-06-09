@extends('layouts.app')

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
            <form action="{{ route('admin.games.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="original_title" class="form-label">Original Title</label>
                    <input type="text" class="form-control" id="original_title" name="original_title"
                        value="{{ old('title') }}">
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
                    <input type="number" class="form-control" id="price" name="price" step="0.01" min="0.01"
                        value="{{ old('price') }}">
                </div>
                <div class="mb-3">
                    <label for="developer" class="form-label">Developer</label>
                    <input type="text" class="form-control" id="developer" name="developer"
                        value="{{ old('developer') }}">
                </div>
                <div class="mb-3">
                    <label for="publisher" class="form-label">Publisher</label>
                    <input type="text" class="form-control" id="publisher" name="publisher"
                        value="{{ old('publisher') }}">
                </div>
                <div class="mb-3">
                    <label class="form-check-label" for="released">
                        Released
                    </label>
                    <select name="released" id="released">
                        <option value="" {{ old('released') == null ? 'selected' : ''}}>Schegli un opzione</option>
                        <option value="1" {{ old('released') == '1' ? 'selected' : ''}}>Si</option>
                        <option value="0" {{ old('released') == '0' ? 'selected' : ''}}>No</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="release" class="form-label">Release</label>
                    <input type="date" class="form-control" id="release" name="release" value="{{ old('release') }}">
                </div>
                <div class="mb-3">
                    <label for="required_space" class="form-label">Required space</label>
                    <input type="number" class="form-control" id="required_space" name="required_space"
                        value="{{ old('required_space') }}">
                </div>
                <div class="mb-3">
                    <div class="mb-3">genres</div>
                    @foreach ($genres as $genre)
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="genre" value="{{ $genre->id }}" name="genres[]" {{ in_array($genre->id, old('genres', [])) ? 'checked' : '' }}>
                            <label class="form-check-label" for="genre">{{ $genre->name }}</label>
                        </div>
                    @endforeach   
                </div>
                <div class="mb-3">
                    <label class="form-check-label" for="singleplayer">
                        singleplayer
                    </label>
                    <select name="singleplayer" id="singleplayer">
                        <option value="" {{ old('singleplayer') == null ? 'selected' : ''}}>Schegli un opzione</option>
                        <option value="1" {{ old('singleplayer') == '1' ? 'selected' : ''}}>Si</option>
                        <option value="0" {{ old('singleplayer') == '0' ? 'selected' : ''}}>No</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-check-label" for="multiplayer">
                        multiplayer
                    </label>
                    <select name="multiplayer" id="multiplayer">
                        <option value="" {{ old('multiplayer') == null ? 'selected' : ''}}>Schegli un opzione</option>
                        <option value="1" {{ old('multiplayer') == '1' ? 'selected' : ''}}>Si</option>
                        <option value="0" {{ old('multiplayer') == '0' ? 'selected' : ''}}>No</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-check-label" for="local_multiplayer">
                        local_multiplayer
                    </label>
                    <select name="local_multiplayer" id="local_multiplayer">
                        <option value="" {{ old('local_multiplayer') == null ? 'selected' : ''}}>Schegli un opzione</option>
                        <option value="1" {{ old('local_multiplayer') == '1' ? 'selected' : ''}}>Si</option>
                        <option value="0" {{ old('local_multiplayer') == '0' ? 'selected' : ''}}>No</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-check-label" for="cross_play">
                        cross_play
                    </label>
                    <select name="cross_play" id="cross_play">
                        <option value="" {{ old('cross_play') == null ? 'selected' : ''}}>Schegli un opzione</option>
                        <option value="1" {{ old('cross_play') == '1' ? 'selected' : ''}}>Si</option>
                        <option value="0" {{ old('cross_play') == '0' ? 'selected' : ''}}>No</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="audio_language" class="form-label">audio language</label>
                    <input type="text" class="form-control" id="audio_language" name="audio_language"
                        value="{{ old('audio_language') }}">
                </div>
                <div class="mb-3">
                    <label for="interface_language" class="form-label">interface language</label>
                    <input type="text" class="form-control" id="interface_language" name="interface_language"
                        value="{{ old('interface_language') }}">
                </div>
                <div class="mb-3">
                    <label for="dx_version" class="form-label">dx_version</label>
                    <input type="number" class="form-control" id="dx_version" name="dx_version"
                        value="{{ old('dx_version') }}" min="0" max="254">
                </div>
                <div class="mb-3">
                    <label for="vote" class="form-label">Vote</label>
                    <input type="number" class="form-control" id="vote" name="vote"
                        value="{{ old('vote') }}" min="0" max="254">
                </div>
                <div class="mb-3">
                    <label for="pegi" class="form-label">Pegi</label>
                    <input type="number" class="form-control" id="pegi" name="pegi"
                        value="{{ old('pegi') }}" min="0" max="254">
                </div>
                <div class="mb-3">
                    <label for="ram" class="form-label">Ram</label>
                    <input type="number" class="form-control" id="ram" name="ram"
                        value="{{ old('ram') }}" min="0" max="254">
                </div>
                <div class="mb-3">
                    <label for="discount_value" class="form-label">Discount value</label>
                    <input type="number" class="form-control" id="discount_value" name="discount_value"
                        value="{{ old('discount_value') }}" min="0" max="254">
                </div>
                <div class="mb-3">
                    <label for="realese_version" class="form-label">Realese version</label>
                    <input type="text" class="form-control" id="realese_version" name="realese_version"
                        value="{{ old('realese_version') }}">
                </div>

                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="set_thumb" name="set_thumb" @if ($game->thumb) checked @endif value="1">
                    <label class="form-check-label" for="set_thumb">image set/unset</label>
                </div>
                <div class="mb-3" id="image-input-container">
                    <div class="preview">
                        <img id="file-image-preview">
                    </div>
                    <label for="thumb" class="form-label">Image</label>
                    <input class="form-control" type="file" id="thumb" name="thumb">
                </div>

                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="set_image" name="set_image" @if ($game->image) checked @endif value="1">
                    <label class="form-check-label" for="set_image">image set/unset</label>
                </div>
                <div class="mb-3" id="image2-input-container">
                    <div class="preview">
                        <img id="file-image2-preview" class="img-fluid">
                    </div>
                    <label for="image" class="form-label">Image</label>
                    <input class="form-control" type="file" id="image" name="image">
                </div>

                <div class="mb-3">
                    <label class="form-check-label" for="windows">
                        Windows OS
                    </label>
                    <select name="windows" id="windows">
                        <option value="" {{ old('windows') == null ? 'selected' : ''}}>Schegli un opzione</option>
                        <option value="1" {{ old('windows') == '1' ? 'selected' : ''}}>Si</option>
                        <option value="0" {{ old('windows') == '0' ? 'selected' : ''}}>No</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-check-label" for="mac">
                        Mac OS
                    </label>
                    <select name="mac" id="mac">
                        <option value="" {{ old('mac') == null ? 'selected' : ''}}>Schegli un opzione</option>
                        <option value="1" {{ old('mac') == '1' ? 'selected' : ''}}>Si</option>
                        <option value="0" {{ old('mac') == '0' ? 'selected' : ''}}>No</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-check-label" for="linux">
                        Linux OS
                    </label>
                    <select name="linux" id="linux">
                        <option value="" {{ old('linux') == null ? 'selected' : ''}}>Schegli un opzione</option>
                        <option value="1" {{ old('linux') == '1' ? 'selected' : ''}}>Si</option>
                        <option value="0" {{ old('mac') == '0' ? 'selected' : ''}}>No</option>
                    </select>
                </div>



                <button type="submit" class="btn btn-primary">Aggiungi</button>
            </form>
        </div>
    </main>
@endsection
