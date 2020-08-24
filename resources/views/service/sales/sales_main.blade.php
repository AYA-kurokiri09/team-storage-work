<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link rel="stylesheet" href="{{ asset('css/service_main.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Noto+Sans+JP:400,700" rel="stylesheet">
    <title>Service</title>
</head>
<body>
<header>
    <h2 id="department">営業部</h2><a href="#" id="logout">ログアウト</a>
    <a href="#"><img src="{{asset('img/eigyo_white.png')}}" alt="" title="営業部"></a>
    <a href="#"><img src="{{asset('img/met_white.png')}}" alt="" title="製造部"></a>
    <a href="#"><img src="{{asset('img/jikken_white.png')}}" alt="" title="研究開発部"></a>
    <a href="#"><img src="{{asset('img/truck_white.png')}}" alt="" title="運送部"></a>
    <a href="#"><img src="{{asset('img/somu_white.png')}}" alt="" title="総務部"></a>
    <i class = "fas fa-bars"></i>
    </header>
    
    <div class="menu">
        <div class="folder_container">   
            <a href="{{ route('service.sales_files_circulate')}}" id="folder"><i class="fas fa-folder"></i></a><br>
            <label><a href="{{ route('service.sales_files_circulate')}}">回覧資料</a></label>
        </div>
        <div class="folder_container">
            <a href="{{ route('service.sales_files_ojt')}}" id="folder"><i class="fas fa-folder"></i></a><br>
            <label><a href="{{ route('service.sales_files_ojt')}}">研修資料</a></label>
        </div>
    </div> 
</body>
</html>