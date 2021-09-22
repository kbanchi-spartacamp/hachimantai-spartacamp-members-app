@extends('layout.common')
@section('title', 'Top')
@section('pageCss')
<link href="/css/recruit.css" rel="stylesheet">
@endsection
@include('layout.header')

@section('content')
<div class="border-bottom">
    <div class="top-wrapper">
        <img width="380" height="338" src="./images/recruit.3.jpg" alt="男">
        <h1>{{ $recruit->title }}</h1>
    </div>
    <hr>
    <table style="width: 100%; height:588px">
        <tbody>
            <tr style="height: 24px;">
                <th style="height: 24px;">会社概要</th>
                <td style="height: 24px;">{{ $recruit->comprof }}</td>
            </tr>
            <tr style="height: 24px;">
                <th style="height: 24px;">仕事内容</th>
                <td style="height: 24px;">{{ $recruit->jobdes }}</td>
            </tr>
            <tr style="height: 24px;">
                <th style="height: 24px;">応募条件</th>
                <td style="height: 24px;">{{ $recruit->appcon }}</td>
            </tr>
            <tr style="height: 24px;">
                <th style="height: 24px;">背景</th>
                <td style="height: 24px;">{{ $recruit->background }}</td>
            </tr>
            <tr style="height: 24px;">
                <th style="height: 24px;">勤務地</th>
                <td style="height: 24px;">{{ $recruit->workloca }}</td>
            </tr>
            <tr style="height: 24px;">
                <th style="height: 24px;">勤務時間</th>
                <td style="height: 24px;">{{ $recruit->worktime }}</td>
            </tr>
            <tr style="height: 24px;">
                <th style="height: 24px;">面接方法</th>
                <td style="height: 24px;">{{ $recruit->interview }}</td>
            </tr>
        </tbody>
    </table>

    <h3>ご興味のある方へ</h3>
    <p>下記のフォームよりご連絡いただくと求人詳細を提供させていただきます。 応募条件を満たない方でも、お気軽にご相談ください。</p>
    {{-- <form action=""> --}}
    <p>
        <label for="name">お名前</label>
        <input type="text" name="name">
    </p>
    <p>
        <label for="email">メールアドレス</label>
        <input type="text" name="email">
    </p>
    <p>
        <label for="tell">電話番号</label>
        <input type="number" name="tell">
    </p>
    <p>
        <label for="resume">履歴書</label>
        <input type="text" name="resume">
    </p>
    <p>
        <label for="curr">職務経歴書</label>
        <input type="text" name="curr">
    </p>
    <p>
        <label for="title">応募したい求人名</label>
        <input type="text" name="title" value="{{ $recruit->recruit }}">
    </p>
    {{-- </form> --}}
</div>
@endsection

@include('layout.sidebar')

@include('layout.footer')