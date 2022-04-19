@extends('layout2')

<link rel="stylesheet" href="{{ asset('/css/entry.css') }}">

@section('content')
<?php
  $prefectures = array('北海道','青森県','岩手県','宮城県','秋田県','山形県','福島県','茨城県','栃木県','群馬県','埼玉県','千葉県','東京都','神奈川県','新潟県','富山県','石川県','福井県','山梨県','長野県','岐阜県','静岡県','愛知県','三重県','滋賀県','京都府','大阪府','兵庫県','奈良県','和歌山県','鳥取県','島根県','岡山県','広島県','山口県','徳島県','香川県','愛媛県','高知県','福岡県','佐賀県','長崎県','熊本県','大分県','宮崎県','鹿児島県','沖縄県');
?>

<div class="" id="entry" style="">
  <h1 class="p-title gold-title-3 center-block text-center m-none ft4 s24">PROPERTY ENTRY</h1>
  <p class="p-title center-block text-center mt-10px ft2 s14" style="margin-bottom:25px;">物件エントリー</p>
  <!-- <div class="main-content" style="margin-right: 90px; margin-left: 90px"> -->
  <div class="entry-main-content" style="">
    <div class="ft2 s16">
      <p class="text-center" style="margin-bottom: 10px;">以下のフォームに必要な項目を入力のうえ<br class="pc_hid">「送信」ボタンを押してください。</p>
      <p class="text-center" style="margin-bottom: 20px;"><span class="badge badge-danger">必須</span>は必須項目です。</p>
    </div>
    <form class="mailformpro" style="padding-left:10px; padding-right:10px;" metdod="POST" action="/questionnaire_mail">
      @csrf
      <table class="gold-table-entry table-entry animation ft2 s14">
        <tbody>
          <tr class="top">
            <td class="column1 entry-column1" style=""><label for="name"><span class="badge badge-danger s11">必須</span>お名前</label></td>
            <td class="column2 h-40px" style="width: 120px;"></td>
            <td class="column3 entry-column3" style="width: auto;">
              中野 洋
            </td>
          </tr>
          <tr>
            <td><label for="name"><span class="badge badge-danger s11">必須</span>フリガナ</label></td>
            <td></td>
            <td>
              ナカノ ヨウ
            </td>
          </tr>
          <tr>
            <td><label for="name"><span class="badge badge-danger">必須</span>性別</label></td>
            <td></td>
            <td style="padding-top: 10px; padding-bottom: 10px;">
              弾性
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="mb-3"><label for="name"><span class="badge badge-danger s11">必須</span>生年月日</label></div>
              <div><label for="name"><span class="badge badge-danger s11">必須</span>メールアドレス</label></div>
            </td>
            <td style="padding-top: 5px; padding-bottom: 5px;">
              <!-- <div><input style="width: 20%;" type="text"><span class="s10"> 年 </span><input style="width: 20%;" type="text"><span class="s10"> 月 </span><input style="width: 20%;"
                  type="text"><span class="s10"> 日 </span></div>
              <p class="mt-2 mb-0 s12">※半角英数で<br class="pc_hid">入力してください</p>
              <div><input class="" type="email" name="email" data-error_placement="#email"></div>
              <div class="validation_message" id="email"></div>
              <p class="m-0 s12">※確認のためもう一度ご入力ください</p>
              <div><input class="" type="text" name="confirm_email" data-error_placement="#confirm_email">
              </div>
              <div class="validation_message" id="confirm_email"></div> -->
              <div class="mb-3">1995年6月21日</div>
              <div>y.nakano.carecon@gmail.com</div>
              <!-- 1995年6月21日
              y.nakano.carecon@gmail.com -->
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
                  <td style="width: 120px; vertical-align: top;">
                    <label for="name" class="s14">郵便番号<span class="badge badge-danger s11">必須</span></label>
                  </td>
                  <td>
                    106-0047
                  </td>
                </tr>
                <tr>
                  <td>
                    <label for="name" class="s14">都道府県<span class="badge badge-danger s11">必須</span></label>
                  </td>
                  <td class="py-1">
                    東京都
                  </td>
                </tr>
                <tr>
                  <td>
                    <label for="name" class="s14">市区町村<span class="badge badge-danger s11">必須</span></label>
                  </td>
                  <td class="py-1">
                    港区南麻布
                  </td>
                </tr>
                <tr>
                  <td>
                    <label for="name" class="s14">丁目番地<span class="badge badge-danger s11">必須</span></label>
                  </td>
                  <td class="py-1">
                    3-4-8
                  </td>
                </tr>
                <tr>
                  <td>
                    <label for="name" class="s14">建物名</label>
                  </td>
                  <td class="py-1">
                    Applouder
                  </td>
                </tr>
              </table>
            </td>
          </tr>
          <tr>
            <td><label for="name"><span class="badge badge-danger s11">必須</span>電話番号</label></td>
            <td></td>
            <td>
              08094310360
            </td>
          </tr>
          <tr>
            <td><label for="name"><span class="badge badge-danger s11">必須</span>ご職業</label></td>
            <td></td>
            <td>
              無職
            </td>
          </tr>
          <tr>
            <td colspan="2"><label for="name"><span class="badge"></span>　　　ご年収</label></td>
            <td>
              800万円未満
            </td>
          </tr>
          <tr>
            <td colspan="2"><label for="name"><span class="badge"></span>　　　自己資金(半角)</label></td>
            <td>
              1億円以上
            </td>
          </tr>
          <tr>
            <td colspan="2"><label for="name"><span class="badge"></span>　　　ご購入の目的</label></td>
            <td>
              セカンドハウス
            </td>
          </tr>
          <tr>
            <td colspan="2"><label for="name"><span class="badge"></span>　　　現在のお住まい(住居形態)</label></td>
            <td>
              実家
            </td>
          </tr>
          <tr>
            <td colspan="2"><label for="name"><span class="badge"></span>　　　ご家族人数</label></td>
            <td>
              3人
            </td>
          </tr>
          <tr>
            <td colspan="2"><label for="name"><span class="badge"></span>　　　ご希望条件(面積)</label></td>
            <td>
              90
            </td>
          </tr>
          <tr>
            <td colspan="2"><label for="name"><span class="badge"></span>　　　ご希望条件(間取り)<br>　　　※複数選択可</label></td>
            <td style="padding-top: 10px; padding-bottom: 10px;">
              1LDK
            </td>
          </tr>
          <tr>
            <td colspan="2"><label for="name"><span class="badge badge-danger">必須</span>ご希望条件(価格帯)</label></td>
            <td style="padding-top: 10px; padding-bottom: 10px;">
              ~2億円
            </td>
          </tr>
          <tr>
            <td colspan="2"><label for="name"><span class="badge badge-danger">必須</span>このHPをどこでお知りに<br>　　　 なりましたか？</label></td>
            <td style="padding-top: 10px; padding-bottom: 10px;">
              その他
            </td>
          </tr>
        </tbody>
      </table>

      <button class="mh-parts btn btn-dark mx-auto d-block mt-30px mb-40px"><span class="p-3 s18">送信する</span></button>

    </form>

  </div>
</div>

@endsection