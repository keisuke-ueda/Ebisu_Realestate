@extends('layout2')

<link rel="stylesheet" href="{{ asset('/css/entry.css') }}">

@section('title',"物件エントリー｜【公式】ラ・アトレ恵比寿グランガーデン")

@section('content')

<div class="" id="entry" style="">
<h1 class="p-title gold-title-4 center-block text-center m-none s24 reserve-title">来場予約</h1>

  <div class="reserve_complete_msg">
      <p class="text-center">
        来場予約フォームより<br class="pc_hid">ご予約頂き誠にありがとうございました。<br>
        ご入力されたメールアドレス宛に<br class="pc_hid">改めて担当者よりご連絡をさせていただきます。
      </p>
      <button class="mh-parts btn mx-auto d-block my-3"><a href="/reserve">戻る</a></button>
  </div>
</div>

@endsection