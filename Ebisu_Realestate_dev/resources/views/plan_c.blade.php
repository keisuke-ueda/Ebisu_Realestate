@extends('layout2')

@section('title',"PLAN｜【公式】ラ・アトレ恵比寿グランガーデン")

@section('content')

<div class="plan_detail">
  <img class="plan_detail_logo" src="{{ asset('/images/plan_c_logo.png') }}" alt="">

  <ul class="plan_detail_text ft2 s14">
    <li>玄関の両サイドには､充実した収納の下足入と物入を設置｡</li>
    <li>主寝室11.0畳と寝室8.4畳には､収納豊富なウォークインクローゼットを設置｡</li>
    <li>ご家族の忙しい朝の身支度などに便利なトイレとパウダールームの一体型スペースを2ヶ所に設置｡</li>
    <li>リビングとダイニングはテーブルやソファのレイアウトがしやすいスクエア設計｡また､キッチンは2WAY動線の独立型キッチンを採用｡</li>
  </ul>

  <img class="plan_detail_map" src="{{ asset('/images/plan_c_map.png') }}" alt="">
</div>

<form action="/plan">
  <button class="back_to_plan mh-parts ft2">戻る</button>
</form>

@endsection