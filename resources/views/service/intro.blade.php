<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link rel="stylesheet" href="{{ asset('css/service_intro.css') }}"> <!-- ローカルで動かない場合はmix->assetとする -->
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Noto+Sans+JP:400,700" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <title>クラウドストレージ　虎の巻</title>
</head>
<body>
<header>
    <div>
    <h2>虎の巻　</h2><h4>シンプルなチーム用クラウドストレージ</h4>
    </div>
    <div>
    <a href="">利用開始</a>
    <a href="">説明を見る</a>
    </div>
    </header>
    <div class="login_container">
    <h3>クラウドストレージ</h3>
    <h1>虎の巻</h1>
    
    <a href="{{route('service.newperson')}}", id="register">
    <h4>初めての方はこちら</h4>新規登録</a>
    </div>
    
    

<script src="{{ asset('js/service_intro.js') }}"></script>                
</body>
</html>

