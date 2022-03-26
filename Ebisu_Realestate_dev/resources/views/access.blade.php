@extends('layout')

@section('content')


<!-- 開発対象 -->
<!-- 背景色、テキスト一時的に調整 -->

<img  class="d-block w-100 center-block" src="{{ asset('/images/ACCESS_1.png') }}">
<div class="main-content container">
        <!-- <div class="center-block">
            <table>
                <tr>
                    <td>JR山手線・埼京線<br>
                        湘南新宿ライン
                    </td>
                    <td>「恵比寿」駅へ徒歩<span class="gold h1" style="display:inline-block">11</span>分 /</td>
                    <td>東京メトロ日比谷線</td>
                    <td>「恵比寿」駅へ徒歩<span class="gold h1">13</span>分 /</td>
                    <td>JR山手線・東京メトロ南北線・<br>
                        都営地下鉄三田線・東急目黒線
                    </td>
                    <td>「目黒」駅へ徒歩<span class="gold h1">13</span>分</td>

                </tr>
                <tr>
                    <td class="small">恵比寿スカイウォークより徒歩7分</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </div> -->

<!-- 路線図 -->
    <div class="row mt-5 mb-5 animation"> 
        <img  class="col-3 d-block mx-auto" src="{{ asset('/images/ACCESS_4.png') }}">
        <img  class="col-3 d-block mx-auto" src="{{ asset('/images/ACCESS_3.png') }}">
        <img  class="col-3 d-block mx-auto" src="{{ asset('/images/ACCESS_5.png') }}">
        <img  class="col-3 d-block mx-auto" src="{{ asset('/images/ACCESS_6.png') }}">
    </div>

    <!-- 路線情報 -->
    <div class="row mt-5 mb-5 animation">
        <div class="col-6">
            <img  class="img-thumbnail" src="{{ asset('/images/ACCESS_2.png') }}">
            <br>
            <br>
            <br>
            <br>
            <br>
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
            <h2 class="h5 gold">2駅7路線が利用可能。もっと自由な都心生活を。</h2>
            <br>
            <p class="small">「ラ・アトレ恵比寿グランガーデン」は、JR山手線・埼京線・湘南新宿ライン「恵比寿」駅徒歩11分の3路線、<br>
                東京メトロ日比谷線「恵比寿」駅徒歩13分の1路線、JR山手線・都営地下鉄三田線・東京メトロ南北線・<br>
                東急目黒線「目黒」駅徒歩13分の4路線が利用でき、都心の主要エリアへダイレクトアクセスが可能です。
            </p>
            <br>

            <p class="h5">■ＪＲ山手線・埼京線・湘南新宿ライン「恵比寿」駅より</p>
            <table>
                <tr>
                    <td><span class="h4">「渋谷」</span>駅へ直通………………<span class="h4">2</span>分（1分）</td>
                    <td><span class="h4">「新宿」</span>駅へ直通………………<span class="h4">7</span>分（6分）</td>
                </tr>
                <tr>
                    <td class="small">ＪＲ湘南新宿ライン利用</td>
                    <td class="small">ＪＲ湘南新宿ライン利用</td>
                </tr>
                <tr>
                    <td><span class="h4">「品川」</span>駅へ………………………<span class="h4">9</span>分（9分）</td>
                    <td><span class="h4">「池袋」</span>駅へ……………………<span class="h4">12</span>分（11分）</td>
                </tr>
                <tr>
                    <td class="small">ＪＲ山手線利用</td>
                    <td class="small">ＪＲ湘南新宿ライン利用</td>
                </tr>
            </table>
            <br>
            <p class="h5">■東京メトロ日比谷線「恵比寿」駅より</p>
            <table>
                <tr>
                    <td><span class="h4">「六本木」</span>駅へ直通…………<span class="h4">5</span>分（6分）</td>
                    <td><span class="h4">「霞ヶ関」</span>駅へ直通………………<span class="h4">11</span>分（12分）</td>
                </tr>
                <tr>
                    <td class="small">東京メトロ日比谷線利用</td>
                    <td class="small">東京メトロ日比谷線利用</td>
                </tr>
                <tr>
                    <td><span class="h4">「銀座」</span>駅へ…………<span class="h4">15</span>分（15分）</td>
                    <td><span class="h4">「東京」</span>駅へ……………………<span class="h4">16</span>分（16分）</td>
                </tr>
                <tr>
                    <td class="small">東京メトロ日比谷線利用</td>
                    <td class="small">東京メトロ日比谷線利用、「霞ヶ関」駅で東京メトロ丸ノ内線乗り換え</td>
                </tr>
            </table>
            <br>
            <p class="h5">■東京メトロ南北線・都営三田線「目黒」駅より</p>
            <table>
                <tr>
                    <td><span class="h4">「三田」</span>駅へ直通………………<span class="h4">7</span>分（7分）</td>
                    <td><span class="h4">「新宿」</span>駅へ直通………………<span class="h4">9</span>分（9分）</td>
                </tr>
                <tr>
                    <td class="small">都営三田線利用</td>
                    <td class="small">東京メトロ南北線利用</td>
                </tr>
                <tr>
                    <td><span class="h4">「永田」</span>駅へ………………………<span class="h4">12</span>分（12分）</td>
                    <td><span class="h4">「大手町」</span>駅へ……………………<span class="h4">15</span>分（15分）</td>
                </tr>
                <tr>
                    <td class="small">東京メトロ南北線利用</td>
                    <td class="small">都営三田線利用</td>
                </tr>
                <tr>
                    <td class="small">都営三田線利用</td>
                    <td class="small">東京メトロ南北線利用</td>
                </tr>
                <tr>
                    <td><span class="h4">「飯田橋」</span>駅へ………………………<span class="h4">18</span>分（18分）</td>
                </tr>
                <tr>
                    <td class="small">東京メトロ南北線利用</td>
                </tr>
            </table>
        </div>
    </div>

    <div class="row gold mt-5 mb-5 animation">
        <h2>都心の様々な要所へ、タクシーでの移動にも優れたロケーションです。</h2>
    </div>
        
    <!-- タクシー写真 -->
    <div class="row mt-5 mb-5 animation">
        <img class="col-3" src="{{ asset('/images/ACCESS_7.png') }}">
        <div class="col-9">
        <table>
            <tr>
                <td></td>
                <td></td>
                <td>距離</td>
                <td>日中料金</td>
                <td>所要時間</td>
                <td>深夜料金</td>
                <td>所要時間</td>
                <td>乗車場所</td>
            </tr>
            <tr>
                <td><span class="h5">品川駅</span>から</td>
                <td><span class="h5">SJINAGAWA</span></td>
                <td><span class="h5">3.9</span>km</td>
                <td><span class="h5">1,700</span>円</td>
                <td><span class="h5">14</span>分</td>
                <td><span class="h5">2,020</span>円</td>
                <td><span class="h5">14</span>分</td>
                <td>(高輪口より乗車)</td>
            </tr>
            <tr>
                <td><span class="h5">六本木駅</span>から</td>
                <td><span class="h5">ROPPONGI</span></td>
                <td><span class="h5">3.5</span>km</td>
                <td><span class="h5">1,54</span>0円</td>
                <td><span class="h5">12</span>分</td>
                <td><span class="h5">1,860</span>円</td>
                <td><span class="h5">12</span>分</td>
                <td>(六本木交差点より乗車)</td>
            </tr>
            <tr>
                <td><span class="h5">銀座駅</span>から</td>
                <td><span class="h5">GINZA</span></td>
                <td><span class="h5">6.9</span>km</td>
                <td><span class="h5">2,980</span>円</td>
                <td><span class="h5">24</span>分</td>
                <td><span class="h5">3,540</span>円</td>
                <td><span class="h5">23</span>分</td>
                <td>(銀座4丁目交差点より乗車)</td>
            </tr>
            <tr>
                <td><span class="h5">東京駅</span>から</td>
                <td><span class="h5">TOKYO</span></td>
                <td><span class="h5">7.9</span>km</td>
                <td><span class="h5">3,380</span>円</td>
                <td><span class="h5">26</span>分</td>
                <td><span class="h5">4,020</span>円</td>
                <td><span class="h5">26</span>分</td>
                <td>(丸ノ内南口より乗車)</td>
            </tr>
        </table>
        <p class="small">※出典:Japan Taxi https://japantaxi<br>
            ※掲載の情報は2022年2月現在のJapan Taxiウェブサイトにて算出したもので実際の走行ルートは料金と異なる可能性があります。<br>
            料金・所要時間は有料・高速道路を利用していない場合の内容です。深夜料金該当時間は22:00～5:00を設定しています。
        </p>
        </div>
    </div>

</div>


@endsection