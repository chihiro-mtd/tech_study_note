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

### ドキュメントルート
* Webサイトのトップディレクトリ

#### 参考文献
* [ドキュメントルートについて | baser CMS - 国産オープンソース！フリー（無料）で『コーポレートサイトにちょうどいいCMS』](http://basercms.net/manuals/1/etc/1.html)

### FQDN
* Fully Qualified Domain Name の略称、別名「絶対ドメイン名」
* DNSの階層構造において、ある特定のノードに付けられたドメイン名を表記する際、 そのノードからDNSのルートまでの全てのラベルを並べて書いたもの

#### 参考文献
* [インターネット用語1分解説～FQDNとは～ - JPNIC](https://www.nic.ad.jp/ja/basics/terms/fqdn.html)

### ドメイン
* インターネット上におけるコンピュータの「住所」を記述したもの
* ピリオドで句切られた単語のうち、最も右端の単語をトップレベルドメインと呼び、国や目的によって分類されている
  * gTLD : Generic Top Level Domain、誰でも取得できる
    * .com
    * .net
    * .org
  * ccTLD : Country Code Top Level Domain、国や地域に割り当てられる
    * .uk
    * .me
  * 汎用JP : 個人、組織を問わず日本に住所があれば登録可能。日本語ドメインも取得できる
    * .jp
  * 属性型JP : 組織の種別ごとに区別されたもの
    * .co.jp
    * .ac.jp

#### 参考文献
* [ドメインとは | ムームードメイン](https://muumuu-domain.com/?mode=guide&state=intro)
* [JPドメイン名の種類 | JPドメイン名について | JPRS](https://jprs.jp/about/jp-dom/)

### リクエストの内容 - リクエストヘッダー
* ブラウザからWebサーバに対してWebサイトの開示要求を送信する
* リクエストヘッダーにはCookieの情報、使用しているブラウザの種類等が記述されている

#### 参考文献
* [http（通信プロトコル）とは？httpの仕組みと、通信内容（リクエストヘッダとレスポンスヘッダ）の確認手順まとめ](http://viral-community.com/other-it/http-1873/)

### レスポンスの内容 - レスポンスヘッダー
* Webサーバからブラウザに対して開示許可を送る
* レスポンスヘッダーにはサーバ情報、通信の状態等が記述されている

#### 参考文献
* [http（通信プロトコル）とは？httpの仕組みと、通信内容（リクエストヘッダとレスポンスヘッダ）の確認手順まとめ](http://viral-community.com/other-it/http-1873/)

### URLエンコード
* URLとして使用して良い文字列のみでURLが構成されるよう変換すること
  * 例 : 検索サイトにおいて、検索キーワードがURL末尾に付与される場合、日本語で検索すると正しいURLにならない。そのため、適切に変換して付与する必要がある。

#### 参考文献
* [URLエンコードと検索エンジン](http://www.bousaid.dyndns.org/public/software/urlencode/index.php)
* [URLエンコードとは｜パーセントエンコーディング｜URIエンコード - 意味/定義 ： IT用語辞典](http://e-words.jp/w/URL%E3%82%A8%E3%83%B3%E3%82%B3%E3%83%BC%E3%83%89.html)

### クエリパラメータ
* 情報をWebサーバに送るためにURLに付加する値
  * 例 : 「example」というWebサイト内でサイト内検索したら以下のようなURLになった。   
  http://example.com/?a=b  
    * 「?」は以降クエリパラメータであることを示す
    * 「a」という名前の変数の値として「b」を指定している

#### 参考文献
* [「URLクエリパラメータ」とは何か、 どのような場合に「除外」するべきなのか？［第4回］ | Googleアナリティクスとは／衣袋教授のGoogleアナリティクス入門講座 | Web担当者Forum](http://web-tan.forum.impressrd.jp/e/2012/04/26/12663)

### Cron
* ジョブを自動実行・定期実行するための仕組み
  * 例 : 深夜にシステムのバックアップを自動でとっておく

#### 参考文献
* [cron の設定ガイド](https://www.express.nec.co.jp/linux/distributions/knowledge/system/crond.html)

### API
* Application Program Interfaceの略称
* プログラミングの際に利用できる命令や規則、関数等の集合
* 外部からも機能を呼び出して利用できるため、開発者にとってはゼロから開発するより手軽になる

#### 参考文献
* [APIとは - 意味の解説｜ITトレンドのIT用語集](http://it-trend.jp/words/api)

### REST API
* REST の考え方に沿った API
  * REST : Representational State Transfer
    * 情報やデータ(リソース)はURLによって一意に識別
    * リソースに対する処理はHTTPで定義されているGET、POST、PUT、DELETE、HEAD、OPTIONS、TRACEのみを使用
    * リソースをHTMLやテキスト、XML、JSON、バイナリ等様々な形式で表現できる。また、関連するデータはリンクとしてデータに含める
    * 状態はクライアント側で保持するため、必要な情報は全てリクエストに含める
* 多様なデータ形式に対応でき、負荷分散も容易なAPIがシンプルに作成可能

#### 参考文献
* [3つのフレームワークで学ぶエンタープライズJava開発入門（3）：いまさら聞けないRESTの基礎知識、JAX-RSを使ったREST APIの作り方と使い方 (1/3) - ＠IT](http://www.atmarkit.co.jp/ait/articles/1604/18/news020.html)

### JSON
* JavaScript Object Notationの略称
* 人間も計算機も容易に扱えるデータ交換フォーマット
* 2つの構造を基に構成されている
 * 名前 : 値 の集合 - オブジェクトのような構造を持つ
 * 値の順序付きリスト - 配列のような構造を持つ

#### 参考文献
* [JSON](http://www.json.org/json-ja.html)

### XML
* eXtensible Markup Languageの略称
* 文書やデータの意味や構造を記述するためのマークアップ言語
* 独自タグの設定や構造化ができるため、HTMLに比べて後から意味の読解がしやすい

#### 参考文献
* [第01回　何はともあれXMLって何？ | XMLデータベース・オフショアITアウトソーシングのサイバーテック](http://www.cybertech.co.jp/xml/contents/xmlxmldb/serial/_xmlbeginner1.php)
* [XMLとは｜Extensible Markup Language - 意味/定義 ： IT用語辞典](http://e-words.jp/w/XML.html)

## フレームワーク

### フレームワーク
* システム開発のために提供されている機能群及び骨組み
* 少ない時間的コストで意図する機能やデザインを実現できる

#### 参考文献
* [フレームワークとは？今更聞けないWebフレームワークを始めから丁寧にCode部](https://blog.codecamp.jp/web_framework)

### ライブラリ
* ある特定の機能を持ったプログラムを別のプログラムから利用できるようにした部品群

#### 参考文献
* [ライブラリとは｜library｜ライブラリー - 意味/定義 ： IT用語辞典](http://e-words.jp/w/%E3%83%A9%E3%82%A4%E3%83%96%E3%83%A9%E3%83%AA.html)

### PHPフレームワーク
* 様々な機能で開発者の素早い構築をサポートしている
  * CakePHP
  * Symfony
  * Laravel
  * FuelPHP  
  他

#### 参考文献
* [人気のPHPフレームワーク比較！おすすめの15選まとめました](http://eng-entrance.com/php_framework)

### JSフレームワーク
* それぞれの設計思想に基づき、様々な機能が提供されている
  * AngularJS
  * React
  * Riot  
  他

#### 参考文献
* [【2016年夏】個人的に注目なフロントサイドで使えるJavaScriptフレームワークまとめ - Qiita](http://qiita.com/RyutaYoshi/items/35627978de3764fa4451)

### MVC
* Model View Controllerの略称
* 処理を上記の3つの役割に分割して実装する手法
  * Model : 処理のメインロジックやデータアクセスを担当
  * View : 画面表示(HTML出力)を担当
  * Controller : クライアントからのリクエストを直接受理し、ModelとViewの制御を担当

#### 参考文献
* [PHPのオブジェクト指向入門 | オブジェクト指向PHP.NET](http://www.objective-php.net/mvc/about)

### Polymer
* JSライブラリの一種
* Web UIの作成や再利用の簡略化のため開発された経緯を持つ
* Web UI部品化技術「Web components」を基礎としている

#### 参考文献
* [Web ComponentsはじめるならPolymerで - apps-gcp](http://www.apps-gcp.com/start-webcomponents-with-polymer/)

### jQuery
* JSライブラリの一種
* シンプルな構文、充実した機能性等から人気である

#### 参考文献
* [jQueryを使う理由 - Qiita](http://qiita.com/mimoe/items/942d63d4eb4e32dd0895)

### Laravel
* PHPフレームワークの一種
* 学習コストの少なさや設計思想が時代の流れを汲んでいる点から人気を集めている

#### 参考文献
* [最新鋭のPHPフレームワーク「Laravel4」でWeb開発 | (1)導入編 | MONSTER DIVE【モンスターダイブ】](http://www.monster-dive.com/blog/web_system/20140328_001128.php)

## Laravel

### composer
* PHPのパッケージ管理プログラム

#### 参考文献
* [最新鋭のPHPフレームワーク「Laravel4」でWeb開発 | (1)導入編 | MONSTER DIVE【モンスターダイブ】](http://www.monster-dive.com/blog/web_system/20140328_001128.php)

### artisan
* Laravel を構成しているコマンドラインインターフェイス
* 様々な機能がコマンドとして呼び出せるようになっている

#### 参考文献
* [PHP Laravelのartisanコマンドのまとめ | urashita.com](http://urashita.com/archives/7174)
