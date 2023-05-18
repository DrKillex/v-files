@extends('layout.app')

@section('main')
    <main>
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">original title</th>
                        <th scope="col">publisher</th>
                        <th scope="col">release</th>
                        <th scope="col">released</th>
                        <th scope="col">pegi</th>
                        <th scope="col">actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($games as $game)
                        <tr>
                            <th>{{ $game->original_title }}</th>
                            <td>{{ $game->publisher }}</td>
                            <td>{{ $game->release }}</td>
                            <td>{{ $game->released }}</td>
                            <td>{{ $game->pegi }}</td>
                            <td>
                                <ul class="d-flex list-unstyled gap-2">
                                    <li><a href="{{ route('games.show', $game) }}" class="btn btn-primary">details</a></li>
                                    <li><a href="{{route('games.edit', $game)}}" class="btn btn-success">edit</a></li>
                                    <li>
                                        <input type="button" value="Cancella" class="btn btn-danger bottone-elimina" id="{{ $game->id }}">
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        <!-- Popup conferma eliminazione-->
                        <div class="popup d-none justify-content-center align-items-center" id="popup{{ $game->id }}">
                            <div class="message">
                                <h5>Vuoi eliminare "{{$game->original_title}}"?</h5>
                                <div class="d-flex justify-content-around mt-3">
                                    <form action="{{ route('games.destroy', $game) }}" method="POST" id="form">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="SI" class="btn btn-danger">
                                    </form>
                                    <input type="button" value="NO" class="btn btn-primary chiudi"
                                        id="chiudi{{ $game->id }}">
                                </div>
                            </div>
                        </div>
                        <!-- /Popup conferma eliminazione-->
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
    <!--delete.js-->
    @vite('resources/js/delete.js')
@endsection
