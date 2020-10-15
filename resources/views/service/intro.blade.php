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
    <a href="{{route('service.index')}}">利用開始</a>
    <a href="#" id="expBtn">説明を見る</a>
    </div>
</header>

<div class="eyecatch">
    <h1>狙った<ruby>獲物<rp>(</rp><rt>ファイル</rt><rp>)</rp></ruby>は<br>逃さない。</h1>
</div>
<div class="explanation">
    <p><span>「虎の巻」</span>は、あなたのチームにストレスフリーな使用感を提供する<br>チーム用クラウドストレージサービスです。</p>
    <br><br>
    <h2>チームのファイル管理で、こんな経験はありませんか？</h2>
    <br><br>
    <div class="point">
    <li>目的のファイルを探すのに時間がかかる</li><br>
    <li>重要なファイルを誤って削除してしまった</li><br>
    <li>ファイル管理ソフトを導入しても、<br>パソコンが苦手なメンバーが使ってくれない</li>
    </div>
    <br><br><br>
    <h2>「虎の巻」は、3つの強みであなたの悩みを解決します。</h2>
    <br><br>
    <div class="point">
    <li>シンプルなフォルダ構成を維持する設計</li>
    <span>フォルダ構成が荒れないため、ファイルを素早く探すのに役立ちます。</span>
    <br><br>
    <li>必要なボタンしか表示させません</li>
    <span>使用するメンバーの役割に応じて必要なボタンしか表示されないため、<br>予期せぬ操作を防止します。</span>
    <br><br>
    <li>ボタンの数を極力減らしました</li>
    <span>パソコンが苦手な方でも、どこを操作すれば良いかわかりやすい設計です。</span>
    </div>
    <br><br>
    <p>ご利用はこちらから<br>▼</p>
    <a href="{{route('service.newperson')}}", id="register">
    <h4>新規登録して利用開始</h4>新規登録</a>
    <a href="{{route('service.index')}}", id="login">
    <h4>既に登録済みの方はこちら</h4>ログイン</a>
</div>

<script src="{{ asset('js/service_intro.js') }}"></script>                
</body>
</html>

