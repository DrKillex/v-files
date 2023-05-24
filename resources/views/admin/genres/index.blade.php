@extends('layouts.app')

@section('main')
    <main>
        <div class="container">
            <a href="{{ route('admin.genres.create') }}">create</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">name</th>
                        <th scope="col">slug</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($genres as $genre)
                        <tr>
                            <td>{{ $genre->name }}</td>
                            <td>{{ $genre->slug }}</td>
                            <td>
                                <ul class="list-unstyled d-flex gap-2">
                                    <li><a href="{{ route('admin.genres.show', $genre) }}">show</a></li>
                                    <li><a href="{{ route('admin.genres.edit', $genre) }}">edit</a></li>
                                    <li>
                                        <form action="{{ route('admin.genres.destroy', $genre) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button>delete</button>
                                        </form>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
@endsection
