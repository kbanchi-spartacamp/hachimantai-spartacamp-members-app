@extends('layout.common')
@section('title', 'Wi-Fi Spot')

@include('layout.header')

@section('content')

    <!DOCTYPE html>
    <html lang="ja">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.79.0">
        <title>HotSpring for Bootstrap · Bootstrap v5.0</title>

        <link rel="canonical" href="https://getbootstrap.jp/docs/5.0/examples/album/">
        <!-- Bootstrap core CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

        <!-- Favicons -->
        <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
        <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
        <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
        <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
        <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
        <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
        <meta name="theme-color" content="#7952b3">

        <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none;
            }
            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                }
            }
        </style>
    </head>

    <body>
        <header>
            <div class="collapse bg-dark" id="navbarHeader">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-md-7 py-4">
                            <h4 class="text-white">About</h4>
                            <p class="text-muted">八幡平市のおすすめの温泉一覧です。</p>
                        </div>
                        <div class="col-sm-4 offset-md-1 py-4">
                            <h4 class="text-white">Contact</h4>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <main>
            <section class="py-5 text-center container">
                <div class="row py-lg-5">
                    <div class="col-lg-6 col-md-8 mx-auto">
                        <h1 class="fw-light">八幡平の温泉</h1>
                        <p class="lead text-muted">スパルタキャンプ参加者におすすめの温泉です。</p>
                    </div>
                </div>
            </section>
            <div class="album py-5 bg-light">
                <div class="container">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                        <div class="col">
                            <div class="card shadow-sm">
                                <img
                                    src="https://web.goout.jp/wp-content/uploads/2019/10/18775637191e0f9f4db7a0fc783091e9.jpeg">
                                <div class="card-body">
                                    <p class="card-text">おらほの温泉</p>
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3061.0124475617263!2d141.08878081538884!3d39.89635359504634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f851365ad854a13%3A0x54999ba2c543cf87!2z44GK44KJ44G744Gu5rip5rOJ!5e0!3m2!1sja!2sjp!4v1631886113151!5m2!1sja!2sjp"
                                        width="400" height="300" style="border:0;" allowfullscreen=""
                                        loading="lazy"></iframe>
                                    <div class="d-flex justify-content-between align-items-center">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm">
                                <img
                                    src="https://onsen.nifty.com/kk_image/view/onsen/onsen-detail/onsen000362/0000139400.jpg">
                                <div class="card-body">
                                    <p class="card-text">八幡平温泉「森乃湯」</p>
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3060.943797521126!2d140.97168141538882!3d39.89789059495393!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f856ae4994eac23%3A0x26fc05ab231949f5!2z5YWr5bmh5bmz5rip5rOJ6aSoIOajruS5g-a5rw!5e0!3m2!1sja!2sjp!4v1631886053999!5m2!1sja!2sjp"
                                        width="400" height="300" style="border:0;" allowfullscreen=""
                                        loading="lazy"></iframe>
                                    <div class="d-flex justify-content-between align-items-center">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm">
                                <img src="https://orahono-onsen.net/onsen/imgs/omumanoyu.jpg">
                                <div class="card-body">
                                    <p class="card-text">日帰り温泉「焼走りの湯」</p>
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3238340.726147382!2d138.30714219351816!3d37.568205699442686!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f856ca5ade95589%3A0xc83f4cbff167f781!2z5pel5biw44KK5rip5rOJ6aSo44CM54S86LWw44KK44Gu5rmv44CN!5e0!3m2!1sja!2sjp!4v1631885889943!5m2!1sja!2sjp"
                                        width="400" height="300" style="border:0;" allowfullscreen=""
                                        loading="lazy"></iframe>
                                    <div class="d-flex justify-content-between align-items-center">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </main>
        <footer class="text-muted py-5">
            <div class="container">
                <p class="float-end mb-1">
                    <a href="http://localhost/login">八幡平アプリTOPに戻る</a>
                </p>
            </div>
        </footer>
        <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
        </script>
    </body>
    </html>
@endsection
@include('layout.sidebar')

@include('layout.footer')