<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link rel="stylesheet" href="{{ asset('css/service_loginafter.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Noto+Sans+JP:400,700" rel="stylesheet">
    <title>虎の巻　部署選択画面</title>
</head>
<body>
<header>
    <i class = "fas fa-bars"></i>
</header>
<p>ようこそ、{{$user->name}}さん</p>
<P>どの部署のファイルを閲覧しますか？</p>
<div class="folder_box">
    <div class="folder_container">
        <a href="{{route('service.sales_main')}}"><img class="department_icon" src="{{asset('img/eigyo_gray.png')}}" alt=""></a></a>
        <label for="sales">
        <a id="sales" href ="{{route('service.sales_main')}}">営業部</a></label>
    </div>
    <div class="folder_container">
        <a href="{{route('service.main')}}"><img class="department_icon" src="{{asset('img/jikken_gray.png')}}" alt=""></a></a>
        <label for="file_url">
        <a id="file_url" href ="{{route('service.main')}}">研究開発部</a></label>
    </div>
    <div class="folder_container">
        <a href="{{route('service.general_main')}}"><img class="department_icon" src="{{asset('img/somu_gray.png')}}" alt=""></a></a>
        <label for="file_url">
        <a id="file_url" href ="{{route('service.general_main')}}">総務部</a></label>
    </div>
</div>


</body>
</html>