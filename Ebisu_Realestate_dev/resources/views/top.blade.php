@extends('layout')

@section('content')
    <div class="first_view">
        <video autoplay muted class="movie">
            <source src="{{ asset('/images/video.mp4') }}" type="video/mp4">
        </video>
        <div class="after_movie">
            <img src="{{ asset('/images/logo-white.png') }}" class="display-5l1">
            <img src="{{ asset('/images/logo-1.png') }}" class="display-5l2">
            <img src="{{ asset('/images/logo-2.png') }}" class="display-5l3">
            <img src="{{ asset('/images/logo-3.png') }}" class="display-5l4">    
            <img src="{{ asset('/images/light.png') }}" class="display-5f">
        </div>
    </div>
    <div class="second_view">
        <p>JR線「恵比寿」駅へ徒歩11分 / 東京メトロ日比谷線「恵比寿」駅へ徒歩13分 / JR線「目黒」駅へ徒歩13分</p>
        <div>

        </div>
        <p>物件エントリー受付中</p>
        <p>ダミーコピーオリジナル動画などで物件を詳しくご紹介します。<br>郵便を待たずに、限定アプリでいち早く物件情報をご覧になれます。</p>
        <p>INFORMATION</p>
    </div>
    <div class="third_view">
    
    </div>
@endsection
