@extends('layout')

@section('title',"Bland｜【公式】ラ・アトレ恵比寿グランガーデン")

@section('content')

<div class="bland-top">
    <img  class="" src="{{ asset('/images/the bland.svg') }}">
</div>

<div style="height:50px; background-color:#000;"></div>
<div class="dark-area">
    <div class="d-flex justify-content-between align-items-center w-100">
        <div class="animation-1-zm" style="width:45%;">
            <img src="{{ asset('/images/「THE DOORs」（広尾）.jpg') }}" alt="" class="w-75">
            <p class="s10 ft2">｢THE DOORS｣(広尾)</p>
            <img src="{{ asset('/images/ラ・アトレ御苑内藤町グランガーデン.jpg') }}" alt="" class="w-75">
            <p class="s10 ft2">ラ・アトレ御苑内藤町グランガーデン</p>
        </div>
        <div class="animation-1-zm" style="width:45%;">
            <img src="{{ asset('/images/bland_logo.png') }}" alt="">
            <p class="gold-2" style="margin-bottom:10px;">「住まいは人の心を創り人の生活を創る」</p>
            <p class="s14" style="margin:0;">私たちは多くの人々に支えられて存在している社会の一員であることを自覚し、<br>
                それらの人々との日々の出会いを通して”魅力のある価値”を創造します。<br>
                そして、たゆみない質の向上と地球環境との共生をベースに、<br>
                社会のニーズを先取りした”魅力のある商品・サービス”を創作し、<br>
                多くの人々の豊かな”魅力のある社会”の実現に貢献します。
            </p>
            <p>社名であるL'attraitは、フランス語で｢魅力｣を意味します。<br>
                すなわちCorporate Philosophyである企業理念に由来しています。
            </p>
        </div>
    </div>
</div>
@endsection