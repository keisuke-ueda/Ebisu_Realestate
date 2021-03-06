@extends('layout2')

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1" />
<meta name="format-detection" content="telephone=no">

@section('title',"お住まいのアンケート｜【公式】ラ・アトレ恵比寿グランガーデン")

@section('content')

<body>
    <div id="questionnaire" class="questionnaire_complete">
        <h1 class="p-title gold-title-2 text-center ft2 s24" style="margin-bottom: 50px;">お住まいについてのアンケート</h1>
        
        <div class="questionnaire_complete_msg">
            <p class="text-center">
            「お住まいについてのアンケート」にご協力いただきまして、<br class="pc_hid">誠にありがとうございました。<br>
            今後は皆様から頂きましたご意見を参考にして<br>
            よりお客様のご期待にそえる住宅を追求して参りたいと存じます。<br>
            </p>
            <button class="mh-parts btn mx-auto d-block my-3"><a href="/questionnaire">戻る</a></button>
        </div>
        <div class="border border-dark ft2 s12 questionnaire_comment complete_bottom">
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
</body>

@endsection