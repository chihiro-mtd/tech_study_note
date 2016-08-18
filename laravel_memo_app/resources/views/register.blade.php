<!DOCTYPE html>

<html>

<head>
    <title>登録ページ</title>
</head>

<body>
    <h1>登録ページ</h1>
    <div id="register_status"></div>
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
