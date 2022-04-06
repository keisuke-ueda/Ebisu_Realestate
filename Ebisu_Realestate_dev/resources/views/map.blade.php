@extends('layout2')

<!-- バリデーション作る -->

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1" />
<meta name="format-detection" content="telephone=no">



@section('content')

    <div class="map-m map_comment">
        <h1 class="gold-title-2 ft2 s24">現地案内図</h1>
        <div class="print_area">
            <div class="animation-1-zm map_m1">
                <p class="ft2 s14">【広域地図】</p>
                <img src="{{ asset('/images/map_1.png') }}" class="map_img">
            </div>

            <div class="animation-1-zm">
                <p class="ft2 s14">【狭域地図】</p>
                <img src="{{ asset('/images/map_2.png') }}" class="map_img">
            </div>
            <p class="map-t1 map_m2 ft2 s24">所在地：東京都目黒区三田1丁目1-16</p>
       </div>
       <div class="map_but">
            <button class="map_btn mh-parts map_but_s map_m3">
                <a href="https://www.google.co.jp/maps/place/東京都目黒区三田1丁目1-16" target="_blank" rel="noopener noreferrer" class="text-white ft2 s14" style="text-decoration: none;">Google Mapで開く</a>
            </button>
            <button class="print_btn-2 mh-parts text-white map_but_s map_m3">
                <img src="{{ asset('/images/map_3.png') }}" alt="印刷ボタンの画像" class="map_but_img map_side_layout">
                <p class="map_side_layout ft2 s14">印刷する</p>
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