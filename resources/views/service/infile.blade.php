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
    <label for="">ファイルアップロード</label><i class="fas fa-file-upload"></i>
    </div>   
    <form method="POST" action="/service_infile" enctype="multipart/form-data">
		{{ csrf_field() }}
	<input type="file" id="file" name="file" class="form-control">
    <button type="submit">アップロード</button>
    <a href="/storage/家計簿アプリ案【共同開発】.pdf">アップロードファイル</a>
    </form> 
    
    @if (session('file_name'))
   <h4>Local</h4>
   <a href="{{ asset('storage/'.session('file_name')) }}">Local</a>
   <h4>S3</h4>
   <a href="{{ Storage::disk('s3')->url(session('file_name')) }}">S3</a>
    @endif
</body>
</html>