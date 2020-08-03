<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/service_admin.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Noto+Sans+JP:400,700" rel="stylesheet">
    <title>Service</title>
</head>
<body>
    <header>
    <a href="#">ログイン</a>
    <a href="#">新規登録</a>
    <i class = "fas fa-bars"></i>
    </header>
    <p>利用者画面は<a href="#">こちら</a></p>
    <div class="login_container">
    <h1>勤労の虎</h1>
    <label for="name">名前　　　</label>&nbsp;<input type="text" id="name"><br>
    <label for="password">パスワード</label>&nbsp;<input type="text" id="password"><br>
    <input type="submit" id="login" value="ログイン">
    </div>    
</body>
</html>