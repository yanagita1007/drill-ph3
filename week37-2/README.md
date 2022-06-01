# 37週目ミニドリル 2問目

## 事前準備

以下手順で環境の立ち上げをお願いします。(※ 10分 ~ 15分 かかります)

`docker-compose build --no-cache`

`docker-compose up -d`

`docker-compose exec ph3-posseapp-app bash`

- appコンテナ内

(#以降のコマンドを入力してください)

`/var/www/html# composer install`

`/var/www/html# php artisan migrate:refresh --seed`

- ブラウザ
  - マイグレーション、シーディングを完了後に、http://localhost/ に遷移(ログイン画面にリダイレクトする)
  - email: test+1@posse-ap.com, pw: password でログインしてください

## 問題

home.blade.phpの32行目で出力しているfull name (フルネーム) は「first_name + スペース + family_name」の形で表現されています

フルネームの様なよく使ったりする項目は `$user->full_name` の形で扱えると扱いやすくなりそうです

Userモデルにアクセサを定義して `$user->full_name` として利用できるようにし、home.blade.phpで実際に利用してフルネームがちゃんと表示されることを確認してください

### 修正箇所

`src/app/Models/User.php` にアクセサ?、カスタムアクセサ?を作成

`src/resources/views/home.blade.php:32` でアクセサ?、カスタムアクセサ?を利用


### 終了条件

アクセサ?、カスタムアクセサ?を利用してる状態で http://localhost/ に遷移してユーザーカード一覧が表示される

フルネームがちゃんと「first_name + スペース + family_name」で表示されていること
