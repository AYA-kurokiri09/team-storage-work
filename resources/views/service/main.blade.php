<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link rel="stylesheet" href="{{ asset('css/service_main.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Noto+Sans+JP:400,700" rel="stylesheet">
    <title>虎の巻　研究開発部トップページ</title>
</head>
<!-- 今後実装。修正する予定の機能
・ログアウトボタンの位置がわかりにくい。
・各部署に色をつける。
・検索機能をつける、フォルダ名が表示されてしまう不具合を直す
そのためにDBを増やす→ファイル名やファイルパスをDBに保存するよう処理を書き換える→
・ゲストユーザーを作って一通りの機能を試せるようにする。面接官用。
・開発者限定でフォルダを増やせるようにする
・新規登録時、入力したメールアドレス等が自動的に管理者に通知されるようにする。
そこで管理職権限を与えてもよいか管理者が判断して登録する。
-->

<body>
<header>
    <h2 id="department">研究開発部　トップページ</h2><a href="#" id="logout">ログアウト</a>
    <a href="{{route('service.sales_main')}}"><img src="{{asset('img/eigyo_white.png')}}" alt="" title="営業部"></a>
    <a href="{{route('service.main')}}"><img src="{{asset('img/jikken_white.png')}}" alt="" title="研究開発部"></a>
    <a href="{{route('service.general_main')}}"><img src="{{asset('img/somu_white.png')}}" alt="" title="総務部"></a>
    <i class = "fas fa-bars"></i>
    </header>
    
    <div class="menu">
        <div class="folder_container">   
            <a href="{{ route('service.infile')}}" id="folder"><i class="fas fa-folder"></i></a><br>
            <label><a href="{{ route('service.infile')}}">回覧資料</a></label>
        </div>
        <div class="folder_container">
            <a href="{{ route('service.rd_files_ojt')}}" id="folder"><i class="fas fa-folder"></i></a><br>
            <label><a href="{{ route('service.rd_files_ojt')}}">研修資料</a></label>
        </div>
    </div> 
</body>
</html>