# Laravel Chat App

Laravelで作るリアルタイムチャットアプリケーションです。
Laravelの学習を目的として、認証・CRUD・リアルタイム通信などを段階的に実装します。

<img width="582" height="492" alt="image" src="https://github.com/user-attachments/assets/6ab91686-e0c3-43de-82ec-2a2759fa9107" />

---

# 概要

このプロジェクトは **Laravelの開発フローを学ぶためのチャットアプリ**です。
以下のような機能を順番に実装していきます。

---

# 主な機能

- ユーザー登録
- ログイン / ログアウト
- チャット投稿
- 投稿の編集
- 投稿の削除
- リアルタイムチャット
- 無限スクロール
- 既読表示
- タイピング表示
- ファイル添付
- レスポンシブ対応

---

# 使用技術

| 技術             | バージョン     |
| ---------------- | -------------- |
| PHP              | 8.5            |
| Laravel          | 12             |
| データベース     | MySQL / SQLite |
| フロントエンド   | Blade + CSS    |
| リアルタイム通信 | Laravel Reverb |
| 認証             | Laravel Breeze |

---

# プロジェクト構成

```
laravel_chat_app
│
├ app
├ bootstrap
├ config
├ database
├ public
├ resources
├ routes
├ storage
├ tests
├ vendor
│
├ .cursor
├ .vscode
├ .gitignore
└ README.md
```

---

# セットアップ

## 1. リポジトリをクローン

```
git clone https://github.com/YOUR_NAME/laravel_chat_app.git
cd laravel_chat_app
```

---

## 2. 依存関係インストール

```
composer install
npm install
```

---

## 3. 環境ファイル作成

```
cp .env.example .env
```

アプリケーションキー生成

```
php artisan key:generate
```

---

## 4. データベース設定

`.env` を編集

例

```
DB_CONNECTION=mysql
DB_DATABASE=chat
DB_USERNAME=root
DB_PASSWORD=
```

マイグレーション実行

```
php artisan migrate
```

---

## 5. 開発サーバー起動

```
php artisan serve
```

フロントエンド

```
npm run dev
```

ブラウザ

```
http://localhost:8000
```

---

# 開発ロードマップ

このプロジェクトは以下の順番で開発します。

1. Laravel環境構築
2. データベース設計
3. チャット画面作成
4. 投稿機能
5. 投稿一覧取得
6. 投稿編集
7. 投稿削除
8. 認証機能
9. 認可制御
 <!-- 10. リアルタイムチャット（5分間隔）
10. 無限スクロール
11. 既読機能
12. タイピング表示
13. ファイル送信 -->

---

# トラブルシューティング

## PHP拡張エラー

Laravelのインストール中に以下のようなエラーが出る場合があります。

```
require ext-fileinfo * -> it is missing from your system
```

または

```
This application requires the extension "mbstring"
```

これは **PHP拡張が有効化されていないことが原因**です。

---

## PHP拡張を有効化する方法（Windows）

PHP設定ファイルを開きます。

```
C:\Users\USERNAME\scoop\apps\php\current\cli\php.ini
```

以下の拡張を有効化します。

```
extension=mbstring
extension=fileinfo
extension=pdo_sqlite
extension=sqlite3
extension=curl
extension=intl
extension=openssl
```

保存後、PowerShellを再起動してください。

---

## 有効化確認

```
php -m
```

以下が表示されればOKです。

```
mbstring
fileinfo
pdo_sqlite
sqlite3
```

---

## SQLiteエラー

以下のエラーが出る場合

```
could not find driver (Connection: sqlite)
```

原因

```
pdo_sqlite
sqlite3
```

拡張が無効です。

php.iniで有効化してください。

---

## php.iniが読み込まれているか確認

```
php --ini
```

例

```
Additional .ini files parsed:
C:\Users\USERNAME\scoop\apps\php\current\cli\php.ini
```

---

## Laravel Pint エラー

```
This application requires the extension "mbstring"
```

原因

```
mbstring
```

拡張が無効です。

---

## Pint実行

```
vendor/bin/pint
```

成功すると

```
{"result":"pass"}
```

または

```
✓ fixed files
```

が表示されます。

---

# 推奨VSCode拡張

- PHP Intelephense
- Laravel Blade Snippets
- Laravel Extra Intellisense
- Prettier

---

