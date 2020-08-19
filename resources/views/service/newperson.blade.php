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
    <i class = "fas fa-bars"></i>
    </header>
    <div class="login_container">
    新規登録
    <form action="{{route('service.personAdd')}}" method="post">
    @csrf
    <label for="name">名前</label>&nbsp;<input type="text" name="name" id="name"><br>
    <label for="email">メールアドレス</label>&nbsp;<input type="text" name="email" id="email"><br>
    <label for="password">パスワード</label>&nbsp;<input type="text" name="password" id="password"><br>
    <label for="password">所属部署</label>
    <input type="radio" name="dependent">営業部
    <input type="radio" name="dependent">製造部
    <input type="radio" name="dependent">研究開発部
    <input type="radio" name="dependent">運送部
    <input type="radio" name="dependent">総務部
    <br>
    <input type="hidden" name="role">
    <input type="checkbox" name="dependent">課長職以上の方はチェックをつけて下さい
    <br>
    <input type="submit" id="register" value="登録">
    </form>
    </div> 
    
    登録後、ログインするとサービスが使えます！
</body>
</html>

