@extends('layout2')

@section('title',"来場予約｜【公式】ラ・アトレ恵比寿グランガーデン")

@section('content')
<?php
  $days = ['日','月', '火', '水', '木', '金', '土'];
  $today = date('n/j');
  $today_w = date('w');
  

  $sample_data = [0, 1, 0, 1, 0, 1, 1];
  $sample_data2 = [0, 0, 0, 0, 0, 0, 0];
  $sample_data3 = [1, 1, 1, 1, 1, 1, 1];
?>

<div class="mx-auto ft2" id="reserve" style="padding:150px 0 50px; width: 800px;">
  <h1 class="p-title gold-title-4 center-block text-center m-none s24 reserve-title">来場予約</h1>
  <p class="s20">ご予約内容の選択</p>

  <p class="m-0">ご予約日時を選択してください</p>
  <div class="period_select">
    <button class="period_back">＜</button>
    <p>2022/6/6(月) ~ 6/12(日)</p>
    <button class="period_next">＞</button>
  </div>

  <table class="reservation_table">
    <tbody>
      <tr>
        <td class="left_td"></td>
        <td><span class="day">月</span><br>6/6</td>
        <td><span class="day">火</span><br>6/7</td>
        <td><span class="day">水</span><br>6/8</td>
        <td><span class="day">木</span><br>6/9</td>
        <td><span class="day">金</span><br>6/10</td>
        <td><span class="day">土</span><br>6/11</td>
        <td><span class="day">日</span><br>6/12</td>
      </tr>
      <tr>
        <td class="left_td">10:00　<br>〜11:30</td>
        @for ($i=0; $i<=6; $i++)
          @if ($sample_data[$i] == 0) 
          <td class="reserve_select reserve_ok">
            <form action="/reserve/confirm" method="post">
              @csrf
              <button type="submit">◎</button>
            </form>
          </td>
          @elseif ($sample_data[$i] == 1)
          <td class="reserve_select reserve_ng">×</td>
          @endif
        @endfor
      </tr>
      <tr>
        <td class="left_td">13:00　<br>〜14:30</td>
        @for ($i=0; $i<=6; $i++)
          @if ($sample_data2[$i] == 0) 
          <td class="reserve_select reserve_ok">
            <form action="/reserve/confirm" method="post">
              @csrf
              <button type="submit">◎</button>
            </form>
          </td>
          @elseif ($sample_data2[$i] == 1)
          <td class="reserve_select reserve_ng">×</td>
          @endif
        @endfor
      </tr>
      <tr>
        <td class="left_td">16:00　<br>〜17:30</td>
        @for ($i=0; $i<=6; $i++)
          @if ($sample_data3[$i] == 0)
          <td class="reserve_select reserve_ok">
            <form action="/reserve/confirm" method="post">
              @csrf
              <button type="submit">◎</button>
            </form>
          </td>
          @elseif ($sample_data3[$i] == 1)
          <td class="reserve_select reserve_ng">×</td>
          @endif
        @endfor
      </tr>
    </tbody>
  </table>
  <p class="text-end s12" style="margin-top:5px;">◎予約できます △残りわずか ×予約できません</p>
  <p class="m-0 s12">現在予約できる期間 : 2022/6/11(土) ~ 2022/7/31(日)</p>
  <p class="m-0 s12">予約締切 : 当日の0時まで</p>
</div>

@endsection
