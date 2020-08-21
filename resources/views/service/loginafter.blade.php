<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link rel="stylesheet" href="{{ asset('css/service_loginafter.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Noto+Sans+JP:400,700" rel="stylesheet">
    <title>Service</title>
</head>
<body>

    <a href="#"><img src="{{asset('img/eigyo_gray.png')}}" alt="" title="営業部"></a>
    <a href="#"><img src="{{asset('img/met_gray.png')}}" alt="" title="製造部"></a>
    <a href="{{route('service.main')}}"><img src="{{asset('img/jikken_gray.png')}}" alt="" title="研究開発部"></a>
    <a href="#"><img src="{{asset('img/truck_gray.png')}}" alt="" title="運送部"></a>
    <a href="#"><img src="{{asset('img/somu_gray.png')}}" alt="" title="総務部"></a>
    <i class = "fas fa-bars"></i>
<br>
<p>{{$user->name}}さん</p>
<P>部署を選択してください</p>

</body>
</html>