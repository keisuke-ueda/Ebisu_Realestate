<p>
{{ $date }}<br>
株式会社ラ・アトレ「ラ・アトレ恵比寿グランガーデン」物件エントリーフォームより以下のメールを受付ました。<br>
<br>
────────────────────────────────────────────<br>
受付番号：XXXXX<br>
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
ご職業：{{ $input["job"] }}<br>

@if (isset($input["income"]))
ご年収：{{ $input["income"] }}<br>
@endif

@if (isset($input["fund"]))
自己資金：{{ $input["fund"] }}<br>
@endif

@if (isset($input["purpose"]))
ご購入の目的：{{ $input["purpose"] }}<br>
@endif

@if (isset($input["type"]))
現在のお住まい：{{ $input["type"] }}<br>
@endif

@if (isset($input["family"]))
ご家族人数：{{ $input["family"] }}人<br>
@endif

@if (isset($input["area"]))
ご希望条件(面積)：{{ $input["area"] }}m&sup2;<br>
@endif

@if (isset($input_array_ldk))
ご希望条件(間取り)：{{ implode($input_array_ldk) }}<br>
@endif

ご希望条件：{{ $input["price"] }}<br>
このHPをどこでお知りになりましたか？：{{ $input["media"] }}<br>
<br>
[ 個人情報保護方針 ] 確認済み<br>
────────────────────────────────────────────
</p>