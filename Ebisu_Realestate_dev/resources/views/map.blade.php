@extends('layout2')

<!-- バリデーション作る -->

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1" />
<meta name="format-detection" content="telephone=no">
<title>新たな価値を創造したプレミアムリノベーションマンション｜株式会社ラ・アトレ</title>

@section('content')

<body>
    <div class="container">
        <h1 class="text-center mt-5 mb-5">現地案内図</h1>
        <div class="row mt-5 mb-5">
            <p>【広域地図】</p>
            <img class="center-block" src="{{ asset('/images/map_1.png') }}">
        </div>

        <div class="row mt-5 mb-5">
            <p>【狭域地図】</p>
            <img class="center-block" src="{{ asset('/images/map_2.png') }}">
        </div>

       <p>所在地：東京都目黒区三田1丁目1-16</p>
       <button class="mh-parts">Google Mapで開く</button><button class="mh-parts">印刷する</button>

       <p>印刷ボタンの画像</p>
       <img class="center-block" src="{{ asset('/images/map_3.png') }}">
       
</body>

@endsection