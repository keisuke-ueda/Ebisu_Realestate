@extends('layout2')

@section('content')
<?php
  $prefectures = array('北海道','青森県','岩手県','宮城県','秋田県','山形県','福島県','茨城県','栃木県','群馬県','埼玉県','千葉県','東京都','神奈川県','新潟県','富山県','石川県','福井県','山梨県','長野県','岐阜県','静岡県','愛知県','三重県','滋賀県','京都府','大阪府','兵庫県','奈良県','和歌山県','鳥取県','島根県','岡山県','広島県','山口県','徳島県','香川県','愛媛県','高知県','福岡県','佐賀県','長崎県','熊本県','大分県','宮崎県','鹿児島県','沖縄県');
?>

<div class="container" style="padding: 100px 150px 0;">
  <h1 class="p-title gold-title center-block text-center">PROPERTY ENTRY</h1>
  <p class="p-title center-block text-center h3 mb-5">物件エントリー</p>
  <div class="main-content row px-5">
    <div class="">
      <p class="text-center">以下のフォームに必要な項目を入力のうえ「送信」ボタンを押してください。</p>
      <p class="text-center"><span class="badge badge-danger">必須</span>は必須項目です。</p>
    </div>
    <table class="gold_table mb-3 animation">
      <tbody>
        <tr>
          <td></td>
        </tr>
        <tr>
          <td><label for="name"><span class="badge badge-danger">必須</span>お名前</label></td>
          <td></td>
          <td>
            <input type="text">
            <input type="text">
          </td>
        </tr>
        <tr>
          <td><label for="name"><span class="badge badge-danger">必須</span>フリガナ</label></td>
          <td></td>
          <td>
            <input type="text">
            <input type="text">
          </td>
        </tr>
        <tr>
          <td><label for="name"><span class="badge badge-danger">必須</span>性別</label></td>
          <td></td>
          <td>
            <div><input type="radio">男性</div>
            <div><input type="radio">女性</div>
          </td>
        </tr>
        <tr>
          <td>
            <div><label for="name"><span class="badge badge-danger">必須</span>生年月日</label></div>
            <div><label for="name"><span class="badge badge-danger">必須</span>メールアドレス</label></div>
          </td>
          <td></td>
          <td>
            <div><input type="text">年 <input type="text">月 <input type="text">日</div>
            <p>※半角英数字で入力してください</p>
            <div><input type="text"></div>
            <p>※確認のためもう一度ご入力ください</p>
            <div><input type="text"></div>
          </td>
        </tr>
        <tr>
          <th style="width: 22%;"><label for="name"><span class="badge badge-danger">必須</span>ご住所</label></th>
          <td>
            <div class="d-flex flex-column justify-content-between">
              <div>
                <label for="name">郵便番号<span class="badge badge-danger">必須</span></label>
              </div>
              <div>
                <label for="name">都道府県<span class="badge badge-danger">必須</span></label>
              </div>
              <div>
                <label for="name">市区町村<span class="badge badge-danger">必須</span></label>
              </div>
              <div>
                <label for="name">丁目番地<span class="badge badge-danger">必須</span></label>
              </div>
              <div>
                <label for="name">建物名</label>
              </div>
            </div>  
          </td>
          <td style="width: 65%;">
            <div>
              <input type="text"> - <input type="text">
              <p>※半角数字で入力してください</p>
            </div>
            <div>
              <select>
                <option value="">選択</option>
                @foreach ($prefectures as $prefecture)
                <option value="{{ $prefecture }}">{{$prefecture}}</option>
                @endforeach
              </select>
            </div>
            <div>
              <input type="text">
            </div>
            <div>
              <input type="text">
            </div>
            <div>
              <input type="text">
            </div>
          </td>
        </tr>
        <tr>
          <td><label for="name"><span class="badge badge-danger">必須</span>電話番号</label></td>
          <td></td>
          <td>
            <input type="text">
            <p>※半角数字で入力してください</p>
          </td>
        </tr>
        <tr>
          <td><label for="name"><span class="badge badge-danger">必須</span>ご職業</label></td>
          <td></td>
          <td>
            <select>
              <option value="">選択</option>
              <option value="">会社員</option>
              <option value="">会社役員</option>
              <option value="">経営者</option>
              <option value="">公務員</option>
              <option value="">商工自営（個人事業）</option>
              <option value="">医師</option>
              <option value="">教職員</option>
              <option value="">弁護士・会計士</option>
              <option value="">団体職員</option>
              <option value="">無職</option>
              <option value="">その他</option>
            </select>
          </td>
        </tr>
        <tr>
          <td><label for="name"><span class="badge">　　</span>ご年収</label></td>
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
          <td><label for="name"><span class="badge">　　</span>自己資金</label></td>
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
          <td><label for="name"><span class="badge">　　</span>ご購入の目的</label></td>
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
          <td><label for="name"><span class="badge">　　</span>現在のお住まい(住居形態)</label></td>
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
          <td><label for="name"><span class="badge">　　</span>ご家族人数</label></td>
          <td></td>
          <td><input type="text">人</td>
        </tr>
        <tr>
          <td><label for="name"><span class="badge">　　</span>ご希望条件(面積)</label></td>
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
          <td><label for="name"><span class="badge">　　</span>ご希望条件(間取り)</label></td>
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
    <button>入力内容の確認</button>
    <div>
      <label for="name"><span class="badge badge-danger">必須</span></label>
      <input type="checkbox">個人情報の取り扱いについて同意の方はチェックを入れてください。
      <p>資料請求を行う際には、「個人情報のお取り扱いについて」(株式会社LAホールディングス)をお読みの上チェックを入れて下記の「入力内容の確認」ボタンを押してください。</p>
    </div>
  </div>
</div>

@endsection
