# 37週目ミニドリル 1問目

## 事前準備

以下手順で環境の立ち上げをお願いします。(※ 10分 ~ 15分 かかります)
`docker-compose build --no-cache`
`docker-compose up -d`
`docker exec -it week37-1_ph3-posseapp-app_1 bash`

- appコンテナ内
(/var/www/html# は打ち込まないです。コマンド実行場所をわかりやすくするためです)
`/var/www/html# composer install`
`/var/www/html# php artisan migrate:refresh --seed`

- ブラウザ
  - マイグレーション、シーディングを完了後に、http://localhost/ に遷移(ログイン画面にリダイレクトする)
  - email: test+1@posse-ap.com, pw: password でログインしてください

## 問題

HomeControllerにusersテーブルのgenerationカラムが1のユーザー郡を取得する処理があります
whereで絞り込みをしているのでカスタムスコープでfirstGenerationメソッドを作成して差し替えてください

### 修正箇所

`src/app/Models/User.php` にローカルスコープを作成
`src/app/Http/Controllers/HomeController.php:13` で作成したローカルスコープを利用

### 終了条件

ローカルスコープを利用してる状態で http://localhost/ に遷移してユーザーカード一覧が表示される
