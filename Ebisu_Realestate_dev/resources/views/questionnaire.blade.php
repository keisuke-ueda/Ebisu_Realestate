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
        <h1 class="p-title text-center ft4">お住まいのアンケート</h1>
        <img class="center-block" src="{{ asset('/images/お住まいアンケート1.png') }}">
        <p class="text-center mt-5 mb-5 ft2">この度、目黒区・渋谷区・港区・品川区を中心とするエリアで、LAホールディングスグループの<br>
            株式会社ラ・アトレが分譲マンションの計画を検討しています。<br>
            そこで、、今後の商品・販売計画の参考に資するべく当アンケートを企画させていただきました。<br>
            つきましては、目黒区三田・渋谷区恵比寿・港区白金台・品川区上大崎にお住いの皆様の<br>
            様々なご意見をお聞かせいただければ幸いです。
        </p>
        <img class="center-block w-50" src="{{ asset('/images/お住まいのアンケート2.png') }}">
        
        <p class="ft2">下記のフォームに必要な項目を入力のうえ、「送信」ボタンを押してください。</p>
        <p class="ft2"><span class="badge badge-danger">必須</span>は必須項目です</p>
        
        <div class="main-content center-block ft2">
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

                    <div class="mt-5">7.世帯主様の職業は何でしょうか。<input type="text"></p></div>

                    <div class="mt-5">8.世帯主様の通勤手段は何でしょうか。<input type="text"></p></div>

                    <div class="mt-5">9.現在のお住まいで所有している自家用車の台数と車種をお聞かせ下さい。</p>
                        <p>［台   数］<input type="text">台数    ［車   種］<input type="text"></p>
                    </div>

                    <div class="mt-5">10.</p>
                        <p>［世帯主様］<input type="text">万円</p>
                        <p>［配偶者様］<input type="text">万円    ［全    体］<input type="text"></p>
                    </div>

                    <div class="mt-5">11.目黒区三田1丁目の分譲リノベーションマンションについてご興味はございますか。</p>
                        <div>
                            <input type="checkbox">ある<br>
                            <input type="checkbox">ない
                        </div>
                    </div>

                    <div class="mt-5">12.現在の住宅から買い替え予定はありますか。</p>
                        <div>
                            <input type="checkbox">ある<input type="text"><br>
                            <input type="checkbox">ない
                        </div>
                    </div>

                    <div class="mt-5">13.現在の住宅購入をする場合の予算はどのぐらいですか。</p>
                        <div>
                            <input type="text">万円
                        </div>
                    </div>
                </div>

                <p>アンケートにご協力いただき、誠にありがとうございました。</p>
                
                <button class="mh-parts">入力内容の確認</button>

            </form>

        </div>

        <div class="border mt-5 mb-5 ft5">
            <p class="p-3">【アンケートご回答者様からご提供いただいた個人情報の取り扱いについて】<br>
                ※本アンケートは市場調査(商品企画)に反映するために企画したものです。<br>
                ※ご回答内容につきましては、ご回答を集計処理・保管をいたしますので、皆様にご迷惑をおかけすることは一切ございませんことを、確約させていただきます。<br>
                忌憚のないご意見を頂戴できましたら、幸いでございます。<br>
                ※ご提供いただきました個人情報については、アンケート謝礼送付、本エリアでの物件情報をお送りするために利用いたします。<br>
                ※当社は、「個人情報の保護に関する法令、国が定める指針」その他の規範を尊重・遵守し、個人情報の適正な取り扱いと保護に努めます。<br>
                当社の「個人情報保護方針」につきましては、https://lattrait.co.jp/privacy/をご覧ください。<br>
                <調査主体・調査実施>株式会社ラ・アトレ<アンケート集計・調査分析>株式会社アドバンスクリエイティブ
            </p>
        </div>
    </div>
</body>

@endsection