@extends('layout')

@section('content')

<!-- 開発対象 -->
<div class="d-flex justify-content-center bg-black">
    <img  class="w-25 img-fluid mt-ex" src="{{ asset('/images/the EBISU.svg') }}">
</div>

<div style="height:50px; background-color:#000;"></div>

<div class="">
    <div class="mx-auto" style="max-width: 1200px; padding:40px 40px 0 45px;">
        <div class="d-flex justify-content-between align-items-center w-100">
            <div class="animation-1-zm" style="width:45%;">
                <img class="w-100" src="{{ asset('/images/ebisupage_photo2.png') }}">
            </div>
            <div class="text-white animation d-flex flex-column justify-content-center ft2 s18" style="width:calc(55% - 45px);">
                <p class="gold-2" style="margin-bottom:10px;">緑も豊かな「恵比寿ガーデンプレイス」</p>
                <p class="gold-2" style="margin-bottom:20px;">「ウエスティンホテル東京」に隣接。</p>
                <p class="s14" style="margin:0;">先進的な都市の表情が洗練されたセンスが集う街、恵比寿。<br>
                JR山手線・埼京線・湘南新宿ラインと東京メトロ日比谷線を利用できる高いアクセス性。<br>
                時代の感性の最先端をいく流行のファッションやグルメが充実した駅ビル。<br>
                そして、この街の象徴といえる恵比寿ガーデンプレイスとその街中の落ち着いたリズムと<br>
                緩やかに流れる時間は、ここでしか感じることのできない上質なエリア。<br>
                これこそが「恵比寿」という最高の魅力である。</p>
            </div>
        </div>

        <div class="d-flex justify-content-between align-items-end w-100" style="margin:40px 0 30px;">
            <div class="animation-1-zm" style="width:45%;">
                <img class="w-100" src="{{ asset('/images/ebisupage_photo.png') }}">
                <p class="text-end s9 m-0 ft2">※掲載写真は、令和4年3月に撮影したものです。</p>
                <p class="s9 m-0">&nbsp;</p>
            </div>
            <div class="d-flex flex-column justify-content-end ft2" style="width:calc(55% - 25px);">
                <div class="d-flex justify-content-between w-100">
                    <div style="width: calc(33% - 13px);">
                        <img class="animation-0-zm w-100" src="{{ asset('/images/ebisupage_atreebisu.png') }}" style="object-fit: cover; object-position: 100% 100%">
                        <p class="text-end s9">「アトレ恵比寿」<br>(約1000m・徒歩13分)</p>
                    </div>
                    <div style="width: calc(33% - 13px);" style="margin-left:20px;">
                        <img class="animation-0-zm w-100" src="{{ asset('/images/ebisupage_恵比寿ガーデンプレイス.png') }}" style="object-fit: cover; object-position: 100% 100%">
                        <p class="text-end s9">「恵比寿ガーデンプレイス」<br>(約260m・徒歩4分)</p>
                    </div>
                    <div style="width: calc(33% - 13px);" style="margin-left:20px;">
                        <img class="animation-0-zm w-100" src="{{ asset('/images/ebisupage_ウエスティンホテル.png') }}" style="object-fit: cover; object-position: 100% 100%">
                        <p class="text-end s9">「ウエスティンホテル東京」<br>(約300m・徒歩4分)</p>
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <div style="width: calc(33% - 13px);" >
                        <img class="animation-1-zm w-100" src="{{ asset('/images/ebisupage_国立博物館付属自然教育園.png') }}" style="object-fit: cover; object-position: 100% 100%">
                        <p class="text-end s9 m-0">「国立科学博物館付属 自然教育園」<br>(約1000m・徒歩13分)</p>
                    </div>
                    <div style="width: calc(33% - 13px);" style="margin-left:20px;">
                        <img class="animation-1-zm w-100" src="{{ asset('/images/ebisupage_東京大学医療課付属研究所.png') }}" style="object-fit: cover; object-position: 100% 100%">
                        <p class="text-end s9 m-0">「東京大学医療科学研究附属病院」<br>(約630m・徒歩8分)</p>
                    </div>
                    <div style="width: calc(33% - 13px);" style="margin-left:20px;">
                        <img class="animation-1-zm w-100" src="{{ asset('/images/ebisupage_サッポロ広場.png') }}" style="object-fit: cover; object-position: 100% 100%">
                        <p class="text-end s9 m-0">「サッポロ広場」<br>(約260m・徒歩4分)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white">
        <div class="bg-white text-dark mx-auto ft2" style="max-width: 1200px; padding:35px 40px 0 45px; margin-bottom:30px;">
                <p class="text-center  s24" style="margin-bottom:35px;">恵比寿、丘の上の美しい風景へ</p>
                <div class="d-flex justify-content-start align-items-center">
                    <div class="d-flex flex-column justify-content-center">
                        <p class="animation text-dark" style="margin-bottom:32px;"><span class="gold-2 s18">約26mの丘の上で上質な日常が始まる。</span></p>
                        <p class="animation text-dark s14" style="margin-bottom:50px; line-height: 1.5; white-space:nowrap;"> 恵比寿の丘の上。<br>
                            都心でありながら、都心の喧騒を離れ、様々な安らぎと<br>
                            恵比寿、目黒の2駅を使いこなせる立地でありながら、<br>
                            緩やかな時が流れる緑に囲まれた閑静な邸宅地。<br>
                            恵比寿の丘の上で優雅な日々がここから始まる。</p>
                    </div>
                    <img class="animation-2-zm" style="width:70%;" src="{{ asset('/images/ebisupage_illustration.png') }}">
                </div>
                <p class="text-end m-0 ft2" style="padding-bottom:5px; font-size: 9px;">高低差概念図は、国土地理院/GISMaps調べ<br>
                ※掲載の高低差概念図の表現されている建物の高さ・形状・色等は実際とは異なります。周辺の道路・建物・街路樹などは一部簡略化しており、実際とは異なります。</p>
        </div>
    </div>
</div>

@endsection