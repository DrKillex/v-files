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
            <form action="{{ route('admin.developers.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">{{ __('Name') }}</label>
                    <input type="text" class="form-control" id="name" name="name"
                        value="{{ old('name') }}">
                </div>

                <button type="submit" class="btn btn-primary">Aggiungi</button>
            </form>
        </div>
    </main>
@endsection
