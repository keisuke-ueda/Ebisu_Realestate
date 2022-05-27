@extends('layout')

@section('content')

<div class="plan-top">
  <img class="" src="{{ asset('/images/the plan.svg') }}" alt="サンプル画像">
</div>

<p class="text-center text-white ft2 s14" style="margin: 60px 0;">桜のシンボルツリーに護られたエントランスアプローチを進むと、<br>
     心地よいエントランスホールへと導かれます。<br>
     天井高のある明るい迎賓空間が訪れる人をお迎えします。<br>
     さらに上階はホテルライクな内廊下仕様。<br>
     プライバシーの確保と外光も入るボイドが特別な上質感を創出します。
</p>

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
            <p class="s18 gold-2">生垣に囲まれた<br>上質感あふれる外構</p>
          </div>
          <p class="s14">敷地を囲む美しい生垣がプライバシーをしっかり確保しながら、街並みに潤いをもたらします。灯籠や玉砂利などもレイアウトされた外構部は、落ち着いた上質感を創出。</p>
        </div>
      </div>
      <div class="plan_image">
        <img class="plan_image_picture" src="{{ asset('/images/plan-image3.png') }}" alt="">
        <div class="plan_image_text">
          <div class="plan_image_no" style="">
            <img class="" src="{{ asset('/images/plan-n3.png') }}" alt="">
            <p class="s18 gold-2">特徴的な雁行型の<br>建築デザイン</p>
          </div>
          <p class="s14">雁行した建築フォルムは、大きな特徴でもあると同時に、住戸一邸一邸のプライバシーを確保することも実現しています。</p>
        </div>
      </div>
      <div class="plan_image">
        <img class="plan_image_picture" src="{{ asset('/images/plan-image4.jpg') }}" alt="">
        <div class="plan_image_text">
          <div class="plan_image_no" style="">
            <img class="" src="{{ asset('/images/plan-n4.png') }}" alt="">
            <p class="s18 gold-2">外光の入る明るい内廊下<br>&nbsp;</p>
          </div>
          <p class="s14">内廊下の高いプライバシー性能を確保しながら、外光の入るトップライトで閉塞感を軽減して、より心地よい空間としています。</p>
        </div>
      </div>
    </div>
    <div class="plan_images" style="">
      <div class="plan_floor_image">
        <img class="w-100" src="{{ asset('/images/plan-floor.png') }}" alt="">
        <p class="text-end s10 text-dark">敷地配置および3階イメージ図/景観の敷地配置図は､計画段階の図面を書き起こしたもので実際とは異なります｡</p>
      </div>
      <!-- <img class="w-100" src="{{ asset('/images/3rdfloor.png') }}" alt=""> -->
      <div class="" style="display:flex; justify-content: space-between; width: 100%;">
        <div class="plan_image">
          <div class="plan_image_text">
            <div class="plan_image_no" style="">
              <img class="" src="{{ asset('/images/plan-n5.png') }}" alt="">
              <p class="s18 gold-2">大型の駐車スペースもある<br>平置き駐車場</p>
            </div>
            <p class="s14">エントランス付近には屋外平置き駐車場が5台分。大型車も入る余裕のスペースが確保され、屋内にも7台分が確保されています。</p>
          </div>
        </div>
        <div class="plan_image">
          <div class="plan_image_text">
            <div class="plan_image_no" style="">
              <img class="" src="{{ asset('/images/plan-n6.png') }}" alt="">
              <p class="s18 gold-2">丘の上<br>そして住宅地の開放感</p>
            </div>
            <p class="s14">現地周辺は、西側に緑豊かな「ウェスティンホテル東京」があり、南、東には低層の住宅地が広がります。丘の上でもある現地からはその開放感も楽しめます。</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <p class="s10 ft2 text-end">※掲載の写真は、令和4年3月に撮影したものです。</p>
</div>

<div class="plan_area2">
  <img src="{{ asset('/images/PLAN-btn1.png') }}" alt="">
  <img src="{{ asset('/images/PLAN-btn2.png') }}" alt="">
</div>



@endsection
