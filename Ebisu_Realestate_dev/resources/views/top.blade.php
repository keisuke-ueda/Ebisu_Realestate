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
            <div class="row animation mb-4">
                <p class="col-3"></p>
                <div class="col-2"><p>JR線「恵比寿」駅へ徒歩<span class="gold h1" style="display:inline-block">11</span>分 / </p><p class="small">(恵比寿スカイウォークより徒歩7分)</p></div>
                <p class="col-2">東京メトロ日比谷線「恵比寿」駅へ徒歩<span class="gold h1">13</span>分 / </p>
                <p class="col-2">JR線「目黒」駅へ徒歩<span class="gold h1">13</span>分</p>
            </div>

            <div class="animation gold">
                <div class="row mb-4">
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
                <p class="col-3"></p>
                <div class="col-6 border border-warning text-center">
                    <p class="text-center h2 gold mb-4">「お住まいについてのアンケート」にご協力ください。</p>
                    <p class="text-center mb-4">ダミーコピーオリジナル動画などで物件を詳しくご紹介します。<br>郵便を待たずに、限定アプリでいち早く物件情報をご覧になれます。</p> 
                    <div class="row">
                        <p class="col-4"></p>
                        <form action="/questionnaire" method="GET">
                            <button type="submit" class="col-4" >アンケートはこちら</button>
                        </form>
                        <p class="col-4"></p>
                    </div>
                </div>
                <p class="col-3"></p>
            </div>
        </div>


        <div class="white_wall py-5">
            <div class="row animation mb-3">
                <div class="col-8">
                    <img src="{{ asset('/images/環境-新宿.png') }}" alt="サンプル画像" class="mx-auto d-block img-fluid { max-width: 100%; height: auto }">
                </div>
                <div class="col-4">
                    <img src="{{ asset('/images/環境-新宿.png') }}" alt="サンプル画像" class="img-fluid { max-width: 100%; height: auto } ">
                    <p class="text-center">テキストテキストテキストテキストテキストテキストテキスト</p>
                    <button class="mx-auto d-block" type="button">Read More</button>
                </div>
            </div>

            <div class="row animation mt-3 mb-3">
                <div class="col-4">
                    <img src="{{ asset('/images/環境-新宿.png') }}" alt="サンプル画像" class="img-fluid { max-width: 100%; height: auto } ">
                    <p class="text-center">テキストテキストテキストテキストテキストテキストテキスト</p>
                    <button class="mx-auto d-block" type="button">Read More</button>
                </div>
                <div class="col-8">
                    <img src="{{ asset('/images/環境-新宿.png') }}" alt="サンプル画像" class="mx-auto d-block img-fluid { max-width: 100%; height: auto }">
                </div>
            </div>

            <div class="row animation mt-3 mb-3">
                <div class="col-8">
                    <img src="{{ asset('/images/環境-新宿.png') }}" alt="サンプル画像" class="mx-auto d-block img-fluid { max-width: 100%; height: auto }">
                </div>
                <div class="col-4">
                    <img src="{{ asset('/images/環境-新宿.png') }}" alt="サンプル画像" class="img-fluid { max-width: 100%; height: auto } ">
                    <p class="text-center">テキストテキストテキストテキストテキストテキストテキスト</p>
                    <button class="mx-auto d-block" type="button">Read More</button>
                </div>
            </div>

            <div class="row animation mt-3 mb-3">
                <div class="col-4">
                    <img src="{{ asset('/images/環境-新宿.png') }}" alt="サンプル画像" class="img-fluid { max-width: 100%; height: auto } ">
                    <p class="text-center">テキストテキストテキストテキストテキストテキストテキスト</p>
                    <button class="mx-auto d-block" type="button">Read More</button>
                </div>
                <div class="col-8">
                    <img src="{{ asset('/images/環境-新宿.png') }}" alt="サンプル画像" class="mx-auto d-block img-fluid { max-width: 100%; height: auto }">
                </div>
            </div>

            <div class="row animation mt-3 mb-3">
                <div class="col-8">
                    <img src="{{ asset('/images/環境-新宿.png') }}" alt="サンプル画像" class="mx-auto d-block img-fluid { max-width: 100%; height: auto }">
                </div>
                <div class="col-4">
                    <img src="{{ asset('/images/環境-新宿.png') }}" alt="サンプル画像" class="img-fluid { max-width: 100%; height: auto } ">
                    <p class="text-center">テキストテキストテキストテキストテキストテキストテキスト</p>
                    <button class="mx-auto d-block" type="button">Read More</button>
                </div>
            </div>

            <div class="animation mt-3">
                <h1 class="h1 text-center">現地案内</h1>
                <div class="row">
                    <p class="col-2"></p>
                    <img src="{{ asset('/images/環境-新宿.png') }}" alt="サンプル画像" class="col-8 img-fluid { max-width: 100%; height: auto } ">
                    <p class="col-2"></p>
                </div>
                <div class="row mt-3 mb-3">
                    <form action="/access" method="GET">
                        <button class="col-3 mx-auto d-block" type="submit">Read More</button>
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
