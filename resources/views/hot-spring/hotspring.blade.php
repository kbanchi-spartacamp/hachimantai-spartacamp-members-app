@extends('layout.common')
@section('title', 'Hot-spring Spot')

@include('layout.header')

@section('content')
    <div class="container">
        <div class="border-bottom">
            <h1 class="h2">温泉一覧</h1>
        </div>
        @if (!empty($hotsprings))
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach ($hotsprings as $hotspring)
                    <div class="col">
                        <div class="card shadow-sm">
                            <h4>{{ $hotspring->name }}</h4>
                            <img src="{{ $hotspring->image_url }}" alt="Sa" width="100%" height="225">
                            <div class="card-body">
                                <p class="card-text">{{ $hotspring->description }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="{{ $hotspring->hp_url }}" class="btn btn-sm btn-outline-secondary"
                                            target="_blank">公式HP</a>
                                        <a href="/hot-springs/{{ $hotspring->id }}/map"
                                            class="btn btn-sm btn-outline-secondary" target="_blank">地図</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection

@include('layout.sidebar')

@include('layout.footer')
