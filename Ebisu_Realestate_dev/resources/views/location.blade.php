@extends('layout')

@section('title',"Location｜【公式】ラ・アトレ恵比寿グランガーデン")

@section('content')

<div class="location-top">
    <img src="{{ asset('/images/the LOCATION.svg') }}">
</div>
<div style="height:50px; background-color:#000;"></div>

<div class="dark-area">
  <div class="d-flex justify-content-between align-items-center w-100">
      <div class="animation-1-zm" style="width:60%;">
          <img class="w-100" src="{{ asset('/images/ebisupage_photo2.png') }}">
      </div>
      <div class="text-white animation d-flex flex-column justify-content-center ft2 s18" style="width:calc(40% - 45px);">
          <p class="gold-2" style="margin-bottom:10px;">一想一邸の確かな結晶。</p>
          <p class="gold-2" style="margin-bottom:20px;">「ラ・アトレ恵比寿グランガーデン」</p>
          <p class="s14" style="margin:0;">恵比寿、それも「恵比寿ガーデンプレイス」<br>
          「ウェスティンホテル東京」を間近とする住宅地。<br>
          その静謐なる佇まいはそのまま、住まわれる方の誇りとなる。<br>
          多くを語らずとも本物を知る人を魅了するレジデンス。<br>
          「ラ・アトレ恵比寿グランガーデン」ゆるぎなき矜持が<br>
          ここにある。</p>
      </div>
  </div>

  <img class="animation w-100 my-5" src="{{ asset('/images/航空写真.jpg') }}" alt="">

  <div class="d-flex flex-column justify-content-end ft2" style="width:100%; margin-bottom:40px;">
      <div class="d-flex justify-content-between w-100">
          <div style="width: calc(33% - 13px);">
              <img class="animation-0-zm w-100" src="{{ asset('/images/ebisupage_atreebisu.png') }}" style="object-fit: cover; object-position: 100% 100%">
              <p class="text-center s9">「アトレ恵比寿」<br>(約1000m・徒歩13分)</p>
          </div>
          <div style="width: calc(33% - 13px);" style="margin-left:20px;">
              <img class="animation-0-zm w-100" src="{{ asset('/images/ebisupage_恵比寿ガーデンプレイス.png') }}" style="object-fit: cover; object-position: 100% 100%">
              <p class="text-center s9">「恵比寿ガーデンプレイス」<br>(約260m・徒歩4分)</p>
          </div>
          <div style="width: calc(33% - 13px);" style="margin-left:20px;">
              <img class="animation-0-zm w-100" src="{{ asset('/images/ebisupage_ウエスティンホテル.png') }}" style="object-fit: cover; object-position: 100% 100%">
              <p class="text-center s9">「ウエスティンホテル東京」<br>(約300m・徒歩4分)</p>
          </div>
      </div>
      <div class="d-flex justify-content-between">
          <div style="width: calc(33% - 13px);" >
              <img class="animation-1-zm w-100" src="{{ asset('/images/ebisupage_国立博物館付属自然教育園.png') }}" style="object-fit: cover; object-position: 100% 100%">
              <p class="text-center s9 m-0">「国立科学博物館付属 自然教育園」<br>(約1000m・徒歩13分)</p>
          </div>
          <div style="width: calc(33% - 13px);" style="margin-left:20px;">
              <img class="animation-1-zm w-100" src="{{ asset('/images/ebisupage_東京大学医療課付属研究所.png') }}" style="object-fit: cover; object-position: 100% 100%">
              <p class="text-center s9 m-0">「東京大学医療科学研究附属病院」<br>(約630m・徒歩8分)</p>
          </div>
          <div style="width: calc(33% - 13px);" style="margin-left:20px;">
              <img class="animation-1-zm w-100" src="{{ asset('/images/ebisupage_サッポロ広場.png') }}" style="object-fit: cover; object-position: 100% 100%">
              <p class="text-center s9 m-0">「サッポロ広場」<br>(約260m・徒歩4分)</p>
          </div>
      </div>
  </div>
</div>

