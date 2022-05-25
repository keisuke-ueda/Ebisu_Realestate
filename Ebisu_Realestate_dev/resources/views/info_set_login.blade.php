@extends('layout2')

<link rel="stylesheet" href="{{ asset('/css/entry.css') }}">

@section('title',"Info設定｜【公式】ラ・アトレ恵比寿グランガーデン")

@section('content')

<div class="d-flex flex-column align-items-center justify-content-center" style="width:; font-weight:bold; padding: calc(50vh - 225px) 0;">
  
  <p class="text-center s24 mb-5">ログイン画面</p>
  
  <form action="/info_set" method="post">
    @csrf
    <div class="d-flex flex-column align-items-end">
      <div>ID: <input type="text" name="id"></div>
      <div class="mt-2">パスワード: <input type="password" name="password"></div>
    </div>
    <button type="submit" class="s14 d-block mx-auto mt-3" style="background-color:#000; color:#fff; padding: 5px 15px;">ログイン</button>
  </form>
  
  <p class="text-center mt-4 s14">※ID・パスワードをお忘れの場合は、サイト管理会社にお問合せください。</p>

</div>

@endsection