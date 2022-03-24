@extends('layout')

@section('content')


<!-- 開発対象 -->
<h1 class="p-title">ACCESS</h1>

<!-- 背景色、テキスト一時的に調整 -->
<div class="main-content container bg-dark text-white">

<!-- 路線図 -->
    <div class="row pt-3 pb-5 animation">
        <p>ダミーコピー恵比寿、それも「恵比寿ガーデンプレイス」、「ウェスティンホテル東京」を間近とする住宅地。その静謐なる佇まいは、そのまま住まわれる方の誇りとなる。多くを語らずとも、本物を知る人を魅了するレジデンス。ダミーコピー恵比寿、それも「恵比寿ガーデンプレイ</p>
        <img  class="col-8 d-block mx-auto" src="{{ asset('/images/路線図.jpg') }}">
        <p class="small">ダミーコピー恵比寿、それも「恵比寿ガーデンプレイス」、「ウェスティンホテル東京」を間近とする住宅地。その静謐なる佇まいは、そのまま住まわれる方の誇りとなる。多くを語らずと</p>
    </div>

    <div class="row"> 
        <img  class="col-3 d-block mx-auto" src="{{ asset('/images/渋谷2.png') }}">
        <img  class="col-3 d-block mx-auto" src="{{ asset('/images/渋谷2.png') }}">
        <img  class="col-3 d-block mx-auto" src="{{ asset('/images/渋谷2.png') }}">
        <img  class="col-3 d-block mx-auto" src="{{ asset('/images/渋谷2.png') }}">
    </div>

    <div class="row">
        <div class="col-6">
            <img  class="d-block mx-auto" src="{{ asset('/images/路線図.jpg') }}">
            <p>※各駅への所要時間はJR線「恵比寿」駅発、東京メトロ日比谷線「恵比寿」駅発、また東京メトロ南北線・<br>
                都営三田線「目黒」駅発の所要時間は日中平常時、平日の13時台及び(  )内は通勤時8時台の<br>
                最短所要時間を表記しています。<br>
                ※所要時間には、乗り換え・待ち時間は含まれません。(JR線・東京メトロ線・都営地下鉄線時刻表調べ)<br>
                ※2駅7路線とは、JR山手線・埼京線・湘南新宿ライン「恵比寿」駅、東京メトロ日比谷線「」恵比寿駅、<br>
                JR山手線「目黒」駅、都営地下鉄三田線・東京メトロ南北線・東急目黒線「目黒」駅のことです。<br>
                ※現地からの徒歩分数は、80mを1分として算出し、端数は切り上げております。<br>
                ※掲載の情報は、令和4年3月現在によるもので変更になる場合があります。
            </p>
        </div>
        <div class="col-6">




        
        </div>

    </div>













    <!-- 路線情報 -->
    <div class="row pt-2 pb-2 animation">
        <p class="h3">■ＪＲ線「恵比寿」駅より</p>
        <div class="col-3 border">
            <p>「渋谷」駅へ直通…………………………………………2分（01分）<br>ＪＲ湘南新宿ライン利用</p>
        </div>
        <div class="col-3 border">
            <p>「新宿」駅へ直通…………………………………………7分（06分）<br>ＪＲ湘南新宿ライン利用</p>
        </div>
        <div class="col-3 border">
            <p>「品川」駅へ………………………………………………9分（09分）<br>ＪＲ山手線利用</p>
        </div>
        <div class="col-3 border">
            <p>「池袋」駅へ………………………………………………12分（11分）<br>ＪＲ湘南新宿ライン利用</p>
        </div>
    </div>

    <div class="row pt-2 pb-2 animation">
        <p class="h3">■タクシー利用料金</p>
        <div class="col-3 border">
            <p>「渋谷」駅へから…………………………………約0,000円</p>
        </div>
        <div class="col-3 border">
            <p>「新宿」駅へから…………………………………約0,000円</p>
        </div>
        <div class="col-3 border">
            <p>「品川」駅へ………………………………………約0,000円</p>
        </div>
        <div class="col-3 border">
            <p>「東京」駅へ………………………………………約0,000円</p>
        </div>
    </div>
    <div class="row pt-2 pb-2 animation">
        <p class="h3">■ＪＲ線「恵比寿」駅より</p>
        <div class="col-3 border">
            <p>「渋谷」駅へ直通…………………………………………2分（01分）<br>ＪＲ湘南新宿ライン利用</p>
        </div>
        <div class="col-3 border">
            <p>「新宿」駅へ直通…………………………………………7分（06分）<br>ＪＲ湘南新宿ライン利用</p>
        </div>
        <div class="col-3 border">
            <p>「品川」駅へ………………………………………………9分（09分）<br>ＪＲ山手線利用</p>
        </div>
        <div class="col-3 border">
            <p>「池袋」駅へ………………………………………………12分（11分）<br>ＪＲ湘南新宿ライン利用</p>
        </div>
    </div>


    <!-- ４つ写真 -->
    <div class="row pt-3 pb-5 animation">
        <p class="pb-3">ダミーコピー恵比寿、それも「恵比寿ガーデンプレイス」、「ウェスティンホテル東京」を間近とする住宅地。その静謐なる佇まいは、そのまま住まわれる方の誇りとなる。多くを語らずとも、本物を知る人を魅了するレジデンス。ダミーコピー恵比寿、それも「恵比寿ガーデンプレイス」、「ウェスティンホテル東京」を間近とする住宅地。その静謐なる佇まいは、そのまま住ま</p>
        <img  class="col-3" src="{{ asset('/images/shibuya2.jpg') }}">
        <img class="col-3" src="{{ asset('/images/環境-新宿.png') }}">
        <img class="col-3" src="{{ asset('/images/_品川4179785.jpg') }}">
        <img class="col-3" src="{{ asset('/images/スクリーンショット (1057).png') }}">
        <p class="pt-3 pb-3 small">ダミーコピー恵比寿、それも「恵比寿ガーデンプレイス」、「ウェスティンホテル東京」を間近とする住宅地。その静謐なる佇まいは、そのまま住まわれる方の誇りとなる。多くを語らずとも、本物を知る人を魅了するレジデンス。ダミーコピー恵比寿、それも「恵比寿ガーデンプレイス」、「ウェスティンホテル東京」を間近とする住宅地。その静謐なる佇まいは、そのまま住ま</p>
    </div>
  
    <div class="row pt-3 pb-5 animation">
        <p>ダミーコピー恵比寿、それも「恵比寿ガーデンプレイス」、「ウェスティンホテル東京」を間近とする住宅地。その静謐なる佇まいは、そのまま
        住まわれる方の誇りとなる。多くを語らずとも、本物を知る人を魅了するレジデンス。ダミーコピー恵比寿、それも「恵比寿ガーデンプレイ
        </p>
    </div>
        
    <!-- タクシー写真 -->
    <div class="row pt-3 pb-3 animation">
        <img class="col-3" src="{{ asset('/images/about_2.c821cf7.jpg') }}">
        <img class="col-3" src="{{ asset('/images/images-1.jpg') }}">
        <div class="col-3">
            <p class="border"><span class="small">■タクシー利用料金</span><br>
            「渋谷」駅へから…………………………………約0,000円<br>
            「新宿」駅へから…………………………………約0,000円<br>
            「品川」駅へ………………………………………約0,000円<br>
            「東京」駅へ………………………………………約0,000円
        </p>
        </div>
        <div class="col-3">
            <p>を知る人を魅了 → を知る人を魅了<br>
                を知る人を魅了 → を知る人を魅了<br>
                を知る人を魅了 → を知る人を魅了
            </p>
        </div>
    </div>
</div>


@endsection