@extends('layout.common')
@section('title', 'Top')
@section('pageCss')
<link href="/css/recruit.css" rel="stylesheet">
@endsection
@include('layout.header')

@section('content')
<div class="border-bottom">
    <header>
        <h1>EIGTH <span> recruitment</span></h1>
    </header>
    <div class="top-wrapper">
        <img alt="recruit" src="./images/recruit.jpg" width="1350px" height="470px">
    </div>
    <div class="entry-featuredImg">
        @foreach ($recruits as $recruit)
        <a href="/recruits/{{ $recruit->id }}">
            <img width="570" height="410" src="./images/recruit.3.jpg" alt="男">
            <p>{{ $recruit->title }}</p>
        </a>
        @endforeach
    </div>
</div>
@endsection

@include('layout.sidebar')

@include('layout.footer')