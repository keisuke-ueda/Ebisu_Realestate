@extends('layout')

@section('title',"Bland｜【公式】ラ・アトレ恵比寿グランガーデン")

@section('content')

<div class="bland-top">
    <img  class="" src="{{ asset('/images/the bland.svg') }}">
</div>

<div style="height:50px; background-color:#000;"></div>

<!-- PC -->
<div class="dark-area ft2">
    <div class="d-flex w-100">
        <div class="animation-1-zm" style="width:45%;">
            <img src="{{ asset('/images/「THE DOORs」（広尾）.jpg') }}" alt="" style="width:65%;">
            <div class="d-flex justify-content-between w-100">
                <p class="s10 pt-1">｢THE DOORS｣(広尾)</p>
                <img src="{{ asset('/images/ラ・アトレ御苑内藤町グランガーデン.jpg') }}" alt="" style="width:65%;">
            </div>
            <p class="text-end s10 pt-1">ラ・アトレ御苑内藤町グランガーデン</p>
        </div>
        <div class="animation-2-zm" style="width:45%; margin:35px 0 0 70px;">
            <img src="{{ asset('/images/bland_logo.png') }}" alt="">
            <p class="gold-2 s18" style="margin:50px 0 65px;">「住まいは人の心を創り人の生活を創る」</p>
            <p class="s14" style="margin-bottom: 50px;">私たちは多くの人々に支えられて存在している社会の一員であることを自覚し、<br>
                それらの人々との日々の出会いを通して”魅力のある価値”を創造します。<br>
                そして、たゆみない質の向上と地球環境との共生をベースに、<br>
                社会のニーズを先取りした”魅力のある商品・サービス”を創作し、<br>
                多くの人々の豊かな”魅力のある社会”の実現に貢献します。
            </p>
            <p class="s11">社名であるL'attraitは、フランス語で｢魅力｣を意味します。<br>
                すなわちCorporate Philosophyである企業理念に由来しています。
            </p>
        </div>
    </div>
</div>

<!-- SP -->
<div class="dark-area2 ft2" style="padding:30px 20px;">
    <img class="d-block animation" src="{{ asset('/images/bland_logo.png') }}" alt="" style="width:70%; margin:0 auto 40px;">
    <p class="gold-2 s14 text-center animation" style="margin-bottom:40px;">「住まいは人の心を創り人の生活を創る」</p>
    <p class="s12 text-center animation" style="margin-bottom: 30px;">私たちは多くの人々に支えられて存在している<br>
        社会の一員であることを自覚し、<br>
        それらの人々との日々の出会いを通して<br>
        ”魅力のある価値”を創造します。<br>
        そして、たゆみない質の向上と<br>
        地球環境との共生をベースに、<br>
        社会のニーズを先取りした<br>
        ”魅力のある商品・サービス”を創作し、<br>
        多くの人々の豊かな”魅力のある社会”の実現に貢献します。
    </p>
    <p class="s10 text-center animation">社名であるL'attraitは、フランス語で｢魅力｣を意味します。<br>
        すなわちCorporate Philosophyである企業理念に由来しています。
    </p>
    <div class="animation">
        <img src="{{ asset('/images/「THE DOORs」（広尾）.jpg') }}" alt="" style="width:100%; margin-top:20px;">
        <p class="text-end s10 pt-1">｢THE DOORS｣(広尾)</p>
    </div>
    <div class="animation">
        <img src="{{ asset('/images/ラ・アトレ御苑内藤町グランガーデン.jpg') }}" alt="" style="width:100%;">
        <p class="text-end s10 pt-1 m-0">ラ・アトレ御苑内藤町グランガーデン</p>
    </div>
</div>


<!-- PC・SP共通 -->
<div class="bland_map_bg bg-white text-dark ft2">
    <div class="bland_map mx-auto">
        <div class="animation" style="border-bottom: 1px solid #999966; margin-bottom:10px;">
            <p class="text-center  s24" style="margin-bottom:5px; color:#999966;">ラ・アトレ事業実績</p>
            <p class="text-center  s11" style="margin-bottom:10px;">※2022年6月末時点</p>
        </div>
        <p class="animation text-dark bland_map_p" style="margin-bottom:0; line-height: 1.7;">
            L'attraitは、「不動産再生」のパイオニアとして、30年超の実績と経験、応用力、調整力などのノウハウを活かし、中古
            マンションの戸別リノベーションから1棟リノベーション、＜ラ・アトレレジデンス＞シリーズの新築分譲マンション、ショッピング
            モールをはじめとする商業施設、ホテル、オフィスビルの開発、さらに、海外事業展開やM&Aによる新規事業など、
            さまざまな事業を積極的に展開する不動産総合デベロッパーです。
        </p>
        <img class="animation-1-zm" src="{{ asset('/images/tizu.svg') }}" alt="">
    </div>
</div>


