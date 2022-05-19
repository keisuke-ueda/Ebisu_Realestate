@extends('layout2')

@section('title',"来場予約｜【公式】ラ・アトレ恵比寿グランガーデン")

@section('content')
<?php
  $sample_data = [0, 1, 0, 1, 0, 1, 1];
  $sample_data2 = [0, 0, 0, 0, 0, 0, 0];
  $sample_data3 = [1, 1, 1, 1, 1, 1, 1];
  $prefectures = array('北海道','青森県','岩手県','宮城県','秋田県','山形県','福島県','茨城県','栃木県','群馬県','埼玉県','千葉県','東京都','神奈川県','新潟県','富山県','石川県','福井県','山梨県','長野県','岐阜県','静岡県','愛知県','三重県','滋賀県','京都府','大阪府','兵庫県','奈良県','和歌山県','鳥取県','島根県','岡山県','広島県','山口県','徳島県','香川県','愛媛県','高知県','福岡県','佐賀県','長崎県','熊本県','大分県','宮崎県','鹿児島県','沖縄県');
?>

<div class="mx-auto ft2" id="reserve" style="">
  <h1 class="p-title gold-title-4 center-block text-center m-none s24 reserve-title">来場予約</h1>

  <div class="reserve_content">
    <h3 class="s20" style="border-bottom:2px solid #000; padding-bottom:10px; margin-bottom:20px;">ご予約内容</h3>

    <div class="date_confirm">
      <p>ご予約日時</p>
      <p class="reservation_date_confirm">{{$reservation_date}}{{ $reservation_date_w }}&nbsp;{{ $reservation_time }}
        <br>開始日時と終了日時をご確認ください
      </p>
    </div>

    <p class="s14" style="margin:40px 0; color:red;">
      ※予約変更の際は､一度キャンセルをしていただき､<br class="pc_hid">再度ご予約をお願いします｡<br>
      キャンセル時は 0120-978-690 ｢ラ・アトレ恵比寿グランガーデン｣<br class="pc_hid">現場事務所までご連絡ください｡
    </p>

    <form class="mailformpro" style="padding-left:10px; padding-right:10px;" method="POST" action="/reserve/send">
      @csrf
      <button class="mh-parts btn btn-dark mx-auto d-block mt-30px mb-40px"><span class="p-3 s18">送信する</span></button>
    </form>
    <button class="mh-parts btn mx-auto d-block mb-40px" type="button" onclick=history.back() style="margin-top:15px; text-decoration:underline;;">入力画面に戻る</button>
  </div>
</div>

@endsection