<!-- スマホ表示 -->
<div class="dark-area2 ft2 s14">
    <div style="width: calc(100% - 40px); margin: 0 auto; padding: 20px 0;">
        <p class="gold-2 text-center m-0">一想一邸の確かな結晶。</p>
        <p class="gold-2 text-center" style="margin-bottom:25px;">「ラ・アトレ恵比寿グランガーデン」</p>
        <p class="s11 text-center">恵比寿、それも「恵比寿ガーデンプレイス」<br>
          「ウェスティンホテル東京」を間近とする住宅地。<br>
          その静謐なる佇まいはそのまま、住まわれる方の誇りとなる。<br>
          多くを語らずとも本物を知る人を魅了するレジデンス。<br>
          「ラ・アトレ恵比寿グランガーデン」ゆるぎなき矜持がここにある。
        </p>
        <img class="d-block w-100 mb-5" src="{{ asset('/images/ebisupage_photo2.png') }}" >
        <div class="d-flex justify-content-between">
            <div style="width: calc(50% - 5px);">
                <img class="animation 0-zm w-100" src="{{ asset('/images/ebisupage_atreebisu.png') }}" style="object-fit: cover; object-position: 100% 100%">
                <p class="text-center s9">｢アトレ恵比寿｣<br>(約1000m・徒歩13分)</p>
            </div>
            <div style="width: calc(50% - 5px);" style="margin-left:20px;">
                <img class="animation-0-zm w-100" src="{{ asset('/images/ebisupage_恵比寿ガーデンプレイス.png') }}" style="object-fit: cover; object-position: 100% 100%">
                <p class="text-center s9">｢恵比寿ガーデンプレイス｣<br>(約260m・徒歩4分)</p>
            </div>
        </div>
        <div class="d-flex justify-content-between">
            <div style="width: calc(50% - 5px);">
                <img class="animation-0-zm w-100" src="{{ asset('/images/ebisupage_ウエスティンホテル.png') }}" style="object-fit: cover; object-position: 100% 100%">
                <p class="text-center s9">｢ウエスティンホテル東京｣<br>(約300m・徒歩4分)</p>
            </div>
            <div style="width: calc(50% - 5px);" style="margin-left:20px;">
                <img class="animation-1-zm w-100" src="{{ asset('/images/ebisupage_国立博物館付属自然教育園.png') }}" style="object-fit: cover; object-position: 100% 100%">
                <p class="text-center s9 m-0">｢国立科学博物館付属 自然教育園｣<br>(約1000m・徒歩13分)</p>
            </div>
        </div>
        <div class="d-flex justify-content-between">
            <div style="width: calc(50% - 5px);">
                <img class="animation-1-zm w-100" src="{{ asset('/images/ebisupage_東京大学医療課付属研究所.png') }}" style="object-fit: cover; object-position: 100% 100%">
                <p class="text-center s9 m-0">｢東京大学医療科学研究附属病院｣<br>(約630m・徒歩8分)</p>
            </div>
            <div style="width: calc(50% - 5px);" style="margin-left:20px;">
                <img class="animation-1-zm w-100" src="{{ asset('/images/ebisupage_サッポロ広場.png') }}" style="object-fit: cover; object-position: 100% 100%">
                <p class="text-center s9 m-0">｢サッポロ広場｣<br>(約260m・徒歩4分)</p>
            </div>
        </div>
    </div>
</div>

<div class="white-area bg-white text-dark ft2">
    <div class="location_info_group">
      <div class="location_info">
        <img class="location_info_photo" src="{{ asset('/images/航空写真.jpg') }}" alt="">
        <img class="location_info_table" src="{{ asset('/images/education table.png') }}" alt="">
      </div>
      <div class="location_info">
        <img class="location_info_table" src="{{ asset('/images/education table.png') }}" alt="">
        <img class="location_info_photo" src="{{ asset('/images/航空写真.jpg') }}" alt="">
      </div>
      <div class="location_info">
        <img class="location_info_photo" src="{{ asset('/images/航空写真.jpg') }}" alt="">
        <img class="location_info_table" src="{{ asset('/images/education table.png') }}" alt="">
      </div>
      <div class="location_info">
        <img class="location_info_table" src="{{ asset('/images/education table.png') }}" alt="">
        <img class="location_info_photo" src="{{ asset('/images/航空写真.jpg') }}" alt="">
      </div>
      <div class="location_info">
        <img class="location_info_photo" src="{{ asset('/images/航空写真.jpg') }}" alt="">
        <img class="location_info_table" src="{{ asset('/images/education table.png') }}" alt="">
      </div>
    </div>
</div>

<!-- スマホ表示 -->
<div class="white-area2 bg-white text-dark ft2 s14">
  <div class="location_info_group">
    <div class="location_info">
      <img class="location_info_photo" src="{{ asset('/images/航空写真.jpg') }}" alt="">
      <img class="location_info_table" src="{{ asset('/images/education table.png') }}" alt="">
    </div>
    <div class="location_info">
      <img class="location_info_photo" src="{{ asset('/images/航空写真.jpg') }}" alt="">
      <img class="location_info_table" src="{{ asset('/images/education table.png') }}" alt="">
    </div>
    <div class="location_info">
      <img class="location_info_photo" src="{{ asset('/images/航空写真.jpg') }}" alt="">
      <img class="location_info_table" src="{{ asset('/images/education table.png') }}" alt="">
    </div>
    <div class="location_info">
      <img class="location_info_photo" src="{{ asset('/images/航空写真.jpg') }}" alt="">
      <img class="location_info_table" src="{{ asset('/images/education table.png') }}" alt="">
    </div>
    <div class="location_info">
      <img class="location_info_photo" src="{{ asset('/images/航空写真.jpg') }}" alt="">
      <img class="location_info_table" src="{{ asset('/images/education table.png') }}" alt="">
    </div>
  </div>
</div>

@endsection
