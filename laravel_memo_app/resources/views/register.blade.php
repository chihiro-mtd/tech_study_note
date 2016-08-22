<!DOCTYPE html>

<html>

<head>
    <title>登録ページ</title>
</head>

<body>
<h1>登録ページ</h1>
<div id="register_status">
    @if (count($errors) > 0)
        <h2>NG</h2>
    @endif
</div>
<div>
    {!! Form::open() !!}
    {!! Form::label('title', 'タイトル :') !!} <br>
    {!! Form::text('title', null,array('maxlength' => 10)) !!}
    <br>
    {!! Form::label('text', '内容 :') !!} <br>
    {!! Form::textarea('text', null, array('maxlength' => 30)) !!}
    <br>
    {!! Form::submit('登録') !!}
    {!! Form::close() !!}
</div>
</body>

</html>
