@extends('layout2')

<link rel="stylesheet" href="{{ asset('/css/entry.css') }}">

@section('title',"物件エントリー｜【公式】ラ・アトレ恵比寿グランガーデン")

@section('content')
<?php
  $prefectures = array('北海道','青森県','岩手県','宮城県','秋田県','山形県','福島県','茨城県','栃木県','群馬県','埼玉県','千葉県','東京都','神奈川県','新潟県','富山県','石川県','福井県','山梨県','長野県','岐阜県','静岡県','愛知県','三重県','滋賀県','京都府','大阪府','兵庫県','奈良県','和歌山県','鳥取県','島根県','岡山県','広島県','山口県','徳島県','香川県','愛媛県','高知県','福岡県','佐賀県','長崎県','熊本県','大分県','宮崎県','鹿児島県','沖縄県');
?>

<div class="" id="entry" style="">
  <h1 class="p-title gold-title-3 center-block text-center m-none ft4 s24">PROPERTY ENTRY</h1>
  <p class="p-title center-block text-center mt-10px ft2 s14" style="margin-bottom:25px;">物件エントリー</p>
  
  <div class="entry-main-content" style="">
    <div class="ft2 s16">
      <p class="text-center" style="margin-bottom: 10px;">以下のフォームに必要な項目を入力のうえ<br class="pc_hid">「送信」ボタンを押してください。</p>
      <p class="text-center" style="margin-bottom: 20px;"><span class="badge badge-danger">必須</span>は必須項目です。</p>
    </div>
    <form class="mailformpro" style="padding-left:10px; padding-right:10px;" method="POST" action="{{ route('entry_form.send') }}">
      @csrf
      <table class="gold-table-entry table-entry animation ft2 s14">
        <tbody>
          <tr class="top">
            <td class="column1 entry-column1" style=""><label for="name"><span class="badge badge-danger s11">必須</span>お名前</label></td>
            <td class="column2 entry-column2 h-40px" style=""></td>
            <td class="column3 entry-column3" style="width: auto;">
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
              <div class="mb-3"><label for="name"><span class="badge badge-danger s11">必須</span>生年月日</label></div>
              <div><label for="name"><span class="badge badge-danger s11">必須</span>メールアドレス</label></div>
            </td>
            <td style="padding-top: 5px; padding-bottom: 5px;">
              <div class="mb-3">{{ $input["birth_y"] }}年{{ $input["birth_m"] }}月{{ $input["birth_d"] }}日</div>
              <div>{{ $input["email"] }}</div>
            </td>
          </tr>
          <tr>

            <td>
              <label for="name" class="s14 sp_hid"><span class="badge badge-danger s11">必須</span>ご住所</label>
              <label for="name" class="s14 pc_hid"><span class="badge badge-danger s11">必須</span><br>ご住所</label>
            </td>
            <td colspan="2" style="padding-top: 10px; padding-bottom: 10px;">
              <table class="entry-table-nest s14" style="width: 100%;">
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
                    <label for="name" class="s14">都道府県<span class="badge badge-danger s11">必須</span></label>
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
            <td><label for="name"><span class="badge badge-danger s11">必須</span>ご職業</label></td>
            <td></td>
            <td>
              {{ $input["job"] }}
            </td>
          </tr>
          <tr>
            <td colspan="2"><label for="name"><span class="badge"></span>　　　ご年収</label></td>
            <td>
              @if (isset($input["income"]))
              {{ $input["income"] }}
              @endif
            </td>
          </tr>
          <tr>
            <td colspan="2"><label for="name"><span class="badge"></span>　　　自己資金(半角)</label></td>
            <td>
              @if (isset($input["fund"]))
              {{ $input["fund"] }}
              @endif
            </td>
          </tr>
          <tr>
            <td colspan="2"><label for="name"><span class="badge"></span>　　　ご購入の目的</label></td>
            <td>
              @if (isset($input["purpose"]))
              {{ $input["purpose"] }}
              @endif
            </td>
          </tr>
          <tr>
            <td colspan="2"><label for="name"><span class="badge"></span>　　　現在のお住まい(住居形態)</label></td>
            <td>
              @if (isset($input["type"]))
              {{ $input["type"] }}
              @endif
            </td>
          </tr>
          <tr>
            <td colspan="2"><label for="name"><span class="badge"></span>　　　ご家族人数</label></td>
            <td>
              @if (isset($input["family"]))
              {{ $input["family"] }}人
              @endif
            </td>
          </tr>
          <tr>
            <td colspan="2"><label for="name"><span class="badge"></span>　　　ご希望条件(面積)</label></td>
            <td>
              @if (isset($input["area"]))
              {{ $input["area"] }}m&sup2;
              @endif
            </td>
          </tr>
          <tr>
            <td colspan="2"><label for="name"><span class="badge"></span>　　　ご希望条件(間取り)<br>　　　※複数選択可</label></td>
            <td style="padding-top: 10px; padding-bottom: 10px;">
              @if (isset($input_array_ldk))
              {{ implode($input_array_ldk) }}
              @endif
            </td>
          </tr>
          <tr>
            <td colspan="2"><label for="name"><span class="badge badge-danger">必須</span>ご希望条件(価格帯)</label></td>
            <td style="padding-top: 10px; padding-bottom: 10px;">
              {{ $input["price"] }}
            </td>
          </tr>
          <tr>
            <td colspan="2"><label for="name"><span class="badge badge-danger">必須</span>このHPをどこでお知りに<br>　　　 なりましたか？</label></td>
            <td style="padding-top: 10px; padding-bottom: 10px;">
              {{ $input["media"] }}
            </td>
          </tr>
        </tbody>
      </table>

      <button class="mh-parts btn btn-dark mx-auto d-block mt-30px mail_send_btn"><span class="p-3 s18">送信する</span></button>
      <button class="mh-parts btn mx-auto d-block mb-40px" type="button" onclick=history.back() style="margin-top:15px; text-decoration:underline;;">入力画面に戻る</button>
    </form>

  </div>
</div>

@endsection