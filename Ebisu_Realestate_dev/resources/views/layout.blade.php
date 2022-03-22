<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>L'attrait</title>
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
    
    <!-- JSファイル読み込み -->
    <script type="text/javascript" src="{{ asset('/js/layout.js') }}"></script>

</head>

<body>
    <div class="bg-dark min-vh-100 position-relative" style="padding: 0 0 223px;">
    <!-- ヘッダー -->
    @include('header')

    <!-- ハンバーガーメニュー -->
    @include('menu')

    <!-- 各ページの内容 -->
    @yield('content')

    <!-- フッター -->
    @include('footer')
    </div>
</body>
</html>