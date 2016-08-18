<!DOCTYPE html>

<html>

<head>
    <title>メモ一覧ページ</title>
</head>

<body>
  <h1>メモ一覧ページ</h1>
  <a href = "register.html">登録</a> <br>
  <table border='1'>
    <tr><th>表示順</th><th>ID</th><th>タイトル(クリックで更新)</th><th>内容</th><th>操作</th></tr>

    @foreach($memo_list as $key => $memo)
      <tr>
        <td>{{{ $key }}}</td>
        <td> {{ $memo['id'] }} </td>
        <td><a href=''>{{ $memo['title'] }}</a></td>
        <td>{{ $memo['text'] }}</td>
        <td><a href='' onclick=''>削除</a></td>
      </tr>
    @endforeach

  </tabel>

</body>

</html>
