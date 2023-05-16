@extends('layout.app')

@section('main')
    <main>
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
            @foreach ($games as $game)
                <tbody>
                    <tr>
                        <th>{{$game->original_title}}</th>
                        <td>{{$game->publisher}}</td>
                        <td>{{$game->release}}</td>
                        <td>{{$game->released}}</td>
                        <td>{{$game->pegi}}</td>
                        <td>
                            <ul class="d-flex list-unstyled gap-2">
                                <li><a href="{{ route('games.show', $game) }}" class="btn btn-primary">details</a></li>
                                <li><a href="#" class="btn btn-success">edit</a></li>
                                <li>
                                    <form action="{{ route('games.destroy', $game) }}" method="POST">
                                        @csrf
                                        
                                        @method('DELETE')
                                        <input type="submit" value="Cancella" class="btn btn-danger">
                                    </form>
                                </li>
                            </ul>
                        </td>
                    </tr>
                </tbody>
            @endforeach
        </table>
    </main>
@endsection
