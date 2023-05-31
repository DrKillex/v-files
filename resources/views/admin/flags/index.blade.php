@extends('layouts.app')

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
                        <th scope="col">flagged</th>
                        <th scope="col">choose flag</th>
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
                            <td>{{ $game->flagged == 0 ? '❌' : '✔' }}</td>
                            <td>
                                <form action="{{ route('admin.flags.update', $game->id) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="btn btn-primary">choose flag</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>         
        </div>
    </main>
    <!--delete.js-->
    @vite('resources/js/delete.js')
@endsection
