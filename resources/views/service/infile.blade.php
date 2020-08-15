<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link rel="stylesheet" href="{{ asset('css/service_infile.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Noto+Sans+JP:400,700" rel="stylesheet">
    <title>Service</title>
</head>
<body>
    <header>
    <h2>研究開発部</h2><a href="#" id="logout">ログアウト</a>
    <a href="#"><img src="{{asset('img/eigyo_gray.png')}}" alt=""></a>
    <a href="#"><img src="{{asset('img/truck_gray.png')}}" alt=""></a>
    <a href="#"><img src="{{asset('img/met_gray.png')}}" alt=""></a>
    <a href="#"><img src="{{asset('img/jikken_gray.png')}}" alt=""></a>
    <a href="#"><img src="{{asset('img/somu_gray.png')}}" alt=""></a>
    <i class = "fas fa-bars"></i>
    </header>
    
    <div class="menu">
        <div class="back">
        <img src="{{asset('img/tiger_left.jpg')}}" alt=""><br>
        <label for="tiger_left">「回覧資料」に戻る</label>
        </div>
        <div class="file_menu">
        <i class="fas fa-file-upload" id="fa-file-upload"></i><br>
        <label for="fa-file-upload">アップロード</label>
        </div>
        <div class="file_menu_hidden">
            <div class="form">
            <form method="POST" action="/service_infile" enctype="multipart/form-data">
                {{ csrf_field() }}
            <input type="file" id="file" name="file" class="form-control" value="クリックしてファイルを選択">
            </div> 
            <button type="submit"><i class="fas fa-file-upload"></i>アップロード</button>
            </form> 
        </div>
    </div>
    <hr>
    <div class="folder_box">
    @if(isset($showFiles))
    @foreach ($showFiles as $showFile)
    <div class="folder_container">
        <i class="far fa-file-pdf"></i>
        <label for="file_url"><a id="file_url" href ="{{ Storage::disk('s3')->url("${showFile}")}}">{{$showFile}}</a></label>
    </div>
        @endforeach
    @else <p>データが保存されていません</p>
    @endif
     
    </div>
</body>
</html>