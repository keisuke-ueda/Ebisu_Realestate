@extends('layout2')

@section('title',"PLAN｜【公式】ラ・アトレ恵比寿グランガーデン")

@section('content')

<div class="plan_detail">
  <div class="banner_3d_detail">
    <a href="https://my.matterport.com/show/?m=wL8dZu3ZpbE&lang=jp" target="_blank"><img class="" src="{{ asset('/images/banner_3d.jpg') }}" alt=""></a>
  </div>

  <img class="plan_detail_logo" src="{{ asset('/images/plan_d_logo.png') }}" alt="">

  <ul class="plan_detail_text ft2 s14">
    <li>12.0畳の寝室には､収納豊富なウォークインクローゼットを設置｡</li>
    <li>人目を気にすることなく､個人のスペースとして落ち着いて利用できる独立型キッチンを採用。</li>
    <li>雁行設計のリビング･ダイニングと寝室の窓先には光･風･緑を感じる静寂な空間が広がる｡</li>
  </ul>

  <img class="plan_detail_map" src="{{ asset('/images/plan_d_map.png') }}" alt="">
</div>

<form action="/plan">
  <button class="back_to_plan mh-parts ft2">戻る</button>
</form>

@endsection