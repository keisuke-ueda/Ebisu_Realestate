@extends('layout2')

@section('title',"来場予約｜【公式】ラ・アトレ恵比寿グランガーデン")

@section('content')

<div style="width: 700px; margin:0 auto;">

  <form action="/reserve_set/edit" method="post"> 
    @csrf
    <input type="hidden" name="reshow" value="true">
    <button class="d-block s18" style="margin-top:80px; color:#fff; background-color:#000; padding:7px 20px; font-weight:bold;">← 戻る</button>
  </form>
  
  <p class="text-center h3 mt-4">{{ $reservation_time }}の予約情報</p>
  @if ($reservations != [])
  <?php  $i=0 ?>
    @foreach ($reservations as $reservation)
    <div style="margin-bottom:80px;">
    <table class="reservation_set_table" style="margin-bottom:30px; width:100%;">
      <tbody>
        <tr>
          <td style="width:25%;">予約No</td>
          <td style="width:75%;">{{ $reservation->reservation_no }}</td>
        </tr>
        <tr>
          <td>名前</td>
          <td>{{ $reservation->name }}</td>
        </tr>
        <tr>
          <td>生年月日</td>
          <td>{{ $reservation->birth }}</td>
        </tr>
        <tr>
          <td>性別</td>
          <td>{{ $reservation->gender }}</td>
        </tr>
        <tr>
          <td>メールアドレス</td>
          <td>{{ $reservation->email }}</td>
        </tr>
        <tr>
          <td>電話番号</td>
          <td>{{ $reservation->phone }}</td>
        </tr>
        <tr>
          <td>住所</td>
          <td>{{ $reservation->address }}</td>
        </tr>
        <tr>
          <td>備考</td>
          <td style="white-space:pre-line;">{{ $reservation->remarks }}</td>
        </tr>
      </tbody>
    </table>
    <form action="{{ route('reservation.cancel') }}" method="post" id="reservation_cancel_{{ $i }}">
      @csrf
      <input type="hidden" name="reservation_time" value="{{ $reservation_time }}" form="reservation_cancel_{{ $i }}">
      <input type="hidden" name="reservation_no" value="{{ $reservation->reservation_no }}" form="reservation_cancel_{{ $i }}">
      <button class="mx-auto d-block cancel_btn" style="color:#fff; background-color:#000; padding: 5px 20px;">キャンセル</button>
    </form>
    </div>
    <?php  $i++ ?>
    @endforeach

  @else
  
  <p class="no_reservation_msg text-center" style="margin-top:100px;">予約はありません</p>
  
  @endif
</div>


@endsection
