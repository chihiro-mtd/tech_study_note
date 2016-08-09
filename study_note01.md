技術学習ノート
======
## PHP

### PHP の基礎

#### 参考文献
* [PHPの基礎の基礎の基礎 - Qiita](http://qiita.com/konojunya/items/492e8114e6bd55344731)

### インタプリタ
* コンパイラはプログラム全体を機械語にまとめて変換してひとつのソフトウェアにする
* インタプリタはプログラムをあるソフトウェアが翻訳して実行
* PHP はインタプリタ型言語である

#### 参考文献
* [コンパイラとインタプリタ](http://www2.cc.niigata-u.ac.jp/~takeuchi/tbasic/Intro2Basic/Interpreter.html)
* [例で覚えるPHP 第１回　PHPの基本 - ほぷしぃ](http://www.isl.ne.jp/pcsp/php/contents_1.html)

### 実行時エラー
* コンパイルエラーは文法的誤りで発生する
* 実行時エラーは実行処理中に起こるエラーである
* インタプリタ型言語において発生するエラーは全て実行時エラーとなる

#### 参考文献
* [ランタイムエラーとは｜実行時エラー｜runtime error - 意味/定義 ： IT用語辞典](http://e-words.jp/w/%E3%83%A9%E3%83%B3%E3%82%BF%E3%82%A4%E3%83%A0%E3%82%A8%E3%83%A9%E3%83%BC.html)

### CGI
* サーバ側で動作する、プログラムを起動させるための仕組み
* Webページの閲覧者との間でインタラクティブな機能を提供できる
  * 掲示板
  * アクセスカウンター

#### 参考文献
* [CGIの概要](http://www.tohoho-web.com/wwwcgi1.htm)
* [CGIの基礎知識](http://www.tryhp.net/first.htm)
* [CGIとは｜Common Gateway Interface - 意味/定義 ： IT用語辞典](http://e-words.jp/w/CGI.html)

### セッション
* 複数ページにまたがるユーザの状態の情報を保持しておくサーバベースの仕組み
* ブラウザを閉じるまで情報を保持する

#### 参考文献
* [PHP: 基本的な使用法 - Manual](http://php.net/manual/ja/session.examples.basic.php)
* [Cookieとセッションをちゃんと理解する - Qiita](http://qiita.com/hththt/items/07136ad74127999df271)
* [PHPでセッションを使う方法【初心者向け】 | TechAcademyマガジン](http://techacademy.jp/magazine/4970)

### PHP と Cookie の関係
* ブラウザを閉じても情報がクライアント側で保持される仕組み
* ユーザが改ざんすることもできるため、管理するデータの種別については考える必要がある

#### 参考文献
* [PHPでCookie(クッキー)を使う方法【初心者向け】 | TechAcademyマガジン](http://techacademy.jp/magazine/4961)
* [ThinkIT 第8回：Cookieとセッション情報 (1/3)](https://thinkit.co.jp/free/article/0604/7/8/)

## データベース

### テーブル
* 二次元的な表であらわされるデータ管理の単位

#### 参考文献
* [新入社員必読、データベースの基本を理解しよう - データベースの構造はどうなっているの？：ITpro](http://itpro.nikkeibp.co.jp/article/COLUMN/20130416/471169/)

### レコード
* テーブルに含まれる横1列の行

#### 参考文献
* [新入社員必読、データベースの基本を理解しよう - データベースの構造はどうなっているの？：ITpro](http://itpro.nikkeibp.co.jp/article/COLUMN/20130416/471169/)

### バリデーション
* 入力値がルールに従っているかチェックする仕組み
  * パスワードは8文字以上か？
  * ユーザ名はユニークか？

#### 参考文献
* [データバリデーション](http://book.cakephp.org/2.0/ja/models/data-validation.html)
* [バリデーションとは｜validation｜バリデート｜validate - 意味/定義 ： IT用語辞典](http://e-words.jp/w/%E3%83%90%E3%83%AA%E3%83%87%E3%83%BC%E3%82%B7%E3%83%A7%E3%83%B3.html)

### CRUD
* Webアプリの4つの基本動作の略称
  * Create - 新規作成
  * Read - 表示
  * Update - 更新
  * Destroy - 削除

#### 参考文献
* [CRUDの基礎とindexアクション](http://igarashikuniaki.net/rails_textbook/crud.html)

### SQL
* Structured Query Language の略称
* リレーショナルデータベースを操作するための言語

#### 参考文献
* [データベース基礎 SQL入門1 1章-神田IT School - JAVA、LINUX、PHPのプログラマー・ＳＥ育成のIT教育専門修教機関](http://se-java-school.com/itstudy/database/intro_db_jdbc/sqltext_01.php)

### MySQL
* オープンソースのリレーショナルデータベース管理システム
* マルチユーザ対応なので複数人が同時に利用するWebアプリケーションに適している
* 非商用利用であれば無償で利用できる

#### 参考文献
* [■MySQLとは？: MySQL初心者入門講座](http://mysqlweb.net/category/3969830-1.html)
* [MySQLとは？データベース管理システム、MySQLを徹底入門！Code部](https://blog.codecamp.jp/what_is_mysql)

### Primary Key
* 別名「主キー」
* テーブルの中でレコードを一意に識別する項目
* ユニークな値が付与されるため同じテーブル内に完全に一致するPrimary Keyを持つレコードは存在しない
  * 「人名」フィールドに同じ値が入っていて、Primary Keyが異なる場合、それらは同姓同名の別人である

#### 参考文献
* [１週間で学ぶIT基礎の基礎 - すぐわかるデータベースの基礎（3）：ITpro](http://itpro.nikkeibp.co.jp/members/ITPro/ITBASIC/20000919/1/)

### Index
* データベースの検索を高速化するための仕組み
* テーブルとは別に、検索のために最適化された構造を用意しておくこと
* 手法として「B-Treeインデックス」が有名

#### 参考文献
* [インデックスの基礎知識](http://www.hi-ho.ne.jp/tsumiki/doc_1.html)
* [インデックスの意味とメリット・デメリット - SQLite入門](http://www.dbonline.jp/sqlite/index/index1.html)

### Key Value
* Key と Value を組として保存し、Keyの指定でデータを取得できるようにする仕組み
* 分散処理に適している

#### 参考文献
* [触ってみよう！ビッグデータを支えるクラウド技術 - なぜ「キー・バリュー型データストア」が注目されるのか：ITpro](http://itpro.nikkeibp.co.jp/article/COLUMN/20120306/384806/)

### Connection
* データベースにアクセスする際のアクセス許可証
* 「アクセスしたいデータベースの指定」「ユーザ名」「パスワード」といった情報を入力して初めてConnectionが与えられ、データベースに接続できる

#### 参考文献
* [コネクションとは : JavaA2Z](http://www.kab-studio.biz/Programing/JavaA2Z/Word/00000420.html)

### Slave & Master
* データベースを複数台に増やし同期させる(レプリケーション)際、
元々存在していたデータベースがMaster、それ以外がSlave
* Masterが「親」、Slaveが「子」の関係にあたる

#### 参考文献
* [[ThinkIT] 第6回：データベースの負荷分散とまとめ (1/3)](https://thinkit.co.jp/free/article/0610/1/6/)

### トランザクション
* 複数のデータ更新をまとめて実行・反映させること
  * 例 : 預金の振替処理(口座AからN円引き落とす処理 + 口座BにN円振り込む処理)

### 参考文献
* [第1回　トランザクションについて｜オススメ！OSS-DB情報｜OSS-DB道場｜受験対策｜DBスペシャリストを認定する資格 OSS-DB技術者認定試験](http://www.oss-db.jp/measures/dojo_01.shtml)

## WEBシステム読み解き

### ポート番号
* TCP/IP通信においてコンピュータが通信に使用するプログラムを識別するための番号
*  TCP/IPネットワーク上でコンピュータ同士が通信を行う際には、IPアドレスとポート番号がセットとして扱われる
* IPアドレスはコンピュータの識別を目的に利用されるが、ポート番号はどのプログラムにパケットを届けるかを指定するもの

#### 参考文献
* [インターネット用語1分解説～ポート番号とは～ - JPNIC](https://www.nic.ad.jp/ja/basics/terms/port-number.html)

### Webサーバ & DBサーバ
* クライアントからWebサーバへリクエストを送り、それに対しレスポンスを返す
* WebサーバからDBサーバへリクエストを送り、それに対しレスポンスを返す
* 作業内容の切り離しを行うことで負荷分散や改修がしやすい

#### 参考文献
* [超絶初心者のためのサーバとクライアントの話 - Qiita](http://qiita.com/shuntaro_tamura/items/ae55b99deb9e2a170754#4db%E3%82%B5%E3%83%BC%E3%83%90%E3%81%A8db%E3%82%AF%E3%83%A9%E3%82%A4%E3%82%A2%E3%83%B3%E3%83%88%E3%81%AE%E4%BB%95%E7%B5%84%E3%81%BF)
* [Webアプリの常識をJSPとStrutsで身につける（3）：Webアプリにおけるサーバとクライアントの常識 (1/3) - ＠IT](http://www.atmarkit.co.jp/ait/articles/0809/01/news162.html)

### FTP
* File Transfer Protocol の略称
* サーバとクライアント間でファイルを転送するためのプロトコル
* ユーザ認証により操作権限の付与と管理が可能

#### 参考文献
* [FTP - インターネット用語辞典 - ｜ OCN](http://www.ocn.ne.jp/support/words/def/FTP.html)

### ssh
* Secure Shell の略称
* 暗号や認証の技術を利用して安全にリモートコンピュータと通信するためのプロトコル

#### 参考文献
* [インフラエンジニアじゃなくても押さえておきたいSSHの基礎知識 - Qiita](http://qiita.com/tag1216/items/5d06bad7468f731f590e)

### scp
* sshを利用してネットワーク上のホスト間でファイルコピーを行うためのコマンド

#### 参考文献
* [SCP (1)](http://euske.github.io/openssh-jman/scp.html)

### Apache
* Webサーバの一種
* 信頼性の高さ、対応プラットフォームの多さ、機能性の良さやオープンソースである点からWebサーバの定番となっている

#### 参考文献
* [ThinkIT 第1回：Apacheはインターネットで使うWebサーバなのだ (3/3)](https://thinkit.co.jp/cert/article/0706/3/1/3.htm)

### Nginx
* Webサーバの一種
* 高速、メモリ消費が少ない、軽量といった点で注目されている
* モジュールを追加することにより様々な機能を利用できる

#### 参考文献
* [これから始める人のためのNginx（1）：高速・軽量・高機能……Nginxの基礎知識 (1/2) - ＠IT](http://www.atmarkit.co.jp/ait/articles/1406/17/news013.html)

### リダイレクト
* リクエストされたURLとは別のURLに移動させること

#### 参考文献
* [不正なリダイレクト - Search Console ヘルプ](https://support.google.com/webmasters/answer/2721217?hl=ja)

### リライト
* アクセスされたURLを正規表現によって書きかえ処理すること
* リダイレクト処理は実URLしか指定できないが、リライト処理により大量の転送処理を実現できる
* 接続元やブラウザによって場合分け、振り分けすることもできる

#### 参考文献
* [杉浦とホームページ製作～ＵＲＬを書き換えろ！「Rewrite 機能とは」](http://www.nurs.or.jp/~sug/homep/rewrite/rewrite1.htm)
