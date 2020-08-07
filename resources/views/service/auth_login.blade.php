<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/service.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Noto+Sans+JP:400,700" rel="stylesheet">
    <title>Service</title>
</head>
<body>
    <header>
    <a href="{{ route('login') }}">ログイン</a>
    <a href="{{ route('register') }}">新規登録</a>
    <i class = "fas fa-bars"></i>
    </header>
    <p>管理者画面は<a href="#">こちら</a></p>

    <div class="login_container">
    <p>{{$message}}</p>
    <form action="/service/auth_login" method="post">
    @csrf
    <label for="name">Eメール</label>&nbsp;<input type="text" name="email"><br>
    <label for="password">パスワード</label>&nbsp;<input type="text" name="password"><br>
    <input type="submit" id="login" value="ログイン">
    </form>
    </div>
    

                
</body>
</html>

