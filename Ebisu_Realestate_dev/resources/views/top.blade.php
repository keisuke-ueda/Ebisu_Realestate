@extends('layout')

@section('content')
    <div class="first_view">

        <video autoplay muted class="movie-1">
            <source src="{{ asset('/images/ebisu_mae_0331.mp4') }}" type="video/mp4">
        </video>

        <!-- 上の動画が消えた後に下の動画が同じ画角上で流れる用にする -->
        <video autoplay muted class="movie-2 absolute top-0 start-0 d-none">
            <source src="{{ asset('/images/ebisu_ato_0331.mp4') }}" type="video/mp4">
        </video>

        <!-- スキップボタン -->
        <div class="movie_skip position-absolute bottom-0 end-0">
            <button type="button" class="movie_skip_btn btn btn-outline-light">SKIP</button>
        </div>

        <!-- SP用動画 -->
        <video autoplay muted class="sp_movie">
            <source src="{{ asset('/images/ebisu_SP.mp4') }}" type="video/mp4">
        </video>
    </div>

    <div class="second_view">
        <!-- ブラック背景テキストエリア -->

        <div class="black_wall text-white">

            <!-- アクセス情報 PC表示 -->
            <div class="access_info_group animation">
                <div class="access_info ft2">
                    <div class="d-flex align-items-end">
                        <div>
                            <p class="s14">JR山手線・埼京線</p>
                            <p class="s14">湘南新宿ライン<span class="s18">｢恵比寿｣駅</span></p>
                        </div>
                        <p class="s18">徒歩<span class="gold-2 s42" style="line-height: 100%;">11</span>分 /</p>
                    </div>
                    <p class="s9">
                        <span style="color: transparent;">ーーーーーーーーーーー</span>
                        （恵比寿スカイウォークより徒歩7分）
                    </p>
                </div>
                <div class="access_info ft2">
                    <div class="d-flex align-items-end">
                        <div>
                            <p class="s14">&nbsp;</p>
                            <p class="s14">東京メトロ日比谷線<span class="s18">｢恵比寿｣駅</span></p>
                        </div>
                        <p class="s18">徒歩<span class="gold-2 s42" style="line-height: 100%;">13</span>分 /</p>
                    </div>
                    <p class="s9">&nbsp;</p>
                </div>
                <div class="access_info ft2">
                    <div class="d-flex align-items-end">
                        <div>
                            <p class="s14">JR山手線・東京メトロ南北線・</p>
                            <p class="s14">都営地下鉄三田線・東急目黒線<span class="s18">｢目黒｣駅</span></p>
                        </div>
                        <p class="s18">徒歩<span class="gold-2 s42" style="line-height: 100%;">13</span>分</p>
                    </div>
                    <p class="s9">&nbsp;</p>
                </div>
            </div>

            <!-- アクセス情報 スマホ表示 -->
            <div class="access_info_group2 animation ft2">
                <div class="d-inline-block">
                    <div class="d-flex justify-content-start align-items-start" style="margin-bottom:10px;">
                        <p class="s10 pt-1">JR山手線・埼京線・湘南新宿ライン</p>
                        <div style="margin-left:5px;">
                            <p class="s14"><span class="s18">｢恵比寿｣</span>駅徒歩<span class="gold-2 s24" style="line-height: 100%;">11</span>分</p>
                            <p class="s9">(恵比寿スカイウォークより徒歩7分)</p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-start align-items-center" style="margin-bottom:10px;">
                        <p class="s10">東京メトロ日比谷線<span style="color:transparent;">ーーーーーーー</span></p>
                        <p class="s14" style="margin-left:5px;"><span class="s18">｢恵比寿｣</span>駅徒歩<span class="gold-2 s24" style="line-height: 100%;">13</span>分<span class="s18" style="color: transparent;"></span></p>
                    </div>
                    <div class="d-flex justify-content-start align-items-center">
                        <p class="s10">JR山手線・東京メトロ南北線・<br>都営地下鉄三田線・東急目黒線<span style="color:transparent;">ーー</span></p>
                        <p class="s14" style="margin-left:5px;"><span class="s18">｢目黒｣</span>駅徒歩<span class="gold-2 s24" style="line-height: 100%;">13</span>分<span class="s18" style="color: transparent;"></span></p>
                    </div>
                </div>
            </div>

            <!-- 枠 PC表示 -->
            <div class="gold_info_area animation gold-2">
                <!-- 枠1 -->
                <div class="gold_info_group">
                    <div class="gold_info ft2 s16">
                        <div class="gold_frame h-100">
                            <div class="frame_border h-100">
                                <div class="frame_circle h-100">
                                    <p>&nbsp;</p>
                                    <p>最寄りのJR山手線・埼京線・湘南新宿ライン「恵比寿」駅より、</p>
                                    <p class="s14">&nbsp;</p>
                                    <p style="line-height:100%;">「渋谷」駅へ<span class="s24 h-100">2</span>分「新宿」駅へ<span class="s24 h-100">7</span>分「品川」駅へ<span class="s24 h-100">9</span>分</p>
                                    <p>&nbsp;</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gold_info ft2 s16">
                        <div class="gold_frame h-100">
                            <div class="frame_border h-100">
                                <div class="frame_circle h-100">
                                    <p>&nbsp;</p>
                                    <p>緑に包まれた<span class="s20">「ウエスティンホテル東京」</span></p>
                                    <p class="s14"><span style="color: transparent;">ーーーーーーーーーーー&nbsp;</span>※1</p>
                                    <p class="s16"><span class="s20">「恵比寿ガーデンプレイス」</span>に隣接</p>
                                    <p>&nbsp;</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 枠2 -->
                <div class="gold_info_group">
                    <div class="gold_info ft2 s21">
                        <div class="gold_frame h-100">
                            <div class="frame_border h-100">
                                <div class="frame_circle h-100">
                                    <p>&nbsp;</p>
                                    <p class="s14" style="line-height:100%;"><span style="color: transparent;">ーーーーーーーーーーーーーーー&nbsp;</span>※2</p>
                                    <p class="s21" style="line-height:100%;">内廊下設計、角住戸率<span class="s27 h-100">57%</span>超</p>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gold_info ft2 s20">
                        <div class="gold_frame h-100">
                            <div class="frame_border h-100">
                                <div class="frame_circle h-100">
                                    <p>&nbsp;</p>
                                    <p class="s20">大型SUV車、スポーツカーも安心</p>
                                    <p class="s14"><span style="color: transparent;">ーーーーー-ーーーーーーーーー</span>※3</p>
                                    <p class="s20">全12台分の駐車場を設置</p>
                                    <p>&nbsp;</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 枠 スマホ表示 -->
            <div class="gold_info_area2">
                <div class="gold_info ft2 s10">
                    <div class="gold_frame h-100">
                        <div class="frame_border h-100">
                            <div class="frame_circle h-100">
                                <p>&nbsp;</p>
                                <p>最寄りのJR山手線・埼京線・湘南新宿ライン｢恵比寿｣駅より、</p>
                                <p class="s10">&nbsp;</p>
                                <p style="line-height:100%;">｢渋谷｣駅へ<span class="s18 h-100">2</span>分｢新宿｣駅へ<span class="s18 h-100">7</span>分｢品川｣駅へ<span class="s18 h-100">9</span>分</p>
                                <p>&nbsp;</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gold_info ft2 s11">
                    <div class="gold_frame h-100">
                        <div class="frame_border h-100">
                            <div class="frame_circle h-100">
                                <p>&nbsp;</p>
                                <p>緑に包まれた<span class="s14">｢ウエスティンホテル東京｣</span></p>
                                <p class="s10"><span style="color: transparent;">ーーーーーーーーーーー&nbsp;</span>※1</p>
                                <p class=""><span class="s14">｢恵比寿ガーデンプレイス｣</span>に隣接</p>
                                <p>&nbsp;</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gold_info ft2 s10">
                    <div class="gold_frame h-100">
                        <div class="frame_border h-100">
                            <div class="frame_circle h-100">
                                <p>&nbsp;</p>
                                <p class="s10" style="line-height:100%;"><span style="color: transparent;">ーーーーーーーーーーーーーーー&nbsp;</span>※2</p>
                                <p class="s14" style="line-height:100%;">内廊下設計、角住戸率<span class="s16 h-100">57%</span>超</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gold_info ft2 s12">
                    <div class="gold_frame h-100">
                        <div class="frame_border h-100">
                            <div class="frame_circle h-100">
                                <p>&nbsp;</p>
                                <p class="s14">大型SUV車、スポーツカーも安心</p>
                                <p class="s10"><span style="color: transparent;">ーーーーー-ーーーーーーーーー</span>※3</p>
                                <p class="s14">全12台分の駐車場を設置</p>
                                <p>&nbsp;</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- アンケートエリア(PC・SP共通) -->
            <div class="animation questionnaire_info_area">
                <p class="gold-title-2 ft2 s24 info_title">｢お住まいのアンケート｣にご協力ください｡</p>
                <div class="questionnaire_info">
                    <div class="border-gold-2 d-inline-block">
                        <p class="text-center ft2 s16" style="line-height:2;"><span>アンケート項目すべてにご協力いただいた方に、</span><br>もれなくAmazonギフト券(1000円相当)を進呈します。</p> 
                        <button type="submit" class="gold_btn to_questionnaire" ><a href="/questionnaire" class="text-white ft2 s20 mh-parts" style="text-decoration:none;">アンケートはこちら</a></button>
                    </div>
                </div>
            </div>

            <!-- INFOMATION(PC・SP共通) -->
            <div class="animation">
                <p class="gold-title-2 ft4 s30 info_title">INFORMATION</p>
                <div class="ft2 s14">
                    <table class="text-white info_table">
                        <tr>
                            <td class="date-td-1" scope="col">2022.4.22</td>
                            <td class="text-td-1" scope="col">ラ・アトレ恵比寿グランガーデン　ホームページ開設</td>
                        </tr>
                        <tr>
                            <td class="date-td-2" scope="col">2022.4.22</td>
                            <td class="text-td-2" scope="col">お住まいのアンケートを開設しました。<br>(期間中、全てのアンケートに回答していただいた方にAmazonギフト券をプレゼントします。)</td>
                        </tr>
                    </table>
                </div>
            </div>

        </div>

        <!-- Read More PC表示 -->
        <div class="read_more_area">
            <!-- Ebisu -->
            <div class="read_more_link">
                <div class="animation-0-zm h-100 picture_side ebisu_pic">
                    <img src="{{ asset('/images/the ebisu photo1.png') }}" alt="サンプル画像" class="w-100">
                </div>
                <div class="animation ebisu_col text_side ft2 s14">
                    <img class="ebisu_img" src="{{ asset('/images/theebisu.svg') }}" alt="サンプル画像">
                    <p class="ebisu_p">恵比寿、それも「恵比寿ガーデンプレイス」<br>
                        「ウエスティンホテル東京」を間近とする住宅地。<br>
                        その静謐なる佇まいはそのまま、住まわれる方の誇りとなる。<br>
                        多くを語らずとも本物を知る人を魅了するレジデンス。<br>
                        「ラ・アトレ恵比寿グランガーデン」ゆるぎなき矜持が<br>
                        ここにある。
                    </p>
                    <div class="gold_line ebisu_line"></div>
                    
                    <div class="w-60">
                        <button class="gold_btn read_more" type="button">
                            <a href="/concept" class="text-white mh-parts ft2">Read More</a>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Location -->
            <!-- <div class="read_more_link">
                <div class="animation location_col text_side ft2 s14">
                    <img class="location_img" src="{{ asset('/images/thelocation.svg') }}" alt="サンプル画像">
                    <p class="location_p" style="white-space:nowrap;">洗練と成熟に抱かれた街、恵比寿。<br>
                        ここに誕生するのは、静けさと美しさを纏う邸宅。<br>
                        「ラ・アトレ恵比寿グランガーデン」<br>
                        建築の美しいモダン邸宅と街並みの美しい潤いが、<br>
                        ココに暮らす人々の姿さえも、この地の美しい風景となる。
                    </p>
                    <div class="gold_line location_line"></div>
                    <div class="w-60">
                        <button class="gold_btn read_more" type="button">
                            <a href="/location" class="text-white mh-parts">Read More</a>
                        </button>
                    </div>
                </div>
                <div class="picture_side location_pics h-100">
                    <div class="location_pic_pair1">
                        <img src="{{ asset('/images/恵比寿ガーデンプレイス.png') }}" alt="サンプル画像" class="animation-0-zm location_pic">
                        <img src="{{ asset('/images/アメリカ橋公園.png') }}" alt="サンプル画像"  class="animation-0-zm location_pic bottom_pic">
                    </div>
                    <div class="location_pic_pair2">
                        <img src="{{ asset('/images/ウエスティンホテル.png') }}" alt="サンプル画像" class="animation-1-zm location_pic">
                        <img src="{{ asset('/images/国立科学博物館付属自然教育園.png') }}" alt="サンプル画像"  class="animation-1-zm location_pic bottom_pic">
                    </div>
                </div>
            </div> -->

            <!-- Access -->
            <div class="read_more_link">
                <div class="picture_side animation-0-zm access_pic">
                    <img src="{{ asset('/images/the access photo.png') }}" alt="サンプル画像" class="w-100 access_pic_img">
                    <p class="s9 text-white text-end min_image_p d-inline">image</p>
                </div>
                <div class="text_side animation access_col ft2 s14">
                    <img class="access_img" src="{{ asset('/images/theaccess.svg') }}" alt="サンプル画像">
                    <p class="access_p">都心をもっと近くする、スピーディーなアクセス。<br>
                        渋谷、新宿、東京、品川など主要都市を結ぶ山手線。<br>
                        六本木、霞ヶ関、銀座へダイレクトに繋がることのできる<br>
                        日比谷線。ここには、目的に合わせて、路線を<br>
                        使いこなせる自由がある。
                    </p>
                    <div class="gold_line mb-4 access_line"></div>
                    <div class="w-60">
                        <button class="gold_btn read_more" type="button">
                            <a href="/access" class="text-white mh-parts ft2">Read More</a>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Design -->
            <!-- <div class="read_more_link">
                <div class="text_side animation design_col ft2 s14">
                    <img class="design_img" src="{{ asset('/images/thedesign.svg') }}" alt="サンプル画像">
                    <p class="design_p">常緑樹の深い緑も豊かな静謐なる街並み。周辺の<br>
                        高級住宅街にふさわしい丘上の瀟洒な5階建て。<br>
                        緑と調和しながら独自の存在感を醸し出しています。<br>
                        バルコニーの目立たない高級感にあふれる雁行フォルム。<br>
                        落ち着いた基調色が街並みと美しく調和します。
                    </p>
                    <div class="gold_line design_line"></div>
                    <div class="w-60">
                        <button class="gold_btn read_more" type="button">
                            <a href="/design" class="text-white mh-parts">Read More</a>
                        </button>
                    </div>
                </div>
                <div class="picture_side animation-1-zm design_pic h-100">
                    <img src="{{ asset('/images/the design photo1.png') }}" alt="サンプル画像" class="w-100">
                </div>
            </div> -->

            <!-- Plan -->
            <!-- <div class="read_more_link">
                <div class="animation-0-zm picture_side">
                    <img src="{{ asset('/images/ダミーマップ.jpg') }}" alt="サンプル画像" class="img-fluid { max-width: 100%; height: auto } ">
                </div>
                <div class="animation plan_col text_side ft2 s14">
                    <img class="plan_img" src="{{ asset('/images/theplan.svg') }}" alt="サンプル画像">
                    <p class="plan_p">ダミーコピー恵比寿、それも「恵比寿ガーデンプレイス」、<br>
                        「ウェスティンホテル東京」を間近とする住宅地。その静謐なる佇まいは、<br>
                        その静謐なる佇まいはそのまま、住まわれる方の誇りとなる。多くを語らずとも、<br>
                        本物を知る人を魅了するレジデンス。ダミーコピー恵比寿、それも「恵比寿ガーデンプレイス」、
                    </p>
                    <div class="gold_line plan_line"></div>
                    <div class="w-60">
                        <button class="read_more gold_btn" type="button">
                            <a href="/plan" class="text-white mh-parts">Read More</a>
                        </button>
                    </div>
                </div>
            </div> -->

            <!-- <div class="animation-0-zm mx-auto" style="width:calc(100% - 240px);">
                <a href="/blanding" style="pointer-events:none;" class="w-100">
                <img src="{{ asset('/images/bland photo.png') }}" class="w-100">
                </a>
            </div> -->
        </div>



        <!-- Read More スマホ表示 -->
        <div class="read_more_area2 ft2">
            <!-- EBISU -->
            <div class="read_more_link2">
                <img src="{{ asset('/images/theebisu.svg') }}" alt="THE EBISU" class="the-logo">
                <div class="gold_line2"></div>
                <p class="text-center s10" style="">
                    恵比寿、それも｢恵比寿ガーデンプレイス｣<br>
                    ｢ウエスティンホテル東京｣を間近とする住宅地。<br>
                    その静謐なる佇まいはそのまま、住まわれる方の誇りとなる。<br>
                    多くを語らずとも本物を知る人を魅了するレジデンス。<br>
                    ｢ラ・アトレ恵比寿グランガーデン｣ ゆるぎなき矜持がここにある。
                </p>
                <img src="{{ asset('/images/the ebisu photo1.png') }}" alt="EBISU 写真" class="photo-100">
                <button class="gold_btn read_more" type="button">
                    <a href="/concept" class="text-white mh-parts ft2">Read More</a>
                </button>
            </div>

            <!-- LOCATION -->
            <!-- <div class="read_more_link2">
                <img src="{{ asset('/images/thelocation.svg') }}" alt="THE LOCATION" class="the-logo">
                <div class="gold_line2"></div>
                <p class="text-center s10" style="">
                    洗練と成熟に抱かれた街、恵比寿。<br>
                    ここに誕生するのは、静けさと美しさを纏う邸宅。<br>
                    ｢ラ・アトレ恵比寿グランガーデン｣<br>
                    建築の美しいモダン邸宅と街並みの美しい潤いが、<br>
                    ココに暮らす人々の姿さえも、この地の美しい風景となる。
                </p>
                <img src="{{ asset('/images/恵比寿ガーデンプレイス.png') }}" alt="LOCATION 写真" class="photo-90">
                <p class="s9 text-end mx-auto" style="width:90%;">｢恵比寿ガーデンプレイス｣ (約260m・徒歩4分)</p>
                <img src="{{ asset('/images/ウエスティンホテル.png') }}" alt="LOCATION 写真" class="photo-90">
                <p class="s9 text-end mx-auto" style="width:90%;">｢ウェスティンホテル東京｣ (約300m・徒歩4分)</p>
                <img src="{{ asset('/images/アメリカ橋公園.png') }}" alt="LOCATION 写真" class="photo-90">
                <p class="s9 text-end mx-auto" style="width:90%;">｢アメリカ橋公園｣(徒歩6分/約460m)</p>
                <img src="{{ asset('/images/国立科学博物館付属自然教育園.png') }}" alt="LOCATION 写真" class="photo-90">
                <p class="s9 text-end mx-auto" style="width:90%;">｢国立化学博物館附属 自然教育園｣ (約1000m・徒歩13分)</p>
                <button class="gold_btn read_more" type="button">
                    <a href="/concept" class="text-white mh-parts ft2" style="pointer-events:none;">Read More</a>
                </button>
            </div> -->

            <!-- ACCESS -->
            <div class="read_more_link2">
                <img src="{{ asset('/images/theaccess.svg') }}" alt="THE ACCESS" class="the-logo">
                <div class="gold_line2"></div>
                <p class="text-center s10" style="">
                    都心をもっと近くする、スピーディーなアクセス。<br>
                    渋谷、新宿、東京、品川など主要都市を結ぶ山手線。<br>
                    六本木、霞ヶ関、銀座へダイレクトに繋がることのできる日比谷線。<br>
                    ここには、目的に合わせて、路線を使いこなせる自由がある。
                </p>
                <img src="{{ asset('/images/the access photo.png') }}" alt="ACCESS 写真" class="photo-100">
                <button class="gold_btn read_more" type="button">
                    <a href="/concept" class="text-white mh-parts ft2">Read More</a>
                </button>
            </div>

            <!-- DESIGN -->
            <!-- <div class="read_more_link2">
                <img src="{{ asset('/images/thedesign.svg') }}" alt="THE DESIGN" class="the-logo">
                <div class="gold_line2"></div>
                <p class="text-center s10" style="">
                    常緑樹の深い緑も豊かな静謐なる街並み。<br>
                    周辺の高級住宅街にふさわしい丘上の瀟洒な5階建て。<br>
                    緑と調和しながら独自の存在感を醸し出しています。<br>
                    バルコニーの目立たない高級感にあふれる雁行フォルム。<br>
                    落ち着いた基調色が街並みと美しく調和します。
                </p>
                <img src="{{ asset('/images/the design photo1.png') }}" alt="DESIGN 写真" class="photo-100">
                <button class="gold_btn read_more" type="button">
                    <a href="/concept" class="text-white mh-parts ft2">Read More</a>
                </button>
            </div> -->
        </div>


        <!-- PC・SP共通 -->
        <div class="animation" style="margin-top:50px;">
            <!-- <a href="/branding" class="d-block mx-auto bland_img_link" style="pointer-events:none;"><img src="{{ asset('/images/bland photo.png') }}" alt="ブランディングバナー" style="width:100%;"></a> -->
            <div class="entry_link">
                <button class="copper_btn" type="button">
                    <a href="/entry" class="text-white mh-parts ft2 s19">物件エントリー受付中</a>
                </button>
            </div>
            <div class="comment-area">
                <p class="ft2 s11" style="margin:0;">
                    ※1)恵比寿ガーデンプレイスまで徒歩4分(約260m)､ウエスティンホテル東京まで徒歩4分(約300m)<br>
                    ※2)総戸数21戸中12戸が角住戸により､57%超の角住戸率となります｡<br>
                    ※3)全12台の駐車場は､大型SUV車･スポーツカーが3台駐車可能となります。また、1台分の屋外平置式シェアカーを含んでいます｡<br>
                    ※正射画像データ:国土地理院刊行の正射画像データに､一部CG加工を施しており､実際とは異なります｡<br>
                    ※航空写真:令和4年3月撮影の航空写真に､一部CG加工を施しており､実際とは異なります｡<br>
                    ※掲載の写真は2022年3月に撮影したもので､一部加工･修正を施しております｡<br>
                </p>
            </div>
        </div>
    </div>

    <!-- 後々"layout.js"に記述予定 -->
    <script>
        $(function(){
            $(window).on('load resize scroll click',function (){
                let btn = $('.read_more').outerHeight();

                var ebisu_col = $('.ebisu_col').height();
                var ebisu_pic = $('.ebisu_pic').height();
                var ebisu_img = $('.ebisu_img').height();
                var ebisu_p = $('.ebisu_p').height();
                
                var location_col = $('.location_col').height();
                var location_pic = $('.location_pics').height();
                var location_img = $('.location_img').height();
                var location_p = $('.location_p').height();

                var access_col = $('.access_col').height();
                var access_pic = $('.access_pic_img').height();
                var access_img = $('.access_img').height();
                var access_p = $('.access_p').height();

                var design_col = $('.design_col').height();
                var design_pic = $('.design_pic').height();
                var design_img = $('.design_img').height();
                var design_p = $('.design_p').height();

                // var plan_col = $('.plan_col').height();
                // var plan_img = $('.plan_img').height();
                // var plan_p = $('.plan_p').height();


                var ebisu_line = ebisu_pic - ebisu_img - ebisu_p - btn - 68
                var location_line = location_pic - location_img - location_p - btn - 68
                var access_line = access_pic - access_img - access_p - btn - 68
                var design_line = design_pic - design_img - design_p - btn  - 68
                // var plan_line = plan_col - plan_img - plan_p - btn - 68

                $('.ebisu_line').height(ebisu_line);
                $('.location_line').height(location_line);
                $('.access_line').height(access_line);
                $('.design_line').height(design_line);
                // $('.plan_line').height(plan_line);

                // var access_pic_img = $('.access_pic').width()
                // $('.min_image_p').width(access_pic_img)

                if($('body').width() < 1100){
                    $('.ebisu_p').css('white-space','normal')
                    $('.access_p').css('white-space','normal')
                } else {
                    $('.ebisu_p').css('white-space','nowrap')
                    $('.access_p').css('white-space','nowrap')
                }
            })
            
        })
    </script>

@endsection
