<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link rel="stylesheet" href="{{ asset('css/service_newperson.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Noto+Sans+JP:400,700" rel="stylesheet">
    <title>クラウドストレージ　虎の巻</title>
</head>
<body>
    <header>
    <i class = "fas fa-bars"></i>
    </header>
    
    <div class="login_container">
    <h1>新規登録</h1>
    <hr>
    <form action="{{route('service.personAdd')}}" method="post">
    @csrf
    <label for="name">名前</label>&nbsp;<input type="text" name="name" id="inputArea"><br>
    <label for="email">メールアドレス</label>&nbsp;<input type="text" name="email" id="inputArea"><br>
    <label for="password">パスワード</label>&nbsp;<input type="text" name="password" id="inputArea"><br>
    <label for="password">所属部署　※1つ選択して下さい</label><br>
    <input type="radio" name="department" value="営業">営業部<br>
    <input type="radio" name="department" value="製造">製造部<br>
    <input type="radio" name="department" value="研究開発">研究開発部<br>
    <input type="radio" name="department" value="運送">運送部<br>
    <input type="radio" name="department" value="総務">総務部<br>
    <br>
    <input type="radio" name="role" value="manager">課長職以上の方はチェックして下さい
    <input type="radio" name="role" value="employee" checked="checked" id="radio_emp">
    <!-- radio_emp側をcheckedとしているので、見えているラジオボタンにチェックを入れないとrole = employeeとなる -->
    <br>
    <input type="submit" id="register" value="登録">
    </form>
    <p>登録後、ログインするとサービスが使えます！</p>
    <a href="{{route('service.index')}}" id="login">
    <h4>登録をキャンセルして</h4>戻る</a>
    </div> 
    
</body>
</html>

