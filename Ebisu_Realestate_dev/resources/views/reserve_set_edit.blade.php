@extends('layout2')

@section('title',"来場予約｜【公式】ラ・アトレ恵比寿グランガーデン")

@section('content')


<form action="/reserve_set/updated" method="post" id="reserve_set_update">
  @csrf
  <button type="submit" class="reserve_set_update">戻る</button>
</form>

<div class="mx-auto ft2" id="reserve" style="">
  <h1 class="p-title gold-title-4 center-block text-center m-none s24 reserve-title">来場予約管理（編集）</h1>
  
  <div class="reserve_content">
      <table class="reservation_set_table">
        <tbody>
          <tr>
            <th>日付</th>
            <th>10:00〜11:30</th>
            <th>13:00〜14:30</th>
            <th>16:00〜17:30</th>
            <!-- <th>予約可能上限</th> -->
          </tr>
          <?php $i=0 ?>
          @foreach ($weeks as $day)
          <tr>
            <td class="reservation_set_date">{{ $day[0] }} <span class="<?php if($day[2]=="土"){echo "saturday";}elseif($day[2]=="日" || $day[3]=="祝日"){echo "sunday";}; ?>">({{ $day[2] }})</span></td>
            <td>
              <div class="d-flex align-items-center">
                <div class="d-flex align-items-center">
                  <label for="">上限：</label>
                  <input class="ps-1" name="max1_{{$i}}" type="num" value="{{ $day[4][0] }}" style="width:20px;" form="reserve_set_update">
                </div>
                <form action="/reservation_show" method="post" class="d-flex align-items-center" style="margin-left:20px;" id="reservation1_{{$i}}">
                @csrf
                  <input type="hidden" name="reservation_time" value="{{ $day[0] }} 10:00〜11:30" form="reservation1_{{$i}}">
                  予約：<button type="submit" style="color:blue; text-decoration:underline;">{{ $day[5][0] }}</button>
                </form>
              </div>
            </td>
            <td>
              <div class="d-flex align-items-center">
                <div class="d-flex align-items-center">
                  <label for="">上限：</label>
                  <input class="ps-1" name="max2_{{$i}}" type="num" value="{{ $day[4][1] }}" style="width:20px;" form="reserve_set_update">
                </div>
                <form action="/reservation_show" method="post" class="d-flex align-items-center" style="margin-left:20px;" id="reservation2_{{$i}}">
                @csrf
                  <input type="hidden" name="reservation_time" value="{{ $day[0] }} 13:00〜14:30" form="reservation2_{{$i}}">
                  予約：<button type="submit" style="color:blue; text-decoration:underline;">{{ $day[5][1] }}</button>
                </form>
              </div>
            </td>
            <td>
              <div class="d-flex align-items-center">
                <div class="d-flex align-items-center">
                  <label for="">上限：</label>
                  <input class="ps-1" name="max3_{{$i}}" type="num" value="{{ $day[4][2] }}" style="width:20px;" form="reserve_set_update">
                </div>
                <form action="/reservation_show" method="post" class="d-flex align-items-center" style="margin-left:20px;" id="reservation3_{{$i}}">
                @csrf
                  <input type="hidden" name="reservation_time" value="{{ $day[0] }} 16:00〜17:30" form="reservation3_{{$i}}">
                  予約：<button type="submit" style="color:blue; text-decoration:underline;">{{ $day[5][2] }}</button>
                </form>
              </div>
            </td>
            <!-- <td class="limit_td">3</td> -->
          </tr>
          <?php $i++ ?>
          @endforeach
        </tbody>
      </table>
  </div>
</div>

@endsection


