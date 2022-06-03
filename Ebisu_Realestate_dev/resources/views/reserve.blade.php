@extends('layout2')

@section('title',"来場予約｜【公式】ラ・アトレ恵比寿グランガーデン")

@section('content')

<div class="mx-auto ft2" id="reserve" style="">
  <h1 class="p-title gold-title-4 center-block text-center m-none s24 reserve-title">来場予約</h1>
  <div class="reserve_content">
    <p class="s20">ご予約内容の選択</p>

    <p class="m-0">ご予約日時を選択してください</p>
    <div class="period_select">
      <button class="period_back">＜</button>
      <?php $i=1; ?>
      @foreach ($weeks as $week)
        @if ($i ==1 )
        <p class="week{{$i}}"><span>{{$week[0][0]}}</span> 〜 <span>{{$week[6][0]}}</span></p>
        @else
        <p class="week{{$i}} d-none"><span>{{$week[0][0]}}</span> 〜 <span>{{$week[6][0]}}</span></p>
        @endif
        <?php $i++ ?>
      @endforeach
      <button class="period_next">＞</button>
    </div>

    <table class="reservation_table">
      <?php $j=1 ?>
      @foreach ($weeks as $week)

      @if ($j == 1)
      <tbody class="week{{$j}}">
      @else
      <tbody class="week{{$j}} d-none">
      @endif

        <tr>
          <td class="left_td"></td>
          @foreach ($week as $week_day)
          <td><span class="day">{{$week_day[2]}}</span><br>{{$week_day[1]}}</td>
          @endforeach
        </tr>
        <tr>
          <td class="left_td">10:00　<br>〜11:30</td>
          @foreach ($week as $week_day)
            @if ($week_day[4][0] == "余裕あり" || $week_day[4][0] == "残りわずか") 
            <td class="reserve_select reserve_ok">
              <form action="/reserve/confirm" method="post">
                @csrf
                <input type="hidden" name="reservation_date" value="{{ $week_day[0] }}">
                <input type="hidden" name="reservation_date_w" value="({{ $week_day[2] }})">
                <input type="hidden" name="reservation_time" value="10:00〜11:30">
                @if ($week_day[4][0] == "余裕あり")
                <button type="submit">◎</button>
                @else
                <button type="submit">△</button>
                @endif
              </form>
            </td>
            @elseif ($week_day[4][0] == "予約不可") 
            <td class="reserve_select reserve_ng">×</td>
            @else
            <td class="reserve_select reserve_ng">-</td>
            @endif
          @endforeach
        </tr>
        <tr>
          <td class="left_td">13:00　<br>〜14:30</td>
          @foreach ($week as $week_day)
            @if ($week_day[4][1] == "余裕あり" || $week_day[4][1] == "残りわずか") 
            <td class="reserve_select reserve_ok">
              <form action="/reserve/confirm" method="post">
                @csrf
                <input type="hidden" name="reservation_date" value="{{ $week_day[0] }}">
                <input type="hidden" name="reservation_date_w" value="({{ $week_day[2] }})">
                <input type="hidden" name="reservation_time" value="13:00〜14:30">
                @if ($week_day[4][1] == "余裕あり")
                <button type="submit">◎</button>
                @else
                <button type="submit">△</button>
                @endif
              </form>
            </td>
            @elseif ($week_day[4][1] == "予約不可") 
            <td class="reserve_select reserve_ng">×</td>
            @else
            <td class="reserve_select reserve_ng">-</td>
            @endif
          @endforeach
        </tr>
        <tr>
          <td class="left_td">16:00　<br>〜17:30</td>
          @foreach ($week as $week_day)
            @if ($week_day[4][2] == "余裕あり" || $week_day[4][2] == "残りわずか") 
            <td class="reserve_select reserve_ok">
              <form action="/reserve/confirm" method="post">
                @csrf
                <input type="hidden" name="reservation_date" value="{{ $week_day[0] }}">
                <input type="hidden" name="reservation_date_w" value="({{ $week_day[2] }})">
                <input type="hidden" name="reservation_time" value="16:00〜17:30">
                @if ($week_day[4][2] == "余裕あり")
                <button type="submit">◎</button>
                @else
                <button type="submit">△</button>
                @endif
              </form>
            </td>
            @elseif ($week_day[4][2] == "予約不可") 
            <td class="reserve_select reserve_ng">×</td>
            @else
            <td class="reserve_select reserve_ng">-</td>
            @endif
          @endforeach
        </tr>
      </tbody>

      <?php $j++ ?>
      @endforeach
    </table>
    <p class="text-end s12" style="margin-top:5px;">◎予約できます △残りわずかです ×予約できません</p>
    <p style="font-weight:bold;"><span style="color:red;">※当日のご予約の方は下記フリーダイヤルにご連絡ください。</span><br>
      ｢ラ・アトレ恵比寿グランガーデン｣現地販売センター<br>
      <a class="s20" href="tel:0120978690" style="">0120-978-690</a>
    </p>
    <p class="m-0 s12">現在予約できる期間 : <span>{{ $start_date }}</span> ~ <span>{{ $end_date }}</span></p>
    <p class="m-0 s12">予約締切 : 当日の0時まで</p>
  </div>
</div>

@endsection
