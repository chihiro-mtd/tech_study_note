技術学習ノート
======

## PHP の基礎
### 参考文献
* [PHPの基礎の基礎の基礎 - Qiita](http://qiita.com/konojunya/items/492e8114e6bd55344731)

## インタプリタ
* コンパイラはプログラム全体を機械語にまとめて変換してひとつのソフトウェアにする
* インタプリタはプログラムをあるソフトウェアが翻訳して実行
* PHP はインタプリタ型言語である

### 参考文献
* [コンパイラとインタプリタ](http://www2.cc.niigata-u.ac.jp/~takeuchi/tbasic/Intro2Basic/Interpreter.html)
* [例で覚えるPHP 第１回　PHPの基本 - ほぷしぃ](http://www.isl.ne.jp/pcsp/php/contents_1.html)

## 実行時エラー
* コンパイルエラーは文法的誤りで発生する
* 実行時エラーは実行処理中に起こるエラーである
* インタプリタ型言語において発生するエラーは全て実行時エラーとなる

### 参考文献
* [ランタイムエラーとは｜実行時エラー｜runtime error - 意味/定義 ： IT用語辞典](http://e-words.jp/w/%E3%83%A9%E3%83%B3%E3%82%BF%E3%82%A4%E3%83%A0%E3%82%A8%E3%83%A9%E3%83%BC.html)

## CGI
* サーバ側で動作する、プログラムを起動させるための仕組み
* Webページの閲覧者との間でインタラクティブな機能を提供できる
  * 掲示板
  * アクセスカウンター

### 参考文献
* [CGIの概要](http://www.tohoho-web.com/wwwcgi1.htm)
* [CGIの基礎知識](http://www.tryhp.net/first.htm)
* [CGIとは｜Common Gateway Interface - 意味/定義 ： IT用語辞典](http://e-words.jp/w/CGI.html)

## セッション
* 複数ページにまたがるユーザの状態の情報を保持しておくサーバベースの仕組み
* ブラウザを閉じるまで情報を保持する

### 参考文献
* [PHP: 基本的な使用法 - Manual](http://php.net/manual/ja/session.examples.basic.php)
* [Cookieとセッションをちゃんと理解する - Qiita](http://qiita.com/hththt/items/07136ad74127999df271)
* [PHPでセッションを使う方法【初心者向け】 | TechAcademyマガジン](http://techacademy.jp/magazine/4970)

## PHP と Cookie の関係
* ブラウザを閉じても情報がクライアント側で保持される仕組み
* ユーザが改ざんすることもできるため、管理するデータの種別については考える必要がある

### 参考文献
* [PHPでCookie(クッキー)を使う方法【初心者向け】 | TechAcademyマガジン](http://techacademy.jp/magazine/4961)
* [ThinkIT 第8回：Cookieとセッション情報 (1/3)](https://thinkit.co.jp/free/article/0604/7/8/)