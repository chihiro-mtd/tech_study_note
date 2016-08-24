<!DOCTYPE html>

<html>

<head>
    <title>メモ一覧ページ</title>
</head>

<body>
<h1>メモ一覧ページ</h1>
{{ link_to('register','登録') }} <br>
<table border='1'>
    <tr>
        <th>表示順</th>
        <th>ID</th>
        <th>タイトル(クリックで更新)</th>
        <th>内容</th>
        <th>操作</th>
    </tr>

    @foreach($memo_list as $key => $memo)
        <tr>
            <td>{{ $key }}</td>
            <td> {{ $memo['id'] }} </td>
            <td>{{ link_to_action('MemoController@displayUpdateIndex', $memo['title'], ['index' => $key]) }}</td>
            <td>{{ $memo['text'] }}</td>
            <td>{{ link_to_action('MemoController@delete', '削除', ['index' => $key]) }}</td>
        </tr>
        @endforeach
        </tabel>

</body>
</html>
