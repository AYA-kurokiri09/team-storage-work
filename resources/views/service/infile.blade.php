<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link rel="stylesheet" href="{{ asset('css/service_infile.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Noto+Sans+JP:400,700" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <title>研究開発部　回覧資料</title>
</head>
<body>
    <header>
    <h2 id="department">研究開発部　回覧資料</h2><a href="{{route('backToIndex')}}" id="logout">ログアウト</a>
    <a href="{{route('service.sales_main')}}"><img src="{{asset('img/eigyo_white.png')}}" alt="" title="営業部"></a>
    <a href="{{route('service.main')}}"><img src="{{asset('img/jikken_white.png')}}" alt="" title="研究開発部"></a>
    <a href="{{route('service.general_main')}}"><img src="{{asset('img/somu_white.png')}}" alt="" title="総務部"></a>
    <i class = "fas fa-bars"></i>
    </header>
    
    <!--「目標」掲示板機能の実装を行う。内容と投稿者を表示し、その部署の人であれば権限関係なく書き込み可能とする。-->

    <div class="folder_box">
    @if(isset($showFiles))
    @foreach ($showFiles as $showFile)
    <div class="folder_container">
    <a id="file_url" href ="{{ Storage::disk('s3')->url("${showFile}")}}"><i class="far fa-file-pdf"></i></a>
    <label for="file_url">
    <a id="file_url" href ="{{ Storage::disk('s3')->url("${showFile}")}}">{{$showFile}}</a></label>
        <div class="delete_method">
        <!--ファイル名の先頭をクリックしても削除できてしまう。原因：ボタンの位置だけを移動させているからだと思われる。-->
        <!--対処：ボタン位置を指定するpositionを削除し、その後class=delete_methodの大きさを削除ボタンと同じにし、このdivごとごと移動させる。 -->
        @can('service_infile_delete', auth()->user())
        <form action="{{ url("${showFile}") }}" method="post">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button type="submit" id="js-getVariable" class="deleteChk" name="{{$showFile}}"><img src="{{asset('img/trash.png')}}" alt="" id="trash" ></button>
            </form>
        @endcan
        </div>
    </div>
        @endforeach
    @else <p>データが保存されていません</p>
    @endif
    </div>
    
    <hr>
    <div class="menu">
        <div class="back">
        <a href="{{route('service.main')}}"><img src="{{asset('img/arrow_left.png')}}" alt="" id="arrow_left"></a><br>
        <label for="arrow_left"><a href="{{route('service.main')}}">フォルダ選択に戻る</a></label> 
        </div>

        @can('service_infile', auth()->user())
        <div class="file_menu" id="file_menu">
        <i class="fas fa-file-upload" id="fa-file-upload"></i><br>
        <label for="fa-file-upload"><a href="#">アップロード</a></label>
        </div>
        @endcan
        
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
    <script src="{{ asset('js/service_infile.js') }}"></script>
    
</body>
</html>