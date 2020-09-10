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
    @error('name')
    <p>{{$message}}</p>
    @enderror

    @error('email')
    <p>{{$message}}</p>
    @enderror

    @error('password')
    <p>{{$message}}</p>
    @enderror

    @error('confirmPassword')
    <p>{{$message}}</p>
    @enderror
    <br>
    <form action="{{route('service.personAdd')}}" method="post">
    @csrf
    <label for="name" id="name">名前</label>&nbsp;<input type="text" name="name" id="inputArea" value="{{ old('name')}}"><br>
    <label for="email">メールアドレス</label>&nbsp;<input type="text" name="email" id="inputArea"value="{{ old('email')}}"><br>
    <label for="password" id="password">パスワード</label>&nbsp;<input type="password" name="password" id="inputArea"><br>
    <label for="confirmPassword" id="confirmPassword">パスワード (確認)</label>&nbsp;<input type="password" name="confirmPassword" id="inputArea"><br>
    <label for="password">所属部署　※1つ選択して下さい</label><br>
    <input type="radio" name="department" id="department" value="営業">営業部<br>
    <input type="radio" name="department" id="department" value="研究開発">研究開発部<br>
    <input type="radio" name="department" id="department" value="総務">総務部<br>
    <br>
    <input type="radio" name="role" value="manager" id="manager">課長職以上の方はここにチェックを入れて下さい
    <input type="radio" name="role" value="employee" checked="checked" id="radio_emp">
    <!-- radio_emp側をcheckedとしているので、見えているラジオボタンにチェックを入れないとrole = employeeとなる -->
    <br>
    <input type="submit" id="register" value="登録">
    </form>
    <a href="{{route('service.index')}}" id="login">
    <h4>登録をキャンセルして</h4>戻る</a>
    </div> 
    
</body>
</html>

