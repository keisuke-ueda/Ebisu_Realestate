@extends('layout2')

<!-- バリデーション作る -->

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1" />
<meta name="format-detection" content="telephone=no">
<title>新たな価値を創造したプレミアムリノベーションマンション｜株式会社ラ・アトレ</title>



@section('content')

    <div class="container ft2" style="padding: 100px 150px 0;">
        <h1 class="text-center gold-title-2 mb-5">現地案内図</h1>
        <div class="print_area">
            <div class="row mb-5 animation-1-zm map_img">
                <p>【広域地図】</p>
                <img class="center-block" src="{{ asset('/images/map_1.png') }}">
            </div>

            <div class="row mt-5 mb-3 animation-1-zm map_img">
                <p>【狭域地図】</p>
                <img class="center-block" src="{{ asset('/images/map_2.png') }}">
            </div>
            <p class="text-center h3 mb-5">所在地：東京都目黒区三田1丁目1-16</p>
       </div>
       <div class="d-flex justify-content-center mb-5 pb-4">
            <button class="map_btn mh-parts me-4" style="height: 60px; width: 210px;">
                <a href="https://www.google.co.jp/maps/place/東京都目黒区三田1丁目1-16" target="_blank" rel="noopener noreferrer" class="text-white" style="text-decoration: none;">Google Mapで開く</a>
            </button>
            <button class="print_btn-2 mh-parts text-white d-flex justify-content-center align-items-center" style="height: 60px; width: 210px;">
                <img src="{{ asset('/images/map_3.png') }}" alt="印刷ボタンの画像" style="height: 30px;">
                <p class="ms-4 mb-0">印刷する</p>
            </button>
       </div>
    </div>

    <!-- 後々"layout.js"に記述予定 -->
    <script>
        $(function(){
            $(".print_btn").click(function(){
                var printArea = document.getElementsByClassName("print_area");
                $('body').append('<div id="print" class="printBc"></div>');
                $(printArea).clone().appendTo('#print');
                $('body > :not(#print)').addClass('print-off');
                $(".map_img").removeClass('animation-1-zm');
                window.print();
                $('#print').remove();
                $('.print-off').removeClass('print-off');
                $(".map_img").addClass('animation-1-zm');
            });
        });
    </script>

@endsection