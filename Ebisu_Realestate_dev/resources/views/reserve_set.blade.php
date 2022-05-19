@extends('layout2')

@section('title',"来場予約｜【公式】ラ・アトレ恵比寿グランガーデン")

@section('content')

<form action="/reserve_set/logout" method="post">
  @csrf
  <button type="submit" class="reserve_set_logout">ログアウト</button>
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
          <!-- <th>予約可能上限</th> -->
        </tr>
        @foreach ($weeks as $day)
        <tr>
          <td class="reservation_set_date">{{ $day[0] }} ({{ $day[2] }})</td>
          <td>{{ $day[3][0] }}</td>
          <td>{{ $day[3][1] }}</td>
          <td>{{ $day[3][2] }}</td>
          <!-- <td class="limit_td">3</td> -->
        </tr>
        @endforeach
      </tbody>
    </table>

    <form action="/reserve_set/edit" method="post">
      @csrf
      <button type="submit" class="reserve_set_edit">編集</button>
    </form>

  </div>
</div>

@endsection


