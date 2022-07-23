@extends('layout2')

<link rel="stylesheet" href="{{ asset('/css/entry.css') }}">

@section('title',"物件エントリー｜【公式】ラ・アトレ恵比寿グランガーデン")

@section('content')
<?php $entry_thanks = "true"; ?>

<div class="" id="entry" style="">
  <h1 class="p-title gold-title-3 center-block text-center m-none ft4 s24">PROPERTY ENTRY</h1>
  <p class="p-title center-block text-center mt-10px ft2 s14" style="margin-bottom:25px;">物件エントリー</p>
  <div class="entry_complete_msg">
      <p class="text-center">
        物件エントリーフォームより<br class="pc_hid">お問い合せ頂き誠にありがとうございました。<br>
        ご入力されたメールアドレス宛に<br class="pc_hid">改めて担当者よりご連絡をさせていただきます。
      </p>
      <button class="mh-parts btn mx-auto d-block my-3"><a href="/entry">戻る</a></button>
  </div>
</div>

@endsection