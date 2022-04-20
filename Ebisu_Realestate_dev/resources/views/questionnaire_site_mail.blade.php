<p>
管理者宛 アンケート通知メールのテスト（フォーマット未定）
<br>
<br>
─送信内容────────────────────────────────
<br>
受付番号：XXXXX<br>
お名前：{{ $input["sei"] }} {{ $input["mei"] }}<br>
フリガナ：{{ $input["sei_kana"] }} {{ $input["mei_kana"] }}<br>
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
ご家族人数：{{ $input["family_size"] }} 人<br>
ご住所<br>
郵便番号：{{ $input["home_post_code"] }} - {{ $input["home_post_code2"] }}<br>
都道府県：{{ $input["home_prefectures"] }}<br>
市区町村： {{ $input["home_manicipalities"] }}<br>
丁目番地：{{ $input["home_chome_address"] }}<br>
@if (isset($input["home_building_name"]))
建物名：{{ $input["home_building_name"] }}<br>
@endif
現在お住まいの年数：{{ $input["years_of_residence"] }} 年<br>
現在お住まいの住居形態：
@php
if ($input["housing_form"] == "1") {
$housing_form = "分譲マンション";
} else if ($input["housing_form"] == "2") {
$housing_form = "賃貸マンション";
} else {
$housing_form = "その他";
}
@endphp
{{ $housing_form }}<br>
電話番号：{{ $input["phone_number"] }}<br>
メールアドレス：{{ $input["email"] }}<br>
勤務先名：{{ $input["office_name"] }}<br>
勤務先ご住所<br>
郵便番号：{{ $input["work_post_code"] }} - {{ $input["home_post_code2"] }}<br>
都道府県：{{ $input["work_prefectures"] }}<br>
市区町村：{{ $input["work_manicipalities"] }}<br>
丁目番地：{{ $input["work_chome_address"] }}<br>
@if (isset($input["work_building_name"]))
建物名：{{ $input["work_building_name"] }}<br>
@endif
<br>
<br>
1. 仮に今後お住まいを購入するとした場合、どのような住居形態を希望しますか。<br>
{{ $input["q1"] }}
<br>
<br>
2. あなたがお住まいに求める条件をお聞かせください。<br>
@if (isset($input_arrayq2_1))
【駅名】{{ implode($input_arrayq2_1) }}<br>
@endif
@if (isset($input_arrayq2_2))
【立地】{{ implode($input_arrayq2_2) }}<br>
@endif
@if (isset($input_arrayq2_3))
【建物】{{ implode($input_arrayq2_3) }}<br>
@endif
<br>
3. 仮に今後、マンション購入を検討する場合に希望される間取りと広さをお聞かせください。<br>
【ご希望の間取り】{{ $input["q3_1"] }}<br>
【ご希望の広さ】{{ $input["q3_2"] }}
<br>
<br>
4. 新築分譲マンション・分譲リノベーションマンションを購入するとした場合についてお聞かせください。<br>
{{ $input["q4"] }}
<br>
<br>
5. 仮に今後、新たに住宅を検討するとした場合の購入エリアについてお聞かせください。<br>
@if (isset($input_arrayq5_1))
【渋谷区】{{ implode($input_arrayq5_1) }}<br>
@endif
@if (isset($input_arrayq5_2))
【目黒区】{{ implode($input_arrayq5_2) }}<br>
@endif
@if (isset($input_arrayq5_3))
【湊区】{{ implode($input_arrayq5_3) }}<br>
@endif
@if (isset($input_arrayq5_4))
【品川区】{{ implode($input_arrayq5_4) }}<br>
@endif
<br>
6.仮に上記エリアで新規分譲マンションまたは分譲リノベーションマンションを検討する場合、どの住戸を検討しますか。<br>
{{ $input["q6"] }}
<br>
<br>
7. 世帯主様の職業は何でしょうか。<br>
{{ $input["q7"] }}
<br>
<br>
8. 世帯主様の通勤手段は何でしょうか。<br>
{{ $input["q8"] }}
<br>
<br>
9. 現在のお住まいで所有している自家用車の台数と車種をお聞かせ下さい。<br>
@if(isset($input["q9_1"]))
台数：{{ $input["q9_1"] }}台<br>
車種：{{ $input["q9_2"] }}<br>
@endif
@if(isset($input["q9_1_sp"]))
台数：{{ $input["q9_1_sp"] }}台<br>
車種：{{ $input["q9_2_sp"] }}<br>
@endif
<br>
10. 世帯主様、配偶者様、ご家族全体の年収をそれぞれお聞かせください。<br>
@if(isset($input["q10_1"]))
世帯主様：{{ $input["q10_1"] }}万円<br>
配偶者様：{{ $input["q10_2"] }}万円<br>
全体：{{ $input["q10_3"] }}万円<br>
@endif
@if(isset($input["q10_1_sp"]))
世帯主様：{{ $input["q10_1_sp"] }}万円<br>
配偶者様：{{ $input["q10_2_sp"] }}万円<br>
全体：{{ $input["q10_3_sp"] }}万円<br>
@endif
<br>
11. 目黒区三田1丁目の分譲リノベーションマンションについてご興味はございますか。<br>
{{ $input["q11"] }}
<br>
<br>
12. 現在の住宅から買い替え予定はありますか。<br>
{{ $input["q12_1"] }}<br>
@if (isset($input["q12_2"]))
{{ $input["q12_2"] }} 年以内<br>
@endif
<br>
13. 現在の住宅購入をする場合の予算はどのぐらいですか。<br>
{{ $input["q13"] }} 万円
<br>
<br>
────────────────────────────────────────────
</p>