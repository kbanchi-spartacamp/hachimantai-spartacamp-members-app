<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>求人登録フォーム</h1>
    <form action="/recruits" method="post">
        @csrf
        <p>
            <label for="title">タイトル</label>
            <input type="text" name="title">
        </p>
        <p>
            <label for="comprof">会社概要</label>
            <input type="text" name="comprof">
        </p>
        <p>
            <label for="jobdes">仕事内容</label>
            <input type="text" name="jobdes">
        </p>
        <p>
            <label for="appcon">応募条件</label>
            <input type="text" name="appcon">
        </p>
        <p>
            <label for="background">背景</label>
            <input type="text" name="background">
        </p>
        <p>
            <label for="workloca">勤務地</label>
            <input type="text" name="workloca">
        </p>
        <p>
            <label for="worktime">勤務時間</label>
            <input type="text" name="worktime">
        </p>
        <p>
            <label for="interview">面接</label>
            <input type="text" name="interview">
        </p>

        <input type="submit" value="登録">
    </form>
</body>

</html>