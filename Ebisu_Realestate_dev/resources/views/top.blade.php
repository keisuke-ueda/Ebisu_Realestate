@extends('layout')

@section('content')

    <div class="first_view position-relative d-flex align-items-auto">

        <video autoplay muted class="movie-1 w-100 vh-100" style="object-fit: cover; object-position: 100% 100%">
            <source src="{{ asset('/images/ebisu_mae_0331.mp4') }}" type="video/mp4">
        </video>

        <!-- 上の動画が消えた後に下の動画が同じ画角上で流れる用にする -->
        <video autoplay muted class="movie-2 w-100 vh-100 position-absolute top-0 start-0 d-none" style="object-fit: cover; object-position: 100% 100%">
            <source src="{{ asset('/images/ebisu_ato_0331.mp4') }}" type="video/mp4">
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
            <div class="row animation mb-4">
                <div class="access_info ft2 h5 d-sm-flex justify-content-center align-items-center">
                    <div class="mx-2">
                        <div class="d-flex align-items-end">
                            <div>
                                <p class="s15">JR山手線・埼京線</p>
                                <p><span class="s15">湘南新宿ライン</span>「恵比寿」駅</p>
                            </div>
                            <p>徒歩<span class="h1 gold" style="line-height: 100%;">11</span>分 /</p>
                        </div>
                        <p class="font-11">
                            <span class="s15" style="color: transparent;">ーーーーーーー</span>
                            （恵比寿スカイウォークより徒歩7分）
                        </p>
                    </div>
                    <div class="mx-2">
                        <div class="d-flex align-items-end">
                            <div>
                                <p class="s15">&nbsp;</p>
                                <p><span class="s15">東京メトロ日比谷線</span>「恵比寿」駅</p>
                            </div>
                            <p>徒歩<span class="h1 gold" style="line-height: 100%;">13</span>分 /</p>
                        </div>
                        <p class="font-11">&nbsp;</p>
                    </div>
                    <div class="mx-2">
                        <div class="d-flex align-items-end">
                            <div>
                                <p class="s15">JR山手線・東京メトロ南北線・</p>
                                <p><span class="s15">都営地下鉄三田線・東急目黒線</span>「目黒」駅</p>
                            </div>
                            <p>徒歩<span class="h1 gold" style="line-height: 100%;">13</span>分</p>
                        </div>
                        <p class="font-11">&nbsp;</p>
                    </div>
                </div>
            </div>

            <!-- 枠 -->
            <div class="animation gold ft2 pb-5">
                <!-- 枠1 -->
                <div class="row mt-5 mb-4">
                    <p class="col-2"></p>
                    <div class="col-4">
                        <div class="gold_frame h-100">
                            <div class="frame_border h-100">
                                <div class="frame_circle h-100 h5">
                                    <p class="font-11">&nbsp;</p>
                                    <p>最寄りのJR山手線・埼京線「恵比寿」駅より、</p>
                                    <p class="font-11">&nbsp;</p>
                                    <p>「渋谷」駅へ<<span class="h4">2</span>分「新宿」駅へ<span class="h4">7</span>分「品川」駅へ<span class="h4">9</span>分</p>
                                    <p class="font-11">&nbsp;</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="gold_frame h-100">
                            <div class="frame_border h-100">
                                <div class="frame_circle h-100 h5">
                                    <p class="font-11">&nbsp;</p>
                                    <p>緑に包まれた<span class="h4">「ウエスティンホテル東京」</span></p>
                                    <p class="font-11">&nbsp;</p>
                                    <p><span class="h4">「恵比寿ガーデンプレイス」</span>に隣接</p>
                                    <p class="font-11">&nbsp;</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="col-2"></p>
                </div>
                <!-- 枠2 -->
                <div class="row ft2">
                    <p class="col-2"></p>
                    <div class="col-4">
                        <div class="gold_frame h-100">
                            <div class="frame_border h-100">
                                <div class="frame_circle h-100 h4">
                                    <p class=""><span style="color: transparent;">ーーーーーーーーーーー</span><span class="font-11">※1</span>&nbsp;&nbsp;&nbsp;</p>
                                    <p class="">内廊下設計、角住戸率<span class="h3">57%</span>超</p>
                                    <p class="font-11">&nbsp;</p>
                                    <p class="font-11">&nbsp;</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="gold_frame">
                            <div class="frame_border">
                                <div class="frame_circle h5">
                                    <p class="font-11">&nbsp;</p>
                                    <p class="h4">大型SUV車、スポーツカーも安心</p>
                                    <p class="font-11"><span style="color: transparent;">ーーーーーーーーーーーーーーーーーー</span>※２</p>
                                    <p class="h4">全12台分の駐車場を設置</p>
                                    <p class="font-11">&nbsp;</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="col-2"></p>
                </div>
            </div>

            <!-- アンケートエリア -->
            <div class="animation my-5">
                <div class="row mb-4">
                    <p class="col-1"></p>
                    <p class="col-10 gold-title text-center h4 mt--5 mb-4 ft2">「お住まいについてのアンケート」にご協力ください。</p>
                    <p class="col-1"></p>
                </div>
                <div class="row pb-5">
                    <p class="col-4"></p>
                    <div class="col-4 border-gold text-center ft2 py-4">
                        <p class="text-center mt-2 mb-3" style="line-height:2;"><span class="pb-1" style="border-bottom:1px solid white;">アンケート項目すべてにご協力いただいた方に、</span><br>もれなくAmazonギフト券(1000円相当)を進呈します。</p> 
                        <div class="row">
                            <p class="col-1"></p>
                            <form action="/questionnaire" method="GET">
                                <button type="submit" class="col-10 gold_btn px-2 mh-parts mt-4 mb-2"><span class="h5 text-white">アンケートはこちら</span></button>
                            </form>
                            <p class="col-1"></p>
                        </div>
                    </div>
                    <p class="col-4"></p>
                </div>
            </div>

            <!-- INFOMATION -->
            <div class="row animation my-5">
                <div class="row mb-4"> 
                    <p class="col-1"></p>
                    <p class="col-10 gold-title text-center h4 ft3">INFORMATION</p>
                    <p class="col-1"></p>
                </div>
                <div class="row ft2">
                    <p class="col-3"></p>
                    <div class="col-6">
                        <table class="table text-white small info_table">
                            <tr>
                                <td class="py-3" scope="col">2022.4.15</td>
                                <td class="py-3" scope="col">ラ・アトレ恵比寿グランガーデン　ホームページ開設</td>
                            </tr>
                            <tr>
                                <td class="py-3" scope="col">2022.4.15</td>
                                <td class="py-3" scope="col">お住まいのアンケートを開設しました。(期間中、全てのアンケートに回答していただいた方にAmazonギフト券をプレゼントします。)</td>
                            </tr>
                        </table>
                    </div>
                    <p class="col-3"></p>
                </div>
            </div>

        </div>


        <div class="py-5">
            <!-- Ebisu -->
            <div class="row my-5 pb-5">
                <div class="col-8 animation-0-zm">
                    <img src="{{ asset('/images/12.JPG') }}" alt="サンプル画像" class="mx-auto d-block img-fluid { max-width: 100%; height: auto }">
                </div>
                <div class="col-4 animation ft2 ebisu_col">
                    <img class="d-block ms-5 mb-4 ebisu_img w-75" src="{{ asset('/images/theebisu.svg') }}" alt="サンプル画像">
                    <p class="d-block ms-5 mb-4 ft2 ebisu_p s19">恵比寿、それも「恵比寿ガーデンプレイス」<br>
                        「ウエスティンホテル東京」を間近とする住宅地。<br>
                        その静謐なる佇まいはそのまま、住まわれる方の誇りとなる。<br>
                        多くを語らずとも本物を知る人を魅了するレジデンス。<br>
                        「ラ・アトレ恵比寿」-ゆるぎなき矜持がここにある。
                    </p>
                    <div class="gold_line w-50 mb-4 ebisu_line"></div>
                    <button class="mx-auto d-block gold_btn read_more" type="button">
                        <a href="/concept" class="text-white mh-parts small" style=";text-decoration: none;">Read More</a>
                    </button>
                </div>
            </div>

            <!-- Location -->
            <div class="row my-5 py-5">
                <div class="col-4 animation ft2 location_col">
                    <img class="d-block ms-5 mb-4 ms-3 location_img w-75" src="{{ asset('/images/thelocation.svg') }}" alt="サンプル画像">
                    <p class="d-block ms-5 mb-4 ms-5 location_p s19">洗練と成熟に抱かれた街、恵比寿。<br>
                        ここに誕生するのは、静けさと美しさを纏う邸宅。<br>
                        「ラ・アトレ恵比寿グランガーデン」<br>
                        建築の美しいモダン邸宅と街並みの美しい潤いが、<br>
                        ココに暮らす人々の姿さえも、この地の美しい風景となる。
                    </p>
                    <div class="gold_line w-50 mb-4 location_line"></div>
                    <button class="mx-auto d-block gold_btn read_more" type="button">
                        <a href="/location" class="text-white mh-parts small" style="text-decoration: none; pointer-events:none;">Read More</a>
                    </button>
                </div>
                <div class="col-4 d-flex flex-column justify-content-between">
                    <img src="{{ asset('/images/恵比寿ガーデンプレイス1.png') }}" alt="サンプル画像" style="width: 100%; height: 48%; object-fit: cover; object-position: 100% 100%" class="animation-0-zm">
                    <img src="{{ asset('/images/アメリカ橋公園1.png') }}" alt="サンプル画像" style="width: 100%; height: 48%; object-fit: cover; object-position: 100% 100%" class="animation-0-zm">
                </div>
                <div class="col-4 d-flex flex-column justify-content-between">
                    <img src="{{ asset('/images/ウエスティンホテル1.png') }}" alt="サンプル画像" style="width: 100%; height: 48%; object-fit: cover; object-position: 100% 100%" class="animation-1-zm">
                    <img src="{{ asset('/images/国立科学博物館付属自然教育園1.png') }}" alt="サンプル画像" style="width: 100%; height: 48%; object-fit: cover; object-position: 100% 100%" class="animation-1-zm">
                </div>
            </div>

            <!-- Access -->
            <div class="row my-5 py-5">
                <div class="col-8 animation-0-zm">
                    <img src="{{ asset('/images/4区.png') }}" alt="サンプル画像" class="mx-auto d-block img-fluid { max-width: 100%; height: auto }">
                </div>
                <div class="col-4 animation ft2 access_col">
                    <img class="d-block ms-5 mb-4 access_img w-75" src="{{ asset('/images/theaccess.svg') }}" alt="サンプル画像">
                    <p class="d-block ms-5 mb-4 access_p s19">都心をもっと近くする、スピーディなアクセス。<br>
                        渋谷、新宿、東京、品川など主要都市を結ぶ山手線。<br>
                        渋谷、霞ヶ関、銀座へダイレクトに繋がることのできる日比谷線。<br>
                        ここには、目的に合わせて、路線を使いこなせる自由がある。
                    </p>
                    <div class="gold_line w-50 mb-4 access_line"></div>
                    <button class="mx-auto d-block gold_btn read_more" type="button">
                        <a href="/access" class="text-white mh-parts small" style="text-decoration: none;">Read More</a>
                    </button>
                </div>
            </div>

            <!-- Design -->
            <div class="row my-5 py-5">
                <div class="col-4 animation ft2 design_col">
                    <img class="d-block ms-5 mb-4 ms-3 design_img w-75" src="{{ asset('/images/thedesign.svg') }}" alt="サンプル画像">
                    <p class="d-block ms-5 mb-4 ms-3 design_p s19">常緑樹の深い緑も豊かな静謐なる街並み。周辺の<br>
                        高級住宅街にふさわしい丘上の瀟洒な5階建て。<br>
                        緑と調和しながら独自の存在感を醸し出しています。<br>
                        バルコニーの目立たない高級感にあふれる雁行フォルム。<br>
                        落ち着いた基調色が街並みと美しく調和します。
                    </p>
                    <div class="gold_line w-50 mb-4 design_line"></div>
                    <button class="mx-auto d-block gold_btn read_more" type="button">
                        <a href="/design" class="text-white mh-parts small" style="text-decoration:none; pointer-events:none;">Read More</a>
                    </button>
                    <!-- <img src="{{ asset('/images/デザイン1.png') }}" alt="サンプル画像" class="design_img2 mt-4 mx-auto d-block img-fluid { max-width: 100%; height: auto }"> -->
                </div>
                <div class="col-8 animation-1-zm">
                    <img src="{{ asset('/images/TOP_11.png') }}" alt="サンプル画像" class="img-fluid { max-width: 100%; height: auto } ">
                </div>
            </div>

            <!-- Plan -->
            <!-- <div class="row my-5 py-5">
                <div class="col-8 animation-0-zm">
                    <img src="{{ asset('/images/ダミーマップ.jpg') }}" alt="サンプル画像" class="img-fluid { max-width: 100%; height: auto } ">
                </div>
                <div class="col-4 animation ft2 plan_col">
                    <img class="d-block ms-5 mb-4 plan_img w-75" src="{{ asset('/images/theplan.png') }}" alt="サンプル画像">
                    <p class="d-block ms-5 mb-4 plan_p s19">ダミーコピー恵比寿、それも「恵比寿ガーデンプレイス」、
                        「ウェスティンホテル東京」を間近とする住宅地。その静謐なる佇まいは、
                        その静謐なる佇まいはそのまま、住まわれる方の誇りとなる。多くを語らずとも、
                        本物を知る人を魅了するレジデンス。ダミーコピー恵比寿、それも「恵比寿ガーデンプレイス」、
                    </p>
                    <div class="gold_line w-50 mb-4 plan_line"></div>
                    <button class="mx-auto d-block gold_btn" type="button">
                        <a href="/plan" class="text-white mh-parts small" style="text-decoration:none; pointer-events:none;">Read More</a>
                    </button>
                </div>
            </div> -->

            <div class="row my-5 py-5 animation-0-zm">
                <p class="col-2"></p>
                <div class="col-8 d-flex justify-content-center">
                    <a href="/blanding" style="pointer-events:none;" class="w-100">
                    <img src="{{ asset('/images/TOP_7.png') }}" class="w-100">
                    </a>
                </div>
                <p class="col-2"></p>
            </div>

            <div class="animation">
                <div class="row">
                    <button class="col-3 mx-auto d-block copper_btn py-3" type="button">
                        <a href="/entry" class="text-white mh-parts ft2" style="text-decoration: none; font-size: 19px;">物件エントリー受付中</a>
                    </button>
                </div>
                <div class="row mt-5">
                    <p class="col-2"></p>
                    <p class="col-8 small ft2">
                        ※1) 総戸数21戸中 12戸が角住戸により、57%超の角住戸となります。<br>
                        ※2) 全12台の駐車場は、大型SUV車、スポーツカーが3台駐車可能となります。また、1台の屋外平置式シェアカーを含んでいます。<br>
                        ※正射画像データ:国土地理院刊行の正射画像データに、一部CG加工を施しており、実際とは異なります。<br>
                        ※航空写真:令和4年3月撮影の航空写真に、一部CG加工を施しており、実際とは異なります。<br>
                        ※掲載の写真は2022年3月に撮影したもので、一部加工・修正を施しております。<br>
                    </p>
                    <p class="col-2"></p>
                </div>
            </div>

        </div>
        
    </div>

    <!-- 後々"layout.js"に記述予定 -->
    <script>
        $(function(){
            $(window).on('load',function (){
                let btn = $('.read_more').outerHeight();

                var ebisu_col = $('.ebisu_col').height();
                var ebisu_img = $('.ebisu_img').height();
                var ebisu_p = $('.ebisu_p').height();
                
                var location_col = $('.location_col').height();
                var location_img = $('.location_img').height();
                var location_p = $('.location_p').height();

                var access_col = $('.access_col').height();
                var access_img = $('.access_img').height();
                var access_p = $('.access_p').height();

                var design_col = $('.design_col').height();
                var design_img = $('.design_img').height();
                var design_p = $('.design_p').height();

                // var plan_col = $('.plan_col').height();
                // var plan_img = $('.plan_img').height();
                // var plan_p = $('.plan_p').height();


                var ebisu_line = ebisu_col - ebisu_img - ebisu_p - btn - 72
                var location_line = location_col - location_img - location_p - btn - 72
                var access_line = access_col - access_img - access_p - btn - 72
                var design_line = design_col - design_img - design_p - btn  - 72
                // var plan_line = plan_col - plan_img - plan_p - btn - 72

                $('.ebisu_line').height(ebisu_line);
                $('.location_line').height(location_line);
                $('.access_line').height(access_line);
                $('.design_line').height(design_line);
                // $('.plan_line').height(plan_line);
            })
        })
    </script>

@endsection
