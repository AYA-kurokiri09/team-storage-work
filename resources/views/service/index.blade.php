<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link rel="stylesheet" href="{{ mix('css/service.css') }}"> <!-- ローカルで動かない場合はmix->assetとする -->
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Noto+Sans+JP:400,700" rel="stylesheet">
    <title>クラウドストレージ　虎の巻</title>
</head>
<!--デザインした通りにコーディングする-->
<body>
    <header>
    <i class = "fas fa-bars"></i>
    </header>
    <img src="{{asset('img/tiger_left.jpg')}}" alt="">
    <hr noshade>
    <div class="login_container">
    <h3>クラウドストレージ</h3>
    <h1>虎の巻</h1>
    <form action="/service" method="post">
    @csrf
    <label for="name" id="name">名前</label>&nbsp;<input type="text" name="name" id="inputArea"><br>
    <label for="password">パスワード</label>&nbsp;<input type="password" name="password" id="inputArea"><br>
    <input type="submit" id="login" value="ログイン">
    </form>
    <a href="{{route('service.newperson')}}", id="register">
    <h4>初めての方はこちら</h4>新規登録</a>
    </div>
    
    

                
</body>
</html>

