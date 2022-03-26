@extends('layout2')

<!-- バリデーション作る -->

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1" />
<meta name="format-detection" content="telephone=no">
<title>新たな価値を創造したプレミアムリノベーションマンション｜株式会社ラ・アトレ</title>

@section('content')
<?php
  $prefectures = array('北海道','青森県','岩手県','宮城県','秋田県','山形県','福島県','茨城県','栃木県','群馬県','埼玉県','千葉県','東京都','神奈川県','新潟県','富山県','石川県','福井県','山梨県','長野県','岐阜県','静岡県','愛知県','三重県','滋賀県','京都府','大阪府','兵庫県','奈良県','和歌山県','鳥取県','島根県','岡山県','広島県','山口県','徳島県','香川県','愛媛県','高知県','福岡県','佐賀県','長崎県','熊本県','大分県','宮崎県','鹿児島県','沖縄県');
?>

<body>
    <div class="container" style="padding-top: 100px;">
        <h1 class="p-title">お住まいのアンケート</h1>
        <p>画像で対応</p>
        <img class="w-100" src="{{ asset('/images/access_info.png') }}" alt="アクセス情報">
        <p class="text-center mt-5 mb-5">この度、目黒区・渋谷区・港区・品川区を中心とするエリアで、LAホールディングスグループの<br>
            株式会社ラ・アトレが分譲マンションの計画を検討しています。<br>
            そこで、、今後の商品・販売計画の参考に資するべく当アンケートを企画させていただきました。<br>
            つきましては、目黒区三田・渋谷区恵比寿・港区白金台・品川区上大崎にお住いの皆様の<br>
            様々なご意見をお聞かせいただければ幸いです。
        </p>
        <p>画像で対応</p>
        <img class="w-100" src="{{ asset('/images/access_info.png') }}" alt="アクセス情報">
        
        <p>下記のフォームに必要な項目を入力のうえ、「送信」ボタンを押してください。</p>
        <p><span class="badge badge-danger">必須</span>は必須項目です</p>
        
        <div class="main-content center-block">
            <form class="mailformpro" method="POST" action="/questionnaire_mail">
                <table class="gold_table mb-3 animation mb-5">
                    <tbody>
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <td><label for="name"><span class="badge badge-danger">必須</span>お名前</label></td>
                            <td></td>
                            <td>
                                <input type="text" name="姓" data-kana="セイ" placeholder="姓" required>
                                <input type="text" name="名" data-kana="メイ" placeholder="名" required>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="name"><span class="badge badge-danger">必須</span>フリガナ</label></td>
                            <td></td>
                            <td>
                                <input type="text" name="セイ" data-charcheck="kana" placeholder="セイ" required>
                                <input type="text" name="メイ" data-charcheck="kana" placeholder="メイ" required>
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
                            <td><label for="name"><span class="badge badge-danger">必須</span>ご家族人数</label></td>
                            <td></td>
                            <td>
                                <div><input type="text" name="ご家族人数" required>人</div>
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
                            <td><label for="name"><span class="badge badge-danger">必須</span>現在のお住まいの年数</label></td>
                            <td></td>
                            <td>
                                <div><input type="text" name="現在のお住まいの年数" required>年</div>
                                <p>※半角数字で入力してください</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2"><label for="name"><span class="badge badge-danger">必須</span>現在おしまいの住居形態<br>
                            ※該当するものを1つだけ選択してください。</label></td>
                            <td>
                                <div><input type="radio">分譲マンション</div>
                                <div><input type="radio">一戸建持家</div>
                                <div><input type="radio">賃貸マンション</div>
                                <div><input type="radio">社宅・官舎</div>
                                <div><input type="radio">その他<input type="text"></div>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="name"><span class="badge badge-danger">必須</span>電話番号</label></td>
                            <td></td>
                            <td>
                                <input type="tel" data-type="tel" name="電話番号" placeholder="(例)03-0000-0000">
                                <p>※半角数字で入力してください</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div><label for="name"><span class="badge badge-danger">必須</span>メールアドレス</label></div>
                            </td>
                            <td></td>
                            <td>
                                <div><input type="text"></div>
                                <p>※確認のためもう一度ご入力ください</p>
                                <div><input type="text"></div>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="name"><span class="badge badge-danger">必須</span>勤務先名</label></td>
                            <td></td>
                            <td>
                                <div><input type="text" name="勤務先名" required></div>
                            </td>
                        </tr>
                        <tr>
                            <th style="width: 22%;"><label for="name"><span class="badge badge-danger">必須</span>勤務先ご住所</label></th>
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
                    </tbody>
                </table>
                        
                <p class="text-center mt-5 mb-5">お住まいついてのアンケート</p>

                <div>
                    <p>※アンケート項目すべてにご協力いただけた方に、もれなくAmazonギフトカードを進呈いたします。</p>
                    <p>※アンケートはすべて必須項目になります。</p>
                    <div class="mt-5">
                        <p>1.仮に今後お住まいを購入するとした場合、どのような住居形態を希望しますか。<br>
                        (1つだけ回答)</p>
                        <div><input type="checkbox">一戸建てにこだわる</div>
                        <div><input type="checkbox">マンションにこだわる</div>
                        <div><input type="checkbox">一戸建てもマンションも同様に検討する</div>
                        <div><input type="checkbox">新築</div>
                    </div>

                    <div class="mt-5">
                        <p>2.あなたがお住まいに求める条件をお聞かせください。(それぞれ3つ回答)</p>
                        <p>【駅名】</p>
                        <div>
                            <input type="checkbox">恵比寿
                            <input type="checkbox">目黒
                            <input type="checkbox">白金台
                            <input type="checkbox">白金高輪
                            <input type="checkbox">麻布十番
                            <input type="checkbox">広尾<br>
                            <input type="checkbox">中目黒
                            <input type="checkbox">代官山
                            <input type="checkbox">品川
                            <input type="checkbox">三田
                            <input type="checkbox">その他<input type="text">
                        </div>
                        <p>【立地】</p>
                        <div>
                            <input type="checkbox">駅徒歩分数(
                            <input type="checkbox">～5分
                            <input type="checkbox">～7分
                            <input type="checkbox">～10分
                            <input type="checkbox">～12分
                            <input type="checkbox">～15分)<br>
                            <input type="checkbox">通勤・通学に便利
                            <input type="checkbox">落ち着いた環境
                            <input type="checkbox">緑が多い<br>
                            <input type="checkbox">スーパーや病院など生活利便設備が徒歩圏に揃うこと
                            <input type="checkbox">その他<input type="text">
                        </div>
                        <p>【建物】</p>
                        <div>
                            <input type="checkbox">価格
                            <input type="checkbox">広さ
                            <input type="checkbox">間取り
                            <input type="checkbox">眺望
                            <input type="checkbox">駐車場有無
                            <input type="checkbox">角住戸
                            <input type="checkbox">内廊下
                            <input type="checkbox">低層住宅<br>
                            <input type="checkbox">高層住宅
                            <input type="checkbox">収納の多さ
                            <input type="checkbox">設備の充実
                            <input type="checkbox">新築
                            <input type="checkbox">その他<input type="text">
                        </div>
                    </div>

                    <div class="mt-5">3.仮に今後、マンション購入を検討する場合に希望される間取りと広さをお聞かせください。<br>
                        (それぞれ1つ回答)</p>
                        <p>【ご希望の間取り】</p>
                        <div>
                            <input type="checkbox">1LDK
                            <input type="checkbox">2LDK
                            <input type="checkbox">3LDK
                            <input type="checkbox">その他<input type="text">
                        </div>
                        <p>【ご希望の広さ】</p>
                        <div>
                            <input type="checkbox">～50㎡
                            <input type="checkbox">50㎡～
                            <input type="checkbox">60㎡～
                            <input type="checkbox">70㎡～
                            <input type="checkbox">80㎡～
                            <input type="checkbox">90㎡～
                        </div>
                        <p>【建物】</p>
                        <div>
                            <input type="checkbox">価格
                            <input type="checkbox">広さ
                            <input type="checkbox">間取り
                            <input type="checkbox">眺望
                            <input type="checkbox">駐車場有無
                            <input type="checkbox">角住戸
                            <input type="checkbox">内廊下
                            <input type="checkbox">低層住宅<br>
                            <input type="checkbox">高層住宅
                            <input type="checkbox">収納の多さ
                            <input type="checkbox">設備の充実
                            <input type="checkbox">新築
                            <input type="checkbox">その他<input type="text">
                        </div>
                    </div>

                    <div class="mt-5">4.新築分譲マンション・分譲リノベーションマンションを購入するとした場合についてお聞かせください。<br>
                        (それぞれ1つ回答)</p>
                        <div>
                            <input type="checkbox">新築分譲マンションのみ
                            <input type="checkbox">分譲リノベーションマンションのみ<br>
                            <input type="checkbox">どちらも検討する
                            <input type="checkbox">購入予定はない
                        </div>
                    </div>

                    <div class="mt-5">5.仮に今後、新たに住宅を検討するとした場合の購入エリアについてお聞かせください。<br>
                        (複数回答可)</p>
                        <p>【渋谷区】</p>
                        <div>
                            <input type="checkbox">恵比寿1丁目
                            <input type="checkbox">恵比寿2丁目
                            <input type="checkbox">恵比寿3丁目
                            <input type="checkbox">恵比寿4丁目<br>
                            <input type="checkbox">恵比寿南1丁目
                            <input type="checkbox">恵比寿南2丁目
                            <input type="checkbox">恵比寿南3丁目
                        </div>
                        <p>【目黒区】</p>
                        <div>
                            <input type="checkbox">三田1丁目
                            <input type="checkbox">三田2丁目
                            <input type="checkbox">目黒1丁目
                            <input type="checkbox">目黒2丁目
                        </div>
                        <p>【港区】</p>
                        <div>
                            <input type="checkbox">白金台2丁目
                            <input type="checkbox">白金台3丁目
                            <input type="checkbox">白金台4丁目
                            <input type="checkbox">白金台5丁目<br>
                            <input type="checkbox">白金1丁目
                            <input type="checkbox">白金2丁目
                            <input type="checkbox">白金3丁目
                            <input type="checkbox">白金4丁目
                            <input type="checkbox">白金5丁目
                            <input type="checkbox">白金6丁目
                        </div>
                        <p>【品川区】</p>
                        <div>
                            <input type="checkbox">上大崎1丁目
                            <input type="checkbox">上大崎2丁目
                            <input type="checkbox">その他<input type="text">
                        </div>
                    </div>

                    <div class="mt-5">6.仮に上記エリアで新規分譲マンションまたは分譲リノベーションマンションを<br>
                        検討する場合、どの住戸を検討しますか。</p>
                        <div>
                            <input type="checkbox">1LDK 55㎡前後 0,000万円～
                            <input type="checkbox">1LDK 60㎡前後 0,000万円～<br>
                            <input type="checkbox">2LDK 80㎡前後 00,000万円～
                            <input type="checkbox">2LDK 90㎡前後 00,000万円～<br>
                            <input type="checkbox">その他<input type="text">
                        </div>
                    </div>

                    <div class="mt-5">7.世帯主様の職業は何でしょうか？</p>
                        <div>
                            <input type="text">
                        </div>
                    </div>








                </div>

                




















                    <table>

                    

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
                    </table>
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            @csrf
                <div class="mfp_phase" summary="個人情報">
                    <div class="mailfield">
                        <dl class="mailform">



                            <dt class="row">
                                <p class="col"><span class="badge badge-danger">必須</span>性別</p>
                                <div class="col">
                                    <p><input type="radio" name="ご希望の広さ" value="100m2未満" /> 男性</p>
                                    <p><input type="radio" name="ご希望の広さ" value="～150m2" /> 女性</p>
                                </div>
                            </dt>

                            <dt class="row">
                                <p class="col"><span class="badge badge-danger">必須</span>ご住所</p>
                                <div class="col">
                                    <p>郵便番号<span class="badge badge-danger">必須</span><input type="number" name="郵便番号1" size="4" maxlength="3" required> － <input type="number" name="郵便番号2" size="5" maxlength="4" onKeyUp="AjaxZip3.zip2addr('郵便番号1','郵便番号2','都道府県','市区町村');" required="required"></p>
                                    <p class="small">※半角数字で入力して下さい。</p>
                                    <p>都道府県<input type="text" name="都道府県" required="required"></p>
                                    





                                </div>
                            </dt>




                            <dt class="row">必 郵便番号</dt>
                            <dd>
                            
                            <p>※郵便番号を入力いただくと自動的に住所が入力されます。</p>
                            </dd>
                        
                            <dt class="row">必 住所</dt>
                            <dd>
                                <ol>
                                    <li>
                                        都道府県
                                        <input type="text" name="都道府県" required="required">
                                    </li>
                                    <li>
                                        <span>市区町村　  <input type="text" name="市区町村" required="required">
                                    </li>
                                    <li>
                                        <span>丁目番地　  <input type="text" name="丁目番地" required="required"/>
                                    </li>
                                    <li>
                                        <span>建物名など  <input type="text" name="建物名など"/>
                                    </li>
                                </ol>
                            </dd>
                            <dt class="row">電話番号</dt>
                            <dd>
                                <input type="tel" data-type="tel" name="電話番号"/>
                            </dd>                           
                            <dt class="row">必 メール<br>
                                アドレス
                            </dt>




                            <dt class="row">ご家族数</dt>
                            <dd><input type="text" name="ご家族数" size="5" /> 人</dd>
                    








                            <dd>
                                <input type="email" data-type="email" data-parent="mailfield" name="email" id="email" required/>
                                <p>※ 確認のためもう一度ご入力ください</p>
                                <input type="email" data-type="email" data-parent="mailfield" name="confirm_email" id="confirm_email" required/>
                            </dd>

                            <div>
                                <input type="checkbox">
                                <label for="tab-one">アンケートにご協力お願いいたします。</label>

                                <div>
                                    <p>■ご希望の物件についてお聞かせください。</p>    
                                    <dt class="row">（複数回答可）</dt>
                                    <dd>
                                        <ul>
                                            <li><label><input type="checkbox" name="ご希望の物件" value="神宮ハイツ 504号室" /> 神宮ハイツ 504号室</label></li>
                                            <li><label><input type="checkbox" name="ご希望の物件" value="クリスタルコート鳥居坂 403号室" /> クリスタルコート鳥居坂 403号室</label></li>
                                            <li><label><input type="checkbox" name="ご希望の物件" value="パークマンション白金台サンク 501号室" /> パークマンション白金台サンク 501号室</label></li>
                                            <li><label><input type="checkbox" name="ご希望の物件" value="赤坂アーバンライフ 305号室" /> 赤坂アーバンライフ 305号室</label></li>
                                            <li><label><input type="checkbox" name="ご希望の物件" value="ハイ・トリオ赤坂八丁目 106号室" /> ハイ・トリオ赤坂八丁目 106号室</label></li>
                                            <li><label><input type="checkbox" name="ご希望の物件" value="マノー乃木坂 803号室" /> マノー乃木坂 803号室</label></li>
                                            <li><label><input type="checkbox" name="ご希望の物件" value="シャトー東洋南青山 202号室" /> シャトー東洋南青山 202号室</label></li>
                                            <li><label><input type="checkbox" name="ご希望の物件" value="シャトー東洋南青山 414号室" /> シャトー東洋南青山 414号室</label></li>		
                                        </ul>
                                    </dd>

                                    <p>■ご希望の間取りと広さとご予算についてお聞かせください。</p>    
                                    <dt class="row">広さについて</dt>
                                    <dd>
                                        <ul>
                                            <li><label><input type="radio" name="ご希望の広さ" value="100m2未満" /> 100m<sup>2</sup>未満</label></li>
                                            <li><label><input type="radio" name="ご希望の広さ" value="～150m2" /> ～150m<sup>2</sup></label></li>
                                            <li><label><input type="radio" name="ご希望の広さ" value="～200m2" /> ～200m<sup>2</sup></label></li>
                                            <li><label><input type="radio" name="ご希望の広さ" value="200m2以上" /> 200m<sup>2</sup>以上</label></li>
                                        </ul>
                                    </dd>
                                                
                                    <dt class="row">ご予算について</dt>
                                    <dd>
                                        <ul>
                                            <li><label><input type="radio" name="ご予算" value="1億円未満" /> 1億円未満</label></li>
                                            <li><label><input type="radio" name="ご予算" value="～1億5千万円" /> ～1億5千万円</label></li>
                                            <li><label><input type="radio" name="ご予算" value="～2億円" /> ～2億円</label></li>
                                            <li><label><input type="radio" name="ご予算" value="～2億5千万円" /> ～2億5千万円</label></li>
                                            <li><label><input type="radio" name="ご予算" value="～3億円" /> ～3億円</label></li>
                                            <li><label><input type="radio" name="ご予算" value="3億円以上" /> 3億円以上</label></li>
                                        </ul>
                                    </dd>

                                    <dt class="row">間取りについて</dt>
                                    <dd>
                                        <ul>
                                            <li><label><input type="radio" name="間取りについて" value="2LDK" /> 2LDK</label></li>
                                            <li><label><input type="radio" name="間取りについて" value="3LDK" /> 3LDK</label></li>
                                            <li><label><input type="radio" name="間取りについて" value="4LDK" /> 4LDK</label></li>
                                            <li><label><input type="radio" name="間取りについて" value="それ以上" />それ以上</label></li>
                                        </ul>
                                    </dd>

                                    <p>■現地モデルルームで実際のお部屋をご覧になれますがご参加の希望をお聞かせください。</p>    
                                    <dt class="row"></dt>
                                    <dd>
                                        <ul>
                                            <li><label><input type="radio" name="現地案内会予定" value="内覧したい" /> 内覧したい</label></li>
                                            <li><label><input type="radio" name="現地案内会予定" value="どちらか迷っている" /> どちらか迷っている</label></li>
                                            <li><label><input type="radio" name="現地案内会予定" value="資料を見てから参加したい" /> 資料を見てから内覧したい</label></li>
                                        </ul>
                                    </dd>

                                    <p>■本物件を何で知りましたか？</p>    
                                    <dt class="row">（複数回答可）</dt>
                                    <dd>
                                        <ul>
                                            <p>新聞折込</p>
                                            <li><label><input type="checkbox" name="本物件を何で知りましたか？" value="朝日新聞" />朝日新聞</label></li>
                                            <li><label><input type="checkbox" name="本物件を何で知りましたか？" value="読売新聞" />読売新聞</label></li>
                                            <li><label><input type="checkbox" name="本物件を何で知りましたか？" value="日経新聞" />日経新聞</label></li>
                                            <li><label><input type="checkbox" name="本物件を何で知りましたか？" value="産経新聞" />産経新聞</label></li>
                                            <li><label><input type="checkbox" name="本物件を何で知りましたか？" value="東京新聞" />東京新聞</label></li>
                                            <p>ポータルサイト</p>
                                            <li><label><input type="checkbox" name="本物件を何で知りましたか？" value="SUUMO" />SUUMO</label></li>
                                            <li><label><input type="checkbox" name="本物件を何で知りましたか？" value="Yahoo!不動産" />Yahoo!不動産</label></li>
                                            <li><label><input type="checkbox" name="本物件を何で知りましたか？" value="athome" />athome</label></li>
                                            <li><label><input type="checkbox" name="本物件を何で知りましたか？" value="Home’s" />Home’s</label></li>
                                            <p>交通広告</p>
                                            <li><label><input type="checkbox" name="本物件を何で知りましたか？" value="駅貼ポスター" />駅貼ポスター</label></li>
                                            <li><label><input type="checkbox" name="本物件を何で知りましたか？" value="車内広告" />車内広告</label></li>
                                            <p>他媒体</p>
                                            <li><label><input type="checkbox" name="本物件を何で知りましたか？" value="現地看板" />現地看板</label></li>
                                            <li><label><input type="checkbox" name="本物件を何で知りましたか？" value="ポスティングチラシ" />ポスティングチラシ</label></li>
                                            <li><label><input type="checkbox" name="本物件を何で知りましたか？" value="その他" />その他（ <input class="nyuryoku02" type="text" name="本物件を何で知りましたか？-その他" id="route_area" /> ）</label></li>
                                        </ul>
                                    </dd>
                                </div>
                            </div>

                            <dt class="row">必 個人情報保護方針の確認 </dt>
                            <dd >個人情報保護方針の確認<br>
                                <label><input type="checkbox"  required="required" data-exc="1" name="個人情報保護方針" value="確認済み" /> 
                                <a href="http://www.lattrait.co.jp/privacy.html" target="_blank">個人情報保護方針</a>を確認したらチェックを入れてください。</label>
                            </dd>
                        
                            <div> 
                                <script type="text/javascript" src="//seal.globalsign.com/SiteSeal/gmogs_image_115-57_ja.js" defer></script>
                            </div>
                            
                            <div>
                                <button type="reset">リセット</button>&nbsp;&nbsp;<button type="submit" id="q_post" data-disabled="入力内容にエラーがあります">送信する</button>
                            </div>
                        </dl>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

@endsection