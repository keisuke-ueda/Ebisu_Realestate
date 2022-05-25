<p>
{{ $date }}<br>
株式会社ラ・アトレ「ラ・アトレ恵比寿グランガーデン」<br>
来場予約より以下のメールを受付ました。<br>
<br>
────────────────────────────────────────────<br>
受付番号：{{ $no }}<br>
<br>
ご来場日時：{{$reservation_date}}{{ $reservation_date_w }}&nbsp;{{ $reservation_time }}<br>
<br>
お名前：{{ $input['sei'] }} {{ $input['mei'] }}<br>
フリガナ：{{ $input['sei_kana'] }} {{ $input['mei_kana'] }}<br>
性別：
  @php
  if ($input["gender"] == "male") {
  $seibetsu = "男性";
  } else {
  $seibetsu = "女性";
  }
  @endphp
  {{ $seibetsu }}
<br>
生年月日：{{ $input["birth_y"] }}年{{ $input["birth_m"] }}月{{ $input["birth_d"] }}日<br>
メールアドレス：{{ $input["email"] }}<br>
郵便番号：{{ $input["home_post_code"] }} - {{ $input["home_post_code2"] }}<br>
都道府県：{{ $input["home_prefectures"] }}<br>
市区町村：{{ $input["home_manicipalities"] }}<br>
丁目番地：{{ $input["home_chome_address"] }}<br>

@if (isset($input["home_building_name"]))
建物名：{{ $input["home_building_name"] }}<br>
@endif

電話番号：{{ $input["phone_number"] }}<br>

@if (isset($input["remarks"]))
備考：{{ $input["remarks"] }}<br>
@endif

<br>
[ 個人情報保護方針 ] 確認済み<br>
────────────────────────────────────────────
</p>