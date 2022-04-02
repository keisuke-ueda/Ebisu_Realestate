<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="恵比寿GG,恵比寿gg,ラ・アトレ恵比寿グランガーデン,ラ・アトレ恵比寿GG">
    <title>【公式】ラ・アトレ恵比寿グランガーデン｜株式会社ラ・アトレ</title>
    <link rel="stylesheet" href="{{ asset('/css/layout.css') }}">
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
    <div class="min-vh-100 position-relative" style="padding: 0 0 174px;">
    <!-- ヘッダー -->
    @include('header')

    <!-- ハンバーガーメニュー -->
    @include('menu')

    <!-- 各ページの内容 -->
    @yield('content')

    <!-- トップへ戻るボタン -->
    <div class="w-100 d-flex justify-content-center py-5" style="background-color:#3e3a39;">
        <a href="#" class="d-inline-block mx-auto my-0 text-white" style="text-decoration: none;">
            <p class="text-center m-0"><span class="arrow-top d-inline-block mb-1 ft2">∧</span><br>TOPへ戻る</p>
        </a>
    </div>

    <!-- フッター -->
    @include('footer')
    </div>
</body>
</html>