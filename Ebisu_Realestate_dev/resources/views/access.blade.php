@extends('layout')

@section('content')


<!-- 開発対象 -->
<!-- 背景色、テキスト一時的に調整 -->
<div class="d-flex justify-content-center bg-black">
    <img  class="w-25 img-fluid mt-ex" src="{{ asset('/images/the access.svg') }}">
</div>

<div class="py-4" style="background-color: #000;">
    <div class="access_info d-sm-flex justify-content-center align-items-center">
        <div class="mx-2 ft2 s14">
            <div class="d-flex align-items-end">
                <div>
                    <p>JR山手線・埼京線</p>
                    <p>湘南新宿ライン<span class="s18">「恵比寿」駅</span></p>
                </div>
                <p class="s18">徒歩<span class="gold-2 s42" style="line-height: 100%;">11</span>分 /</p>
            </div>
            <p class="s9">
                <span style="color: transparent;">ーーーーーーーーー</span>
                （恵比寿スカイウォークより徒歩7分）
            </p>
        </div>
        <div class="mx-2 ft2 s14">
            <div class="d-flex align-items-end">
                <div>
                    <p>&nbsp;</p>
                    <p>東京メトロ日比谷線<span class="s18">「恵比寿」駅</span></p>
                </div>
                <p class="s18">徒歩<span class="gold-2 s42" style="line-height: 100%;">13</span>分 /</p>
            </div>
            <p>&nbsp;</p>
        </div>
        <div class="mx-2 ft2 s14">
            <div class="d-flex align-items-end">
                <div>
                    <p>JR山手線・東京メトロ南北線・</p>
                    <p>都営地下鉄三田線・東急目黒線<span class="s18">「目黒」駅</span></p>
                </div>
                <p class="s18">徒歩<span class="gold-2 s42" style="line-height: 100%;">13</span>分</p>
            </div>
            <p>&nbsp;</p>
        </div>
    </div>
</div>


