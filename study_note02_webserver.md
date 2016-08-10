# WEBサーバー
WEBサーバーについて以下の3通りの構築方法が挙げられる。

## Apache
### 構築の早さ
* 構築ガイド記事として以下を挙げる
  * 参考 : [初心者でもできる！Apacheをインストールする方法 | TechAcademyマガジン](http://techacademy.jp/magazine/1846)
  * 参考 : [ApacheによるWebサーバ構築（3）：Apacheの基本インストール (2/5) - ＠IT](http://www.atmarkit.co.jp/ait/articles/0103/09/news002_2.html)
  * 参考 : [Apache入門](http://www.adminweb.jp/apache/)
* 個人的意見 : 上記ガイドの1番目の方法(インストーラー利用)が最速かつわかりやすそう
  * ただしポート番号との兼ね合いでSkypeをインストールしている場合は調整が必要とのこと
* OSを問わないので手持ちの環境をすぐに利用することができる
* 個人的意見 : ネット上の情報も多く、日本語で書かれた書籍もたくさん出ているため、困っても解決のヒントはすぐに見つかりそう

### 開発環境、本番環境どちらに適しているか
* 

### CGIとの関係性
* 初期設定では無効化されているが、設定することで利用可能になる
 * 参考 : [Apache Tutorial: CGI による動的コンテンツ - Apache HTTP サーバ](https://httpd.apache.org/docs/2.0/ja/howto/cgi.html)
* 対応言語はPerl、C、C++
   * 参考 : [Apache Tutorial: CGI による動的コンテンツ - Apache HTTP サーバ](https://httpd.apache.org/docs/2.0/ja/howto/cgi.html)
   * 参考 : [C言語、C++言語でCGI](http://gogodiet.net/z/tips/1.htm)

## Nginx

### 構築の早さ
* 構築ガイド記事として以下を挙げる
  * 参考 : [Linux入門 - nginxの設定と使い方 - Webkaru](http://webkaru.net/linux/nginx/)
  * 参考 : [Webサーバを立ち上げましょう：Nginx | 初心者でも出来る！CUIでサーバー管理](http://cui.tokyo/sakura-vps-flow/nginx)
  * 参考 : [入門！ nginx - tumblr](http://shim0mura.hatenadiary.jp/entry/20120110/1326198429)
* 個人的意見 : 上記ガイドの1番目にある「ソースからインストール」が最速かつわかりやすそう
* 個人的意見 : 人気が集まっているわりに書籍がApacheに比べて少ない。書籍よりWebの方がキャッチしやすいかもしれない

### CGIとの関係性
* Nginx単体ではCGIは動かせない
  * 参考 : [NginxでCGIを動かそうと頑張った話 - Qiita](http://qiita.com/hmikisato/items/c793ced0ba2695a89de6)
  * 参考 : [NginxとFastCGIでCGIを動かす方法](http://www.serverlog.jp/nginx-fastcgi/)

## Microsoft IIS

### 構築の早さ
* 構築ガイド記事として以下を挙げる
  * 参考 : [仮想マシンにWebサーバー(IIS)を構築してみよう！ / DataJapanクラウドサービス Windows Server 仮想マシン](http://www.datajapan.ne.jp/cloud/20150911/)
  * 参考 : [ローカル開発環境を作ろう(IIS編) - Qiita](http://qiita.com/tezuka_advance/items/5402bc8e013699f04d43)
  * 参考 : [Windows 10/8/7/Vista に IIS をインストール - クリエイティブWeb](https://creativeweb.jp/personal-site/iis/)
* GUIから構築できるので直感的である
* 個人的意見 : Web上の情報が少ない・古い場合が多い気がするので何かトラブルがあった時に対応力が試されそう

### 開発環境、本番環境どちらに適しているか
個人的意見 : ネット上を見てみると、ここ1年以内に執筆されたWebページの中だと「IISでサーバを手早く構築してちょっとしたことを試す」というような方向性のものが多かった。  
直感的に構築できるということもありこのような方向性になっていると思われるが、この結果から見ても実験的な用途の方が向いていると推測される。

### CGIとの関係性
* 設定をチェックすれば利用可能
* 対応言語はPerl
  * 参考 : [IIS7 で PHP と Perl CGI](http://bonk.red/articles/Misc/iis7phpcgi.html)

---

# 参考文献
* [Apacheだけじゃない。Webサーバーソフトウエアのトレンド ｜IT・エンジニアの派遣求人ならインテリジェンスのIT・エンジニア派遣](https://haken.inte.co.jp/contents/it_engineer/215.html)
* [最近のWEBサーバ界隈まとめ（やっぱりnginx一択？） | STRA株式会社｜SES](http://stra.co.jp/ses/2016/06/03/3356/)
* [nginxの紹介](http://www.slideshare.net/ttkzw/nginx-intro?ref=http://hayatan.hatenablog.com/entry/2015/01/28/001658)
* [apacheとnginxの比較表とベンチマーク - Qiita](http://qiita.com/sion_cojp/items/edb20a6b87f10e186c23)
* [これから始める人のためのNginx（2）：Nginxのインストールと基本設定 (1/4) - ＠IT](http://www.atmarkit.co.jp/ait/articles/1407/24/news003.html)
