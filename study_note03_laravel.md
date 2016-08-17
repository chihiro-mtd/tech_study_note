# Laravel について
このノートは下記に示す書籍と各項ごとの参考文献をもとに記述した。  
[Laravel リファレンス ［Ver.5.1 LTS 対応］ Web 職人好みの新世代 PHP フレームワーク - インプレスブックス](http://book.impress.co.jp/books/1114101107)

## controllerの作成方法
はじめに、コマンド `php artisan controller:make [controller名]` を実行する。  
これにより、 /app/controllers/ に [controller名].php ファイルが生成される。  
生成されたファイルには、一般的なデータ操作でよく使用されるメソッドが自動で生成される(create、update、destroy等)。  

ファイル生成後、app/Http/routes.php でルーティング設定を行う必要がある。  
このファイルに `Route::resource('test', '[controller名]');` と追記すると、[controller名]内の関数を「test」という名前のURLで呼び出すことができるようになる。  
例えば、[controller名]の中のindex関数を呼び出したい時は ~/public/test/index と対応している。

### 参考文献
* [HTTPコントローラー 5.1 Laravel](https://readouble.com/laravel/5.1/ja/controllers.html)
* [初めてのLaravel 5.1 : (3) コントローラーの作成 – ララ帳](https://laravel10.wordpress.com/2015/02/17/%E5%88%9D%E3%82%81%E3%81%A6%E3%81%AElaravel-5-2-%E3%82%B3%E3%83%B3%E3%83%88%E3%83%AD%E3%83%BC%E3%83%A9%E3%83%BC%E3%82%92%E4%BD%9C%E3%81%A3%E3%81%A6%E3%81%BF%E3%82%8B/)
* [LaravelでControllerの作成 - Qiita](http://qiita.com/f00tba11artist/items/e5a9ba9f54d88312709b)

## controllerとviewの関係
MVCにおいて、controllerの役割はユーザからの入力を受け取り、それに応じてviewを選択・生成することである。対して、viewの役割はユーザに対し情報を出力することである。  

実装においては、 /app/Http/routes.php にURLのマッピングが記載されており、ここから開示したいviewを指定することができる。

```
<?php  

Route::get('/', function() {
    return view('welcome');
});
```

上記のような記述の場合、welcomeというビューテンプレートが呼び出されて表示される。  
ここで、routes.phpに以下のように記述したとする。  

```
Route::get('/users', 'UserController@index');
```

これにより、/users パスへのリクエストは UserController の indexメソッドにルーティングされる。  

この時、 UserController の indexメソッドを以下のように記述したとする。

```
class UserController extends Controller
{
    public function index()
    {
        return view('users.index');
    }
}
```

index メソッドにviewの呼び出し命令を記述しているため、controllerを介してviewを表示することができる。

### 参考文献
* [Laravel5のお勉強 -第二回 Controllerの追加- - Qiita](http://qiita.com/yu_eguchi/items/d6ac0fa3e0014db536c3)
* [Laravel入門中。コントローラとビューを使ってみる。 | 三度の飯とエレクトロン](http://blog.katty.in/7087)

## httpアクセスとcontrollerの関係
例えば、あるWebページ「test」へのアクセス(http://example.com/test)を考える。  
最初にapp/http/route.phpの設定を以下のように記述する。

```
Route::get('test','TestController@index');
```

これにより、「test」へGETでアクセスが来たらTestControllerの中のindexメソッドが実行される。

次に、app/Http/controllers/TestController.phpの中に以下のような記述を入れる。

```
class TestController extends Controller {

	public function index()
	{
		return view('test');
	}

}
```

これにより、viewをcontrollerを通して呼び出すことができる。

最後に、resources/views/test.blade.php ファイルを作成する(Blade はテンプレート名)。

```
<html>
	<head>
	</head>
	<body>
		<h1>TEST</h1>
	</body>
</html>
```

この後、ブラウザから http://example.com/test へアクセスすると、上記ファイルのとおり「TEST」と表示される。  

まとめると、流れとしては以下のとおり。  

1. route.phpで、特定URLへのアクセスに対して実行するcontrollerとその中のメソッドを定義
2. controllerファイルにviewの呼び出し命令を記述
3. 特定URLにアクセスすると呼びだされたviewファイルが表示される

### 参考文献
* [Laravel5入門ルート・コントローラー・ビューの基本的な使い方 | はたのブログ](http://tech-swing.net/web/route-view-contorller/)
