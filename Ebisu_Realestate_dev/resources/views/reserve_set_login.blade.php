@extends('layout2')

<link rel="stylesheet" href="{{ asset('/css/entry.css') }}">

@section('title',"来場予約｜【公式】ラ・アトレ恵比寿グランガーデン")

@section('content')

<div class="mx-auto" id="reserve" style="">
  <h1 class="p-title gold-title-4 center-block text-center m-none s24 reserve-title">来場予約管理</h1>

  <div class="reserve_set_login">
    <form action="{{ route('reserve_set.login') }}" method="post">
      @csrf
      <div>
        <label for="">パスワード</label>
        <input type="password" name="password" value="">
      </div>
      <button type="submit">ログイン</button>
    </form>
  </div>
</div>

@endsection