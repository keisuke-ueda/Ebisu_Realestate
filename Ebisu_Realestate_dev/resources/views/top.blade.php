@extends('layout')

@section('content')

    <div class="first_view position-relative d-flex align-items-auto">

        <video autoplay muted class="movie-1 w-100">
            <source src="{{ asset('/images/ebisu_mae_0320.mp4') }}" type="video/mp4">
        </video>

        <!-- 上の動画が消えた後に下の動画が同じ画角上で流れる用にする -->
        <video autoplay muted class="movie-2 w-100 position-absolute top-0 start-0 d-none">
            <source src="{{ asset('/images/ebisu_ato_0321.mp4') }}" type="video/mp4">
        </video>

        <!-- スキップボタン -->
        <div class="movie_skip position-absolute bottom-0 end-0">
            <button type="button" class="movie_skip_btn btn btn-outline-light">SKIP</button>
        </div>
    </div>


    <div class="second_view">
        <!-- ブラック背景テキストエリア -->
        <div class="black_wall text-white py-5">
            <!-- 移動 -->
            <div class="animation mb-4">
                <div class="row">
                    <p class="col-3"></p>
                    <p class="col-6">JR線「恵比寿」駅へ徒歩<span class="gold h1" style="display:inline-block">11</span>分 /
                    東京メトロ日比谷線「恵比寿」駅へ徒歩<span class="gold h1">13</span>分 / 
                    JR線「目黒」駅へ徒歩<span class="gold h1">13</span>分</p>
                </div>
                <div class="row">  
                    <p class="col-3"></p>
                    <p class="col-6 small">(恵比寿スカイウォークより徒歩7分)</p>
                </div>
            </div>

            <!-- 枠 -->
            <div class="animation gold">
                <!-- 枠1 -->
                <div class="row mt-5 mb-4">
                    <p class="col-2"></p>
                    <div class="col-4">
                        <div class="gold_frame">
                            <div class="frame_border">
                                <div class="frame_circle">
                                    <p class="h-100">最寄りのJR山手線・埼京線「恵比寿」駅より、<br><span>「渋谷」駅へ2分「新宿」駅へ7分「品川」駅へ9分</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="gold_frame">
                            <div class="frame_border">
                                <div class="frame_circle">
                                    <p class="h-100">緑に包まれた「ウエスティンホテル東京」<br><span>「恵比寿ガーデンプレイス」に隣接</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="col-2"></p>
                </div>
                <!-- 枠2 -->
                <div class="row">
                    <p class="col-2"></p>
                    <div class="col-4">
                        <div class="gold_frame">
                            <div class="frame_border">
                                <div class="frame_circle">
                                    <p class="">内廊下設計<br><span>角住戸率66%超</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="gold_frame">
                            <div class="frame_border">
                                <div class="frame_circle">
                                    <p class="">大型SUV車、スポーツカーが<br><span>安心の駐車場8台分設置</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="col-2"></p>
                </div>
            </div>

            <!-- アンケートエリア -->
            <div class="row animation mt-5">
                <p class="text-center h2 mb-4">「お住まいについてのアンケート」にご協力ください。</p>
                <p class="col-4"></p>
                <div class="col-4 border border-warning text-center">
                    <br>
                    <br>
                    <br>
                    <p class="text-center mb-4">アンケート項目すべてにご協力いただいた方に、<br>もれなくAmazonギフト券(1000円相当)を進呈します。</p> 
                    <br>
                    <br>
                    <div class="row">
                        <p class="col-2"></p>
                        <form action="/questionnaire" method="GET">
                            <button type="submit" class="col-8 gold_btn p-2" ><span class="h3 text-white">アンケートはこちら</span></button>
                        </form>
                        <p class="col-2"></p>
                    <br>
                    <br>
                    </div>
                </div>
                <p class="col-4"></p>
            </div>

            <!-- INFOMATION -->
            <div class="row animation mt-5">
                <p class="text-center h2 mb-4">INFORMATION</p>
                <p class="col-4"></p>

                <div class="col-4">
                    <table class="table text-white">
                        <tr>
                            <td scope="col">2022.4.8</td>
                            <td scope="col">ラ・アトレ恵比寿グランガーデン　ホームページ開設</td>
                        </tr>
                        <tr>
                            <td scope="col">2022.4.8</td>
                            <td scope="col">お住まいのアンケートを開設しました。(期間中、全てのアンケートに回答していただいた方にAmazonギフト券をプレゼントします。)</td>
                        </tr>
                    </table>
                </div>
                
                <p class="col-4"></p>
            </div>

        </div>


        <div class="white_wall py-5">
            <div class="row animation mt-5 mb-5">
                <div class="col-8">
                    <img src="{{ asset('/images/12.JPG') }}" alt="サンプル画像" class="mx-auto d-block img-fluid { max-width: 100%; height: auto }">
                </div>
                <div class="col-4">
                    <img src="{{ asset('/images/ロゴ1.png') }}" alt="サンプル画像" class="img-fluid { max-width: 100%; height: auto } ">
                    <p class="h2">恵比寿、そても「恵比寿ガーデンプレイス」<br>
                        「ウエスティンホテル東京」を間近とする住宅地。<br>
                        その静謐なる佇まいそのまま、住まわれる方の誇りとなる。<br>
                        多くを語らずとも本物を知る人を魅了するレジデンス。<br>
                        「ラ・アトレ恵比寿」-ゆるぎなき矜持がここにある。</p>
                    <button class="mx-auto d-block gold_btn" type="button"><span class="h3 text-white">Read More</span></button>
                </div>
            </div>

            <!-- ロケーション -->
            <div class="animation mt-5 mb-5">
                <div class="row">
                    <p class="col-1"></p>
                    <div class="col-4">
                        <img src="{{ asset('/images/環境-新宿.png') }}" alt="サンプル画像" class="img-fluid { max-width: 100%; height: auto } ">
                    </div>
                    <div class="col-3">
                        <img src="{{ asset('/images/ウエスティンホテル.png') }}" alt="サンプル画像" class="img-fluid { max-width: 100%; height: auto }">
                    </div>
                    <div class="col-3">
                        <img src="{{ asset('/images/恵比寿ガーデンプレイス.png') }}" alt="サンプル画像" class="img-fluid { max-width: 100%; height: auto }">
                    </div>
                </div>
                <div class="row mt-5 mb-5">
                    <div class="col-4">
                        <p class="h2">洗練と成熟に抱かれた街、恵比寿。<br>
                            ここに誕生するのは、静けさと美しさを纏う邸宅。<br>
                            「ラ・アトレ恵比寿グランガーデン」<br>
                            建築の美しいモダン邸宅と街並みの美しい潤いが、<br>
                            ココに暮らす人々の姿さえも、この地の美しい風景となる。</p>
                        <button class="mx-auto d-block gold_btn" type="button"><span class="h3 text-white">Read More</span></button>
                    </div>
                    <div class="col-3">
                        <img src="{{ asset('/images/アメリカ橋公園3.png') }}" alt="サンプル画像" class="img-fluid { max-width: 100%; height: auto }">
                    </div>
                    <div class="col-3">
                        <img src="{{ asset('/images/国立科学博物館付属自然教育園.png') }}" alt="サンプル画像" class="img-fluid { max-width: 100%; height: auto }">
                    </div>
                </div>
            </div>

            <div class="animation mt-5 mb-5">
                <div class="row">
                    <div class="col-2">
                        <img src="{{ asset('/images/渋谷.png') }}" alt="サンプル画像" class="mx-auto d-block img-fluid { max-width: 100%; height: auto }">
                    </div>
                    <div class="col-2">
                        <img src="{{ asset('/images/六本木.png') }}" alt="サンプル画像" class="mx-auto d-block img-fluid { max-width: 100%; height: auto }">
                    </div>
                    <div class="col-2">
                        <img src="{{ asset('/images/新宿.png') }}" alt="サンプル画像" class="mx-auto d-block img-fluid { max-width: 100%; height: auto }">
                    </div>
                    <div class="col-2">
                        <img src="{{ asset('/images/品川.png') }}" alt="サンプル画像" class="mx-auto d-block img-fluid { max-width: 100%; height: auto }">
                    </div>
                    <div class="col-4">
                        <img src="{{ asset('/images/環境-新宿.png') }}" alt="サンプル画像" class="img-fluid { max-width: 100%; height: auto } ">
                    </div>
                </div>

                <div class="row">
                    <div class="col-8">
                        <p></p>

                    </div>
                    <div class="col-4">
                        <p class="">都心をもっと近くする、スピーディなアクセス。<br>
                            渋谷、霞ヶ関、銀座へダイレクトにつながることのできる日比谷線。<br>
                            ここには、目的に合わせて、路線を使いこなせる自由がある</p>
                        <button class="mx-auto d-block gold_btn" type="button"><span class="h3 text-white">Read More</span></button>
                    </div>
                </div>
            </div>

            <div class="row animation mt-5 mb-5">
                <div class="col-4">
                    <img src="{{ asset('/images/環境-新宿.png') }}" alt="サンプル画像" class="img-fluid { max-width: 100%; height: auto } ">
                    <p class="h2">常緑樹の深い緑も豊かな静謐なる街並み。周辺に
                        高級住宅街にふさわしい丘上の　酒な5階建て。
                        緑と調和しながら独自の存在感を醸し出しています。
                        バルコニーの目立たない高級感にあふれる　　フォルム。
                        落ち着いた基調色が街並みと美しく調和します。
