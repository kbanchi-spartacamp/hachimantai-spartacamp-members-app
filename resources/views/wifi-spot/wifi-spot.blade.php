@extends('layout.common')
@section('title', 'Wi-Fi Spot')

@include('layout.header')

@section('content')
    <div class="container">
        <div class="border-bottom">
            <h1 class="h2">Wi-Fi スポット</h1>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            @foreach ($wifispots as $wifispot)
                <div class="col">
                    <div class="card shadow-sm">
                        <h4>{{ $wifispot->name }}</h4>
                        <img src="{{ $wifispot->image_url }}" alt="Sa" width="100%" height="225">
                        <div class="card-body">
                            <p class="card-text">{{ $wifispot->description }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="{{ $wifispot->hp_url }}" class="btn btn-sm btn-outline-secondary"
                                        target="_blank">公式HP</a>
                                </div>
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
