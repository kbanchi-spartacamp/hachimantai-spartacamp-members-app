<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>Wi-Fi Spot</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <header class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <p class="h5 my-0 me-md-auto fw-normal">Wi-Fi Spot</p>
        <nav class="my-2 my-md-0 me-md-3">
            <a class="p-2 text-dark" href="#">TOPページ</a>
            <a class="p-2 text-dark" href="#">XXX</a>
            <a class="p-2 text-dark" href="#">XXX</a>
            <a class="p-2 text-dark" href="#">XXX</a>
        </nav>
        <a class="btn btn-outline-primary" href="#">ログアウト</a>
    </header>
    <main>
        <div class="album py-5 bg-light">
            <div class="container">
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
        </div>
    </main>
    <footer></footer>
</body>

</html>
