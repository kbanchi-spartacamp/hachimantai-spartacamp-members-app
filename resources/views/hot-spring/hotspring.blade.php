@extends('layout.common')
@section('title', 'Hot-spring Spot')

@include('layout.header')

@section('content')
<link rel="stylesheet" href="{{ asset('./css/hot-spring.css') }}">

    <div class="container">
        <div class="border-bottom">
            <h1 class="h2"> 温泉</h1>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            @foreach ($hotsprings as $hotspring)
                <div class="col">
                    <div class="card shadow-sm">
                        <h4>{{ $hotspring->name }}</h4>
                        <img src="{{ $hotspring->image_url }}" alt="Sa" width="100%" height="225">
                        <div class="card-body">
                            <p class="card-text">{{ $hotspring->description }}</p>
                            <div class="btn-group ">
                            <p><a href="{{ $hotspring->hp_url }}" class="btn btn-sm btn-outline-secondary"
                                            target="_blank">公式HP</a></p>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <p><div class="map">
                                    <iframe src="{{ $hotspring->map_url }}" width="330" height="300" style="border:0;"
                                        allowfullscreen="" loading="lazy"></iframe>
                                </div></p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection

@include('layout.sidebar')

@include('layout.footer')
