@extends('layout')

@section('content')

<!-- 開発対象 -->
<div class="d-flex justify-content-center bg-black">
    <img  class="w-25 img-fluid mt-ex" src="{{ asset('/images/the EBISU.svg') }}">
</div>

<div style="height:116px; background-color:#000;"></div>

<div class="container-fluid">
    <div class="main-content">
        <div class="row mt-5">
            <p class="col-1"></p>
            <div class="col-5 animation-1-zm">
            <img class="w-100" src="{{ asset('/images/Ebisu_2.jpg') }}">
            <!-- <p>※掲載写真は、令和4年3月に撮影したものです。</p> -->
            </div>
            <div class="text-white col-5 animation d-flex flex-column justify-content-center align-items-center ft2">
                <p><span class="gold-2 h4">緑も豊かな「恵比寿ガーデンプレイス」<br>
                    「ウエスティンホテル東京」に隣接。</span></p>
                <p class="" style="margin-top: 40px;">先進的な都市の表情が洗練されたセンスが集う街、恵比寿。<br>
                JR山手線・埼京線・湘南新宿ラインと東京メトロ日比谷線を利用できる高いアクセス性。<br>
                時代の感性の最先端をいく流行のファッションやグルメが充実した駅ビル。<br>
                そして、この街の象徴といえる恵比寿ガーデンプレイスとその街中の落ち着いたリズムと<br>
                緩やかに流れる時間は、ここでしか感じることのできない上質なエリア。<br>
                これこそが「恵比寿」という最高の魅力である。</p>
            </div>
            <p class="col-1"></p>
        </div>

        <div class="row mt-5 ft2">
            <!-- <p class="col-1"></p>
            <img  class="col-2 animation-0-zm" src="{{ asset('/images/アトレ恵比寿.png') }}">
            <img  class="col-2 animation-0-zm" src="{{ asset('/images/ガーデンプレイス2.jpg') }}">
            <img  class="col-2 animation-0-zm" src="{{ asset('/images/ウエスティン2.jpg') }}">
            <img  class="col-2 animation-1-zm" src="{{ asset('/images/国立付属1.jpg') }}">
            <img  class="col-2 animation-1-zm" src="{{ asset('/images/医療科学研究所.jpg') }}">
            <img  class="col-2 animation-1-zm" src="{{ asset('/images/サッポロ広場.png') }}">
            <p class="col-1"></p> -->
            <p class="col-1"></p>
            <div class="col-5 animation-1-zm">
                <img class="w-100" src="{{ asset('/images/Ebisu_2.png') }}">
                <p class="text-end font-11">※掲載写真は、令和4年3月に撮影したものです。</p>
                <p class="font-11 m-0">&nbsp;</p>
            </div>
            <div class="col-5 d-flex flex-column justify-content-end">
                <div class="d-flex justify-content-between">
                    <div style="width: 30%;">
                        <img class="animation-0-zm w-100 h-75" src="{{ asset('/images/アトレ恵比寿.png') }}" style="object-fit: cover; object-position: 100% 100%">
                        <p class="text-end font-11">「アトレ恵比寿」<br>(約1000m・徒歩13分)</p>
                    </div>
                    <div style="width: 30%;">
                        <img class="animation-0-zm w-100 h-75" src="{{ asset('/images/ガーデンプレイス2.jpg') }}" style="object-fit: cover; object-position: 100% 100%">
                        <p class="text-end font-11">「恵比寿ガーデンプレイス」<br>(約260m・徒歩4分)</p>
                    </div>
                    <div style="width: 30%;">
                        <img class="animation-0-zm w-100 h-75" src="{{ asset('/images/ウエスティン2.jpg') }}" style="object-fit: cover; object-position: 100% 100%">
                        <p class="text-end font-11">「ウエスティンホテル東京」<br>(約300m・徒歩4分)</p>
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <div style="width: 30%;">
                        <img class="animation-1-zm w-100 h-75" src="{{ asset('/images/国立付属1.jpg') }}" style="object-fit: cover; object-position: 100% 100%">
                        <p class="text-end font-11">「国立科学博物館付属 自然教育園」<br>(約1000m・徒歩13分)</p>
                    </div>
                    <div style="width: 30%;">
                        <img class="animation-1-zm w-100 h-75" src="{{ asset('/images/医療科学研究所.jpg') }}" style="object-fit: cover; object-position: 100% 100%">
                        <p class="text-end font-11">「東京大学医療科学研究附属病院」<br>(約630m・徒歩8分)</p>
                    </div>
                    <div style="width: 30%;">
                        <img class="animation-1-zm w-100 h-75" src="{{ asset('/images/サッポロ広場.png') }}" style="object-fit: cover; object-position: 100% 100%">
                        <p class="text-end font-11">「サッポロ広場」<br>(約260m・徒歩4分)</p>
                    </div>
                </div>
            </div>
            <p class="col-1"></p>
        </div>

        <!-- <div class="row mt-2 mb-5 ft2 text-end" style="font-size: 10px;">
            <p class="col-1"></p>
            <p class="col-2 animation px-2">「アトレ恵比寿」(約1000m・徒歩13分)</p>
            <p class="col-2 animation px-2">「恵比寿ガーデンプレイス」(約260m・徒歩4分)</p>
            <p class="col-2 animation px-2">「ウエスティンホテル東京」(約300m・徒歩4分)</p>
            <p class="col-2 animation px-2">「国立科学博物館付属 自然教育園」<br>(約1000m・徒歩13分)</p>
            <p class="col-2 animation px-2">「東京大学医療科学研究附属病院」<br>(約630m・徒歩8分)</p>
            <p class="col-2 animation px-2">「サッポロ広場」(約260m・徒歩4分)</p>
            <p class="col-1"></p>
        </div> -->

        <div class="row bg-white text-dark mt-5 ft2">
            <p class="text-center gold-2 h4 py-5">恵比寿、丘の上の美しい風景へ</p>
            <div class="col-3 ps-5">
                <p class="pt-5 animation text-dark"><span class="gold-2 h5">約26mの丘の上で上質な日常が始まる。</span></p>
                <p class="pt-4 animation text-dark"> 恵比寿の丘の上。<br>
                    都心でありながら、都心の喧騒を離れ、様々な安らぎと<br>
                    恵比寿、目黒の2駅を使いこなせる立地でありながら、<br>
                    緩やかな時が流れる緑に囲まれた閑静な邸宅地。<br>
                    恵比寿の丘の上で優雅な日々がここから始まる。</p>
            </div>
            <img  class="col-9 animation-2-zm pe-5" src="{{ asset('/images/Ebisu_3.png') }}">
        </div>
    </div>
</div>

@endsection