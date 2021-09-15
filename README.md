# hachimantai-spartacamp-members-app

## 八幡平市スパルタキャンプ参加者用Webアプリとは

## 開発手順

```
$ git clone https://github.com/kbanchi-spartacamp/hachimantai-spartacamp-members-app
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