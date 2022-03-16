@extends('layout')

@section('content')

    <div class="first_view container-fluid position-relative">
        <video autoplay muted class="movie w-100 position-absolute top-0 start-0">
            <source src="{{ asset('/images/video.mp4') }}" type="video/mp4">
        </video>
        <div class="after_movie w-100 h-100 position-absolute top-0 start-0">
            <img src="{{ asset('/images/logo-white.png') }}" class="display-5l1">
            <img src="{{ asset('/images/logo-1.png') }}" class="display-5l2">
            <img src="{{ asset('/images/logo-2.png') }}" class="display-5l3">
            <img src="{{ asset('/images/logo-3.png') }}" class="display-5l4">    
            <img src="{{ asset('/images/light.png') }}" class="display-5f">
        </div>
    </div>

    <div class="second_view container-fluid text-white p-4">
        <div class="row justify-content-center animation mb-4">
            <div class="col-md-auto"><p>JR線「恵比寿」駅へ徒歩<span class="gold h4" style="display:inline-block">11</span>分 / </p><p class="small">(恵比寿スカイウォークより徒歩7分)</p></div>
            <p class="col-md-auto">東京メトロ日比谷線「恵比寿」駅へ徒歩<span class="gold h4">13</span>分 / </p>
            <p class="col-md-auto">JR線「目黒」駅へ徒歩<span class="gold h4">13</span>分</p>
        </div>
        <div class="row justify-content-center flex-wrap animation gold mb-4 w-60">
            <p class="col-md-auto mb-3">現地は穏やかな住環境の<br><span>第1種中高層住居専用地域</span></p>
            <p class="col-md-auto mb-3">最寄りJR線「恵比寿」駅より<br><span>「渋谷」駅~2分(1分).「新宿」駅~7分(6分).「品川」駅~9分(9分)</span></p>
            <p class="col-md-auto mb-3">都心にありながら、都心の喧騒を離れ、樹々の安らぎと<br><span>空の恵みを繕う約26mの丘の上の美しい邸宅</span></p>
            <p class="col-md-auto mb-3">隣には緑に包まれた<br><span>「ウェスティンホテル東京」「恵比寿ガーデンプレイス」</span></p>
            <p class="col-md-auto mb-3">内廊下設計<br><span>角住戸率66%超</span></p>
        </div>
        <p class="row justify-content-center animation h2 gold mb-4">物件エントリー受付中</p>
        <p class="row justify-content-center animation mb-4">ダミーコピーオリジナル動画などで物件を詳しくご紹介します。<br>郵便を待たずに、限定アプリでいち早く物件情報をご覧になれます。</p>
        <div class="row justify-content-center animation mb-4">
            <div class="entry_img col-md-auto">
                <img src="{{ asset('/images/picture1.png') }}" alt="" class="">
                <p>ダミーコピーオリジナル動画など</p>
            </div>
            <div class="entry_img col-md-auto">
                <img src="{{ asset('/images/picture1.png') }}" alt="" class="">
                <p>ダミーコピーオリジナル動画など</p>
            </div>
            <div class="entry_img col-md-auto">
                <img src="{{ asset('/images/picture1.png') }}" alt="" class="">
                <p>ダミーコピーオリジナル動画など</p>
            </div>
            <div class="entry_img col-md-auto">
                <img src="{{ asset('/images/picture1.png') }}" alt="" class="">
                <p>ダミーコピーオリジナル動画など</p>
            </div>
        </div>
        <div class="row justify-content-center mb-4 animation">
            <button class="col-md-auto">物件エントリーはこちら</button>
        </div>
        <div class="row justify-content-center mb-4 animation">
            <img src="{{ asset('/images/環境-新宿.png') }}" alt="サンプル画像" class="w-50">
        </div>
        <p class="row justify-content-center animation">INFORMATION</p>
    </div>

    <div class="third_view container-fluid">
        <div class="row">

        </div>
    </div>

@endsection
