<!DOCTYPE html>

<html>

<head>
    <title>
        @if(Request::is('register'))
            登録ページ
        @else
            更新ページ
        @endif
    </title>
</head>

<body>
<h1>
    @if(Request::is('register'))
        登録ページ
    @else
        更新ページ
    @endif
</h1>
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
    @if(Request::is('register'))
        {!! Form::submit('登録') !!}
    @else
        {!! Form::submit('更新') !!}
    @endif
    {!! Form::close() !!}
</div>
</body>

</html>
