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
        <div class="black_wall text-white py-5">
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

            <div class="animation gold">
                <div class="row mt-5 mb-4">
                    <p class="col-2"></p>
                    <div class="col-4">
                        <p class="border border-warning text-center h-100">最寄りJR線「恵比寿」駅より<br><span>「渋谷」駅~2分(1分).「新宿」駅~7分(6分).「品川」駅~9分(9分)</span></p>
                    </div>
                    <div class="col-4">
                        <p class="border border-warning text-center h-100">都心にありながら、都心の喧騒を離れ、樹々の安らぎと<br><span>空の恵みを繕う約26mの丘の上の美しい邸宅</span></p>
                    </div>
                    <p class="col-2"></p>
                </div>
                <div class="row">
                    <p class="col-2"></p>
                    <div class="col-4">
                        <p class="border border-warning text-center">隣には緑に包まれた<br><span>「ウェスティンホテル東京」「恵比寿ガーデンプレイス」</span></p>
                    </div>
                    <div class="col-4">
                        <p class="border border-warning text-center">内廊下設計<br><span>角住戸率66%超</span></p>
                    </div>
                    <p class="col-2"></p>
                </div>
            </div>


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
                        <p class="col-3"></p>
                        <form action="/questionnaire" method="GET">
                            <button type="submit" class="col-6 btn btn-warning" ><span class="h3 text-white">アンケートはこちら</span></button>
                        </form>
                        <p class="col-3"></p>
                    <br>
                    <br>
                    </div>
                </div>
                <p class="col-4"></p>
            </div>

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
                    <img src="{{ asset('/images/環境-新宿.png') }}" alt="サンプル画像" class="img-fluid { max-width: 100%; height: auto } ">
                    <p class="text-center">テキストテキストテキストテキストテキストテキストテキスト</p>
                    <button class="mx-auto d-block btn btn-warning" type="button"><span class="h3 text-white">Read More</span></button>
                </div>
            </div>

            <div class="animation mt-5 mb-5">
                <div class="row">
                    <p class="col-1"></p>
                    <div class="col-4">
                        <img src="{{ asset('/images/環境-新宿.png') }}" alt="サンプル画像" class="img-fluid { max-width: 100%; height: auto } ">
                    </div>
                    <div class="col-4">
                        <img src="{{ asset('/images/アメリカ橋公園_3.jpg') }}" alt="サンプル画像" class="img-fluid { max-width: 100%; height: auto }">
                        <p class="small">アメリカ橋公園(徒歩 分/約 m)</p>
                    </div>
                </div>
                <div class="row mt-5 mb-5">
                    <div class="col-7 text-center">
                        <p class="text-center">テキストテキストテキストテキストテキストテキストテキスト</p>
                        <button class="mx-auto d-block btn btn-warning" type="button"><span class="h3 text-white">Read More</span></button>
                    </div>
                    <div class="col-4">
                        <img src="{{ asset('/images/自然教育園_3.jpg') }}" alt="サンプル画像" class="img-fluid { max-width: 100%; height: auto }">
                        <p class="small">自然教育公園(徒歩 分/約 m)</p>
                    </div>
                </div>
            </div>

            <div class="animation mt-5 mb-5">
                <div class="row">
                    <div class="col-8">
                        <img src="{{ asset('/images/路線図.jpg') }}" alt="サンプル画像" class="mx-auto d-block img-fluid { max-width: 100%; height: auto }">
                    </div>
                    <div class="col-4">
                        <img src="{{ asset('/images/環境-新宿.png') }}" alt="サンプル画像" class="img-fluid { max-width: 100%; height: auto } ">
                    </div>
                </div>

                <div class="row">
                    <div class="col-8">
                        <p></p>


                        路線情報

                    </div>
                    <div class="col-4">
                        <p class="text-center">テキストテキストテキストテキストテキストテキストテキスト</p>
                        <button class="mx-auto d-block btn btn-warning" type="button"><span class="h3 text-white">Read More</span></button>
                    </div>
                </div>
            </div>

            <div class="row animation mt-5 mb-5">
                <div class="col-4">
                    <img src="{{ asset('/images/環境-新宿.png') }}" alt="サンプル画像" class="img-fluid { max-width: 100%; height: auto } ">
                    <p class="text-center">テキストテキストテキストテキストテキストテキストテキスト</p>
                    <button class="mx-auto d-block btn btn-warning" type="button"><span class="h3 text-white">Read More</span></button>
                </div>
                <div class="col-8">
                    <img src="{{ asset('/images/picture1.png') }}" alt="サンプル画像" class="mx-auto d-block img-fluid { max-width: 100%; height: auto }">
                </div>
            </div>


            <div class="row animation mt-5 mb-5">
                <div class="col-8">
                    <img src="{{ asset('/images/環境-新宿.png') }}" alt="サンプル画像" class="mx-auto d-block img-fluid { max-width: 100%; height: auto }">
                </div>
                <div class="col-4">
                    <img src="{{ asset('/images/環境-新宿.png') }}" alt="サンプル画像" class="img-fluid { max-width: 100%; height: auto } ">
                    <p class="text-center">テキストテキストテキストテキストテキストテキストテキスト</p>
                    <button class="mx-auto d-block btn btn-warning" type="button"><span class="h3 text-white">Read More</span></button>
                </div>
            </div>

            <div class="row mt-5 mb-5">
                <p class="col-2"></p>
                <p class="col-8 text-center">ボタン画像</p>
                <p class="col-4"></p>
            </div>

            <div class="animation mt-5 mb-5">
                <h1 class="h1 text-center">現地案内</h1>
                <div class="row">
                    <p class="col-2"></p>
                    <img src="{{ asset('/images/マップ1.jpg') }}" alt="サンプル画像" class="col-8 img-fluid { max-width: 100%; height: auto } ">
                    <p class="col-2"></p>
                </div>
                <div class="row mt-3 mb-3">
                    <form action="/access" method="GET">
                        <button class="col-3 mx-auto d-block btn btn-warning" type="submit"><span class="h3 text-white">資料請求受付中</span></button>
                    </form>
                </div>
                <div class="row  mt-3">
                    <p class="col-3"></p>
                    <p class="col-6 small">テキストテキストテキストテキストテキストテキストテキストテキスト</p>
                    <p class="col-3"></p>
                </div>
            </div>

        </div>
        
    </div>

@endsection
