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
* セッションIDがユーザ識別子として機能する
  * Webサイトがアクセスを受けたら、ページ生成と並行してセッションIDを生成する
  * セッションIDが閲覧Webブラウザに送信される
  * ブラウザがWebページの開示要求と一緒にセッションIDを送信することで、Webサイト側は閲覧者を識別する

#### 参考文献
* [PHP: 基本的な使用法 - Manual](http://php.net/manual/ja/session.examples.basic.php)
* [Cookieとセッションをちゃんと理解する - Qiita](http://qiita.com/hththt/items/07136ad74127999df271)
* [PHPでセッションを使う方法【初心者向け】 | TechAcademyマガジン](http://techacademy.jp/magazine/4970)
* [Cookieとセッションをちゃんと理解する - Qiita](http://qiita.com/hththt/items/07136ad74127999df271)
* [「セッション管理」のすべて - ステップ1 ［基本のしくみ］　Webブラウザに情報を預けて、アクセス時に送信させる：ITpro](http://itpro.nikkeibp.co.jp/article/COLUMN/20081010/316687/?rt=nocnt)

### PHP と Cookie の関係
* ブラウザを閉じても情報がクライアント側で保持される仕組み
* ユーザが改ざんすることもできるため、管理するデータの種別については考える必要がある

#### 参考文献
* [PHPでCookie(クッキー)を使う方法【初心者向け】 | TechAcademyマガジン](http://techacademy.jp/magazine/4961)
* [ThinkIT 第8回：Cookieとセッション情報 (1/3)](https://thinkit.co.jp/free/article/0604/7/8/)

### セッションとCookie
* セッションIDがCookieに保存される
* セッションIDとWebサーバ上のファイルを照合し、セッション内容を取り出す
  * Cookieの内容はユーザが読み書きできるものなので、セッションIDはあくまで「整理番号」として格納しておき、実際に利用したいデータはサーバ側で管理する
* WebサイトからWebブラウザへ送るHTTPレスポンスの拡張ヘッダーにCookieとしてセッションIDを書き込んで送信
* WebブラウザからWebサイトへ送るHTTPリクエストの拡張ヘッダーにCookieをつけて送信
* CookieはWebサイトが指定した有効期限までWebブラウザが保持しておくため、この間、いつ同サイトにアクセスしても同じCookieを送ることになる

#### 参考文献
* [Cookieとセッションをちゃんと理解する - Qiita](http://qiita.com/hththt/items/07136ad74127999df271)
* [「セッション管理」のすべて - ステップ1 ［基本のしくみ］　Webブラウザに情報を預けて、アクセス時に送信させる：ITpro](http://itpro.nikkeibp.co.jp/article/COLUMN/20081010/316687/?rt=nocnt)

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

## HTML5

### ローカルストレージ
* Webブラウザにデータを保存する仕組み
* ページを閉じても保存したデータは保持される

#### 参考文献
* [STEP1-6.ローカルストレージを使ってみる / チームラボ オンラインスキルアップ課題](http://team-lab.github.io/skillup-nodejs/1/6.html)

### CSS - CSS3
* 従来のCSSにさらに装飾や機能を拡張したもの
* 従来の記述と混在が可能である

#### 参考文献
* [CSS3とは？ 機能が増えて便利になったスタイルシート [ホームページ作成] All About](http://allabout.co.jp/gm/gc/376450/)

## 設計

### 機能設計書
* 開発するソフトウェアについて、どのような機能を持たせるか、どのように実装するかを規定する
* プロジェクト内の共通認識を形成することが目的

#### 参考文献
* [仕様書の書き方について - なんとな～くしあわせ？の日記](http://nantonaku-shiawase.hatenablog.com/entry/2014/05/18/012107)
* [機能設計とは｜function design｜FD - 意味/定義 ： IT用語辞典](http://e-words.jp/w/%E6%A9%9F%E8%83%BD%E8%A8%AD%E8%A8%88.html)

### 機能構成図
* 機能を階層的に 3x3 のマトリクスで表現した図
* システムの対象範囲を明らかにするのが目的

#### 参考文献
* [「業務と情報システムは整合していますか？（２）」 | 株式会社オージス総研](http://www.ogis-ri.co.jp/rad/webmaga/rwm20110705.html)

### アクティビティ図
* 一連の手続きを表現するための図
* ある事象の開始から終了までを機能が実行される順序に従って記述する

#### 参考文献
* [アクティビティ図(Activity Diagram) - UML入門 - IT専科](http://www.itsenka.com/contents/development/uml/activity.html)

## セキュリティ

### ディレクトリトラバーサル
* サーバ管理者が公開・許可していないファイルにアクセスする攻撃手法
* 入力されたパスからファイルを読み込むようなソフトウェアにおいて、相対パス表記を用いて任意のファイルに不正にアクセスをかけること

#### 参考文献
* [情報セキュリティ入門 - 脆弱性を利用した攻撃手法（3） --- ディレクトリ・トラバーサルとOSコマンド・インジェクション：ITpro](http://itpro.nikkeibp.co.jp/article/COLUMN/20070130/260021/)
* [脆弱性コラム - 第7回｜AppScan｜テクマトリックス株式会社](https://www.techmatrix.co.jp/security/watchfire/column/check7.html)
* [ディレクトリトラバーサル CapmNetwork](http://capm-network.com/?tag=%E3%83%87%E3%82%A3%E3%83%AC%E3%82%AF%E3%83%88%E3%83%AA%E3%83%88%E3%83%A9%E3%83%90%E3%83%BC%E3%82%B5%E3%83%AB)

### XSS
* CROSS Site Scriptingの略称
* 入力された値によって動的に変化するWebサイトにおいて、不正なスクリプトを入力する攻撃手法
* 第三者に不正なスクリプトを実行させ、攻撃対象のサーバに攻撃する。この時、第三者が入力した情報やCookieを抜き取られるといった被害も想定される
  * Cookie抜き取り -> なりすまし(不正ログイン)

#### 参考文献
* [クロスサイトスクリプティング対策の基本（前編）：クロスサイトスクリプティング脆弱性とは？ - ＠IT](http://www.atmarkit.co.jp/ait/articles/0211/09/news002.html)
* [ASCII.jp：拡がるWebの脅威と対策を理解しよう (5/6)｜初心者歓迎！ネットワークセキュリティ入門](http://ascii.jp/elem/000/000/452/452083/index-5.html)
* [クロスサイトスクリプティング（XSS）とは？仕組み・脅威から対策についてのまとめ](http://viral-community.com/blog/xss-1835/)

### CSRF
* Cross-site Request Forgeryの略称、別名「リクエスト強要」
* 攻撃者が用意したWebページにユーザがアクセスすると、攻撃対象のサーバに不正なリクエストが送信され、ユーザが意図していない処理が実行される
  * 掲示板等への不正な書き込み及び大量の書き込みによるDoS攻撃
    * ユーザは何もしていなくても、コンピュータには「不正な書き込みをした」という記録が残る
  * ショッピングサイトの決済やサービスの退会等の重要な処理をユーザの意図とは関係なく実行
* ワンタイムトークンを発行して身元確認

#### 参考文献
* [IPA ISEC　セキュア・プログラミング講座：Webアプリケーション編　第4章 セッション対策：リクエスト強要（CSRF）対策](https://www.ipa.go.jp/security/awareness/vendor/programmingv2/contents/301.html)
* [クロスサイトリクエストフォージェリ（CSRF）とは - 脅威と対策 | トレンドマイクロ](http://www.trendmicro.co.jp/jp/security-intelligence/threat-solution/csrf/index.html)

### SQL injection
* Webページにおいて、データベースと連携している入力欄に不正なデータベース処理命令を記述する攻撃手法
* データベースの情報漏えい、不正アクセス等に繋がる危険性がある

#### 参考文献
* [SQLインジェクションへの対策｜情報管理担当者の情報セキュリティ対策｜企業・組織の対策｜国民のための情報セキュリティサイト](http://www.soumu.go.jp/main_sosiki/joho_tsusin/security/business/admin/06.html)

## テスト

### 単体テスト・ユニットテスト
* プログラムを構成する小さな単位(関数やメソッド)が正しく機能しているかテストすること
* バグの原因特定や修正が早い段階で可能

#### 参考文献
* [単体テスト(ユニットテスト)とは｜検証の種類－単体テスト(ユニットテスト)｜テクマトリックス株式会社](https://www.techmatrix.co.jp/quality/validation/unittest.html)

### 境界値
* プログラムの中である範囲を指定して条件付けした際、その範囲の境界値を指す
* 境界値を示す「以下」「未満」の取り違え等で起こるバグの発見のため、境界値分析が行われる

#### 参考文献
* [情報システム用語事典：境界値分析（きょうかいちぶんせき） - ITmedia エンタープライズ](http://www.itmedia.co.jp/im/articles/1111/07/news148.html)

### 限界値
* プログラムの中である上限値(あるいは下限値)を指定して条件付けした際、その値を示す
* 限界値を越える直前の値、限界値そのもの、限界値を越えた直後の値について正確か検証する必要がある

#### 参考文献
* [ソフトウェアテストの手法ー限界値のテスト « TESTERA BLOG](https://www.testera.jp/blog/?p=433)

### ホワイトボックステスト
* モジュールの内部構造に着目して検証する手法
* テストデータの作成については以下の2つの考え方が挙げられる
  * 命令網羅 : モジュール内の命令を少なくとも一度は実行する
  * 判定条件網羅 : モジュール内の条件判定において真偽どちらも少なくとも一度は実行する

#### 参考文献
* [初級シスアド講座|ブラックボックステストとホワイトボックステスト](http://www.pursue.ne.jp/jouhousyo/sysad/kaihatu/test/test02.html)

### ブラックボックステスト
* モジュールの入出力に着目して検証する手法
* テストデータの作成については以下の2つの考え方が挙げられる
  * 同値分割 : 正常に処理される見込みの有効同値クラスと、エラーとして処理される見込みの無効同値クラスに分け、それぞれ代表的な値について検証する
  * 限界値分析 : 有効値と無効値の境界値について検証する

#### 参考文献
* [初級シスアド講座|ブラックボックステストとホワイトボックステスト](http://www.pursue.ne.jp/jouhousyo/sysad/kaihatu/test/test02.html)

### 分岐網羅
* ホワイトボックステストにおける網羅性のレベルのひとつ
* 判定条件の真偽を少なくとも1度は実行するテストケースを設計すること
* 対して、条件網羅は「判定条件が複数ある場合に、それぞれの真偽を組み合わせたテストケースを設計すること」である

#### 参考文献
* [問49 分岐網羅と条件網羅 平成25年秋期｜応用情報技術者試験.com](http://www.ap-siken.com/kakomon/25_aki/q49.html)

### 結合テスト
* 結合した要素間で相互作用の動作検証を行うこと
* 結合テストで検証される項目は以下のようなものが挙げられる
  * 結合、構造自体に問題がないか
  * 結合した状態のふるまいに問題がないか
  * やりとりするデータに問題がないか
  * 動作は想定通りか

#### 参考文献
* [結合テストの基礎 | Knowledge Note | Developers AppKitBox](https://appkitbox.com/knowledge/test/20121112-107)

### 受入テスト
* 納入されたシステム及びソフトウェアが所定の条件に適合しているか検証すること
* 「業務で実際に利用可能か」「本番環境で動作するか」あるいは「使い勝手は良いか」等、検証内容は多岐にわたる

#### 参考文献
* [情報システム用語事典：受け入れテスト（うけいれてすと） - ITmedia エンタープライズ](http://www.itmedia.co.jp/im/articles/1111/07/news124.html)

### セキュリティテスト
* 開発したプログラムに対し、以下のような検証を行うこと
  * 既知の脆弱性パターンに陥っていないか
  * セキュリティ的設計通りか
  * 設計工程までに検討しきれなかった脆弱性対策がないか

#### 参考文献
* [IPA ISEC　セキュア・プログラミング講座：C/C++言語編　第2章 脆弱性回避策とソフトウェア開発工程：セキュリティテスト](https://www.ipa.go.jp/security/awareness/vendor/programmingv2/contents/c102.html)

## AWS

### Aurora
* リレーショナルデータベースエンジン
* MySQLと互換性を持っている(性能は5倍増し！)

#### 参考文献
* [よくある質問 - Amazon Aurora | AWS](https://aws.amazon.com/jp/rds/aurora/faqs/)
* [Amazon RDS for Aurora について知りたい28のこと (28 Questions about Aurora) - yoshidashingo](http://yoshidashingo.hatenablog.com/entry/2014/11/13/223225)
* [Amazon RDSの新しいDBエンジン「Aurora」について気になるトコロ #reinvent ｜ Developers.IO](http://dev.classmethod.jp/cloud/aws/new-rds-database-engine-aurora-faq/)

### EC2
* 仮想プライベートサーバのレンタルサービス
* 従来のレンタルサーバとは異なり、時間単位の料金体系になっている
* 急なアクセス増加にも耐えられる堅牢性を持っている

#### 参考文献
* [Amazon EC2 S3とは【EC2をこれから始めたい方へ】](http://www.synaesthesia.jp/amazon/ec2/index.php)
* [わずか5分！？ AWSのEC2でクラウドなウェブサーバーを構築してみた | 株式会社LIG](http://liginc.co.jp/web/programming/server/39969)
* [Amazon EC2 とは - Amazon Elastic Compute Cloud](http://docs.aws.amazon.com/ja_jp/AWSEC2/latest/UserGuide/concepts.html)

### Lambda
* 何らかのイベントを受けて、別の処理を呼び出す仕組みを請け負うサービス
* 従来であれば、イベント発生元の観測や変更検知、それに伴うインフラの整備等行う必要があったが、それらを肩代わりしてくれる

#### 参考文献
* [初めてのAWS Lambda　～AWS Lambdaで始めるイベントドリブンアプリケーション (1/5)：CodeZine（コードジン）](https://codezine.jp/article/detail/8446)
* [AWS 再入門 AWS Lambda 編 ｜ Developers.IO](http://dev.classmethod.jp/cloud/aws/cm-advent-calendar-2015-aws-re-entering-aws-lambda/)
