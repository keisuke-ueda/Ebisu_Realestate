@extends('layout2')

@section('title',"来場予約｜【公式】ラ・アトレ恵比寿グランガーデン")

@section('content')
<?php
  $sample_data = [9, 9, 9, 9, 9, 1, 1];
  $sample_data2 = [9, 9, 9, 9, 9, 0, 0];
  $sample_data3 = [9, 9, 9, 9, 9, 1, 0];
?>

<div class="mx-auto ft2" id="reserve" style="padding:150px 0 50px; width: 800px;">
  <h1 class="p-title gold-title-4 center-block text-center m-none s24 reserve-title">来場予約</h1>
  <p class="s20">ご予約内容の選択</p>

  <p class="m-0">ご予約日時を選択してください</p>
  <div class="period_select">
    <button class="period_back">＜</button>
    <p class="week1"><span>{{$week1[0][0]}}</span> 〜 <span>{{$week1[6][0]}}</span></p>
    <p class="week2 d-none"><span>{{$week2[0][0]}}</span> 〜 <span>{{$week2[6][0]}}</span></p>
    <p class="week3 d-none"><span>{{$week3[0][0]}}</span> 〜 <span>{{$week3[6][0]}}</span></p>
    <p class="week4 d-none"><span>{{$week4[0][0]}}</span> 〜 <span>{{$week4[6][0]}}</span></p>
    <button class="period_next">＞</button>
  </div>

  <table class="reservation_table">
    <tbody class="week1">
      <tr>
        <td class="left_td"></td>
        @foreach ($week1 as $day)
        <td><span class="day">{{$day[2]}}</span><br>{{$day[1]}}</td>
        @endforeach
      </tr>
      <tr>
        <td class="left_td">10:00　<br>〜11:30</td>
        @foreach ($week1 as $week1_day)
          @if ($week1_day[3][0] == "対応可") 
          <td class="reserve_select reserve_ok">
            <form action="/reserve/confirm" method="post">
              @csrf
              <button type="submit">○</button>
            </form>
          </td>
          @elseif ($week1_day[3][0] == "対応不可" || $week1_day[3][0] == "未定") 
          <td class="reserve_select reserve_ng">×</td>
          @else
          <td class="reserve_select reserve_ng">-</td>
          @endif
        @endforeach
      </tr>
      <tr>
        <td class="left_td">13:00　<br>〜14:30</td>
        @foreach ($week1 as $week1_day)
          @if ($week1_day[3][1] == "対応可") 
          <td class="reserve_select reserve_ok">
            <form action="/reserve/confirm" method="post">
              @csrf
              <button type="submit">○</button>
            </form>
          </td>
          @elseif ($week1_day[3][1] == "対応不可" || $week1_day[3][0] == "未定") 
          <td class="reserve_select reserve_ng">×</td>
          @else
          <td class="reserve_select reserve_ng">-</td>
          @endif
        @endforeach
      </tr>
      <tr>
        <td class="left_td">16:00　<br>〜17:30</td>
        @foreach ($week1 as $week1_day)
          @if ($week1_day[3][2] == "対応可") 
          <td class="reserve_select reserve_ok">
            <form action="/reserve/confirm" method="post">
              @csrf
              <button type="submit">○</button>
            </form>
          </td>
          @elseif ($week1_day[3][2] == "対応不可" || $week1_day[3][0] == "未定") 
          <td class="reserve_select reserve_ng">×</td>
          @else
          <td class="reserve_select reserve_ng">-</td>
          @endif
        @endforeach
      </tr>
    </tbody>

    
    <tbody class="week2 d-none">
      <tr>
        <td class="left_td"></td>
        @foreach ($week2 as $day)
        <td><span class="day">{{$day[2]}}</span><br>{{$day[1]}}</td>
        @endforeach
      </tr>
      <tr>
        <td class="left_td">10:00　<br>〜11:30</td>
        @for ($i=0; $i<=6; $i++)
          @if ($sample_data[$i] == 0) 
          <td class="reserve_select reserve_ok">
            <form action="/reserve/confirm" method="post">
              @csrf
              <button type="submit">○</button>
            </form>
          </td>
          @elseif ($sample_data[$i] == 1)
          <td class="reserve_select reserve_ng">×</td>
          @elseif ($sample_data[$i] == 9)
          <td class="reserve_select reserve_ng">-</td>
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
              <button type="submit">○</button>
            </form>
          </td>
          @elseif ($sample_data2[$i] == 1)
          <td class="reserve_select reserve_ng">×</td>
          @elseif ($sample_data2[$i] == 9)
          <td class="reserve_select reserve_ng">-</td>
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
              <button type="submit">○</button>
            </form>
          </td>
          @elseif ($sample_data3[$i] == 1)
          <td class="reserve_select reserve_ng">×</td>
          @elseif ($sample_data[$i] == 9)
          <td class="reserve_select reserve_ng">-</td>
          @endif
        @endfor
      </tr>
    </tbody>

    <tbody class="week3 d-none">
      <tr>
        <td class="left_td"></td>
        @foreach ($week3 as $day)
        <td><span class="day">{{$day[2]}}</span><br>{{$day[1]}}</td>
        @endforeach
      </tr>
      <tr>
        <td class="left_td">10:00　<br>〜11:30</td>
        @for ($i=0; $i<=6; $i++)
          @if ($sample_data[$i] == 0) 
          <td class="reserve_select reserve_ok">
            <form action="/reserve/confirm" method="post">
              @csrf
              <button type="submit">○</button>
            </form>
          </td>
          @elseif ($sample_data[$i] == 1)
          <td class="reserve_select reserve_ng">×</td>
          @elseif ($sample_data[$i] == 9)
          <td class="reserve_select reserve_ng">-</td>
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
              <button type="submit">○</button>
            </form>
          </td>
          @elseif ($sample_data2[$i] == 1)
          <td class="reserve_select reserve_ng">×</td>
          @elseif ($sample_data2[$i] == 9)
          <td class="reserve_select reserve_ng">-</td>
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
              <button type="submit">○</button>
            </form>
          </td>
          @elseif ($sample_data3[$i] == 1)
          <td class="reserve_select reserve_ng">×</td>
          @elseif ($sample_data[$i] == 9)
          <td class="reserve_select reserve_ng">-</td>
          @endif
        @endfor
      </tr>
    </tbody>
  </table>
  <p class="text-end s12" style="margin-top:5px;">○予約できます ×予約できません</p>
  <p class="m-0 s12">現在予約できる期間 : <span>2022/6/11(土)</span> ~ <span>2022/7/31(日)</span></p>
  <p class="m-0 s12">予約締切 : 当日の0時まで</p>
</div>

@endsection
