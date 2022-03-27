@extends('layout2')

@section('content')

<!-- 開発対象 -->
<img  class="w-100" src="{{ asset('/images/Ebisu_1.png') }}">
<div class="container-fluid">
    <div class="main-content">
        <div class="row mt-5 mb-5">
            <p class="col-1"></p>
            <div class="col-6 animation-1-zm pe-4">
            <img class="w-100" src="{{ asset('/images/Ebisu_2.png') }}">
            </div>
            <!-- <img class="col-6 animation-1-zm" src="{{ asset('/images/Ebisu_2.png') }}"> -->
            <div class="col-4 animation text-white d-flex flex-column justify-content-between align-items-center" style="background-color: #3c3939; padding: 60px 20px;">
                <p><span class="gold h5">緑も豊かな「恵比寿ガーデンプレイス」<br>
                    「ウエスティンホテル東京」に隣接。</span></p>
                <p class="small">先進的な都市の表情が洗練されたセンスが集う街、恵比寿。<br>
                JR山手線・埼京線・湘南新宿ラインと東京メトロ日比谷線を利用できる高いアクセス性。<br>
                時代の感性の最先端をいく流行のファッションやグルメが充実した駅ビル。<br>
                そして、この街の象徴といえる恵比寿ガーデンプレイスとその街中の落ち着いたリズムと<br>
                緩やかに流れる時間は、ここでしか感じることのできない上質なエリア。<br>
                これこそが「恵比寿」という最高の魅力である。</p>
            </div>
            <p class="col-1"></p>
        </div>

        <div class="row mt-5">
            <p class="col-1"></p>
            <img  class="col-2 animation-0-zm" src="{{ asset('/images/ガーデンプレイス2.jpg') }}">
            <img  class="col-2 animation-0-zm" src="{{ asset('/images/ウエスティン2.jpg') }}">
            <img  class="col-2 animation-1-zm" src="{{ asset('/images/国立付属1.jpg') }}">
            <img  class="col-2 animation-1-zm" src="{{ asset('/images/医療科学研究所.jpg') }}">
            <img  class="col-2 animation-1-zm" src="{{ asset('/images/東急ストア.jpg') }}">
            <p class="col-1"></p>
        </div>

        <div class="row mt-2 mb-5">
            <p class="col-1"></p>
            <p class="col-2 small animation">「恵比寿ガーデンプレイス」(約260m・徒歩4分)</p>
            <p class="col-2 small animation">「ウエスティンホテル東京」(約300m・徒歩4分)</p>
            <p class="col-2 small animation">「国立科学博物館付属 自然教育園」(約1000m・徒歩13分)</p>
            <p class="col-2 small animation">「東京大学医療科学研究附属病院」(約630m・徒歩8分)</p>
            <p class="col-2 small animation">「東急ストア目黒店」(約910m・徒歩12分)</p>
            <p class="col-1"></p>
        </div>

        <div class="row mt-5 mb-5">
            <p class="col-1"></p>
            <p class="col-4 pt-5 animation"><span class="gold h5">約26mの丘の上で上質な日常が始まる。</span><br><br>
                恵比寿の丘の上。<br>
                都心でありながら、都心の喧騒を離れ、様々な安らぎと<br>
                恵比寿、目黒の2駅を使いこなせる立地でありながら、<br>
                緩やかな時が流れる緑に囲まれた閑静な邸宅地。<br>
                恵比寿の丘の上で優雅な日々がここから始まる。</p>
            <img  class="col-6 animation-2-zm" src="{{ asset('/images/Ebisu_3.png') }}">
            <p class="col-1"></p>
        </div>
    </div>
</div>


@endsection