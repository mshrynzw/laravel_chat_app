# Laravel Chat App

Laravelで作るリアルタイムチャットアプリケーションです。
Laravelの学習を目的として、認証・CRUD・リアルタイム通信などを段階的に実装します。

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
10. リアルタイムチャット
11. 無限スクロール
12. 既読機能
13. タイピング表示
14. ファイル送信

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

# ライセンス

MIT License
