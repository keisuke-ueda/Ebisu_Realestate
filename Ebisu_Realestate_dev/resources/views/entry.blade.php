@extends('layout2')

@section('content')

<div class="container-fluid" style="padding-top: 100px;">
  <div class="row">
    <div class="col-4"></div>
    <p class="col-4 text-center h1">PROPERTY ENTRY</p>
    <div class="col-4"></div>
  </div>
  <p class="text-center h4 mb-5">物件エントリー</p>
  <p class="text-center mt-5">以下のフォームに必要な項目を入力のうえ「送信」ボタンを押してください。</p>
  <p class="text-center"><span class="badge badge-danger">必須</span>は必須項目です。</p>

  <div class="row">
    <div class="col-3"></div>
    <div class="col-2">
      <label for="name"><span class="badge badge-danger">必須</span>お名前</label>
    </div>
    <div class="col-4">
      <input type="text">
      <input type="text">
    </div>
    <div class="col-3">
    </div>
  </div>

  <div class="row">
    <div class="col-3"></div>
    <div class="col-2">
      <label for="name"><span class="badge badge-danger">必須</span>フリガナ</label>
    </div>
    <div class="col-4">
      <input type="text">
      <input type="text">
    </div>
    <div class="col-3">
    </div>
  </div>

  <div class="row">
    <div class="col-3"></div>
    <div class="col-2">
      <label for="name"><span class="badge badge-danger">必須</span>性別</label>
    </div>
    <div class="col-4">
      <div><input type="radio">男性</div>
      <div><input type="radio">女性</div>
    </div>
    <div class="col-3">
    </div>
  </div>

  <div class="row">
    <div class="col-3"></div>
    <div class="col-2">
      <div><label for="name"><span class="badge badge-danger">必須</span>生年月日</label></div>
      <div><label for="name"><span class="badge badge-danger">必須</span>メールアドレス</label></div>
    </div>
    <div class="col-4">
      <div><input type="text">年<input type="text">月<input type="text">日</div>
      <p>*半角英数字で入力してください</p>
      <div><input type="text"></div>
      <p>*確認のためもう一度ご入力ください</p>
      <div><input type="text"></div>
    </div>
    <div class="col-3">
    </div>
  </div>

  <div class="row">
    <div class="col-3"></div>
    <div class="col-1">
      <div><label for="name"><span class="badge badge-danger">必須</span>ご住所</label></div>
    </div>
    <div class="col-5">
      <div>
        <label for="name">郵便番号<span class="badge badge-danger">必須</span></label>
        <input type="text">-<input type="text">
        <p>*半角数字で入力してください</p>
      </div>
      <div>
        <label for="name">都道府県<span class="badge badge-danger">必須</span></label>
        <input type="text">
      </div>
      <div>
        <label for="name">市区町村<span class="badge badge-danger">必須</span></label>
        <input type="text">
      </div>
      <div>
        <label for="name">丁目番地<span class="badge badge-danger">必須</span></label>
        <input type="text">
      </div>
      <div>
        <label for="name">建物名</label>
        <input type="text">
      </div>
    </div>
    <div class="col-3">
    </div>
  </div>

  <div class="row">
    <div class="col-3"></div>
    <div class="col-2">
      <label for="name"><span class="badge badge-danger">必須</span>電話番号</label>
    </div>
    <div class="col-4">
      <input type="text">
      <p>*半角数字で入力してください</p>
    </div>
    <div class="col-3">
    </div>
  </div>

  <div class="row">
    <div class="col-3"></div>
    <div class="col-2">
      <label for="name"><span class="badge badge-danger">必須</span>ご職業</label>
    </div>
    <div class="col-4">
      <input type="text">
    </div>
    <div class="col-3">
    </div>
  </div>

  <div class="row">
    <div class="col-3"></div>
    <div class="col-2">
      <label for="name">ご年収</label>
    </div>
    <div class="col-4">
      <input type="text">
    </div>
    <div class="col-3">
    </div>
  </div>

  <div class="row">
    <div class="col-3"></div>
    <div class="col-2">
      <label for="name">自己資金</label>
    </div>
    <div class="col-4">
      <input type="text">
    </div>
    <div class="col-3">
    </div>
  </div>

  <div class="row">
    <div class="col-3"></div>
    <div class="col-2">
      <label for="name">ご購入の目的</label>
    </div>
    <div class="col-4">
      <input type="text">
    </div>
    <div class="col-3">
    </div>
  </div>

  <div class="row">
    <div class="col-3"></div>
    <div class="col-2">
      <label for="name">現在のお住まい(住居形態)</label>
    </div>
    <div class="col-4">
      <input type="text">
    </div>
    <div class="col-3">
    </div>
  </div>

  <div class="row">
    <div class="col-3"></div>
    <div class="col-2">
      <label for="name">ご家族人数</label>
    </div>
    <div class="col-4">
      <input type="text">人
    </div>
    <div class="col-3">
    </div>
  </div>

  <div class="row">
    <div class="col-3"></div>
    <div class="col-2">
      <label for="name">ご希望条件(面積)</label>
    </div>
    <div class="col-4">
      <input type="text">
    </div>
    <div class="col-3">
    </div>
  </div>

  <div class="row">
    <div class="col-3"></div>
    <div class="col-2">
      <label for="name">ご希望条件(間取り)</label>
      <p>*複数選択可</p>
    </div>
    <div class="col-4">
      <div><input type="checkbox">1LDK</div>
      <div><input type="checkbox">2LDK</div>
      <div><input type="checkbox">3LDK</div>
    </div>
    <div class="col-3">
    </div>
  </div>

  <div class="row">
    <div class="col-3"></div>
    <div class="col-2">
      <label for="name"><span class="badge badge-danger">必須</span>ご希望条件(価格帯)</label>
    </div>
    <div class="col-4">
      <input type="text">
    </div>
    <div class="col-3">
    </div>
  </div>

  <div class="row">
    <div class="col-3"></div>
    <div class="col-2">
      <label for="name"><span class="badge badge-danger">必須</span>このHPをどこでお知りになりましたか？</label>
    </div>
    <div class="col-4">
      <div><input type="radio">ラ・アトレホームページ</div>
      <div><input type="radio">ダイレクトメール</div>
      <div><input type="radio">ご紹介</div>
      <div><input type="radio">その他</div>
    </div>
    <div class="col-3">
    </div>
  </div>
  
  <div class="row">
    <div class="col-3"></div>
    <div class="col-6">
      <label for="name"><span class="badge badge-danger">必須</span></label>
      <input type="checkbox">個人情報の取り扱いについて同意の方はチェックを入れてください。
      <p>資料請求を行う際には、「個人情報のお取り扱いについて」(株式会社LAホールディングス)をお読みの上チェックを入れて下記の「入力内容の確認」ボタンを押してください。</p>
    </div>
    <div class="col-3"></div>
  </div>

</div>

@endsection
