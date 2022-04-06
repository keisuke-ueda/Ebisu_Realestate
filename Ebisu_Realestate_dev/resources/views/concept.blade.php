@extends('layout')

@section('content')

<!-- 開発対象 -->
<div class="d-flex justify-content-center bg-black">
    <img  class="w-25 img-fluid mt-ex" src="{{ asset('/images/the EBISU.svg') }}">
</div>

<div style="height:130px; background-color:#000;"></div>

<div class="">
    <div class="main-content" style="">
        <div class="d-flex align-items-center">
            
            <div class="animation-1-zm">
                <img class="w-100" src="{{ asset('/images/ebisupage_photo2.png') }}">
            </div>
            <div class="text-white animation d-flex flex-column justify-content-center align-items-center">
                <p><span class="gold-2 pt18">緑も豊かな「恵比寿ガーデンプレイス」<br>
                    「ウエスティンホテル東京」に隣接。</span></p>
                <p class="pt14" style="margin-top: 40px;">先進的な都市の表情が洗練されたセンスが集う街、恵比寿。<br>
                JR山手線・埼京線・湘南新宿ラインと東京メトロ日比谷線を利用できる高いアクセス性。<br>
                時代の感性の最先端をいく流行のファッションやグルメが充実した駅ビル。<br>
                そして、この街の象徴といえる恵比寿ガーデンプレイスとその街中の落ち着いたリズムと<br>
                緩やかに流れる時間は、ここでしか感じることのできない上質なエリア。<br>
                これこそが「恵比寿」という最高の魅力である。</p>
            </div>
           
        </div>

        <div class="row mt-5">
            <p class="col-1"></p>
            <div class="col-5 animation-1-zm">
                <img class="w-100" src="{{ asset('/images/ebisupage_photo.png') }}">
                <p class="text-end pt9">※掲載写真は、令和4年3月に撮影したものです。</p>
                <p class="font-11 m-0">&nbsp;</p>
            </div>
            <div class="col-5 d-flex flex-column justify-content-end">
                <div class="d-flex justify-content-between">
                    <div style="width: 30%;">
                        <img class="animation-0-zm w-100 h-75" src="{{ asset('/images/ebisupage_atreebisu.png') }}" style="object-fit: cover; object-position: 100% 100%">
                        <p class="text-end pt9">「アトレ恵比寿」<br>(約1000m・徒歩13分)</p>
                    </div>
                    <div style="width: 30%;">
                        <img class="animation-0-zm w-100 h-75" src="{{ asset('/images/ebisupage_恵比寿ガーデンプレイス.png') }}" style="object-fit: cover; object-position: 100% 100%">
                        <p class="text-end pt9">「恵比寿ガーデンプレイス」<br>(約260m・徒歩4分)</p>
                    </div>
                    <div style="width: 30%;">
                        <img class="animation-0-zm w-100 h-75" src="{{ asset('/images/ebisupage_ウエスティンホテル.png') }}" style="object-fit: cover; object-position: 100% 100%">
                        <p class="text-end pt9">「ウエスティンホテル東京」<br>(約300m・徒歩4分)</p>
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <div style="width: 30%;">
                        <img class="animation-1-zm w-100 h-75" src="{{ asset('/images/ebisupage_国立博物館付属自然教育園.png') }}" style="object-fit: cover; object-position: 100% 100%">
                        <p class="text-end pt9">「国立科学博物館付属 自然教育園」<br>(約1000m・徒歩13分)</p>
                    </div>
                    <div style="width: 30%;">
                        <img class="animation-1-zm w-100 h-75" src="{{ asset('/images/ebisupage_東京大学医療課付属研究所.png') }}" style="object-fit: cover; object-position: 100% 100%">
                        <p class="text-end pt9">「東京大学医療科学研究附属病院」<br>(約630m・徒歩8分)</p>
                    </div>
                    <div style="width: 30%;">
                        <img class="animation-1-zm w-100 h-75" src="{{ asset('/images/ebisupage_サッポロ広場.png') }}" style="object-fit: cover; object-position: 100% 100%">
                        <p class="text-end pt9">「サッポロ広場」<br>(約260m・徒歩4分)</p>
                    </div>
                </div>
            </div>
            <p class="col-1"></p>
        </div>

        <div class="row bg-white text-dark mt-5">
            <p class="text-center gold-2 pt24 py-5 m-0">恵比寿、丘の上の美しい風景へ</p>
            <div class="col-4 ps-5 pe-0 pb-5 d-flex flex-column justify-content-center">
                <p class="pt-5 ps-5 animation text-dark"><span class="gold-2 pt18">約26mの丘の上で上質な日常が始まる。</span></p>
                <p class="pt-4 ps-5 mb-5 pb-5 animation text-dark pt14" style="line-height: 1.5;"> 恵比寿の丘の上。<br>
                    都心でありながら、都心の喧騒を離れ、様々な安らぎと<br>
                    恵比寿、目黒の2駅を使いこなせる立地でありながら、<br>
                    緩やかな時が流れる緑に囲まれた閑静な邸宅地。<br>
                    恵比寿の丘の上で優雅な日々がここから始まる。</p>
            </div>
            <img  class="col-8 animation-2-zm ps-0 pe-5" src="{{ asset('/images/ebisupage_illustration.png') }}">
            <p class="text-end pt9">高低差概念図は、国土地理院/GISMaps調べ<br>
            ※掲載の高低差概念図の表現されている建物の高さ・形状・色等は実際とは異なります。周辺の道路・建物・街路樹などは一部簡略化しており、実際とは異なります。</p>
        </div>
    </div>
</div>

@endsection