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
    <form action="/reserve_set/updated" method="post">
      @csrf
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
            <td class="reservation_set_date">{{ $day[0] }} ({{ $day[2] }})</td>
            <td>
              @if($day[3][0] == "対応可")
              <div><input name="availability1_{{$i}}" type="radio" value="対応可" checked>対応可</div>
              <div><input name="availability1_{{$i}}" type="radio" value="対応不可">対応不可</div>
              <div><input name="availability1_{{$i}}" type="radio" value="予約あり">予約あり</div>
              @elseif ($day[3][0] == "対応不可")
              <div><input name="availability1_{{$i}}" type="radio" value="対応可">対応可</div>
              <div><input name="availability1_{{$i}}" type="radio" value="対応不可" checked>対応不可</div>
              <div><input name="availability1_{{$i}}" type="radio" value="予約あり">予約あり</div>
              @else ($day[3][0] == "予約あり")
              <div><input name="availability1_{{$i}}" type="radio" value="対応可">対応可</div>
              <div><input name="availability1_{{$i}}" type="radio" value="対応不可">対応不可</div>
              <div><input name="availability1_{{$i}}" type="radio" value="予約あり" checked>予約あり</div>
              @endif
            </td>
            <td>
              @if ($day[3][1] == "対応可")
              <div><input name="availability2_{{$i}}" type="radio" value="対応可" checked>対応可</div>
              <div><input name="availability2_{{$i}}" type="radio" value="対応不可">対応不可</div>
              <div><input name="availability2_{{$i}}" type="radio" value="予約あり">予約あり</div>
              @elseif ($day[3][1] == "対応不可")
              <div><input name="availability2_{{$i}}" type="radio" value="対応可">対応可</div>
              <div><input name="availability2_{{$i}}" type="radio" value="対応不可" checked>対応不可</div>
              <div><input name="availability2_{{$i}}" type="radio" value="予約あり">予約あり</div>
              @else ($day[3][1] == "予約あり")
              <div><input name="availability2_{{$i}}" type="radio" value="対応可">対応可</div>
              <div><input name="availability2_{{$i}}" type="radio" value="対応不可">対応不可</div>
              <div><input name="availability2_{{$i}}" type="radio" value="予約あり" checked>予約あり</div>
              @endif
            </td>
            <td>
              @if ($day[3][2] == "対応可")
              <div><input name="availability3_{{$i}}" type="radio" value="対応可" checked>対応可</div>
              <div><input name="availability3_{{$i}}" type="radio" value="対応不可">対応不可</div>
              <div><input name="availability3_{{$i}}" type="radio" value="予約あり">予約あり</div>
              @elseif ($day[3][2] == "対応不可")
              <div><input name="availability3_{{$i}}" type="radio" value="対応可">対応可</div>
              <div><input name="availability3_{{$i}}" type="radio" value="対応不可" checked>対応不可</div>
              <div><input name="availability3_{{$i}}" type="radio" value="予約あり">予約あり</div>
              @else ($day[3][2] == "予約あり")
              <div><input name="availability3_{{$i}}" type="radio" value="対応可">対応可</div>
              <div><input name="availability3_{{$i}}" type="radio" value="対応不可">対応不可</div>
              <div><input name="availability3_{{$i}}" type="radio" value="予約あり" checked>予約あり</div>
              @endif
            </td>
            <!-- <td class="limit_td">3</td> -->
          </tr>
          <?php $i++ ?>
          @endforeach
        </tbody>
      </table>

      <button type="submit" class="reserve_set_logout">更新</button>
    </form>
  </div>
</div>

@endsection


