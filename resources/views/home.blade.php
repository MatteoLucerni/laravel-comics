@extends('layouts.main')

@section('title', 'Home')

@section('main-content')
    <section id="jumbotron">
        <div class="container">
            <div class="row">
                @foreach ($merch as $m)
                    <div class="col">
                        <img src="{{ asset(images / $m['image']) }}" :alt="{{ $m['title'] }}">
                        <h2>{{ $m['title'] }}</h2>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
