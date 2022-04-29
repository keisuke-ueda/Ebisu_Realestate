@extends('layout')

@section('title',"Design｜【公式】ラ・アトレ恵比寿グランガーデン")

@section('content')

<div class="ebisu-top">
    <img  class="img-fluid" src="{{ asset('/images/the EBISU.svg') }}">
</div>

<div style="height:50px; background-color:#000;"></div>

<div class="dark-area">
  <div class="d-flex justify-content-between align-items-center w-100">
      <div class="animation-1-zm" style="width:60%;">
          <img class="w-100" src="{{ asset('/images/design photo1.png') }}">
      </div>
      <div class="text-white animation d-flex flex-column justify-content-center ft2 s18" style="width:calc(40% - 45px);">
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
  <div class="d-flex justify-content-between align-items-center w-100">
    <img class="d-block" src="{{ asset('/images/design photo2.png') }}" alt="" style="width:48%;">
    <img class="d-block" src="{{ asset('/images/design photo3.png') }}" alt="" style="width:48%;">
  </div>
</div>

<div class="dark-area2">
  <p class="s10 text-center" style="margin:0;">常緑樹の深い緑も豊かな静謐なる街並み。<br>
  周辺の高級住宅街にふさわしい丘上の瀟洒な5階建て。<br>
  緑と調和しながら独自の存在感を醸し出しています。<br>
  バルコニーの目立たない高級感にあふれる雁行フォルム。<br>
  落ち着いた基調色が街並みと美しく調和します。<br>
  奇をてらうことなく、しかも存在感に満ちたデザインは、<br>
  時代を超えた揺るぎない魅力を醸し出しています。
  </p>
  <img class="d-block w-100" src="{{ asset('/images/design photo1.png') }}">
  <img class="d-block w-100" src="{{ asset('/images/design photo2.png') }}" alt="" style="">
  <img class="d-block w-100" src="{{ asset('/images/design photo3.png') }}" alt="" style="">
</div>

<div style="background-color:#000; padding:100px 0 0;">
  <img class="d-block mx-auto" src="{{ asset('/images/design photo4.png') }}" alt="" style="max-width:1200px;">
  <p class="s11 text-end mx-auto" style="max-width:1200px; padding:5px 30px 0 0;">※掲載の写真はすべて、令和4年3月に撮影したものです。</p>
</div>


@endsection
