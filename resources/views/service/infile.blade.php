<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link rel="stylesheet" href="{{ asset('css/service_infile.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Noto+Sans+JP:400,700" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <title>Service</title>
</head>
<body>
    <header>
    <h2 id="department">研究開発部</h2><a href="{{route('backToIndex')}}" id="logout">ログアウト</a>
    <a href="#"><img src="{{asset('img/eigyo_white.png')}}" alt="" title="営業部"></a>
    <a href="#"><img src="{{asset('img/met_white.png')}}" alt="" title="製造部"></a>
    <a href="#"><img src="{{asset('img/jikken_white.png')}}" alt="" title="研究開発部"></a>
    <a href="#"><img src="{{asset('img/truck_white.png')}}" alt="" title="運送部"></a>
    <a href="#"><img src="{{asset('img/somu_white.png')}}" alt="" title="総務部"></a>
    <i class = "fas fa-bars"></i>
    </header>
    
    <div class="menu">
        <div class="back">
        <a href="#"><img src="{{asset('img/arrow_left.png')}}" alt="" id="arrow_left"></a><br>
        <label for="arrow_left"><a href="#">「回覧資料」に戻る</a></label> 
        </div>

        @can('service_infile', auth()->user())
        <div class="file_menu" id="file_menu">
        <i class="fas fa-file-upload" id="fa-file-upload"></i><br>
        <label for="fa-file-upload"><a href="#">アップロード</a></label>
        </div>
        @endcan

        <!-- 削除機能をつける (開発者adminのみ使用可)-->

        <img src="{{asset('img/arrow_right.png')}}" alt="" id="arrow_right">
        <div class="file_menu_hidden" id="file_menu_hidden">
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
    <a id="file_url" href ="{{ Storage::disk('s3')->url("${showFile}")}}"><i class="far fa-file-pdf"></i></a>
    <label for="file_url"><a id="file_url" href ="{{ Storage::disk('s3')->url("${showFile}")}}">{{$showFile}}</a></label>
        <form action="{{ url("${showFile}") }}" method="post">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <!-- 実行権限：adminのみ -->
        <!--メソッド実行前に「{{ファイル名}}を削除してもよろしいですか？」ダイアログが出るようにする -->
        <button type="submit">削除</button>
        </form>
    </div>
        @endforeach
    @else <p>データが保存されていません</p>
    @endif
     
    </div>
    <script src="{{ asset('js/service_infile.js') }}"></script>
</body>
</html>