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
    <h2>研究開発部 ▼</h2>
    <a href="#">マイページ</a>
    <a href="#">ログアウト</a>
    <i class = "fas fa-bars"></i>
    </header>
    <div class="folder_container">
    <form method="POST" action="/service_infile" enctype="multipart/form-data">
		{{ csrf_field() }}
	<input type="file" id="file" name="file" class="form-control">
    <button type="submit"><i class="fas fa-file-upload"></i>ファイルのアップロード</button>
    </form> 

    @if(isset($showFiles))
    @foreach ($showFiles as $showFile)
        <i class="fas fa-file-upload"></i>
        <a href ="{{ Storage::disk('s3')->url("${showFile}")}}">{{$showFile}}</a>
    @endforeach
    @else <p>データが保存されていません</p>
    @endif
    </div>  
</body>
</html>