@extends('layout2')

@section('title',"来場予約｜【公式】ラ・アトレ恵比寿グランガーデン")

@section('content')
<?php
  $sample_data = [0, 1, 0, 1, 0, 1, 1];
  $sample_data2 = [0, 0, 0, 0, 0, 0, 0];
  $sample_data3 = [1, 1, 1, 1, 1, 1, 1];
  $prefectures = array('北海道','青森県','岩手県','宮城県','秋田県','山形県','福島県','茨城県','栃木県','群馬県','埼玉県','千葉県','東京都','神奈川県','新潟県','富山県','石川県','福井県','山梨県','長野県','岐阜県','静岡県','愛知県','三重県','滋賀県','京都府','大阪府','兵庫県','奈良県','和歌山県','鳥取県','島根県','岡山県','広島県','山口県','徳島県','香川県','愛媛県','高知県','福岡県','佐賀県','長崎県','熊本県','大分県','宮崎県','鹿児島県','沖縄県');
?>

<div class="mx-auto ft2" id="reserve" style="padding:150px 0 50px; width: 800px;">
  <h1 class="p-title gold-title-4 center-block text-center m-none s24 reserve-title">来場予約</h1>

  <p class="" style="border-bottom:2px solid #000; padding-bottom:10px; margin-bottom:20px;">ご予約内容</p>
  <p class="ps-3" style=""><span>ご予約日時</span><span class="" style="margin-left:150px;">2022/6/11(土) 10:00〜11:30</span></p>
  <p class="" style="margin-left:245px;">開始時間と終了時間をご確認ください</p>

  <p style="margin:50px 0; color:red;">
    ※予約変更の際は、一度キャンセルをしていただき、再度ご予約をお願いします。<br>
    キャンセル時は 0120-978-690 ｢ラ・アトレ恵比寿グランガーデン｣現場事務所までご連絡ください。
  </p>

  <form class="mailformpro" style="padding-left:10px; padding-right:10px;" method="POST" action="{{ route('entry_form.post') }}">
    @csrf
    <button class="mh-parts btn btn-dark mx-auto d-block mt-30px mb-40px"><span class="p-3 s18">送信する</span></button>
  </form>
</div>

@endsection