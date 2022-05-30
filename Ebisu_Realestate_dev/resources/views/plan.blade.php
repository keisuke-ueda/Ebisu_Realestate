@extends('layout')

@section('title',"PLAN｜【公式】ラ・アトレ恵比寿グランガーデン")

@section('content')

<div class="plan-top">
  <img class="" src="{{ asset('/images/the plan.svg') }}" alt="サンプル画像">
</div>

<p class="plan_intro_text text-center text-white ft2 s14" style="">
     桜のシンボルツリーに護られた<br class="pc_hid">エントランスアプローチを進むと、<br>
     心地よいエントランスホールへと導かれます。<br>
     天井高のある明るい迎賓空間が<br class="pc_hid">訪れる人をお迎えします。<br>
     さらに上階はホテルライクな内廊下仕様。<br>
     プライバシーの確保と外光も入るボイドが<br class="pc_hid">特別な上質感を創出します。
</p>

<!-- SP フロアマップ -->
<div class="plan_floor_image_sp pc_hid">
  <img class="w-100" src="{{ asset('/images/plan-floor.png') }}" alt="">
  <p class="s10 ft2 text-dark">敷地配置および3階イメージ図/景観の敷地配置図は､<br>計画段階の図面を書き起こしたもので実際とは異なります｡</p>
</div>

<div class="plan_area1 ft2">
  <div class="plan_area1_content" style="">
    <div class="plan_images" style="">
      <div class="plan_image">
        <img class="plan_image_picture" src="{{ asset('/images/plan-image1.png') }}" alt="">
        <div class="plan_image_text">
          <div class="plan_image_no" style="">
            <img class="" src="{{ asset('/images/plan-n1.png') }}" alt="">
            <p class="s18 gold-2">桜のシンボルツリーのある<br>エントランス</p>
          </div>
          <p class="s14">エントランス周りには、りっぱなソメイヨシノが植樹。春には美しい花を咲かせ、周辺及びエントランスの景観を彩ります。</p>
        </div>
      </div>
      <div class="plan_image">
        <img class="plan_image_picture" src="{{ asset('/images/plan-image2.png') }}" alt="">
        <div class="plan_image_text">
          <div class="plan_image_no" style="">
            <img class="" src="{{ asset('/images/plan-n2.png') }}" alt="">
            <p class="s18 gold-2">生垣に囲まれた<br class="sp_hid">上質感あふれる外構</p>
          </div>
          <p class="s14">敷地を囲む美しい生垣がプライバシーをしっかり確保しながら、街並みに潤いをもたらします。灯籠や玉砂利などもレイアウトされた外構部は、落ち着いた上質感を創出。</p>
        </div>
      </div>
      <div class="plan_image">
        <img class="plan_image_picture" src="{{ asset('/images/plan-image3.png') }}" alt="">
        <div class="plan_image_text">
          <div class="plan_image_no" style="">
            <img class="" src="{{ asset('/images/plan-n3.png') }}" alt="">
            <p class="s18 gold-2">特徴的な雁行型の<br class="sp_hid">建築デザイン</p>
          </div>
          <p class="s14">雁行した建築フォルムは、大きな特徴でもあると同時に、住戸一邸一邸のプライバシーを確保することも実現しています。</p>
        </div>
      </div>
      <div class="plan_image">
        <img class="plan_image_picture" src="{{ asset('/images/plan-image4.jpg') }}" alt="">
        <p class="s10 ft2 text-end pc_hid mt-1 mb-0">※掲載の写真は、令和4年3月に撮影したものです。</p>
        <div class="plan_image_text">
          <div class="plan_image_no" style="">
            <img class="" src="{{ asset('/images/plan-n4.png') }}" alt="">
            <p class="s18 gold-2">外光の入る明るい内廊下<br class="sp_hid">&nbsp;</p>
          </div>
          <p class="s14">内廊下の高いプライバシー性能を確保しながら、外光の入るトップライトで閉塞感を軽減して、より心地よい空間としています。</p>
        </div>
      </div>
    </div>
    <div class="plan_images" style="">
      <div class="plan_floor_image sp_hid">
        <img class="w-100" src="{{ asset('/images/plan-floor.png') }}" alt="">
        <p class="text-end s10 ft2 text-dark">敷地配置および3階イメージ図/景観の敷地配置図は､計画段階の図面を書き起こしたもので実際とは異なります｡</p>
      </div>
      <!-- <img class="w-100" src="{{ asset('/images/3rdfloor.png') }}" alt=""> -->
      <div class="no5_no6" style="">
        <div class="plan_image">
          <div class="plan_image_text">
            <div class="plan_image_no" style="">
              <img class="" src="{{ asset('/images/plan-n5.png') }}" alt="">
              <p class="s18 gold-2">大型の駐車スペースもある<br class="">平置き駐車場</p>
            </div>
            <p class="s14">エントランス付近には屋外平置き駐車場が5台分。大型車も入る余裕のスペースが確保され、屋内にも7台分が確保されています。</p>
            <p class="pc_hid s10 text-end">※屋外平置き駐車場はカーシェア用一台分を含む｡</p>
          </div>
        </div>
        <div class="plan_image">
          <div class="plan_image_text">
            <div class="plan_image_no" style="">
              <img class="" src="{{ asset('/images/plan-n6.png') }}" alt="">
              <p class="s18 gold-2">丘の上<br class="sp_hid">そして住宅地の開放感</p>
            </div>
            <p class="s14">現地周辺は、西側に緑豊かな「ウェスティンホテル東京」があり、南、東には低層の住宅地が広がります。丘の上でもある現地からはその開放感も楽しめます。</p>
            <p class="s10 ft2 text-end sp_hid mt-2">※掲載の写真は、令和4年3月に撮影したものです。</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="plan_area2">
  <a href="/plan_c"><img src="{{ asset('/images/PLAN-btn1.png') }}" alt=""></a>
  <a href="/plan_d"><img src="{{ asset('/images/PLAN-btn2.png') }}" alt=""></a>
</div>



@endsection
