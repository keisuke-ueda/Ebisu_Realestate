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
    <h3 class="s20" style="margin:40px 0;">ご予約者情報の入力</h3>

    <h3 class="s19" style="border-bottom:2px solid #000; padding-bottom:10px; margin-bottom:20px;">ご予約内容</h3>
    <div class="date_confirm">
      <p>ご予約日時</p>
      <p class="reservation_date_confirm">{{$reservation_date}}{{ $reservation_date_w }}&nbsp;{{ $reservation_time }}</p>
    </div>
    
    <h3 class="s19" style="border-bottom:2px solid #000; padding-bottom:10px; margin:50px 0 20px;">ご予約者様情報</h3>
    <div class="ft2 s16">
      <p class="text-center" style="margin-bottom: 10px;">以下のフォームに必要な項目を入力のうえ<br class="pc_hid">「送信」ボタンを押してください。</p>
      <p class="text-center" style="margin-bottom: 20px;"><span class="badge badge-danger">必須</span>は必須項目です。</p>
    </div>

    <form class="mailformpro" style="padding-left:10px; padding-right:10px;" method="POST" action="/reserve/confirm2">
      @csrf
      <table class="gold-table-reserve table-reserve animation ft2 s14">
        <tbody>
          <tr class="top">
            <td class="column1 reserve-column1" style=""><label for="name"><span class="badge badge-danger s11">必須</span>お名前</label></td>
            <td class="column2 reserve-column2 h-40px" style=""></td>
            <td class="column3 reserve-column3" style="width: auto;">
              <input type="text" style="width: 40%;" name="sei" data-kana="セイ" placeholder="姓" required data-error_placement="#sei">
              <input type="text" style="width: 40%;" name="mei" data-kana="メイ" placeholder="名" required data-error_placement="#mei"
                class="ms-2">
              <div class="validation-message" id="sei"></div>
              <div class="validation-message" id="mei"></div>
            </td>
          </tr>
          <tr>
            <td><label for="name"><span class="badge badge-danger s11">必須</span>フリガナ</label></td>
            <td></td>
            <td>
              <input type="text" style="width: 40%;" name="sei_kana" data-charcheck="kana" placeholder="セイ" required
                data-error_placement="#sei-kana">
              <input type="text" style="width: 40%;" name="mei_kana" data-charcheck="kana" placeholder="メイ" required
                data-error_placement="#mei-kana" class="ms-2">
              <div class="validation-message" id="sei-kana"></div>
              <div class="validation-message" id="mei-kana"></div>
            </td>
          </tr>
          <tr>
            <td><label for="name"><span class="badge badge-danger">必須</span>性別</label></td>
            <td></td>
            <td style="padding-top: 10px; padding-bottom: 10px;">
              <div class="s16"><input type="radio" name="gender" value="male" data-error_placement="#gender">男性
              </div>
              <div class="s16"><input type="radio" name="gender" value="female" data-error_placement="#gender">女性
              </div>
              <div class="validation-message" id="gender"></div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class=""><label for="name"><span class="badge badge-danger s11">必須</span>生年月日</label></div>
            </td>
            <td style="padding-top: 10px; padding-bottom: 10px;">
              <div>
                <select style="width: 20%;" type="text" name="birth_y" data-error_placement="#birth_y">
                  <option value="">選択</option>
                  @foreach($years as $year)
                  <option value="{{ $year }}">{{ $year }}</option>
                  @endforeach
                </select>
                <span class="s10"> 年 </span>

                <select style="width: 20%;" type="text" name="birth_m" data-error_placement="#birth_m">
                  <option value="">選択</option>
                  @foreach($months as $month)
                  <option value="{{ $month }}">{{ $month }}</option>
                  @endforeach
                </select>
                <span class="s10"> 月 </span>

                <select style="width: 20%;" type="text" name="birth_d" data-error_placement="#birth_d">
                  <option value="">選択</option>
                  @foreach($days as $day)
                  <option value="{{ $day }}">{{ $day }}</option>
                  @endforeach
                </select>
                <span class="s10"> 日 </span>
              </div>
              <div class="validation_message" id="birth_y"></div>
              <div class="validation_message" id="birth_m"></div>
              <div class="validation_message" id="birth_d"></div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="" style="margin-bottom:35px;"><label for="name"><span class="badge badge-danger s11">必須</span>メールアドレス</label></div>
              <div class="" style="margin-bottom:10px;"><label for="name"><span class="badge badge-danger s11">必須</span>メールアドレス(確認用)</label></div>
            </td>
            <td style="padding-top: 10px; padding-bottom: 10px;">
              <div><input class="" type="email" name="email" data-error_placement="#email"></div>
              <p class="mb-2 s12">※半角英数で<br class="pc_hid">入力してください</p>
              <div class="validation_message" id="email"></div>
              <div><input class="" type="text" name="confirm_email" data-error_placement="#confirm_email">
              <p class="m-0 s12">※確認のためもう一度ご入力ください</p>
              </div>
              <div class="validation_message" id="confirm_email"></div>
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
                    <input class="w-60px" type="text" style="" name="home_post_code" data-error_placement="#home_post_code"> - <input class="w-100px" type="text" style="" name="home_post_code2" onKeyUp="AjaxZip3.zip2addr('home_post_code','home_post_code2','home_prefectures','home_manicipalities','home_chome_address');">
                    <div class="validation-message" id="home_post_code"></div>
                    <p style="margin: 0;" class="s12">※半角数字で入力してください</p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label for="name" class="">都道府県<span class="badge badge-danger s11">必須</span></label>
                  </td>
                  <td class="py-1">
                    <select class="" name="home_prefectures"
                        data-error_placement="#home_prefectures">
                      <option value="">選択</option>
                      @foreach ($prefectures as $prefecture)
                      <option value="{{ $prefecture }}">
                        {{$prefecture}}</option>
                      @endforeach
                    </select>
                    <div class="validation-message" id="home_prefectures"></div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label for="name" class="s14">市区町村<span class="badge badge-danger s11">必須</span></label>
                  </td>
                  <td class="py-1">
                    <input type="text" name="home_manicipalities" data-error_placement="#home_manicipalities">
                    <div class="validation-message" id="home_manicipalities"></div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label for="name" class="s14">丁目番地<span class="badge badge-danger s11">必須</span></label>
                  </td>
                  <td class="py-1">
                    <input type="text" name="home_chome_address" data-error_placement="#home_chome_address">
                    <div class="validation-message" id="home_chome_address"></div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label for="name" class="s14">建物名</label>
                  </td>
                  <td class="py-1">
                    <input type="text" name="home_building_name">
                  </td>
                </tr>
              </table>
            </td>
          </tr>
          <tr>
            <td><label for="name"><span class="badge badge-danger s11">必須</span>電話番号</label></td>
            <td></td>
            <td>
              <input type="tel" name="phone_number" data-type="tel" name="電話番号" placeholder="(例)00099998888"
                data-error_placement="#phone_number">
              <p style="margin: 0;" class="s12">※半角数字・ハイフンなしで入力してください</p>
              <div class="validation_message" id="phone_number"></div>
            </td>
          </tr>
          <tr>
            <td><label for="name">備考欄</label></td>
            <td></td>
            <td>
              <textarea class="remarks" name="remarks" data-type="" placeholder=""
                data-error_placement="#remarks" rows="5" style="" maxlength="1000"></textarea>
              <p style="margin:0; width:80%;" class="s12 text-end"><span class="word_count">0</span>/1000</p>
              <div class="validation_message" id="remarks"></div>
            </td>
          </tr>
        </tbody>
      </table>
      <button class="mh-parts btn btn-dark mx-auto d-block mt-30px mb-40px"><span class="p-3 s18">入力内容の確認</span></button>
    </form>
    <button class="mh-parts btn mx-auto d-block mb-40px" type="button" onclick=history.back() style="margin-top:15px; text-decoration:underline;;">日付選択に戻る</button>
  </div>
</div>

@endsection