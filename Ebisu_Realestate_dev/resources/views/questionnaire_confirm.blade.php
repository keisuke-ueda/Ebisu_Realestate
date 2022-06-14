@extends('layout2')

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1" />
<meta name="format-detection" content="telephone=no">
<link rel="stylesheet" href="{{ asset('/css/questionnaire.css') }}">

@section('title',"お住まいのアンケート｜【公式】ラ・アトレ恵比寿グランガーデン")

@section('content')
<?php
  $prefectures = array('北海道','青森県','岩手県','宮城県','秋田県','山形県','福島県','茨城県','栃木県','群馬県','埼玉県','千葉県','東京都','神奈川県','新潟県','富山県','石川県','福井県','山梨県','長野県','岐阜県','静岡県','愛知県','三重県','滋賀県','京都府','大阪府','兵庫県','奈良県','和歌山県','鳥取県','島根県','岡山県','広島県','山口県','徳島県','香川県','愛媛県','高知県','福岡県','佐賀県','長崎県','熊本県','大分県','宮崎県','鹿児島県','沖縄県');
?>

<div id="questionnaire">
    <h1 class="p-title gold-title-2 text-center ft2 s24" style="margin-bottom: 50px;">お住まいについてのアンケート</h1>
    <div class="pre-text">
        <div class="pl-120px pr-120px questionnaire-sm-img">
            <img class="pb-40px img1" src="{{ asset('/images/お住まいアンケート1.png') }}">
        </div>
        <div class="text-center test ft2 s16">
            <p class="m-none" style="margin-bottom: 20px;">この度、目黒区・渋谷区・港区・品川区を中心とするエリアで、LAホールディングスグループの<br>
                株式会社ラ・アトレが分譲マンションの計画を検討しています。<br>
                そこで、今後の商品・販売計画の参考に資するべく当アンケートを企画させていただきました。<br>
                つきましては、目黒区三田・渋谷区恵比寿・港区白金台・品川区上大崎にお住いの皆様の<br>
                様々なご意見をお聞かせいただければ幸いです。
            </p>
        </div>
        <div class="pr-22px pl-22px questionnaire-sm-img">
            <img class="mb-45px img2" src="{{ asset('/images/お住まいのアンケート2.png') }}">
        </div>
    </div>
    <div class="main-content center-block mx-auto">
        <div class="text-center caption1 ft2 s16">
            <p class="m-none">下記のフォームに必要な項目を入力の上､<br class="pc_hid">｢送信｣ボタンを押してください。</p>
            <p class="m-none"><span class="badge badge-danger">必須</span>は必須項目です</p>
        </div>
        <form class="mailformpro" method="POST" action="{{ route('form.send') }}">
            @csrf

            <div class="table-div" style="">
                <table class="gold-table-questionnaire animation ft2 s14" style="width: 100%;">
                    <tbody>
                        <tr class="top">
                            <td class="column1 questionnaire-title-td" style=""><label for="name"><span
                                        class="badge badge-danger">必須</span>お名前</label>
                            </td>
                            <td class="column2" style=""></td>
                            <td class="column3" style="">
                                {{ $input["sei"] }}
                                {{ $input["mei"] }}
                            </td>
                        </tr>

                        <tr>
                            <td class="questionnaire-title-td" colspan="2"><label for="name"><span
                                        class="badge badge-danger">必須</span>フリガナ</label>
                            </td>
                            <td>
                                {{ $input["sei_kana"] }}
                                {{ $input["mei_kana"] }}
                            </td>
                        </tr>
                        <tr>
                            <td class="questionnaire-title-td" colspan="2"><label for="name"><span
                                        class="badge badge-danger">必須</span>性別</label></td>
                            <td style="padding-top: 10px; padding-bottom: 10px;">
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
                            <td class="questionnaire-title-td" colspan="2"><label for="name"><span
                                        class="badge badge-danger">必須</span>ご家族人数</label>
                            </td>
                            <td>
                                {{ $input["family_size"] }} 人
                            </td>
                        </tr>
                        <tr>
                            <td class="questionnaire-title-td"><label for="name" class="s14 ft2"><span
                                        class="badge badge-danger">必須</span>ご住所</label></td>
                            <td colspan="2" style="padding-top: 10px; padding-bottom: 10px;" class="ft2">
                                <table class="questionnaire-table-nest ft2" style="width: 100%;">
                                    <tr rowspan="2">
                                        <td valign="top" style="" class="w-120px">
                                            <label for="name" class="s14">郵便番号<span
                                                    class="badge badge-danger">必須</span></label>
                                        </td>
                                        <td>
                                            {{ $input["home_post_code"] }} - {{ $input["home_post_code2"] }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="name" class="s14">都道府県<span
                                                    class="badge badge-danger">必須</span></label>
                                        </td>
                                        <td class="py-1">
                                            {{ $input["home_prefectures"] }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="name" class="s14">市区町村<span
                                                    class="badge badge-danger">必須</span></label>
                                        </td>
                                        <td class="py-1">
                                            {{ $input["home_manicipalities"] }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="name" class="s14">丁目番地<span
                                                    class="badge badge-danger">必須</span></label>
                                        </td>
                                        <td class="py-1">
                                            {{ $input["home_chome_address"] }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="name" class="s14">建物名</label>
                                        </td>
                                        <td class="py-1">
                                            @if (isset($input["home_building_name"]))
                                            {{ $input["home_building_name"] }}
                                            @endif
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td class="questionnaire-title-td" colspan="2">
                                <!-- PC -->
                                <label for="name" class="s14 sp_hid" >
                                    <span class="badge badge-danger">必須</span>現在のお住まいの年数
                                </label>
                                <!-- SP -->
                                <label for="name" class="s14 pc_hid" >
                                    <span class="badge badge-danger">必須</span><br>現在のお住まいの年数
                                </label>
                            </td>
                            <td>
                                {{ $input["years_of_residence"] }} 年
                            </td>
                        </tr>
                        <tr>
                            <td class="questionnaire-title-td" colspan="2">
                                <!-- PC -->
                                <label for="name" class="s14 sp_hid">
                                    <span class="badge badge-danger">必須</span><br class="pc_hid">現在お住まいの住居形態<br>
                                    <p class="sp_hid" style="text-indent: 2.75rem; margin: 0;">※該当するものを1つだけ</p>
                                    <p class="sp_hid" style="text-indent: 3.75rem; margin: 0;">選択してください。</p>
                                </label>
                                <!-- SP -->
                                <label for="name" class="pc_hid">
                                    <span class="badge badge-danger">必須</span><br>
                                    現在お住まいの住居形態<br>
                                    <p style="text-indent: 0.1rem; margin: 0;">※該当するものを1つだけ</p>
                                    <p style="text-indent: 0.1rem; margin: 0;">選択してください。</p>
                                </label>
                            </td>
                            <td>
                                {{ $input["housing_form"] }}
                                @if (isset($input["housing_form_text"]))
                                ({{ $input["housing_form_text"] }})
                                @endif
                            </td>
                            </td>
                        </tr>
                        <tr>
                            <td class="questionnaire-title-td" colspan="2" class="s14"><label for="name"><span
                                        class="badge badge-danger">必須</span>電話番号</label>
                            </td>
                            <td>
                                {{ $input["phone_number"] }}
                            </td>
                        </tr>
                        <tr>
                            <td class="questionnaire-title-td" colspan="2">
                                <div><label for="name" class="s14"><span
                                            class="badge badge-danger">必須</span>メールアドレス</label></div>
                            </td>
                            <td>
                                {{ $input["email"] }}
                            </td>
                        </tr>
                        <tr>
                            <td class="questionnaire-title-td" colspan="2"><label for="name" class="s14"><span
                                        class="badge badge-danger">必須</span>勤務先名</label>
                            </td>
                            <td>
                                {{ $input["office_name"] }}
                            </td>
                        </tr>
                        <tr>
                            <td class="questionnaire-title-td" class="ft2">
                                <!-- PC -->
                                <label for="name" class="sp_hid">
                                    <span class="badge badge-danger">必須</span>勤務先ご住所
                                </label>
                                <!-- SP -->
                                <label for="name" class="pc_hid">
                                    <span class="badge badge-danger">必須</span><br>勤務先ご住所
                                </label>
                            </td>
                            <td colspan="2">
                                <table class="questionnaire-table-nest ft2" style="width: 100%;">
                                    <tr rowspan="2">
                                        <td style="" valign="top" class="s16 w-120px">
                                            <label for="name" class="s14 ft2">郵便番号<span
                                                    class="badge badge-danger">必須</span></label>
                                        </td>
                                        <td>
                                            {{ $input["work_post_code"] }} - {{ $input["work_post_code2"] }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="name" class="s14 ft2">都道府県<span
                                                    class="badge badge-danger">必須</span></label>
                                        </td>
                                        <td class="py-1">
                                            {{ $input["work_prefectures"] }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="name" class="s14 ft2"><span class="s14 ft2">市区町村</span><span
                                                    class="badge badge-danger">必須</span></label>
                                        </td>
                                        <td class="py-1">
                                            {{ $input["work_manicipalities"] }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="name" class="s14 ft2">丁目番地<span
                                                    class="badge badge-danger">必須</span></label>
                                        </td>
                                        <td class="py-1">
                                            {{ $input["work_chome_address"] }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="name" class="s14">建物名</label>
                                        </td>
                                        <td class="py-1">
                                            @if (isset($input["work_building_name"]))
                                            {{ $input["work_building_name"] }}
                                            @endif
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
            <div class="animation">
                <p class="text-center py-3 text-white ft2 s16"
                    style="background-color:#444444; margin-top: 50px; margin-bottom: 0;">お住まいについてのアンケート
                </p>
            </div>

            <div class="mt-2 animation ft2 s16">
                <p class="indent-1 mt-20px mb-45px">
                    ※アンケート項目すべてにご協力いただいた方に、もれなく<br class="pc_hid"><span class="sp_indent">ー</span>Amazonギフトカードを進呈いたします。<br>※アンケートはすべて必須項目になります。
                </p>
                <div class="gold_line_bottom  pb-25px ft2 s14">
                    <div class="questionnaire questionnaire1">
                        <p class="pb-2"><span class="question-num mr-20px">1</span>仮に今後お住まいを購入するとした場合、<br class="pc_hid"><span class="sp_indent">ーーー</span>どのような住居形態を希望しますか。(1つだけ回答)</p>
                        <p class="ms-3">
                            @if(isset($input["q1"]))
                            {{ $input["q1"] }}
                            @endif
                        </p>
                    </div>
                </div>
                <div class="gold_line_bottom pb-25px pt-30px s14">
                    <div class="questionnaire questionnaire2_1">
                        <p class="pb-2 ft2 s14"><span
                                class="question-num mr-20px">2</span>あなたがお住まいに求める条件をお聞かせください。<br class="pc_hid"><span class="sp_indent">ーーー</span>(それぞれ3つ回答)
                        </p>
                        <p class="s14">【駅名】</p>
                        <p class="ms-3">
                            @if (isset($input_arrayq2_1))
                            {{ implode(' ', $input_arrayq2_1) }}
                            @endif
                            @if (isset($input["q2_1_text"]))
                            ({{ $input["q2_1_text"] }})
                            @endif
                        </p>
                        <br>
                    </div>
                    <div class="questionnaire questionnaire2_2">
                        <p class="s14">【立地】</p>
                        <p class="ms-3">
                            @if (isset($input_arrayq2_2))
                            {{ implode(' ', $input_arrayq2_2) }}
                            @endif
                            @if (isset($input["q2_2_text"]))
                            ({{ $input["q2_2_text"] }})
                            @endif
                        </p>
                        <br>
                    </div>
                    <div class="questionnaire questionnaire2_3">
                        <p class="s14">【建物】</p>
                        <p class="ms-3">
                            @if (isset($input_arrayq2_3))
                            {{ implode(' ', $input_arrayq2_3) }}
                            @endif
                            @if (isset($input["q2_3_text"]))
                            ({{ $input["q2_3_text"] }})
                            @endif
                        </p>
                    </div>
                </div>

                <div class="gold_line_bottom pb-25px pt-30px s14">
                    <div class="questionnaire questionnaire3_1 ft2">
                        <p class="pb-2"><span
                                class="question-num mr-20px">3</span>仮に今後、マンション購入を検討する場合に希望される<br class="pc_hid"><span class="sp_indent">ーーー</span>間取りと広さをお聞かせください。(それぞれ1つ回答)
                        </p>
                        <p class="s14">【ご希望の間取り】</p>
                        <p class="ms-3">
                            @if (isset($input["q3_1"]))
                            {{ $input["q3_1"] }}
                            @endif
                            @if (isset($input["q3_1_text"]))
                            ({{ $input["q3_1_text"] }})
                            @endif
                        </p>
                        <br>
                    </div>
                    <div class="questionnaire questionnaire3_2">
                        <p class="s14">【ご希望の広さ】</p>
                        <p class="ms-3">
                            @if (isset($input["q3_2"]))
                            {{ $input["q3_2"] }}
                            @endif
                        </p>
                    </div>
                </div>

                <div class="gold_line_bottom pb-25px pt-30px">
                    <div class="questionnaire questionnaire4_1 ft2 s14">
                        <p>
                            <span
                                class="question-num mr-20px">4</span>新築分譲マンション・分譲リノベーションマンションを<br class="pc_hid"><span class="sp_indent">ーーー</span>購入するとした場合についてお聞かせください。(1つだけ回答)
                        </p>
                        <p class="ms-3">
                            @if (isset($input["q4"]))
                            {{ $input["q4"] }}
                            @endif
                        </p>
                    </div>
                </div>

                <div class="gold_line_bottom pb-25px pt-30px">
                    <div class="questionnaire questionnaire5_1 ft2 s14">
                        <p class="pb-2">
                            <span class="question-num mr-20px">5</span>仮に今後、新たに住宅を検討するとした場合の<br class="pc_hid"><span class="sp_indent">ーーー</span>購入エリアについてお聞かせください。(複数回答可)
                        </p>
                        <p class="s14">【渋谷区】</p>
                        <p class="ms-3">
                            @if(isset($input_arrayq5_1))
                            {{ implode(' ', $input_arrayq5_1) }}
                            @endif
                        </p>
                        <br>
                    </div>
                    <div class="questionnaire questionnaire5_2">
                        <p class="s14">【目黒区】</p>
                        <p class="ms-3">
                            @if(isset($input_arrayq5_2))
                            {{ implode(' ', $input_arrayq5_2) }}
                            @endif
                        </p>
                        <br>
                    </div>
                    <div class="questionnaire questionnaire5_3">
                        <p class="s14">【港区】</p>
                        <p class="ms-3">
                            @if(isset($input_arrayq5_3))
                            {{ implode(' ', $input_arrayq5_3) }}
                            @endif
                        </p>
                        <br>
                    </div>
                    <div class="questionnaire questionnaire5_4">
                        <p class="s14">【品川区】</p>
                        <p class="ms-3">
                            @if(isset($input_arrayq5_4))
                            {{ implode(' ', $input_arrayq5_4) }}
                            @endif
                            @if (isset($input["q5_4_text"]))
                            ({{ $input["q5_4_text"] }})
                            @endif
                        </p>
                    </div>
                </div>

                <div class="gold_line_bottom pb-25px pt-30px">
                    <div class="questionnaire questionnaire6_1 ft2 s14">
                        <p class="pb-2"><span
                                class="question-num mr-20px ft2 s14">6</span>仮に上記エリアで新規分譲マンション<br class="pc_hid"><span class="sp_indent">ーーー</span>または分譲リノベーションマンションを検討する場合、<br class="pc_hid"><span class="sp_indent">ーーー</span>どの住戸を検討しますか。
                        </p>
                        <p class="ms-3">
                            @if(isset($input["q6"]))
                            {{ $input["q6"] }}
                            @endif
                            @if(isset($input["q6_text"]))
                            ({{ $input["q6_text"] }})
                            @endif
                        </p>
                    </div>
                </div>

                <div class="gold_line_bottom pb-25px pt-30px">
                    <div class="questionnaire questionnaire7 s14">
                        <p class="pb-2"><span class="question-num mr-20px">7</span>世帯主様の職業は何でしょうか。</p>
                        <p class="ms-3">
                            @if(isset($input["q7"]))
                            {{ $input["q7"] }}
                            @endif
                            @if(isset($input["q7_text"]))
                            ({{ $input["q7_text"] }})
                            @endif
                        </p>
                    </div>
                </div>

                <div class="gold_line_bottom pb-25px pt-30px">
                    <div class="questionnaire questionnaire8 ft2 s14">
                        <p class="pb-2"><span class="question-num mr-20px">8</span>世帯主様の通勤手段は何でしょうか。</p>
                        <p class="ms-3">
                            @if(isset($input["q8"]))
                            {{ $input["q8"] }}
                            @endif
                            @if(isset($input["q8_text"]))
                            ({{ $input["q8_text"] }})
                            @endif
                        </p>
                    </div>
                </div>

                <div class="gold_line_bottom pb-25px pt-30px">
                    <div class="questionnaire questionnaire9 ft2 s14 sp_hid">
                        <p class="pb-2"><span class="question-num mr-20px">9</span>現在のお住まいで所有している自家用車の台数と車種をお聞かせ下さい。
                        </p>
                        <p class="ms-3">
                            ［台 数］{{ $input["q9_1"] }} 台
                            ［車 種］{{ $input["q9_2"] }}
                        </p>
                    </div>
                    <!-- SP -->
                    <div class="questionnaire questionnaire9 ft2 s14 pc_hid">
                        <p class="pb-2"><span class="question-num mr-20px">9</span>現在のお住まいで所有している自家用車の<br class="pc_hid"><span class="sp_indent">ーーー</span>台数と車種をお聞かせ下さい。
                        </p>
                        <p class="ms-3">［台 数］{{ $input["q9_1_sp"] }} 台</p>
                        <p class="ms-3">［車 種］{{ $input["q9_2_sp"] }}</p>
                    </div>
                </div>

                <div class="gold_line_bottom pb-25px pt-30px">
                    <!-- PC -->
                    <div class="questionnaire questionnaire10 ft2 s14 sp_hid">
                        <p class="pb-2"><span class="question-num-2 mr-20px">10</span>世帯主様、配偶者様、ご家族全体の年収をそれぞれお聞かせください。</p>
                        <p class="ms-3">［世帯主様］{{ $input["q10_1"] }}万円</p>
                        <p class="ms-3">［配偶者様］{{ $input["q10_2"] }}万円 ［全 体］{{ $input["q10_3"] }}万円</p>
                    </div>
                    <!-- SP -->
                    <div class="questionnaire questionnaire10 ft2 s14 pc_hid">
                        <p class="pb-2"><span class="question-num-2 mr-20px">10</span>世帯主様、配偶者様、ご家族全体の年収を<br class="pc_hid"><span class="sp_indent">ーーー</span>それぞれお聞かせください。</p>
                        <p class="ms-3">［世帯主様］{{ $input["q10_1_sp"] }}万円</p>
                        <p class="ms-3">［配偶者様］{{ $input["q10_2_sp"] }}万円</p>
                        <p class="ms-3">［全体］{{ $input["q10_3_sp"] }}万円</p>
                    </div>
                </div>

                <div class="gold_line_bottom pb-25px pt-30px">
                    <div class="questionnaire questionnaire11 ft2 s14">
                        <p class="pb-2"><span
                                class="question-num-2 mr-20px">11</span>目黒区三田1丁目の分譲リノベーションマンションについて<br class="pc_hid"><span class="sp_indent">ーーー</span>ご興味はございますか。
                        </p>
                        <p class="ms-3">
                            @if(isset($input["q11"]))
                            {{ $input["q11"] }}
                            @endif
                        </p>
                    </div>
                </div>

                <div class="gold_line_bottom pb-25px pt-30px">
                    <div class="questionnaire questionnaire12 ft2 s14">
                        <p class="pb-2"><span class="question-num-2 mr-20px">12</span>現在の住宅から買い替え予定はありますか。</p>
                        <p class="ms-3">@if(isset($input["q12_1"])){{ $input["q12_1"] }}@endif</p>
                        <p class="ms-3">@if(isset($input["q12_2"]))({{ $input["q12_2"] }} 年以内)@endif</p>
                    </div>
                </div>

                <div class="gold_line_bottom pb-25px pt-30px">
                    <div class="questionnaire questionnaire13 ft2 s14">
                        <p class="pb-2"><span class="question-num-2 mr-20px">13</span>現在の住宅購入をする場合の予算はどのぐらいですか。</p>
                        <p class="ms-3">
                            @if(isset($input["q13"]))
                            {{ $input["q13"] }}
                            @endif
                            万円
                        </p>
                    </div>
                </div>
            </div>
            <p class="text-end animation mb-45px ft2 s12">アンケートにご協力いただき、誠にありがとうございました。</p>

            <button type="submit" class="mh-parts btn btn-dark d-block mx-auto" style="width: 220px;"><span
                    class="p-3 s18 ft2">送信する</span></button>
            <button class="mh-parts btn mx-auto d-block mb-35px" type="button" style="margin-top:15px; text-decoration:underline;;" onclick=history.back()>入力画面に戻る</button>

        </form>
    </div>
    <div class="border border-dark animation ft2 s12 questionnaire_comment">
        <p class="m-none pt-25px pr-20px pl-20px pb-25px">【アンケートご回答者様からご提供いただいた個人情報の取り扱いについて】<br>
            ※本アンケートは市場調査(商品企画)に反映するために企画したものです。<br>
            ※ご回答内容につきましては、ご回答を集計処理・保管をいたしますので、皆様にご迷惑をおかけすることは一切ございませんことを、確約させていただきます。<br>
            &emsp;忌憚のないご意見を頂戴できましたら、幸いでございます。<br>
            ※ご提供いただきました個人情報については、アンケート謝礼送付、本エリアでの物件情報をお送りするために利用いたします。<br>
            ※当社は、個人情報の保護に関する法令、国が定める指針その他の規範を尊重・遵守し、個人情報の適正な取り扱いと保護に努めます。<br>
            &emsp;当社の「個人情報保護方針」につきましては、https://lattrait.co.jp/privacy/をご覧ください。<br>
            ※アンケートにご協力いただいた方は、今後販売する本プロジェクトへの優先的なご案内をさせていただく際にも利用させていただきます。<br>
            <調査主体・調査実施> 株式会社ラ・アトレ<br><アンケート集計・調査分析> 株式会社アドバンスクリエイティブ

        </p>
    </div>
</div>
@endsection