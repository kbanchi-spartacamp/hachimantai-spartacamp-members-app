# hachimantai-spartacamp-members-app

## 八幡平市スパルタキャンプ参加者用Webアプリとは
* 八幡平スパルタキャンプ参加者の『ペイン』を解決したい、Webアプリ
  * どこでWi-Fiつながるのかな？
  * 美味しいレストランどこかな？
  * 近くのコインランドリーどこかな？
  * スーパーやドラッグストアってどこかな？
* これを開発して、部屋のみんなでLaravelの学習をしよう！！

## 開発手順

```
$ git clone git@github.com:kbanchi-spartacamp/hachimantai-spartacamp-members-app.git
$ cd hachimantai-spartacamp-members-app
$ git switch develop
$ docker run --rm \
  -v $(pwd):/opt \
  -w /opt \
  laravelsail/php80-composer:latest \
  bash -c "composer install"
$ cp .env.example .env
$ sail up -d
$ sail artisan key:generate
```

## 画面URL

* [ログイン画面](http://localhost/login)
* [サインアップ画面](http://localhost/sign-up)
* [TOP画面](http://localhost/top)
* [Wi-Fiスポット画面](http://localhost/wifi-spot)
* [温泉画面](http://localhost/hot-spring)
* [求人情報画面](http://localhost/controller/recruit)
* 飲食店情報
* スーパー情報
* コインランドリー情報
* ガソリンスタンド情報
* 盛岡情報
* 車(レンタカー・リース)情報
* 賃貸・シェアハウス
* 観光地
