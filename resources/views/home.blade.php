@extends('layouts.main')

@section('title', 'Home')

@section('main-content')
    {{-- main-content --}}
    <section id="content">
        <div class="container">
            <div class="row">
                <div class="btn-blue">
                    CURRENT SERIES
                </div>
                @foreach ($comics as $comic)
                    <div class="card">
                        <a href="{{ route('comic', $loop->index) }}">
                            <div class="img-container">
                                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                            </div>
                            <h5>{{ $comic['series'] }}</h5>
                        </a>
                    </div>
                @endforeach
            </div>
            <button class="btn btn-blue">LOAD MORE</button>
        </div>
    </section>
@endsection
