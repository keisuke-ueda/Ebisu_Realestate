@extends('layout2')

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1" />
<meta name="format-detection" content="telephone=no">
<title>新たな価値を創造したプレミアムリノベーションマンション｜株式会社ラ・アトレ</title>

@section('content')
<?php
  $prefectures = array('北海道','青森県','岩手県','宮城県','秋田県','山形県','福島県','茨城県','栃木県','群馬県','埼玉県','千葉県','東京都','神奈川県','新潟県','富山県','石川県','福井県','山梨県','長野県','岐阜県','静岡県','愛知県','三重県','滋賀県','京都府','大阪府','兵庫県','奈良県','和歌山県','鳥取県','島根県','岡山県','広島県','山口県','徳島県','香川県','愛媛県','高知県','福岡県','佐賀県','長崎県','熊本県','大分県','宮崎県','鹿児島県','沖縄県');
?>

<body>
    <div class="container" style="padding-top: 100px;">
        <div class="row justify-content-center">
            <h1 class="p-title gold-title text-center ft4">お住いのアンケート</h1>
            <img class="center-block mx-auto d-block" style="width: 60%;" src="{{ asset('/images/お住まいアンケート1.png') }}">

            <p class="text-center mt-2 mb-5 ft2 s19">この度、目黒区・渋谷区・港区・品川区を中心とするエリアで、LAホールディングスグループの<br>
                株式会社ラ・アトレが分譲マンションの計画を検討しています。<br>
                そこで、、今後の商品・販売計画の参考に資するべく当アンケートを企画させていただきました。<br>
                つきましては、目黒区三田・渋谷区恵比寿・港区白金台・品川区上大崎にお住いの皆様の<br>
                様々なご意見をお聞かせいただければ幸いです。
            </p>
            <img class="center-block mx-auto d-block" style="width: 70%;" src="{{ asset('/images/お住まいのアンケート2.png') }}">
        </div>
        <div class="main-content center-block ft2 mt-5 mx-5 px-5">
            <div class="text-center">
                <p class="ft2">下記のフォームに必要な項目を入力のうえ、「送信」ボタンを押してください。</p>
                <p class="ft2"><span class="badge badge-danger">必須</span>は必須項目です</p>
            </div>
            
            <form class="mailformpro" method="POST" action="{{ route('form.send') }}">
            @csrf
                <div>

                    <table class="gold_table mb-3 animation mb-5">
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
                                    {{ $input["sei"] }}
                                    {{ $input["mei"] }}
                                </td>
                            </tr>

                            <tr>
                                <td><label for="name"><span class="badge badge-danger">必須</span>フリガナ</label></td>
                                <td></td>
                                <td>
                                    {{ $input["sei_kana"] }}
                                    {{ $input["mei_kana"] }}
                                </td>
                            </tr>
                            <tr>
                                <td><label for="name"><span class="badge badge-danger">必須</span>性別</label></td>
                                <td></td>
                                <td>
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
                                <td><label for="name"><span class="badge badge-danger">必須</span>ご家族人数</label></td>
                                <td></td>
                                <td>
                                    {{ $input["family_size"] }} 人</td>
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
                                                {{ $input["home_post_code"] }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                <label for="name">都道府県<span class="badge badge-danger">必須</span></label>
                                            </th>
                                            <td>
                                                {{ $input["home_prefectures"] }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                <label for="name">市区町村<span class="badge badge-danger">必須</span></label>
                                            </th>
                                            <td>
                                                {{ $input["home_manicipalities"] }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                <label for="name">丁目番地<span class="badge badge-danger">必須</span></label>
                                            </th>
                                            <td>
                                                {{ $input["home_chome_address"] }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                <label for="name">建物名</label>
                                            </th>
                                            <td>

                                                {{ $input["home_building_name"] }}
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td><label for="name"><span class="badge badge-danger">必須</span>現在のお住まいの年数</label></td>
                                <td></td>
                                <td>
                                    {{ $input["years_of_residence"] }} 年
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><label for="name"><span
                                            class="badge badge-danger">必須</span>現在お住まいの住居形態<br>
                                        ※該当するものを1つだけ選択してください。</label></td>
                                <td>
                                    @php
                                    if ($input["housing_form"] == "1") {
                                    $housing_form = "分譲マンション";
                                    } else if ($input["housing_form"] == "2") {
                                    $housing_form = "賃貸マンション";
                                    } else {
                                    $housing_form = "その他";
                                    }
                                    @endphp
                                    {{ $housing_form }}
                                </td>
                            </tr>
                            <tr>
                                <td><label for="name"><span class="badge badge-danger">必須</span>電話番号</label></td>
                                <td></td>
                                <td>
                                    {{ $input["phone_number"] }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div><label for="name"><span class="badge badge-danger">必須</span>メールアドレス</label>
                                    </div>
                                </td>
                                <td></td>
                                <td>
                                    {{ $input["email"] }}
                                </td>
                            </tr>
                            <tr>
                                <td><label for="name"><span class="badge badge-danger">必須</span>勤務先名</label></td>
                                <td></td>
                                <td>
                                    {{ $input["office_name"] }}
                                </td>
                            </tr>
                            <tr>
                                <th><label for="name"><span class="badge badge-danger">必須</span>勤務先ご住所</label></th>
                                <td colspan="2">
                                    <table class="table_nest" style="width: 100%;">
                                        <tr rowspan="2">
                                            <th valign="top">
                                                <label for="name">郵便番号<span class="badge badge-danger">必須</span></label>
                                            </th>
                                            <td style="width: 83.3%;">
                                                {{ $input["work_post_code"] }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                <label for="name">都道府県<span class="badge badge-danger">必須</span></label>
                                            </th>
                                            <td>
                                                {{ $input["work_prefectures"] }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                <label for="name">市区町村<span class="badge badge-danger">必須</span></label>
                                            </th>
                                            <td>
                                                {{ $input["work_manicipalities"] }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                <label for="name">丁目番地<span class="badge badge-danger">必須</span></label>
                                            </th>
                                            <td>
                                                {{ $input["work_chome_address"] }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                <label for="name">建物名</label>
                                            </th>
                                            <td>
                                                {{ $input["work_building_name"] }}
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <p class="text-center mt-5 mb-5">お住まいついてのアンケート</p>

                <div>
                    <p>※アンケート項目すべてにご協力いただけた方に、もれなくAmazonギフトカードを進呈いたします。</p>
                    <p>※アンケートはすべて必須項目になります。</p>
                    <div class="gold_line_bottom mt-3 pb-2">
                        <p><span class="question-num">1</span>仮に今後お住まいを購入するとした場合、どのような住居形態を希望しますか。<br>
                            (1つだけ回答)</p>
                        <div class="questionnaire questionnaire1">
                            @if(isset($input["q1"]))
                            {{ $input["q1"] }}
                            @endif
                        </div>
                    </div>

                    <div class="gold_line_bottom mt-3 pb-2">
                        <p><span class="question-num">2</span>あなたがお住まいに求める条件をお聞かせください。(それぞれ3つ回答)</p>
                        <div class="questionnaire questionnaire2_1">
                            <p>【駅名】</p>
                            @if (isset($input_arrayq2_1))
                            {{ implode($input_arrayq2_1) }}
                            @endif
                        </div>
                        <div class="questionnaire questionnaire2_2">
                            <p>【立地】</p>
                            @if (isset($input_arrayq2_2))
                            {{ implode($input_arrayq2_2) }}
                            @endif
                        </div>
                        <div class="questionnaire questionnaire2_3">
                            <p>【建物】</p>
                            @if (isset($input_arrayq2_1))
                            {{ implode($input_arrayq2_3) }}
                            @endif
                        </div>
                    </div>

                    <div class="gold_line_bottom mt-3 pb-2">
                        <p><span class="question-num">3</span>仮に今後、マンション購入を検討する場合に希望される間取りと広さをお聞かせください。<br>
                            (それぞれ1つ回答)</p>
                        <div class="questionnaire questionnaire3_1">
                            <p>【ご希望の間取り】</p>
                            @if (isset($input["q3_1"]))
                            {{ $input["q3_1"] }}
                            @endif
                        </div>
                        <div class="questionnaire questionnaire3_2">
                            <p>【ご希望の広さ】</p>
                            @if (isset($input["q3_2"]))
                            {{ $input["q3_2"] }}
                            @endif
                            <br>
                        </div>
                    </div>

                    <div class="gold_line_bottom mt-3 pb-2">
                        <div class="questionnaire questionnaire4_1">
                            <p>
                                <span class="question-num">4</span>新築分譲マンション・分譲リノベーションマンションを購入するとした場合についてお聞かせください。<br>
                                (1つだけ回答)
                            </p>
                            @if (isset($input["q4"]))
                            {{ $input["q4"] }}
                            @endif
                        </div>
                    </div>

                    <div class="gold_line_bottom mt-3 pb-2">
                        <div class="questionnaire questionnaire5_1">
                            <p>
                                <span class="question-num">5</span>仮に今後、新たに住宅を検討するとした場合の購入エリアについてお聞かせください。<br>
                                (複数回答可)
                            </p>
                            <p>【渋谷区】</p>
                            @if(isset($input_arrayq5_1))
                            {{ implode($input_arrayq5_1) }}
                            @endif
                            <br>
                        </div>
                        <div class="questionnaire questionnaire5_2">
                            <p>【目黒区】</p>
                            @if(isset($input_arrayq5_2))
                            {{ implode($input_arrayq5_2) }}
                            @endif
                            <br>
                        </div>
                        <div class="questionnaire questionnaire5_3">
                            <p>【港区】</p>
                            @if(isset($input_arrayq5_3))
                            {{ implode($input_arrayq5_3) }}
                            @endif
                            <br>
                        </div>
                        <div class="questionnaire questionnaire5_4">
                            <p>【品川区】</p>
                            @if(isset($input_arrayq5_4))
                            {{ implode($input_arrayq5_4) }}
                            @endif
                            <br>
                        </div>
                    </div>

                    <div class="gold_line_bottom mt-3 pb-2">
                        <div class="questionnaire questionnaire6_1">
                            <p><span class="question-num">6</span>仮に上記エリアで新規分譲マンションまたは分譲リノベーションマンションを<br>
                                検討する場合、どの住戸を検討しますか。</p>
                            @if(isset($input["q6"]))
                            {{ $input["q6"] }}
                            @endif
                            <br>
                        </div>
                    </div>

                    <div class="gold_line_bottom mt-3 pb-2">
                        <div class="questionnaire questionnaire7">
                            <p><span class="question-num">7</span>世帯主様の職業は何でしょうか。@if(isset($input["q7"])){{ $input["q7"] }}@endif</p>
                        </div>
                    </div>

                    <div class="gold_line_bottom mt-3 pb-2">
                        <div class="questionnaire questionnaire8">
                            <p><span class="question-num">8</span>世帯主様の通勤手段は何でしょうか。@if(isset($input["q8"])){{ $input["q8"] }}@endif</p>
                        </div>
                    </div>

                    <div class="gold_line_bottom mt-3 pb-2">
                        <div class="questionnaire questionnaire9">
                            <p><span class="question-num">9</span>現在のお住まいで所有している自家用車の台数と車種をお聞かせ下さい。</p>
                            <p>［台 数］{{ $input["q9_1"] }}台 ［車 種］{{ $input["q9_2"] }}</p>
                        </div>
                    </div>

                    <div class="gold_line_bottom mt-3 pb-2">
                        <div class="questionnaire questionnaire10">
                            <p><span class="question-num-2">10</span>世帯主様、配偶者様、ご家族全体の年収をそれぞれお聞かせください。</p>
                            <p class="s16">［世帯主様］{{ $input["q10_1"] }}万円</p>
                            <p class="s16">［配偶者様］{{ $input["q10_2"] }}万円 ［全 体］{{ $input["q10_3"] }}</p>
                        </div>
                    </div>

                    <div class="gold_line_bottom mt-3 pb-2">
                        <div class="questionnaire questionnaire11">
                            <p><span class="question-num-2">11</span>目黒区三田1丁目の分譲リノベーションマンションについてご興味はございますか。</p>
                            @if(isset($input["q11"]))
                            {{ $input["q11"] }}
                            @endif
                        </div>
                    </div>

                    <div class="gold_line_bottom mt-3 pb-2">
                        <div class="questionnaire questionnaire12">
                            <p><span class="question-num-2">12</span>現在の住宅から買い替え予定はありますか。</p>
                            @if(isset($input["q12_1"])){{ $input["q12_1"] }}@endif<br>
                            {{ $input["q12_2"] }}
                        </div>
                    </div>
                    <div class="gold_line_bottom mt-3 pb-2">
                        <div class="questionnaire questionnaire13">
                            <p><span class="question-num-2">13</span>現在の住宅購入をする場合の予算はどのぐらいですか。</p>
                            <div>
                                {{ $input["q13"] }}万円
                            </div>
                        </div>
                    </div>
                </div>
                <p>アンケートにご協力いただき、誠にありがとうございました。</p>
                <button class="mh-parts btn mx-auto d-block"><span class="p-3"
                        onclick="history.back()">戻る</span></button>
                <button class="mh-parts btn btn-dark mx-auto d-block"><span class="p-3">送信する</span></button>
            </form>
            <div class="border border-dark mt-5 mb-5 ft5">
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