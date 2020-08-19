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
    <p>管理者画面は<a href="{{route('service.index_admin')}}">こちら</a></p>
    <img src="{{asset('img/tiger_left.jpg')}}" alt="">
    <div class="login_container">
    <h1>虎の巻</h1>
    <form action="/service" method="post">
    @csrf
    <label for="name">名前</label>&nbsp;<input type="text" name="name" id="name"><br>
    <label for="password">パスワード</label>&nbsp;<input type="text" name="password" id="password"><br>
    <input type="submit" id="login" value="ログイン">
    </form>
    </div>
    <a href="{{route('service.newperson')}}"><p>新規登録</p></a>
    

                
</body>
</html>

