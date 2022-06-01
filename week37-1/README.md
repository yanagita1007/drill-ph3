# 37週目ミニドリル 1問目

## 事前準備

以下手順で環境の立ち上げをお願いします。(※ 10分 ~ 15分 かかります)

`docker-compose build --no-cache`

`docker-compose up -d`

`docker-compose exec ph3-posseapp-app bash`

- appコンテナ内

( #以降のコマンドを実行してください )

`/var/www/html# composer install`

`/var/www/html# php artisan migrate:refresh --seed`

- ブラウザ
  - マイグレーション、シーディングを完了後に、http://localhost/ に遷移(ログイン画面にリダイレクトする)
  - email: test+1@posse-ap.com, pw: password でログインしてください

## 問題

HomeControllerにusersテーブルのgenerationカラムが1のユーザー郡を取得する処理があります

同様の処理をModelクラスにメソッド（カスタムスコープ）を作成して、差し替えてください

### 修正箇所

`src/app/Models/User.php` にメソッド（ローカルスコープ）を作成

`src/app/Http/Controllers/HomeController.php:13` Userモデルに作成したメソッドを利用

### 終了条件

- http://localhost/ に遷移してユーザーカード一覧が表示される
- ローカルスコープのメソッドを利用している

