@extends('layout2')

@section('content')
<?php
  $prefectures = array('北海道','青森県','岩手県','宮城県','秋田県','山形県','福島県','茨城県','栃木県','群馬県','埼玉県','千葉県','東京都','神奈川県','新潟県','富山県','石川県','福井県','山梨県','長野県','岐阜県','静岡県','愛知県','三重県','滋賀県','京都府','大阪府','兵庫県','奈良県','和歌山県','鳥取県','島根県','岡山県','広島県','山口県','徳島県','香川県','愛媛県','高知県','福岡県','佐賀県','長崎県','熊本県','大分県','宮崎県','鹿児島県','沖縄県');
?>

<div class="container" style="padding: 100px 150px 0;">
  <h1 class="p-title gold-title-2 center-block text-center ft4">PROPERTY ENTRY</h1>
  <p class="p-title center-block text-center h3 mb-5 ft2">物件エントリー</p>
  <div class="main-content row px-5">
    <div class="ft2">
      <p class="text-center">以下のフォームに必要な項目を入力のうえ「送信」ボタンを押してください。</p>
      <p class="text-center"><span class="badge badge-danger">必須</span>は必須項目です。</p>
    </div>
    <form class="mailformpro" method="POST" action="/questionnaire_mail">
      <table class="gold_table mb-3 animation ft2">
        <tbody>
          <tr>
            <td height="0" class="column1"></td>
            <td height="0" class="column2"></td>
            <td height="0" class="column3"></td>
          </tr>
          <tr>
            <td><label for="name"><span class="badge badge-danger">必須</span>お名前</label></td>
            <td></td>
            <td>
              <input type="text" name="sei" data-kana="セイ" placeholder="姓" required data-error_placement="#sei">
              <input type="text" name="mei" data-kana="メイ" placeholder="名" required data-error_placement="#mei" class="ms-2">
              <div class="validation-message" id="sei"></div>
              <div class="validation-message" id="mei"></div>
            </td>
          </tr>
          <tr>
            <td><label for="name"><span class="badge badge-danger">必須</span>フリガナ</label></td>
            <td></td>
            <td>
              <input type="text" name="sei_kana" data-charcheck="kana" placeholder="セイ" required
                data-error_placement="#sei-kana">
              <input type="text" name="mei_kana" data-charcheck="kana" placeholder="メイ" required
                data-error_placement="#mei-kana" class="ms-2">
              <div class="validation-message" id="sei-kana"></div>
              <div class="validation-message" id="mei-kana"></div>
            </td>
          </tr>
          <tr>
            <td><label for="name"><span class="badge badge-danger">必須</span>性別</label></td>
            <td></td>
            <td>
              <div><input type="radio" name="gender" value="male" data-error_placement="#gender">男性
              </div>
              <div><input type="radio" name="gender" value="female" data-error_placement="#gender">女性
              </div>
              <div class="validation-message" id="gender"></div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="mb-5"><label for="name"><span class="badge badge-danger">必須</span>生年月日</label></div>
              <div><label for="name"><span class="badge badge-danger">必須</span>メールアドレス</label></div>
            </td>
            <td></td>
            <td>
              <div><input class="w-25" type="text">年 <input class="w-25 ms-3" type="text">月 <input class="w-25 ms-3" type="text">日</div>
              <p class="mt-2 mb-0">※半角英数で入力してください</p>
              <div><input class="w-100" type="email" name="email" data-error_placement="#email"></div>
              <div class="validation_message" id="email"></div>
              <p class="m-0">※確認のためもう一度ご入力ください</p>
              <div><input class="w-100" type="text" name="confirm_email" data-error_placement="#confirm_email">
              </div>
              <div class="validation_message" id="confirm_email"></div>
            </td>
          </tr>
          <tr>

            <th><label for="name"><span class="badge badge-danger">必須</span>ご住所</label></th>
            <td colspan="2">
              <table class="table_nest" style="width: 100%;">
                <tr rowspan="2">
                  <th valign="top">
                    <label for="name">郵便番号<span class="badge badge-danger">必須</span></label>
                  </th>
                  <td style="width: 83.3%;">
                    <input type="text" name="home_post_code" data-error_placement="#home_post_code">
                    <div class="validation-message" id="home_post_code"></div>
                    <p>※半角数字(ハイフンなし)で入力してください</p>
                  </td>
                </tr>
                <tr>
                  <th>
                    <label for="name">都道府県<span class="badge badge-danger">必須</span></label>
                  </th>
                  <td class="py-1">
                    <select>
                      <option value="">選択</option>
                      @foreach ($prefectures as $prefecture)
                      <option value="{{ $prefecture }}" name="home_prefectures"
                        data-error_placement="#home_prefectures">
                        {{$prefecture}}</option>
                      @endforeach
                      <div class="validation-message" id="home_prefectures"></div>
                    </select>
                  </td>
                </tr>
                <tr>
                  <th>
                    <label for="name">市区町村<span class="badge badge-danger">必須</span></label>
                  </th>
                  <td class="py-1">
                    <input type="text" name="home_municipalities" data-error_placement="#home_manicipalities">
                    <div class="validation-message" id="home_manicipalities"></div>
                  </td>
                </tr>
                <tr>
                  <th>
                    <label for="name">丁目番地<span class="badge badge-danger">必須</span></label>
                  </th>
                  <td class="py-1">
                    <input type="text" name="home_chome_address" data-error_placement="#home_chome_address">
                    <div class="validation-message" id="home_chome_address"></div>
                  </td>
                </tr>
                <tr>
                  <th>
                    <label for="name">建物名</label>
                  </th>
                  <td class="py-1">
                    <input type="text" name="home_building_name">
                  </td>
                </tr>
              </table>
            </td>
          </tr>
          <tr>
            <td><label for="name"><span class="badge badge-danger">必須</span>電話番号</label></td>
            <td></td>
            <td>
              <input type="tel" name="phone_number" data-type="tel" name="電話番号" placeholder="(例)00099998888"
                data-error_placement="#phone_number">
              <p>※半角数字で入力してください</p>
              <div class="validation_message" id="phone_number"></div>
            </td>
          </tr>
          <tr>
            <td><label for="name"><span class="badge badge-danger">必須</span>ご職業</label></td>
            <td></td>
            <td>
              <select>
                <option value="1">選択</option>
                <option value="2">会社員</option>
                <option value="3">会社役員</option>
                <option value="4">経営者</option>
                <option value="5">公務員</option>
                <option value="6">商工自営（個人事業）</option>
                <option value="7">医師</option>
                <option value="8">教職員</option>
                <option value="9">弁護士・会計士</option>
                <option value="10">団体職員</option>
                <option value="11">無職</option>
                <option value="12">その他</option>
              </select>
            </td>
          </tr>
          <tr>
            <td><label for="name"><span class="badge"></span>ご年収</label></td>
            <td></td>
            <td>
              <select>
                <option value="">選択</option>
                <option value="">300万円未満</option>
                <option value="">300万〜400万円</option>
                <option value="">401万〜500万円</option>
                <option value="">501万〜600万円</option>
                <option value="">601万〜700万円</option>
                <option value="">701万〜800万円</option>
                <option value="">801万〜900万円</option>
                <option value="">901万〜1000万円</option>
                <option value="">1000万円以上</option>
              </select>
            </td>
          </tr>
          <tr>
            <td><label for="name"><span class="badge"></span>自己資金(半角)</label></td>
            <td></td>
            <td>
              <select>
                <option value="">選択</option>
                <option value="">500万円未満</option>
                <option value="">501万〜600万円</option>
                <option value="">601万〜700万円</option>
                <option value="">701万〜800万円</option>
                <option value="">801万〜900万円</option>
                <option value="">901万〜1000万円</option>
                <option value="">1000万円以上</option>
              </select>
            </td>
          </tr>
          <tr>
            <td><label for="name"><span class="badge"></span>ご購入の目的</label></td>
            <td></td>
            <td>
              <select>
                <option value="">選択</option>
                <option value="">家賃の無駄</option>
                <option value="">狭い</option>
                <option value="">古い</option>
                <option value="">環境が悪い</option>
                <option value="">不便（通勤・通学・買い物）</option>
                <option value="">転勤のため</option>
                <option value="">結婚・世帯分離</option>
                <option value="">老後のため</option>
                <option value="">セカンドハウス</option>
                <option value="">その他</option>
              </select>
            </td>
          </tr>
          <tr>
            <td><label for="name"><span class="badge"></span>現在のお住まい(住居形態)</label></td>
            <td></td>
            <td>
              <select>
                <option value="">選択</option>
                <option value="">マンション（賃貸）</option>
                <option value="">マンション（分譲賃貸）</option>
                <option value="">マンション（持家）</option>
                <option value="">戸建（持家）</option>
                <option value="">戸建（借家）</option>
                <option value="">社宅・官舎</option>
                <option value="">実家</option>
                <option value="">その他</option>
              </select>
            </td>
          </tr>
          <tr>
            <td><label for="name"><span class="badge"></span>ご家族人数</label></td>
            <td></td>
            <td>
              <div><input type="text" name="family_size" required data-error_placement="#family_size">人
              </div>
              <div class="validation-message" id="family_size"></div>
            </td>
          </tr>
          <tr>
            <td><label for="name"><span class="badge"></span>ご希望条件(面積)※複数選択可</label></td>
            <td></td>
            <td>
              <select>
                <option value="">選択</option>
                <option value="">〜50m&sup2;</option>
                <option value="">〜55m&sup2;</option>
                <option value="">〜60m&sup2;</option>
                <option value="">〜65m&sup2;</option>
                <option value="">〜70m&sup2;</option>
                <option value="">〜75m&sup2;</option>
                <option value="">〜80m&sup2;</option>
                <option value="">〜85m&sup2;</option>
                <option value="">90m&sup2;以上</option>
              </select>
            </td>
          </tr>
          <tr>
            <td><label for="name"><span class="badge"></span>ご希望条件(間取り)</label></td>
            <td></td>
            <td>
              <div><input type="checkbox">1LDK</div>
              <div><input type="checkbox">2LDK</div>
              <div><input type="checkbox">3LDK</div>
            </td>
          </tr>
          <tr>
            <td><label for="name"><span class="badge badge-danger">必須</span>ご希望条件(価格帯)</label></td>
            <td></td>
            <td>
              <select>
                <option value="">選択</option>
                <option value="">〜8,000万円</option>
                <option value="">〜1億円</option>
                <option value="">〜1億2,000万円</option>
                <option value="">〜1億5,000万円</option>
                <option value="">〜1億8,000万円</option>
                <option value="">〜2億円</option>
                <option value="">〜1億円以上</option>
              </select>
            </td>
          </tr>
          <tr>
            <td><label for="name"><span class="badge badge-danger">必須</span>このHPをどこでお知りになりましたか？</label></td>
            <td></td>
            <td>
              <div><input type="radio">ラ・アトレホームページ</div>
              <div><input type="radio">ダイレクトメール</div>
              <div><input type="radio">ご紹介</div>
              <div><input type="radio">その他</div>
            </td>
          </tr>
        </tbody>
      </table>
      <div class="ft2">
        <label for="name"><span class="badge badge-danger">必須</span></label>
        <input type="checkbox">個人情報の取り扱いについて同意の方はチェックを入れてください。
        <p>資料請求を行う際には、「個人情報のお取り扱いについて」(株式会社LAホールディングス)をお読みの上チェックを入れて下記の「入力内容の確認」ボタンを押してください。</p>
      </div>
      <button class="mh-parts btn btn-dark mx-auto d-block my-5"><span class="p-3">入力内容の確認</span></button>
    </form>

  </div>
</div>

@endsection