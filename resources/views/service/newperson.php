<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link rel="stylesheet" href="{{ asset('css/service.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Noto+Sans+JP:400,700" rel="stylesheet">
    <title>Service</title>
</head>
<body>
    <header>
    <!-- <a href="{{ route('login') }}">ログイン</a> -->
    <a href="{{ route('register') }}">新規登録</a>
    <i class = "fas fa-bars"></i>
    </header>
    <div class="login_container">
    新規登録
    <form action="/service" method="post">
    @csrf
    <label for="name">名前</label>&nbsp;<input type="text" name="name" id="name"><br>
    <p>メールアドレス</p>
    <label for="password">パスワード</label>&nbsp;<input type="text" name="password" id="password"><br>
    <p>所属部署 (ラジオボタン択一式)</p>
    <input type="submit" id="register" value="登録">
    </form>
    </div>  
</body>
</html>

