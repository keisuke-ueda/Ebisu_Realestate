@extends('layout2')

@section('title',"来場予約｜【公式】ラ・アトレ恵比寿グランガーデン")

@section('content')
<?php
  $prefectures = array('北海道','青森県','岩手県','宮城県','秋田県','山形県','福島県','茨城県','栃木県','群馬県','埼玉県','千葉県','東京都','神奈川県','新潟県','富山県','石川県','福井県','山梨県','長野県','岐阜県','静岡県','愛知県','三重県','滋賀県','京都府','大阪府','兵庫県','奈良県','和歌山県','鳥取県','島根県','岡山県','広島県','山口県','徳島県','香川県','愛媛県','高知県','福岡県','佐賀県','長崎県','熊本県','大分県','宮崎県','鹿児島県','沖縄県');
  $years = range(1945, date("Y"));
  $months = range(1,12);
  $days = range(1,31);
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

    <h3 class="s19" style="border-bottom:2px solid #000; padding-bottom:10px; margin:50px 0 20px;">ご予約者様情報</h3>
    <div class="ft2 s16">
      <p class="text-center" style="margin-bottom: 10px;">以下のフォームに必要な項目を入力のうえ<br class="pc_hid">「送信」ボタンを押してください。</p>
      <p class="text-center" style="margin-bottom: 20px;"><span class="badge badge-danger">必須</span>は必須項目です。</p>
    </div>

    <table class="gold-table-reserve table-reserve animation ft2 s14">
        <tbody>
          <tr class="top">
            <td class="column1 reserve-column1" style=""><label for="name"><span class="badge badge-danger s11">必須</span>お名前</label></td>
            <td class="column2 reserve-column2 h-40px" style=""></td>
            <td class="column3 reserve-column3" style="width: auto;">
              {{ $input["sei"] }}
              {{ $input["mei"] }}
            </td>
          </tr>
          <tr>
            <td><label for="name"><span class="badge badge-danger s11">必須</span>フリガナ</label></td>
            <td></td>
            <td>
              {{ $input["sei_kana"] }}
              {{ $input["mei_kana"] }}
            </td>
          </tr>
          <tr>
            <td><label for="name"><span class="badge badge-danger">必須</span>性別</label></td>
            <td></td>
            <td style="padding-top: 10px; padding-bottom: 10px;">
              @php
              if ($input["gender"] == "male") {
              $seibetsu = "男性";
              } else {
              $seibetsu = "女性";
              }
              @endphp
              {{ $seibetsu }}
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class=""><label for="name"><span class="badge badge-danger s11">必須</span>生年月日</label></div>
            </td>
            <td style="padding-top: 10px; padding-bottom: 10px;">
              {{ $input["birth_y"] }}年{{ $input["birth_m"] }}月{{ $input["birth_d"] }}日
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="" style=""><label for="name"><span class="badge badge-danger s11">必須</span>メールアドレス</label></div>
            </td>
            <td style="padding-top: 10px; padding-bottom: 10px;">
              {{ $input["email"] }}
            </td>
          </tr>
          <tr>
            <td>
              <label for="name" class="s14 sp_hid"><span class="badge badge-danger s11">必須</span>ご住所</label>
              <label for="name" class="s14 pc_hid"><span class="badge badge-danger s11">必須</span><br>ご住所</label>
            </td>
            <td colspan="2" style="padding-top: 10px; padding-bottom: 10px;">
              <table class="entry-table-nest" style="width: 100%;">
                <tr rowspan="2">
                  <td class="address-column" style="vertical-align: top;">
                    <label for="name" class="s14">郵便番号<span class="badge badge-danger s11">必須</span></label>
                  </td>
                  <td>
                    {{ $input["home_post_code"] }} - {{ $input["home_post_code2"] }}
                  </td>
                </tr>
                <tr>
                  <td>
                    <label for="name" class="">都道府県<span class="badge badge-danger s11">必須</span></label>
                  </td>
                  <td class="py-1">
                    {{ $input["home_prefectures"] }}
                  </td>
                </tr>
                <tr>
                  <td>
                    <label for="name" class="s14">市区町村<span class="badge badge-danger s11">必須</span></label>
                  </td>
                  <td class="py-1">
                    {{ $input["home_manicipalities"] }}
                  </td>
                </tr>
                <tr>
                  <td>
                    <label for="name" class="s14">丁目番地<span class="badge badge-danger s11">必須</span></label>
                  </td>
                  <td class="py-1">
                    {{ $input["home_chome_address"] }}
                  </td>
                </tr>
                <tr>
                  <td>
                    <label for="name" class="s14">建物名</label>
                  </td>
                  <td class="py-1">
                    @if (isset($input["home_building_name"]))
                    {{ $input["home_building_name"] }}
                    @endif
                  </td>
                </tr>
              </table>
            </td>
          </tr>
          <tr>
            <td><label for="name"><span class="badge badge-danger s11">必須</span>電話番号</label></td>
            <td></td>
            <td>
              {{ $input["phone_number"] }}
            </td>
          </tr>
          <tr>
            <td><label for="name">備考欄</label></td>
            <td></td>
            <td style="white-space:pre-line;">{{ $input["remarks"] }}</td>
          </tr>
        </tbody>
      </table>

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