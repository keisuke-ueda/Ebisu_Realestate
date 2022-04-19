@extends('layout2')

<link rel="stylesheet" href="{{ asset('/css/entry.css') }}">

@section('content')

<div class="" id="entry" style="">
  <h1 class="p-title gold-title-3 center-block text-center m-none ft4 s24">PROPERTY ENTRY</h1>
  <p class="p-title center-block text-center mt-10px ft2 s14" style="margin-bottom:25px;">物件エントリー</p>
  <div class="entry_complete_msg">
      <p class="text-center m-0">送信しました。
      <p class="text-center">物件エントリーいただき、誠にありがとうございました。</p>

      <button class="mh-parts btn mx-auto d-block my-3"><a href="/entry">戻る</a></button>
  </div>
</div>

@endsection