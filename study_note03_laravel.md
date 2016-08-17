# Laravel について

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
* controllerの役割はユーザからの入力を受け取り、それに応じてviewを選択・生成すること

## httpアクセスとcontrollerの関係
