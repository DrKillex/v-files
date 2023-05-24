@extends('layouts.app')

@section('main')
    <main>
        <div class="container">
            @if (session('message'))
                <div class="alert alert-success mb-3 mt-3">
                    {{ session('message') }}
                </div>
            @endif
            <a href="{{ route('admin.developers.create') }}" class="btn btn-primary mb-2">Aggiungi Developer</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">{{ __('Name') }}</th>
                        <th scope="col">actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($developer as $dev)
                        <tr>
                            <th>{{ $dev->name }}</th>

                            <td>
                                <ul class="d-flex list-unstyled gap-2">
                                    <li><a href="{{ route('admin.developers.show', $dev) }}" class="btn btn-primary">details</a></li>
                                    <li><a href="{{route('admin.developers.edit', $dev)}}" class="btn btn-success">edit</a></li>
                                    <li>
                                        <input type="button" value="Cancella" class="btn btn-danger bottone-elimina" id="{{ $dev->id }}">
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        <!-- Popup conferma eliminazione-->
                        <div class="popup d-none justify-content-center align-items-center" id="popup{{ $dev->id }}">
                            <div class="message">
                                <h5>Vuoi eliminare "{{$dev->name}}"?</h5>
                                <div class="d-flex justify-content-around mt-3">
                                    <form action="{{ route('admin.developers.destroy', $dev->id) }}" method="POST" id="form">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="SI" class="btn btn-danger">
                                    </form>
                                    <input type="button" value="NO" class="btn btn-primary chiudi"
                                        id="chiudi{{ $dev->id }}">
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
