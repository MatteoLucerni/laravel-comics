@php
    $actionComic = $comics[0];
@endphp

@extends('layouts.main')

@section('title', 'Action')

@section('main-content')
    <section id="action">
        <div class="container">
            <div class="split-section">
                <div class="left-side">
                    <h1>{{ strtoupper($actionComic['title']) }}</h1>
                    <h4 class="price-tag">U.S. price: <strong>{{ $actionComic['price'] }}</strong></h4>
                    <p>
                        {{ $actionComic['description'] }}
                    </p>
                </div>
                <div class="right-side">
                    <h3 class="adv">Advertisment</h3>
                    <img src="{{ asset('images/actionComic.jpg') }}" alt="action comic">
                </div>
            </div>
        </div>
    </section>
@endsection