<!-- PC -->
<div class="dark-area">
    <div class="mx-auto animation-1-zm" style="max-width: 800px;">
        <div class="d-flex justify-content-between w-100">
            <div style="width:25%;">
                <img class="d-block" src="{{ asset('/images/brand1.jpg') }}" alt="" style="width:100%; height:calc(50% - 5px); object-fit:cover; object-position:50% 50%; margin-bottom:10px;">
                <img class="d-block" src="{{ asset('/images/brand2.jpg') }}" alt="" style="width:100%; height:calc(50% - 5px); object-fit:cover; object-position:50% 50%;">
            </div>
            <div style="width:calc(50% - 20px);">
                <img class="d-block" src="{{ asset('/images/brand3.jpg') }}" alt="" style="width:100%;">
                <img class="d-block" src="{{ asset('/images/brand4.jpg') }}" alt="" style="width:100%; margin-top:10px;">
                <img class="d-block" src="{{ asset('/images/brand5.jpg') }}" alt="" style="width:100%; margin-top:10px;">
            </div>
            <div style="width:25%;">
                <img class="d-block" src="{{ asset('/images/brand6.jpg') }}" alt="" style="width:100%; height:20%; object-fit:cover; object-position:50% 50%;">
                <img class="d-block" src="{{ asset('/images/brand7.jpg') }}" alt="" style="width:100%; height:20%; object-fit:cover; object-position:50% 50%; margin-top:10px;">
                <img class="d-block" src="{{ asset('/images/brand8.jpg') }}" alt="" style="width:100%; height:calc(60% - 20px); object-fit:cover; object-position:50% 50%; margin-top:10px;">
            </div>
        </div>
        <div class="d-flex justify-content-between w-100" style="margin-top:10px;">
            <img class="d-block" src="{{ asset('/images/brand9.jpg') }}" alt="" style="width:calc(50% - 5px); aspect-ratio: 9/5; object-fit:cover; object-position:50% 50%;">
            <img class="d-block" src="{{ asset('/images/brand10.jpg') }}" alt="" style="width:calc(50% - 5px); aspect-ratio: 9/5; object-fit:cover; object-position:50% 50%;">
        </div>
    </div>
    <div class="d-flex justify-content-center align-items-center w-100 animation" style="margin:20px 0;">
        <img class="d-block" src="{{ asset('/images/アセット.svg') }}" alt="" style="width: 10%;">
        <div class="s14 ft2 ms-4">
            <p class="mb-1">1 A*G中目黒　2 A*G 六本木　3 ラ・アトレレジデンス室見公園</p>
            <p class="mb-1">4 ラ・アトレレジデンス蟻ヶ崎台　5 A*G 神宮前II　6 LA博多</p>
            <p class="mb-1">7 ラ・アトレレジデンス室見公園　8 L'attrait BOEUNG KENG KANG</p>
            <p class="mb-1">9 THE DOORS(神山町)　10 THE DOORS(神山町)</p>
        </div>
    </div>
</div>


<!-- SP -->
<div class="dark-area2" style="padding:30px 0 20px;">
    <div class="mx-auto animation-1-zm" style="width: calc(100% - 100px);">
        <div class="d-flex justify-content-between w-100">
            <div style="width:calc(60% - 4px);">
                <img class="d-block" src="{{ asset('/images/brand3.jpg') }}" alt="" style="width:100%;">
                <img class="d-block" src="{{ asset('/images/brand4.jpg') }}" alt="" style="width:100%; margin-top:4px;">
                <img class="d-block" src="{{ asset('/images/brand5.jpg') }}" alt="" style="width:100%; margin-top:4px;">
            </div>
            <div style="width:40%;">
                <img class="d-block" src="{{ asset('/images/brand2.jpg') }}" alt="" style="width:100%; height:calc(50% - 2px); object-fit:cover; object-position:50% 50%;">
                <img class="d-block" src="{{ asset('/images/brand8.jpg') }}" alt="" style="width:100%; height:calc(50% - 2px); object-fit:cover; object-position:50% 50%; margin-top:4px;">
            </div>
        </div>
        <div class="d-flex justify-content-between w-100" style="margin:4px 0; aspect-ratio:270/165;">
            <img class="d-block" src="{{ asset('/images/brand1.jpg') }}" alt="" style="width:calc(40% - 4px); object-fit:cover; object-position:50% 50%;">
            <div style="width:60%;">
                <img class="d-block" src="{{ asset('/images/brand10.jpg') }}" alt="" style="width:100%; height:calc(50% - 2px); object-fit:cover; object-position:50% 50%;">
                <div class="d-flex justify-content-between" style="margin-top:4px; height:calc(50% - 2px);">
                    <img class="d-block" src="{{ asset('/images/brand7.jpg') }}" alt="" style="width:calc(60% - 4px); height:; object-fit:cover; object-position:50% 50%;">
                    <img class="d-block" src="{{ asset('/images/brand6.jpg') }}" alt="" style="width:40%; height:; object-fit:cover; object-position:50% 50%;">
                </div>
            </div>
        </div>
        <img class="d-block" src="{{ asset('/images/brand9.jpg') }}" alt="" style="width:70%;">
    </div>
    <img class="d-block mx-auto animation" src="{{ asset('/images/アセットsp.svg') }}" alt="" style="width:70%; margin-top:20px;">
</div>

@endsection