<div class="main-content container-fluid px-5 5">

    <!-- 路線図 -->
    <div class="row animation"> 
        <img  class="col-3 d-block mx-auto animation-0-zm" src="{{ asset('/images/access_shibuya.png') }}">
        <img  class="col-3 d-block mx-auto animation-0-zm" src="{{ asset('/images/access_roppongi.png') }}">
        <img  class="col-3 d-block mx-auto animation-1-zm" src="{{ asset('/images/access_shinjuku.png') }}">
        <img  class="col-3 d-block mx-auto animation-1-zm" src="{{ asset('/images/access_shinagawa.png') }}">
    </div>

    <div class="row mt-5 animation"> 
        <p class="col-6"></p>
        <p class="col-6 gold-2 ft2 s18">2駅7路線が利用可能。もっと自由な都心生活を。</h2>
    </div>

    <!-- 路線情報 -->
    <div class="row mt-3">
        <div class="col-6 d-flex flex-column justify-content-between animation-0-zm">
            <img class="w-100" src="{{ asset('/images/rosenzu.svg') }}">
            <p class="s9">※各駅への所要時間はJR線「恵比寿」駅発、東京メトロ日比谷線「恵比寿」駅発、また東京メトロ南北線・<br>
                &emsp;都営三田線「目黒」駅発の所要時間は日中平常時、平日の13時台及び(  )内は通勤時8時台の<br>
                &emsp;最短所要時間を表記しています。<br>
                ※所要時間には、乗り換え・待ち時間は含まれません。(JR線・東京メトロ線・都営地下鉄線時刻表調べ)<br>
                ※2駅7路線とは、JR山手線・埼京線・湘南新宿ライン「恵比寿」駅、東京メトロ日比谷線「」恵比寿駅、<br>
                &emsp;JR山手線「目黒」駅、都営地下鉄三田線・東京メトロ南北線・東急目黒線「目黒」駅のことです。<br>
                ※現地からの徒歩分数は、80mを1分として算出し、端数は切り上げております。<br>
                ※掲載の情報は、令和4年3月現在によるもので変更になる場合があります。
            </p>
        </div>
        <div class="col-6 small animation">
            <p class="ft2 s11">「ラ・アトレ恵比寿グランガーデン」は、JR山手線・埼京線・湘南新宿ライン「恵比寿」駅徒歩11分の3路線、<br>
                東京メトロ日比谷線「恵比寿」駅徒歩13分の1路線、JR山手線・都営地下鉄三田線・東京メトロ南北線・<br>
                東急目黒線「目黒」駅徒歩13分の4路線が利用でき、都心の主要エリアへダイレクトアクセスが可能です。
            </p>
            <br>

            <p class="border-bottom pb-2 ft2 s13">■ＪＲ山手線・埼京線・湘南新宿ライン「恵比寿」駅より</p>
            <table class="ft2 s11">
                <tr>
                    <td><span class="s18">「渋谷」</span>駅へ直通…………&nbsp;&nbsp;&nbsp;<span class="s18">2</span>分（1分）&nbsp;</td>
                    <td><span class="s18">「新宿」</span>駅へ直通…………&nbsp;&nbsp;&nbsp;<span class="s18">7</span>分（6分）</td>
                </tr>
                <tr>
                    <td class="s9">ＪＲ湘南新宿ライン利用</td>
                    <td class="s9">ＪＲ湘南新宿ライン利用</td>
                </tr>
                <tr>
                    <td><span class="s18">「品川」</span>駅へ直通…………&nbsp;&nbsp;&nbsp;<span class="s18">9</span>分（9分）&nbsp;</td>
                    <td><span class="s18">「池袋」</span>駅へ直通…………<span class="s18">12</span>分（11分）</td>
                </tr>
                <tr>
                    <td class="s9">ＪＲ山手線利用</td>
                    <td class="s9">ＪＲ湘南新宿ライン利用</td>
                </tr>
            </table>
            <br>
            <p class="border-bottom pb-2 ft2 s13">■東京メトロ日比谷線「恵比寿」駅より</p>
            <table class="ft2 s11">
                <tr>
                    <td><span class="s18">「六本木」</span>駅へ直通………<span class="s18">5</span>分（6分）</td>
                    <td><span class="s181">「霞ヶ関」</span>駅へ直通……&nbsp;<span class="s18">11</span>分（12分）</td>
                </tr>
                <tr>
                    <td class="s9">東京メトロ日比谷線利用</td>
                    <td class="s9">東京メトロ日比谷線利用</td>
                </tr>
                <tr>
                    <td><span class="s18">「銀座」</span>駅へ直通…………<span class="s18">15</span>分（15分）</td>
                    <td><span class="s18">「東京」</span>駅へ直通…………<span class="s18">16</span>分（16分）</td>
                </tr>
                <tr>
                    <td class="s9">東京メトロ日比谷線利用</td>
                    <td class="s9">東京メトロ日比谷線利用、「霞ヶ関」駅で東京メトロ丸ノ内線乗り換え</td>
                </tr>
            </table>
            <br>
            <p class="border-bottom pb-2 ft2 s13">■東京メトロ南北線・都営三田線「目黒」駅より</p>
            <table class="ft2 s11">
                <tr>
                    <td><span class="s18">「三田」</span>駅へ直通…………&nbsp;&nbsp;&nbsp;<span class="s18">7</span>分（7分）</td>
                    <td><span class="s18">「六本木一丁目」</span>駅へ直通……<span class="s18">9</span>分（9分）</td>
                </tr>
                <tr>
                    <td class="s9">都営三田線利用</td>
                    <td class="s9">東京メトロ南北線利用</td>
                </tr>
                <tr>
                    <td><span class="s18">「永田町」</span>駅へ直通……&nbsp;<span class="s18">12</span>分（12分）</td>
                    <td><span class="s18">「大手町」</span>駅へ直通……&nbsp;<span class="s18">15</span>分（15分）</td>
                </tr>
                <tr>
                    <td class="s9">東京メトロ南北線利用</td>
                    <td class="s9">都営三田線利用</td>
                </tr>
                <tr>
                    <td><span class="s18">「飯田橋」</span>駅へ直通……&nbsp;<span class="s18">18</span>分（18分）</td>
                </tr>
                <tr>
                    <td class="s9">東京メトロ南北線利用</td>
                </tr>
            </table>
        </div>
    </div>

    <div class="row gold-2 mt-5 animation">
        <p class="col-7 ft2 s18">都心の様々な要所へ、タクシーでの移動にも優れたロケーションです。</p>
        <p class="col-5"></p>
    </div>
        
    <!-- タクシー情報 -->
    <div class="row mt-3 mb-3 animation">
        <div class="col-4 d-flex align-items-center animation-0-zm">
            <img class="w-100" src="{{ asset('/images/access_taxi.png') }}">
            <img src="{{ asset('/images/access_taxi_mono.png') }}">
        </div>
        <div class="col-8 animation ft2 s14">
            <table class="taxi_table mb-3 text-center">
                <tr class="border-bottom">
                    <td></td>
                    <td></td>
                    <td class="ps-4">距離</td>
                    <td>日中料金</td>
                    <td>所要時間</td>
                    <td>深夜料金</td>
                    <td class="pe-4">所要時間</td>
                    <td>乗車場所</td>
                </tr>
                <tr class="border-bottom">
                    <td class="text-start s12"><span class="s20">品川駅</span>から</td>
                    <td><span class="s12">SHINAGAWA</span></td>
                    <td><span class="s20 border-start ps-4">3.9</span>km</td>
                    <td><span class="s20">1,700</span>円</td>
                    <td><span class="s20">14</span>分</td>
                    <td><span class="s20">2,020</span>円</td>
                    <td><span class="s20">14</span>分<span class="s20 border-end pe-4"></span></td>
                    <td>(高輪口より乗車)</td>
                </tr>
                <tr class="border-bottom">
                    <td class="text-start s12"><span class="s20">六本木駅</span>から</td>
                    <td><span class="s12">ROPPONGI</span></td>
                    <td><span class="s20 border-start ps-4">3.5</span>km</td>
                    <td><span class="s20">1,540</span>円</td>
                    <td><span class="s20">12</span>分</td>
                    <td><span class="s20">1,860</span>円</td>
                    <td><span class="s20">12</span>分<span class="s20 border-end pe-4"></span></td>
                    <td>(六本木交差点より乗車)</td>
                </tr>
                <tr class="border-bottom">
                    <td class="text-start s12"><span class="s20">銀座駅</span>から</td>
                    <td><span class="s12">GINZA</span></td>
                    <td><span class="s20 border-start ps-4">6.9</span>km</td>
                    <td><span class="s20">2,980</span>円</td>
                    <td><span class="s20">24</span>分</td>
                    <td><span class="s20">3,540</span>円</td>
                    <td><span class="s20">23</span>分<span class="s20 border-end pe-4"></span></td>
                    <td>(銀座4丁目交差点より乗車)</td>
                </tr>
                <tr class="border-bottom">
                    <td class="text-start s12"><span class="s20">東京駅</span>から</td>
                    <td><span class="s12">TOKYO</span></td>
                    <td><span class="s20 border-start ps-4">7.9</span>km</td>
                    <td><span class="s20">3,380</span>円</td>
                    <td><span class="s20">26</span>分</td>
                    <td><span class="s20">4,020</span>円</td>
                    <td><span class="s20">26</span>分<span class="s20 border-end pe-4"></span></td>
                    <td>(丸ノ内南口より乗車)</td>
                </tr>
            </table>
            <p class="m-0 ft2 s9">※出典:Japan Taxi https://japantaxi<br>
                ※掲載の情報は2022年2月現在のJapan Taxiウェブサイトにて算出したもので実際の走行ルートは料金と異なる可能性があります。<br>
                &emsp;料金・所要時間は有料・高速道路を利用していない場合の内容です。深夜料金該当時間は22:00～5:00を設定しています。
            </p>
        </div>
    </div>

</div>


@endsection