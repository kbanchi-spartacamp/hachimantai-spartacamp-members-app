@extends('layout.common')
@section('title', 'Wi-Fi Spot Map')

@include('layout.header')

@section('content')
    <div class="container">
        <div class="border-bottom">
            <h1 class="h2">Wi-Fi スポット Map ({{ $wifispot->name }})</h1>
        </div>
        @if (!empty($wifispot))
            <div id="map" style="height:50vh;"></div>
        @endif
    </div>
@endsection

@include('layout.sidebar')

@include('layout.footer')

@section('script')
    @include('partial.map')
    <script>
        @if (!empty($wifispot))
            L.marker([{{ $wifispot->latitude }},{{ $wifispot->longitude }}])
            .bindPopup('<a href="{{ $wifispot->hp_url }}" target="_blank">{{ $wifispot->name }}</a>', {closeButton: false})
            .addTo(map);
        @endif
    </script>
@endsection
