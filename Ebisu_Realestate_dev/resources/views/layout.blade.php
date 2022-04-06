<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="恵比寿GG,恵比寿gg,ラ・アトレ恵比寿グランガーデン,ラ・アトレ恵比寿GG">
    <title>【公式】ラ・アトレ恵比寿グランガーデン｜株式会社ラ・アトレ</title>

    <link rel="stylesheet" href="{{ asset('/css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/layout.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/layout_768.css') }}" media="screen and (max-width:768px)">

    <!-- フォント -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@300&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.typekit.net/ozq5hwu.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- CreateJSのライブラリー読み込み -->
    <script src="https://code.createjs.com/1.0.0/createjs.min.js"></script>
    <!-- ParticleJSのライブラリー読み込み -->
    <script src="https://cdn.rawgit.com/ics-creative/ParticleJS/release/1.0.0/libs/particlejs.min.js"></script>
    <!-- jQueryのライブラリー読み込み -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- AjaxZip3のライブラリー読み込み -->
    <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
    <!-- 入力バリデーション用のライブラリー読み込み -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/localization/messages_ja.min.js"></script>

    <!-- JSファイル読み込み -->
    <script type="text/javascript" src="{{ asset('/js/layout.js') }}"></script>

</head>

<body>
    <div class="text-white min-vh-100 position-relative" style="padding: 0 0 13.94vw; background-color: #3e3a39;">
    <!-- ヘッダー -->
    @include('header')

    <!-- ハンバーガーメニュー -->
    @include('menu')

    <!-- 各ページの内容 -->
    @yield('content')

    <!-- トップへ戻るボタン -->
    <div class="w-100 d-flex justify-content-center" style="padding: 25px 0 45px;">
        <a href="#" class="d-inline-block mx-auto my-0 text-white" style="text-decoration: none;">
            <p class="text-center m-0 pt12"><span class="arrow-top d-inline-block mb-1">∧</span><br>TOPへ戻る</p>
        </a>
    </div>

    <!-- フッター -->
    @include('footer')
    </div>
</body>
</html>