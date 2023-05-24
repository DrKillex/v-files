@extends('layouts.app')

@section('main')
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6">
                    <div class="card mb-3 p-3">
                        <h3 class="card-title">{{ __('Name:') }} {{ $developer->name }}</h3>
                        @if (count($developer->games) > 0)
                            <div class="mt-2">
                                <span class="d-block mb-1 fs-5">Games correlati:</span>
                                <ul>
                                    @foreach ($developer->games as $item)
                                        <li><a href="{{ route('admin.games.show', $item) }}">{{ $item->original_title }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
