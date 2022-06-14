@extends('layout2')

@section('title',"来場予約｜【公式】ラ・アトレ恵比寿グランガーデン")

@section('content')

<form action="/reserve_set/logout" method="post">
  @csrf
  <button type="submit" class="reserve_set_logout">ログアウト</button>
</form>
<form action="/reserve_set/edit" method="post">
  @csrf
  <button type="submit" class="reserve_set_edit">編集</button>
</form>

<div class="mx-auto ft2" id="reserve" style="">

  <h1 class="p-title gold-title-4 center-block text-center m-none s24 reserve-title">来場予約管理</h1>
  
  <div class="reserve_content">

    <table class="reservation_set_table">
      <tbody>
        <tr>
          <th>日付</th>
          <th>10:00〜11:30</th>
          <th>13:00〜14:30</th>
          <th>16:00〜17:30</th>
        </tr>
        @foreach ($weeks as $day)
        <tr>
          <td class="reservation_set_date">{{ $day[0] }} <span class="<?php if($day[2]=="土"){echo "saturday";}elseif($day[2]=="日" || $day[3]=="祝日"){echo "sunday";}; ?>">({{ $day[2] }})</span></td>
          <td>
            <div class="d-flex align-items-center">
              <div>上限：{{ $day[4][0] }}</div>
              <div style="margin-left:20px;">予約：{{ $day[5][0] }}</div>
            </div>
          </td>
          <td>
            <div class="d-flex align-items-center">
              <div>上限：{{ $day[4][1] }}</div>
              <div style="margin-left:20px;">予約：{{ $day[5][1] }}</div>
            </div>
          </td>
          <td>
            <div class="d-flex align-items-center">
              <div>上限：{{ $day[4][2] }}</div>
              <div style="margin-left:20px;">予約：{{ $day[5][2] }}</div>
            </div>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

@endsection


