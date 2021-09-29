@extends('layout.common')
@section('title', Hot-Spring Map')

@include('layout.header')

@section('content')
    <div class="container">
        <div class="border-bottom">
            <h1 class="h2">温泉 Map ({{ $hotspring->name }})</h1>
        </div>
        @if (!empty($hotspring))
            <div id="map" style="height:50vh;"></div>
        @endif
    </div>
@endsection

@include('layout.sidebar')

@include('layout.footer')

@section('script')
    @include('partial.map')
    <script>
        @if (!empty($hotspring))
            L.marker([{{ $hotspring->latitude }},{{ $hotspring->longitude }}])
            .bindPopup('<a href="{{ $hotspring->hp_url }}" target="_blank">{{ $hotspring->name }}</a>', {closeButton: false})
            .addTo(map);
        @endif
    </script>
@endsection
