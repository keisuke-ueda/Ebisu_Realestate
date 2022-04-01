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
        <div>
            <p>送信しました。
            <p>アンケートにご協力いただき、誠にありがとうございました。</p>

            <button class="mh-parts btn mx-auto d-block"><span class="p-3" onclick="history.back()">戻る</span></button>
            <button class="mh-parts btn btn-dark mx-auto d-block"><span class="p-3">送信する</span></button>

        </div>
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