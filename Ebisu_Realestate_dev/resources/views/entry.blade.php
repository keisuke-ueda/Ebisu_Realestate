@extends('layout2')

@section('content')

<div class="container-fluid" style="padding: 100px 150px 0;">
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
          <th><label for="name"><span class="badge badge-danger">必須</span>お名前</label></th>
          <td></td>
          <td>
            <input type="text">
            <input type="text">
          </td>
        </tr>
        <tr>
          <th><label for="name"><span class="badge badge-danger">必須</span>フリガナ</label></th>
          <td></td>
          <td>
            <input type="text">
            <input type="text">
          </td>
        </tr>
        <tr>
          <th><label for="name"><span class="badge badge-danger">必須</span>性別</label></th>
          <td></td>
          <td>
            <div><input type="radio">男性</div>
            <div><input type="radio">女性</div>
          </td>
        </tr>
        <tr>
          <th>
            <div><label for="name"><span class="badge badge-danger">必須</span>生年月日</label></div>
            <div><label for="name"><span class="badge badge-danger">必須</span>メールアドレス</label></div>
          </th>
          <td></td>
          <td>
            <div><input type="text">年<input type="text">月<input type="text">日</div>
            <p>*半角英数字で入力してください</p>
            <div><input type="text"></div>
            <p>*確認のためもう一度ご入力ください</p>
            <div><input type="text"></div>
          </td>
        </tr>
        <tr>
          <th style="width: 22%;"><label for="name"><span class="badge badge-danger">必須</span>ご住所</label></th>
          <td>
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
          </td>
          <td style="width: 65%;">
            <div>
              <input type="text">-<input type="text">
              <p>*半角数字で入力してください</p>
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
            <div>
              <input type="text">
            </div>
          </td>
        </tr>
        <tr>
          <th><label for="name"><span class="badge badge-danger">必須</span>電話番号</label></th>
          <td></td>
          <td>
            <input type="text">
            <p>*半角数字で入力してください</p>
          </td>
        </tr>
        <tr>
          <th><label for="name"><span class="badge">　　</span>ご年収</label></th>
          <td></td>
          <td><input type="text"></td>
        </tr>
        <tr>
          <th><label for="name"><span class="badge">　　</span>自己資金</label></th>
          <td></td>
          <td><input type="text"></td>
        </tr>
        <tr>
          <th><label for="name"><span class="badge">　　</span>ご購入の目的</label></th>
          <td></td>
          <td><input type="text"></td>
        </tr>
        <tr>
          <th><label for="name"><span class="badge">　　</span>現在のお住まい(住居形態)</label></th>
          <td></td>
          <td><input type="text"></td>
        </tr>
        <tr>
          <th><label for="name"><span class="badge">　　</span>ご家族人数</label></th>
          <td></td>
          <td><input type="text">人</td>
        </tr>
        <tr>
          <th><label for="name"><span class="badge">　　</span>ご希望条件(面積)</label></th>
          <td></td>
          <td><input type="text"></td>
        </tr>
        <tr>
          <th><label for="name"><span class="badge">　　</span>ご希望条件(間取り)</label></th>
          <td></td>
          <td>
            <div><input type="checkbox">1LDK</div>
            <div><input type="checkbox">2LDK</div>
            <div><input type="checkbox">3LDK</div>
          </td>
        </tr>
        <tr>
          <th><label for="name"><span class="badge badge-danger">必須</span>ご希望条件(価格帯)</label></th>
          <td></td>
          <td><input type="text"></td>
        </tr>
        <tr>
          <th><label for="name"><span class="badge badge-danger">必須</span>このHPをどこでお知りになりましたか？</label></th>
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
    <div>
      <label for="name"><span class="badge badge-danger">必須</span></label>
      <input type="checkbox">個人情報の取り扱いについて同意の方はチェックを入れてください。
      <p>資料請求を行う際には、「個人情報のお取り扱いについて」(株式会社LAホールディングス)をお読みの上チェックを入れて下記の「入力内容の確認」ボタンを押してください。</p>
    </div>
  </div>
</div>

@endsection
