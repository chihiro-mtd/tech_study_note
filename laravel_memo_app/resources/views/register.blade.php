<!DOCTYPE html>

<html>

<head>
    <title>登録ページ</title>
    <script src="register.js"></script>
</head>

<body>
    <h1>登録ページ</h1>
    <div id="register_status"></div>
    <div>
        <form id="myForm" action="">
            <label for="id_title">タイトル :</label>
            <br>
            <input type="text" id="id_title" maxlength="10">
            <br>
            <label for="id_text">内容 :</label>
            <br>
            <textarea id="id_text" cols="40" rows="4" maxlength="30"></textarea>
            <br>
            <input type="button" value="登録" onclick="getValue();">
        </form>
    </div>
</body>

</html>
