# 初期セットアップ

## はじめに
* 楽しみましょう
* 助け合いましょう
* 一生懸命やりましょう

## GitHubへの登録
GitHubのリポジトリにメンバー登録するので、伴地までご連絡ください。

## git clone → 起動確認
* GitHubからソースコードをクローンし、起動する。
* 開発は「develop」ブランチで行います(mainへはpush禁止)。
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
$ code .env  # MySQLの接続情報を以下に修正する
// 省略
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=hachimantai_spartacamp_members_app
DB_USERNAME=sail
DB_PASSWORD=password
// 省略
$ sail up -d
$ sail artisan key:generate
$ sail artisan migrate:fresh --seed
```
* [ログインページ](http://localhost/login)にアクセスし、ページが表示できれば、OK
