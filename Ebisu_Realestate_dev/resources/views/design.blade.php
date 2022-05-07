@extends('layout')

@section('title',"Design｜【公式】ラ・アトレ恵比寿グランガーデン")

@section('content')

<div class="design-top">
    <img  class="img-fluid" src="{{ asset('/images/the design.svg') }}">
</div>

<div style="height:50px; background-color:#000;"></div>

<!-- PC -->
<div class="dark-area">
  <div class="d-flex justify-content-between align-items-center w-100" style="margin: 20px 0 40px;">
      <div class="animation-1-zm" style="width:calc(50% - 17px);">
          <img class="w-100" src="{{ asset('/images/design photo1.png') }}">
      </div>
      <div class="text-white animation d-flex flex-column justify-content-center ft2 s18" style="width:calc(50% - 17px); padding-left: 66px;">
          <p class="gold-2" style="margin-bottom:20px;">磨き抜かれた洗練の空間</p>
          <p class="s14" style="margin:0;">常緑樹の深い緑も豊かな静謐なる街並み。<br>
          周辺の高級住宅街にふさわしい丘上の瀟洒な5階建て。<br>
          緑と調和しながら独自の存在感を醸し出しています。<br>
          バルコニーの目立たない高級感にあふれる雁行フォルム。<br>
          落ち着いた基調色が街並みと美しく調和します。<br>
          奇をてらうことなく、しかも存在感に満ちたデザインは、<br>
          時代を超えた揺るぎない魅力を醸し出しています。
          </p>
      </div>
  </div>
  <div class="d-flex justify-content-between align-items-center w-100" style="margin-bottom:70px;">
    <img class="d-block animation-1-zm" src="{{ asset('/images/design photo2.png') }}" alt="" style="width: calc(50% - 17px);">
    <img class="d-block animation-1-zm" src="{{ asset('/images/design photo3.png') }}" alt="" style="width: calc(50% - 17px);">
  </div>
</div>

<!-- SP -->
<div class="dark-area2" style="padding: 40px 45px 40px;">
  <p class="s10 text-center ft2" style="margin-bottom: 40px;">常緑樹の深い緑も豊かな静謐なる街並み。<br>
  周辺の高級住宅街にふさわしい丘上の瀟洒な5階建て。<br>
  緑と調和しながら独自の存在感を醸し出しています。<br>
  バルコニーの目立たない高級感にあふれる雁行フォルム。<br>
  落ち着いた基調色が街並みと美しく調和します。<br>
  奇をてらうことなく、しかも存在感に満ちたデザインは、<br>
  時代を超えた揺るぎない魅力を醸し出しています。
  </p>
  <img class="d-block w-100" src="{{ asset('/images/design photo1.png') }}" style="margin-bottom:35px;">
  <img class="d-block w-100" src="{{ asset('/images/design photo2.png') }}" alt="" style="margin-bottom:35px;">
  <img class="d-block w-100" src="{{ asset('/images/design photo3.png') }}" alt="" style="">
</div>


<!-- PC・SP共通 -->
<div class="design-photo4">
  <img class="d-block mx-auto" src="{{ asset('/images/design photo4.png') }}">
  <p class="s11 text-end mx-auto ft2">※掲載の写真はすべて、令和4年3月に撮影したものです。</p>
</div>


@endsection
