@extends('layout2')

<link rel="stylesheet" href="{{ asset('/css/entry.css') }}">

@section('title',"物件エントリー｜【公式】ラ・アトレ恵比寿グランガーデン")

@section('content')
<?php
  $prefectures = array('北海道','青森県','岩手県','宮城県','秋田県','山形県','福島県','茨城県','栃木県','群馬県','埼玉県','千葉県','東京都','神奈川県','新潟県','富山県','石川県','福井県','山梨県','長野県','岐阜県','静岡県','愛知県','三重県','滋賀県','京都府','大阪府','兵庫県','奈良県','和歌山県','鳥取県','島根県','岡山県','広島県','山口県','徳島県','香川県','愛媛県','高知県','福岡県','佐賀県','長崎県','熊本県','大分県','宮崎県','鹿児島県','沖縄県');
  $years = range(1945, date("Y"));
  $months = range(1,12);
  $days = range(1,31);
?>

<div class="" id="entry" style="">
  <h1 class="p-title gold-title-3 center-block text-center m-none ft4 s24">PROPERTY ENTRY</h1>
  <p class="p-title center-block text-center mt-10px ft2 s14" style="margin-bottom:25px;">物件エントリー</p>
  
  <div class="entry-main-content" style="">
    <div class="ft2 s16">
      <p class="text-center" style="margin-bottom: 10px;">以下のフォームに必要な項目を入力のうえ<br class="pc_hid">「送信」ボタンを押してください。</p>
      <p class="text-center" style="margin-bottom: 20px;"><span class="badge badge-danger">必須</span>は必須項目です。</p>
    </div>
    <form class="mailformpro" style="padding-left:10px; padding-right:10px;" method="POST" action="{{ route('entry_form.post') }}">
      @csrf
      <table class="gold-table-entry table-entry animation ft2 s14">
        <tbody>
          <tr class="top">
            <td class="column1 entry-column1" style=""><label for="name"><span class="badge badge-danger s11">必須</span>お名前</label></td>
            <td class="column2 entry-column2 h-40px" style=""></td>
            <td class="column3 entry-column3" style="width: auto;">
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
              <div class="mb-5"><label for="name"><span class="badge badge-danger s11">必須</span>生年月日</label></div>
              <div><label for="name"><span class="badge badge-danger s11">必須</span>メールアドレス</label></div>
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
              <p class="mt-2 mb-0 s12">※半角英数で<br class="pc_hid">入力してください</p>
              <div><input class="" type="email" name="email" data-error_placement="#email"></div>
              <div class="validation_message" id="email"></div>
              <p class="m-0 s12">※確認のためもう一度ご入力ください</p>
              <div><input class="" type="text" name="confirm_email" data-error_placement="#confirm_email">
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
                    <label for="name" class="s14">都道府県<span class="badge badge-danger s11">必須</span></label>
                  </td>
                  <td class="py-1">
                    <select class="s11" name="home_prefectures"
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
            <td><label for="name"><span class="badge badge-danger s11">必須</span>ご職業</label></td>
            <td></td>
            <td>
              <select style="width: 120px;" class="s11" name="job" data-error_placement="#job">
                <option value="">選択</option>
                <option value="会社員">会社員</option>
                <option value="会社役員">会社役員</option>
                <option value="経営者">経営者</option>
                <option value="公務員">公務員</option>
                <option value="商工自営（個人事業）">商工自営（個人事業）</option>
                <option value="医師">医師</option>
                <option value="教職員">教職員</option>
                <option value="弁護士・会計士">弁護士・会計士</option>
                <option value="団体職員">団体職員</option>
                <option value="無職">無職</option>
                <option value="その他">その他</option>
              </select>
              <div class="validation-message" id="job"></div>
            </td>
          </tr>
          <tr>
            <td colspan="2"><label for="name"><span class="badge"></span>　　　ご年収</label></td>
            <td>
              <select style="" class="s11 w-200px" name="income">
                <option value="">選択</option>
                <option value="800万円未満">800万円未満</option>
                <option value="801万〜1000万円">801万〜1000万円</option>
                <option value="1001万〜1200万円">1001万〜1200万円</option>
                <option value="1201万〜1500万円">1201万〜1500万円</option>
                <option value="1501万〜2000万円">1501万〜2000万円</option>
                <option value="2001万円以上">2001万円以上</option>
              </select>
            </td>
          </tr>
          <tr>
            <td colspan="2"><label for="name"><span class="badge"></span>　　　自己資金(半角)</label></td>
            <td>
              <select style="" class="s11 w-200px" name="fund">
                <option value="">選択</option>
                <option value="3000万円未満">3000万円未満</option>
                <option value="3001万〜5000万円">3001万〜5000万円</option>
                <option value="5001万〜8000万円">5001万〜8000万円</option>
                <option value="8001万〜1億円">8001万〜1億円</option>
                <option value="1億円以上">1億円以上</option>
              </select>
            </td>
          </tr>
          <tr>
            <td colspan="2"><label for="name"><span class="badge"></span>　　　ご購入の目的</label></td>
            <td>
              <select style="width: 120px;" class="s11" name="purpose">
                <option value="">選択</option>
                <option value="家賃の無駄">家賃の無駄</option>
                <option value="狭い">狭い</option>
                <option value="古い">古い</option>
                <option value="環境が悪い">環境が悪い</option>
                <option value="不便（通勤・通学・買い物）">不便（通勤・通学・買い物）</option>
                <option value="転勤のため">転勤のため</option>
                <option value="結婚・世帯分離">結婚・世帯分離</option>
                <option value="老後のため">老後のため</option>
                <option value="セカンドハウス">セカンドハウス</option>
                <option value="その他">その他</option>
              </select>
            </td>
          </tr>
          <tr>
            <td colspan="2"><label for="name"><span class="badge"></span>　　　現在のお住まい(住居形態)</label></td>
            <td>
              <select style="width: 120px;" class="s11" name="type">
                <option value="">選択</option>
                <option value="マンション（分譲）">マンション（分譲）</option>
                <option value="マンション（賃貸）">マンション（賃貸）</option>
                <option value="戸建（持家）">戸建（持家）</option>
                <option value="戸建（借家）">戸建（借家）</option>
                <option value="社宅・官舎">社宅・官舎</option>
                <option value="実家">実家</option>
                <option value="その他">その他</option>
              </select>
            </td>
          </tr>
          <tr>
            <td colspan="2"><label for="name"><span class="badge"></span>　　　ご家族人数</label></td>
            <td>
              <div class="s11"><input type="text" style="width: 70px;" name="family"> 人
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2"><label for="name"><span class="badge"></span>　　　ご希望条件(面積)</label></td>
            <td>
              <select style="width: 120px;" class="s11" name="area">
                <option value="">選択</option>
                <option value="〜50">〜50m&sup2;</option>
                <option value="〜55">〜55m&sup2;</option>
                <option value="〜60">〜60m&sup2;</option>
                <option value="〜65">〜65m&sup2;</option>
                <option value="〜70">〜70m&sup2;</option>
                <option value="〜75">〜75m&sup2;</option>
                <option value="〜80">〜80m&sup2;</option>
                <option value="〜85">〜85m&sup2;</option>
                <option value="90">90m&sup2;以上</option>
              </select>
            </td>
          </tr>
          <tr>
            <td colspan="2"><label for="name"><span class="badge"></span>　　　ご希望条件(間取り)<br>　　　※複数選択可</label></td>
            <td style="padding-top: 10px; padding-bottom: 10px;">
              <div class="s16"><input type="checkbox" name="ldk[]" value="1LDK">1LDK</div>
              <div class="s16"><input type="checkbox" name="ldk[]" value="2LDK">2LDK</div>
              <div class="s16"><input type="checkbox" name="ldk[]" value="3LDK">3LDK</div>
            </td>
          </tr>
          <tr>
            <td colspan="2"><label for="name"><span class="badge badge-danger">必須</span>ご希望条件(価格帯)</label></td>
            <td style="padding-top: 10px; padding-bottom: 10px;">
              <select class="s11" name="price" data-error_placement="#price">
                <option value="">選択</option>
                <option value="〜8,000万円">〜8,000万円</option>
                <option value="〜1億円">〜1億円</option>
                <option value="〜1億2,000万円">〜1億2,000万円</option>
                <option value="〜1億5,000万円">〜1億5,000万円</option>
                <option value="〜1億8,000万円">〜1億8,000万円</option>
                <option value="〜2億円">〜2億円</option>
                <option value="2億円以上">2億円以上</option>
              </select>
              <div class="validation-message" id="price"></div>
            </td>
          </tr>
          <tr>
            <td colspan="2"><label for="name"><span class="badge badge-danger">必須</span>このHPをどこでお知りに<br>　　　 なりましたか？</label></td>
            <td style="padding-top: 10px; padding-bottom: 10px;">
              <div class="s16"><input type="radio" name="media" data-error_placement="#media" value="ラ・アトレホームページ">ラ・アトレホームページ</div>
              <div class="s16"><input type="radio" name="media" data-error_placement="#media" value="ダイレクトメール">ダイレクトメール</div>
              <div class="s16"><input type="radio" name="media" data-error_placement="#media" value="ご紹介">ご紹介</div>
              <div class="s16"><input type="radio" name="media" data-error_placement="#media" value="その他">その他</div>
              <div class="validation-message" id="media"></div>
            </td>
          </tr>
        </tbody>
      </table>

      <div class="animation mt-20px ft2 s16">
        <p style="margin-bottom: 10px; margin-left: 11px;"><label for="name"><span class="badge badge-danger">必須</span></label>
          <input type="checkbox" name="agree" data-error_placement="#agree">個人情報の取り扱いについて同意の方は、チェックを入れてください。
        </p>
        <div class="validation-message" id="agree"></div>

        <p class="s14">資料請求を行う際には、<a href="https://lahd.co.jp/privacy/" target="_blank" rel="noopener noreferrer" style="text-decoration:none; color:#000;">「個人情報のお取り扱いについて」</a>(株式会社LAホールディングス)をお読みの上チェックを入れて下記の「入力内容の確認」ボタンを押してください。</p>
      </div>

      <button class="mh-parts btn btn-dark mx-auto d-block mt-30px mb-40px"><span class="p-3 s18">入力内容の確認</span></button>

    </form>

  </div>
</div>

@endsection