# メモ

## 開発時のターミナル

```
PS D:\Code\laravel_chat_app> php artisan make:model Message -m

   INFO  Model [D:\Code\laravel_chat_app\app\Models\Message.php] created successfully.

   INFO  Migration [D:\Code\laravel_chat_app\database\migrations\2026_03_10_215539_create_messages_table.php] created successfully.

PS D:\Code\laravel_chat_app> php artisan migrate

   INFO  Running migrations.

  2026_03_10_215539_create_messages_table ............................................ 16.94ms DONE

PS D:\Code\laravel_chat_app> git add .
warning: in the working copy of '.env.example', CRLF will be replaced by LF the next time Git touches it
PS D:\Code\laravel_chat_app> git add .
PS D:\Code\laravel_chat_app> git commit -m "merge"
[main ad52280] merge
PS D:\Code\laravel_chat_app> git pull origin main
git@github.com: Permission denied (publickey).
fatal: Could not read from remote repository.

Please make sure you have the correct access rights
and the repository exists.
PS D:\Code\laravel_chat_app> php artisan migrate

   INFO  Nothing to migrate.

PS D:\Code\laravel_chat_app> php artisan make:controller ChatController

   INFO  Controller [D:\Code\laravel_chat_app\app\Http\Controllers\ChatController.php] created successfully.

PS D:\Code\laravel_chat_app> composer require --dev barryvdh/laravel-ide-helper
./composer.json has been updated
Running composer update barryvdh/laravel-ide-helper
Loading composer repositories with package information
Updating dependencies
Lock file operations: 4 installs, 0 updates, 0 removals
  - Locking barryvdh/laravel-ide-helper (v3.6.1)
  - Locking barryvdh/reflection-docblock (v2.4.1)
  - Locking composer/class-map-generator (1.7.1)
  - Locking composer/pcre (3.3.2)
Writing lock file
Installing dependencies from lock file (including require-dev)
Package operations: 4 installs, 0 updates, 0 removals
  - Downloading composer/pcre (3.3.2)
  - Downloading composer/class-map-generator (1.7.1)
  - Downloading barryvdh/reflection-docblock (v2.4.1)
  - Downloading barryvdh/laravel-ide-helper (v3.6.1)
  - Installing composer/pcre (3.3.2): Extracting archive
  - Installing composer/class-map-generator (1.7.1): Extracting archive
  - Installing barryvdh/reflection-docblock (v2.4.1): Extracting archive
  - Installing barryvdh/laravel-ide-helper (v3.6.1): Extracting archive
2 package suggestions were added by new dependencies, use `composer suggest` to see details.
Generating optimized autoload files
> Illuminate\Foundation\ComposerScripts::postAutoloadDump
> @php artisan package:discover --ansi

   INFO  Discovering packages.

  barryvdh/laravel-ide-helper ................................................................ DONE
  laravel/pail ............................................................................... DONE
  laravel/sail ............................................................................... DONE
  laravel/tinker ............................................................................. DONE
  nesbot/carbon .............................................................................. DONE
  nunomaduro/collision ....................................................................... DONE
  nunomaduro/termwind ........................................................................ DONE

84 packages you are using are looking for funding.
Use the `composer fund` command to find out more!
> @php artisan vendor:publish --tag=laravel-assets --ansi --force

   INFO  No publishable resources for tag [laravel-assets].

No security vulnerability advisories found.
Using version ^3.6 for barryvdh/laravel-ide-helper
PS D:\Code\laravel_chat_app> php artisan ide-helper:generate
A new helper file was written to _ide_helper.php
PS D:\Code\laravel_chat_app> php artisan migrate

   INFO  Nothing to migrate.

PS D:\Code\laravel_chat_app> php artisan migrate:fresh

  Dropping all tables ................................................................. 3.84ms DONE

   INFO  Preparing database.

  Creating migration table ........................................................... 22.11ms DONE

   INFO  Running migrations.

  0001_01_01_000000_create_users_table ............................................... 36.78ms DONE
  0001_01_01_000001_create_cache_table ............................................... 23.72ms DONE
  0001_01_01_000002_create_jobs_table ................................................ 29.82ms DONE
  2026_03_10_215539_create_messages_table ............................................. 5.88ms DONE

PS D:\Code\laravel_chat_app> composer require laravel/breeze --dev
./composer.json has been updated
Running composer update laravel/breeze
Loading composer repositories with package information
Updating dependencies
Lock file operations: 1 install, 0 updates, 0 removals
  - Locking laravel/breeze (v2.4.1)
Writing lock file
Installing dependencies from lock file (including require-dev)
Package operations: 1 install, 0 updates, 0 removals
  - Downloading laravel/breeze (v2.4.1)
  - Installing laravel/breeze (v2.4.1): Extracting archive
Generating optimized autoload files
> Illuminate\Foundation\ComposerScripts::postAutoloadDump
> @php artisan package:discover --ansi

   INFO  Discovering packages.

  barryvdh/laravel-ide-helper ................................................................ DONE
  laravel/breeze ............................................................................. DONE
  laravel/pail ............................................................................... DONE
  laravel/sail ............................................................................... DONE
  laravel/tinker ............................................................................. DONE
  nesbot/carbon .............................................................................. DONE
  nunomaduro/collision ....................................................................... DONE
  nunomaduro/termwind ........................................................................ DONE

84 packages you are using are looking for funding.
Use the `composer fund` command to find out more!
> @php artisan vendor:publish --tag=laravel-assets --ansi --force

   INFO  No publishable resources for tag [laravel-assets].

No security vulnerability advisories found.
Using version ^2.4 for laravel/breeze
PS D:\Code\laravel_chat_app> php artisan breeze:install blade

   ErrorException

  file_get_contents(D:\Code\laravel_chat_app\resources\views/welcome.blade.php): Failed to open stream: No such file or directory

  at vendor\laravel\breeze\src\Console\InstallCommand.php:330
    326▕      * @return void
    327▕      */
    328▕     protected function replaceInFile($search, $replace, $path)
    329▕     {
  ➜ 330▕         file_put_contents($path, str_replace($search, $replace, file_get_contents($path)));
    331▕     }
    332▕
    333▕     /**
    334▕      * Get the path to the appropriate PHP binary.

  1   vendor\laravel\breeze\src\Console\InstallCommand.php:330

  2   vendor\laravel\breeze\src\Console\InstallsBladeStack.php:63
      Laravel\Breeze\Console\InstallCommand::replaceInFile()

PS D:\Code\laravel_chat_app> php artisan breeze:install blade

   INFO  Installing and building Node dependencies.


added 157 packages, and audited 158 packages in 21s

38 packages are looking for funding
  run `npm fund` for details

found 0 vulnerabilities

> build
> vite build

    vite v7.3.1 building client environment for production...
transforming...
    ✓ 54 modules transformed.
rendering chunks...
computing gzip size...
public/build/manifest.json             0.33 kB │ gzip:  0.17 kB
public/build/assets/app-DoPYJePC.css  47.97 kB │ gzip:  8.45 kB
public/build/assets/app-BIJoUbyE.js   83.51 kB │ gzip: 31.01 kB
✓ built in 734ms


   INFO  Breeze scaffolding installed successfully.

PS D:\Code\laravel_chat_app> npm install

up to date, audited 158 packages in 766ms

38 packages are looking for funding
  run `npm fund` for details

found 0 vulnerabilities
PS D:\Code\laravel_chat_app> npm run build

> build
> vite build

vite v7.3.1 building client environment for production...
✓ 54 modules transformed.
public/build/manifest.json             0.33 kB │ gzip:  0.17 kB
public/build/assets/app-DoPYJePC.css  47.97 kB │ gzip:  8.45 kB
public/build/assets/app-BIJoUbyE.js   83.51 kB │ gzip: 31.01 kB
✓ built in 611ms
PS D:\Code\laravel_chat_app> php artisan migrate

   INFO  Nothing to migrate.

PS D:\Code\laravel_chat_app> php artisan make:policy MessagePolicy --model=Message

   INFO  Policy [D:\Code\laravel_chat_app\app\Policies\MessagePolicy.php] created successfully.

PS D:\Code\laravel_chat_app> php artisan install:broadcasting

   INFO  Published 'broadcasting' configuration file.

   INFO  Published 'channels' route file.

  Which broadcasting driver would you like to use?
  Laravel Reverb ............................................................................................................................ reverb
  Pusher .................................................................................................................................... pusher
  Ably ........................................................................................................................................ ably
❯ reverb

  Would you like to install Laravel Reverb? (yes/no) [yes]
❯ yes

./composer.json has been updated
Running composer update laravel/reverb
Loading composer repositories with package information
Updating dependencies
Lock file operations: 14 installs, 0 updates, 0 removals
  - Locking clue/redis-protocol (v0.3.2)
  - Locking clue/redis-react (v2.8.0)
  - Locking evenement/evenement (v3.0.2)
  - Locking laravel/reverb (v1.8.0)
  - Locking paragonie/sodium_compat (v2.5.0)
  - Locking pusher/pusher-php-server (7.2.7)
  - Locking ratchet/rfc6455 (v0.4.0)
  - Locking react/cache (v1.2.0)
  - Locking react/dns (v1.14.0)
  - Locking evenement/evenement (v3.0.2)
  - Locking laravel/reverb (v1.8.0)
  - Locking paragonie/sodium_compat (v2.5.0)
  - Locking pusher/pusher-php-server (7.2.7)
  - Locking ratchet/rfc6455 (v0.4.0)
  - Locking react/cache (v1.2.0)
  - Locking react/dns (v1.14.0)
  - Locking laravel/reverb (v1.8.0)
  - Locking paragonie/sodium_compat (v2.5.0)
  - Locking pusher/pusher-php-server (7.2.7)
  - Locking ratchet/rfc6455 (v0.4.0)
  - Locking react/cache (v1.2.0)
  - Locking react/dns (v1.14.0)
  - Locking paragonie/sodium_compat (v2.5.0)
  - Locking pusher/pusher-php-server (7.2.7)
  - Locking ratchet/rfc6455 (v0.4.0)
  - Locking react/cache (v1.2.0)
  - Locking react/dns (v1.14.0)
  - Locking react/event-loop (v1.6.0)
  - Locking react/promise (v3.3.0)
  - Locking react/promise-timer (v1.11.0)
  - Locking ratchet/rfc6455 (v0.4.0)
  - Locking react/cache (v1.2.0)
  - Locking react/dns (v1.14.0)
  - Locking react/event-loop (v1.6.0)
  - Locking react/promise (v3.3.0)
  - Locking react/promise-timer (v1.11.0)
  - Locking react/socket (v1.17.0)
  - Locking react/stream (v1.4.0)
  - Locking react/dns (v1.14.0)
  - Locking react/event-loop (v1.6.0)
  - Locking react/promise (v3.3.0)
  - Locking react/promise-timer (v1.11.0)
  - Locking react/socket (v1.17.0)
  - Locking react/stream (v1.4.0)
Writing lock file
Installing dependencies from lock file (including require-dev)
  - Locking react/promise (v3.3.0)
  - Locking react/promise-timer (v1.11.0)
  - Locking react/socket (v1.17.0)
  - Locking react/stream (v1.4.0)
Writing lock file
Installing dependencies from lock file (including require-dev)
  - Locking react/socket (v1.17.0)
  - Locking react/stream (v1.4.0)
Writing lock file
Installing dependencies from lock file (including require-dev)
Package operations: 14 installs, 0 updates, 0 removals
Writing lock file
Installing dependencies from lock file (including require-dev)
Package operations: 14 installs, 0 updates, 0 removals
  - Downloading clue/redis-protocol (v0.3.2)
Package operations: 14 installs, 0 updates, 0 removals
  - Downloading clue/redis-protocol (v0.3.2)
  - Downloading clue/redis-protocol (v0.3.2)
  - Downloading react/event-loop (v1.6.0)
  - Downloading evenement/evenement (v3.0.2)
  - Downloading react/stream (v1.4.0)
  - Downloading react/promise (v3.3.0)
  - Downloading react/cache (v1.2.0)
  - Downloading react/dns (v1.14.0)
  - Downloading react/socket (v1.17.0)
  - Downloading react/promise-timer (v1.11.0)
  - Downloading ratchet/rfc6455 (v0.4.0)
  - Downloading paragonie/sodium_compat (v2.5.0)
  - Downloading pusher/pusher-php-server (7.2.7)
  - Downloading clue/redis-react (v2.8.0)
  - Downloading laravel/reverb (v1.8.0)
  0/14 [>---------------------------]   0%
  3/14 [======>---------------------]  21%
 11/14 [======================>-----]  78%
 12/14 [========================>---]  85%
 13/14 [==========================>-]  92%
 14/14 [============================] 100%
  - Installing clue/redis-protocol (v0.3.2): Extracting archive
  - Installing react/event-loop (v1.6.0): Extracting archive
  - Installing evenement/evenement (v3.0.2): Extracting archive
  - Installing react/stream (v1.4.0): Extracting archive
  - Installing react/promise (v3.3.0): Extracting archive
  - Installing react/cache (v1.2.0): Extracting archive
  - Installing react/dns (v1.14.0): Extracting archive
  - Installing react/socket (v1.17.0): Extracting archive
  - Installing react/promise-timer (v1.11.0): Extracting archive
  - Installing ratchet/rfc6455 (v0.4.0): Extracting archive
  - Installing paragonie/sodium_compat (v2.5.0): Extracting archive
  - Installing pusher/pusher-php-server (7.2.7): Extracting archive
  - Installing clue/redis-react (v2.8.0): Extracting archive
  - Installing laravel/reverb (v1.8.0): Extracting archive
  0/14 [>---------------------------]   0%
 10/14 [====================>-------]  71%
 13/14 [==========================>-]  92%
 14/14 [============================] 100%
2 package suggestions were added by new dependencies, use `composer suggest` to see details.
Generating optimized autoload files
> Illuminate\Foundation\ComposerScripts::postAutoloadDump
> @php artisan package:discover --ansi

   INFO  Discovering packages.

  barryvdh/laravel-ide-helper ................................................................................................................. DONE
  laravel/breeze .............................................................................................................................. DONE
  laravel/pail ................................................................................................................................ DONE
  laravel/reverb .............................................................................................................................. DONE
  laravel/sail ................................................................................................................................ DONE
  laravel/tinker .............................................................................................................................. DONE
  nesbot/carbon ............................................................................................................................... DONE
  nunomaduro/collision ........................................................................................................................ DONE
  nunomaduro/termwind ......................................................................................................................... DONE

93 packages you are using are looking for funding.
Use the `composer fund` command to find out more!
> @php artisan vendor:publish --tag=laravel-assets --ansi --force

   INFO  No publishable resources for tag [laravel-assets].

No security vulnerability advisories found.
   INFO  Reverb installed successfully.

  Would you like to install and build the Node dependencies required for broadcasting? (yes/no) [yes]
❯

   INFO  Installing and building Node dependencies.

   INFO  Node dependencies installed successfully.

PS D:\Code\laravel_chat_app> php artisan make:event MessageSent

   INFO  Event [D:\Code\laravel_chat_app\app\Events\MessageSent.php] created successfully.

PS D:\Code\laravel_chat_app> php artisan reverb:start

   INFO  Starting server on 0.0.0.0:8080 (localhost).

   INFO  Gracefully terminating connections.

PS D:\Code\laravel_chat_app> npm run build

> build
> vite build

vite v7.3.1 building client environment for production...
✓ 60 modules transformed.
public/build/manifest.json              0.33 kB │ gzip:  0.17 kB
public/build/assets/app-DoPYJePC.css   47.97 kB │ gzip:  8.45 kB
public/build/assets/app-DfqWi74n.js   158.42 kB │ gzip: 52.60 kB
✓ built in 793ms
PS D:\Code\laravel_chat_app> npm run dev

> dev
> vite


  VITE v7.3.1  ready in 199 ms

  ➜  Local:   http://localhost:5173/
  ➜  Network: use --host to expose
  ➜  press h + enter to show help

  LARAVEL v12.54.1  plugin v2.1.0

  ➜  APP_URL: http://localhost
PS D:\Code\laravel_chat_app> npm list laravel-echo
laravel_chat_app@ D:\Code\laravel_chat_app
└── laravel-echo@2.3.1

PS D:\Code\laravel_chat_app> npm install laravel-echo pusher-js

up to date, audited 170 packages in 1s

38 packages are looking for funding
  run `npm fund` for details

found 0 vulnerabilities
PS D:\Code\laravel_chat_app> npm run build

> build
> vite build

vite v7.3.1 building client environment for production...
✓ 60 modules transformed.
public/build/manifest.json              0.33 kB │ gzip:  0.17 kB
public/build/assets/app-DoPYJePC.css   47.97 kB │ gzip:  8.45 kB
public/build/assets/app-DfqWi74n.js   158.42 kB │ gzip: 52.60 kB
✓ built in 775ms
PS D:\Code\laravel_chat_app> npm run dev

> dev
> vite


  VITE v7.3.1  ready in 194 ms

  ➜  Local:   http://localhost:5173/
  ➜  Network: use --host to expose
  ➜  press h + enter to show help

  LARAVEL v12.54.1  plugin v2.1.0

  ➜  APP_URL: http://localhost
PS D:\Code\laravel_chat_app> npm run dev

> dev
> vite


  VITE v7.3.1  ready in 200 ms

  ➜  Local:   http://localhost:5173/
  ➜  Network: use --host to expose
  ➜  press h + enter to show help

  LARAVEL v12.54.1  plugin v2.1.0

  ➜  APP_URL: http://localhost













  VITE v7.3.1  ready in 200 ms

  ➜  Local:   http://localhost:5173/
  ➜  Network: use --host to expose
  ➜  press h + enter to show help

  LARAVEL v12.54.1  plugin v2.1.0

  ➜  APP_URL: http://localhost











  VITE v7.3.1  ready in 200 ms

  ➜  Local:   http://localhost:5173/
  ➜  Network: use --host to expose
  ➜  press h + enter to show help

  LARAVEL v12.54.1  plugin v2.1.0

  ➜  APP_URL: http://localhost








  VITE v7.3.1  ready in 200 ms

  ➜  Local:   http://localhost:5173/
  ➜  Network: use --host to expose
  ➜  press h + enter to show help

  LARAVEL v12.54.1  plugin v2.1.0

  ➜  APP_URL: http://localhost




  VITE v7.3.1  ready in 200 ms

  ➜  Local:   http://localhost:5173/
  ➜  Network: use --host to expose
  ➜  press h + enter to show help

  VITE v7.3.1  ready in 200 ms



  VITE v7.3.1  ready in 200 ms

  ➜  Local:   http://localhost:5173/
  ➜  Network: use --host to expose
  ➜  press h + enter to show help

  LARAVEL v12.54.1  plugin v2.1.0

  ➜  APP_URL: http://localhost



























8:23:53 [vite] .env changed, restarting server...
8:23:53 [vite] server restarted.

  LARAVEL v12.54.1  plugin v2.1.0

  ➜  APP_URL: http://localhost
PS D:\Code\laravel_chat_app> npm run dev

> dev
> vite


  VITE v7.3.1  ready in 196 ms

  ➜  Local:   http://localhost:5173/
  ➜  Network: use --host to expose
  ➜  press h + enter to show help

  LARAVEL v12.54.1  plugin v2.1.0

  ➜  APP_URL: http://localhost
PS D:\Code\laravel_chat_app> php artisan optimize:clear

   INFO  Clearing cached bootstrap files.

  config .......................................... 0.94ms DONE
  cache .......................................... 17.82ms DONE
  compiled ........................................ 1.11ms DONE
  events .......................................... 0.42ms DONE
  routes .......................................... 0.42ms DONE
  views .......................................... 10.77ms DONE

PS D:\Code\laravel_chat_app> npm run dev

> dev
> vite


  VITE v7.3.1  ready in 196 ms

  ➜  Local:   http://localhost:5173/
  ➜  Network: use --host to expose
  ➜  press h + enter to show help

  LARAVEL v12.54.1  plugin v2.1.0

  ➜  APP_URL: http://localhost
8:29:52 [vite] .env changed, restarting server...
8:29:52 [vite] server restarted.

  LARAVEL v12.54.1  plugin v2.1.0

  ➜  APP_URL: http://localhost
PS D:\Code\laravel_chat_app> npm run dev

> dev
> vite


  VITE v7.3.1  ready in 196 ms

  ➜  Local:   http://localhost:5173/
  ➜  Network: use --host to expose
  ➜  press h + enter to show help

  LARAVEL v12.54.1  plugin v2.1.0

  ➜  APP_URL: http://localhost
PS D:\Code\laravel_chat_app> npm run dev

> dev
> vite


  VITE v7.3.1  ready in 193 ms

  ➜  Local:   http://localhost:5173/
  ➜  Network: use --host to expose
  ➜  press h + enter to show help

  LARAVEL v12.54.1  plugin v2.1.0

  ➜  APP_URL: http://localhost

```

# ライセンス

MIT License