</p>
                    <button class="mx-auto d-block gold_btn" type="button"><span class="h3 text-white">Read More</span></button>
                </div>
                <div class="col-8">
                    <img src="{{ asset('/images/picture1.png') }}" alt="サンプル画像" class="mx-auto d-block img-fluid { max-width: 100%; height: auto }">
                </div>
            </div>


            <div class="row animation mt-5 mb-5">
                <div class="col-8">
                    <img src="{{ asset('/images/ダミーマップ.jpg') }}" alt="サンプル画像" class="mx-auto d-block img-fluid { max-width: 100%; height: auto }">
                </div>
                <div class="col-4">
                    <img src="{{ asset('/images/環境-新宿.png') }}" alt="サンプル画像" class="img-fluid { max-width: 100%; height: auto } ">
                    <p class="text-center">テキストテキストテキストテキストテキストテキストテキスト</p>
                    <button class="mx-auto d-block gold_btn" type="button"><span class="h3 text-white">Read More</span></button>
                </div>
            </div>

            <div class="row mt-5 mb-5">
                <p class="col-2"></p>
                <p class="col-8 text-center">ボタン画像</p>
                <p class="col-4"></p>
            </div>

            <div class="animation mt-5 mb-5">
                <div class="row mt-3 mb-3">
                    <form action="/access" method="GET">
                        <button class="col-3 mx-auto d-block copper_btn" type="submit"><span class="h3 text-white">資料請求受付中</span></button>
                    </form>
                </div>
                <div class="row  mt-3">
                    <p class="col-3"></p>
                    <p class="col-6 small">テキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                    <p class="col-3"></p>

                    ※総戸数21戸中12戸が角住戸により、57%超の角住戸率となります。※現地からの徒歩分数は、80mを1分として算出し、端数は切り上げております。※掲載の情報は令和4年3月現在のもので変更になる場合があります。</br>
                    ※各駅への所要時間は日中平常時の最短所要時間を表記しています。※所要時間には、乗り換え・待ち時間は含まれません。（ＪＲ線・東京メトロ線・都営地下鉄線時刻表調べ）</br>
                    ［還付先］ 株式会社ラ・アトレ 〒105-0022 東京都港区海岸1-9-18 国際浜松町ビル 7F<br>
                </div>
            </div>

        </div>
        
    </div>

@endsection
