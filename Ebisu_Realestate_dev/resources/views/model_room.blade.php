@extends('layout')

@section('title',"MODEL ROOM｜【公式】ラ・アトレ恵比寿グランガーデン")

@section('content')

<div class="model-top">
  <img class="" src="{{ asset('/images/the MODELROOM.svg') }}" alt="サンプル画像">
</div>

<div class="model-top-sp">
  <img class="" src="{{ asset('/images/the MODELROOM-sp.svg') }}" alt="サンプル画像">
</div>

<div class="model-area1 ft2">
  <div class="display-frame">
    <img class="display-picture display1 current-display" data-num="1" data-title="リビング・ダイニング" src="{{ asset('/images/model_photo1.png') }}" alt="">
    <img class="display-picture display2" data-num="2" data-title="リビング・ダイニング" src="{{ asset('/images/model_photo2.png') }}" alt="">
    <img class="display-picture display3" data-num="3" data-title="リビング・ダイニング" src="{{ asset('/images/model_photo3.png') }}" alt="">
    <img class="display-picture display4" data-num="4" data-title="寝室" src="{{ asset('/images/model_photo4.png') }}" alt="">
    <img class="display-picture display5" data-num="5" data-title="洋室" src="{{ asset('/images/model_photo5.png') }}" alt="">
    <img class="display-picture display6" data-num="6" data-title="リビング・ダイニング" src="{{ asset('/images/model_photo6.png') }}" alt="">
    <img class="display-picture display7" data-num="7" data-title="image photo" src="{{ asset('/images/model_photo7.png') }}" alt="">
    <img class="display-picture display8" data-num="8" data-title="image photo" src="{{ asset('/images/model_photo8.png') }}" alt="">
  </div>
  <p class="bg-black gold-2 s18 m-0 p-1 display-picture-title" style="">リビング・ダイニング</p>
  <div class="selectable-pictures">
    <div class="selected-border"></div>
    <div class="selected-border-sp"></div>
    <img class="selectable-picture selectable1" data-num="1" data-title="リビング・ダイニング" src="{{ asset('/images/model_photo1.png') }}" alt="">
    <img class="selectable-picture selectable2" data-num="2" data-title="リビング・ダイニング" src="{{ asset('/images/model_photo2.png') }}" alt="">
    <img class="selectable-picture selectable3" data-num="3" data-title="リビング・ダイニング" src="{{ asset('/images/model_photo3.png') }}" alt="">
    <img class="selectable-picture selectable4" data-num="4" data-title="寝室" src="{{ asset('/images/model_photo4.png') }}" alt="">
    <img class="selectable-picture selectable5" data-num="5" data-title="洋室" src="{{ asset('/images/model_photo5.png') }}" alt="">
    <img class="selectable-picture selectable6" data-num="6" data-title="リビング・ダイニング" src="{{ asset('/images/model_photo6.png') }}" alt="">
    <img class="selectable-picture selectable7" data-num="7" data-title="image photo" src="{{ asset('/images/model_photo7.png') }}" alt="">
    <img class="selectable-picture selectable8" data-num="8" data-title="image photo" src="{{ asset('/images/model_photo8.png') }}" alt="">
  </div>
  <p class="s10 model-text-end m-0">※掲載の写真は401号室(Cﾀｲﾌﾟ)､202号室(Dﾀｲﾌﾟ)を2022年6月に撮影したものです｡</p>
</div>

<div class="model-area2 bg-black ft2 w-100">
  <div class="content">
    <!-- KITCHEN -->
    <div class="kitchen w-100">
      <div class="w-100 kitchen-content1" style="">
        <div class="kitchen401">
          <img class="d-block w-100" src="{{ asset('/images/kitchen401.png') }}" alt="">
          <p class="s14 m-0">キッチン401号室(Cﾀｲﾌﾟ)</p>
        </div>
        <div class="pictures" style="">
          <div class="">
            <img class="d-block w-100" src="{{ asset('/images/IH heater.png') }}" alt="">
            <p class="s18 m-0 gold-2">IH クッキングヒーター</p>
          </div>
          <div class="kitchen-logo">
            <img class="d-block" src="{{ asset('/images/kitchen.svg') }}" alt="" style="aspect-ratio: unset; margin-bottom:10px;">
            <p class="s10 m-0" style="">※掲載の写真は401号室(Cﾀｲﾌﾟ)を2022年6月に撮影したものです｡</p>
          </div>
          <div class="">
            <img class="d-block w-100" src="{{ asset('/images/hands-free.png') }}" alt="">
            <p class="s18 m-0 gold-2">ハンズフリー水栓</p>
          </div>
          <div class="">
            <img class="d-block w-100" src="{{ asset('/images/oven.png') }}" alt="" style="object-position: 50% 73%;">
            <p class="s18 m-0 gold-2">多機能オーブンレンジ</p>
          </div>
          <div class="">
            <img class="d-block w-100" src="{{ asset('/images/キッチンタイル張り.png') }}" alt="">
            <p class="s18 m-0 gold-2">キッチンタイル張り</p>
          </div>
          <div class="">
            <img class="d-block w-100" src="{{ asset('/images/キッチン天板.png') }}" alt="">
            <p class="s18 m-0 gold-2">キッチン天板</p>
          </div>
        </div>
      </div>
      <div class="kitchen-content2 w-100" style="">
        <div class="">
          <img class="d-block w-100" src="{{ asset('/images/静音シンク.png') }}" alt="">
          <p class="s18 m-0 gold-2">静音シンク</p>
        </div>
        <div class="">
          <img class="d-block w-100" src="{{ asset('/images/slim-food.png') }}" alt="">
          <p class="s18 m-0 gold-2">スリム型レンジフード</p>
        </div>
        <div class="">
          <img class="d-block w-100" src="{{ asset('/images/option.png') }}" alt="">
          <p class="s18 m-0 gold-2">ビルトイン食器洗い乾燥機<br>(オプション)</p>
        </div>
        <div class="">
          <img class="d-block w-100" src="{{ asset('/images/slide-kitchen.png') }}" alt="">
          <p class="s18 m-0 gold-2">スライド式キッチン収納</p>
        </div>
      </div>
    </div>

    <!-- BATHROOM -->
    <div class="bathroom w-100">
      <div class="w-100 bathroom-content" style="">
        <div class="bathroom-pictures1">
          <div class="bathroom202">
            <img class="d-block w-100" src="{{ asset('/images/bathroom202.png') }}" alt="">
            <p class="s14 m-0 model-text-end">バスルーム202号室(Dﾀｲﾌﾟ)</p>
          </div>
          <div class="small_picture">
            <img class="d-block w-100" src="{{ asset('/images/bath-remote.jpg') }}" alt="">
            <p class="s18 m-0 gold-2">バスリモコン</p>
          </div>
          <div class="small_picture">
            <img class="d-block w-100" src="{{ asset('/images/bathroom-tile.png') }}" alt="">
            <p class="s18 m-0 gold-2">バスルームタイル</p>
          </div>
        </div>
        <div class="bathroom-pictures2">
          <div class="small_picture">
            <img class="d-block w-100" src="{{ asset('/images/bath-tab.png') }}" alt="">
            <p class="s18 m-0 gold-2">バスタブ</p>
          </div>
          <div class="bathroom-logo">
            <img class="d-block w-100" src="{{ asset('/images/bathroom.svg') }}" alt="" style="aspect-ratio: unset; margin-bottom:10px;">
            <p class="s10 m-0">※掲載の写真は401号室(Cﾀｲﾌﾟ)､202号室(Dﾀｲﾌﾟ)を<br class="sp_hid"><span class="pc_indent">&nbsp;&nbsp;&nbsp;</span>2022年6月に撮影したものです｡</p>
          </div>
          <div class="small_picture">
            <img class="d-block w-100" src="{{ asset('/images/shower-head.png') }}" alt="" style="object-position:50% 40%;">
            <p class="s18 m-0 gold-2">スライド式シャワーヘッド</p>
          </div>
          <div class="small_picture">
            <img class="d-block w-100" src="{{ asset('/images/浴室暖房乾燥機.png') }}" alt="">
            <p class="s18 m-0 gold-2">浴室暖房乾燥機</p>
          </div>
          <div class="small_picture pc_hid">
            <img class="d-block w-100" src="{{ asset('/images/bath-remote.jpg') }}" alt="">
            <p class="s18 m-0 gold-2">バスリモコン</p>
          </div>
          <div class="small_picture pc_hid">
            <img class="d-block w-100" src="{{ asset('/images/bathroom-tile.png') }}" alt="">
            <p class="s18 m-0 gold-2">バスルームタイル</p>
          </div>
          <div class="bathroom401">
            <img class="d-block w-100" src="{{ asset('/images/bathroom401.jpg') }}" alt="">
            <p class="s14 m-0 model-text-end">バスルーム401号室(Cﾀｲﾌﾟ)</p>
          </div>
        </div>
      </div>
    </div>

    <!-- POWDER ROOM & LAVATORY -->
    <div class="lavatory w-100">
      <div class="lavatory-content">
        <div class="lavatory-pictures1">
          <div class="lavatory202">
            <img class="d-block w-100" src="{{ asset('/images/洗面室202.png') }}" alt="">
            <p class="s14 m-0 model-text-end">洗面室202号室(Dﾀｲﾌﾟ)</p>
          </div>
          <div class="small_picture">
            <img class="d-block w-100" src="{{ asset('/images/洗面人造大理石カウンター天板.png') }}" alt="">
            <p class="s18 m-0 gold-2">洗面人造大理石カウンター天板</p>
          </div>
          <div class="small_picture">
            <img class="d-block w-100" src="{{ asset('/images/bowl.png') }}" alt="" style="object-position:50% 65%;">
            <p class="s18 m-0 gold-2">洗面ボウル</p>
          </div>
        </div>
        <div class="lavatory-pictures2">
          <div class="small_picture1">
            <img class="d-block w-100 picture1-1" src="{{ asset('/images/タオルかけ.jpg') }}" alt="">
            <p class="s18 m-0 gold-2">タオルかけ</p>
          </div>
          <div class="small_picture1 lavatory-logo">
            <div class="lavatory-logo-top">
              <img class="d-block w-100" src="{{ asset('/images/lavatory.svg') }}" alt="" style="aspect-ratio:unset; margin-bottom:10px;">
              <p class="s10 m-0">※掲載の写真は401号室(Cﾀｲﾌﾟ)､202号室(Dﾀｲﾌﾟ)を2022年6月に撮影したものです｡</p>
            </div>
            <div>
              <img class="d-block w-100 picture1-2" src="{{ asset('/images/トイレリモコン.png') }}" alt="">
              <p class="s18 mb-4-pc gold-2">トイレリモコン</p>
            </div>
          </div>
          <div class="small_picture2">
            <img class="d-block w-100" src="{{ asset('/images/三面鏡収納.png') }}" alt="">
            <p class="s18 m-0 gold-2">三面鏡収納</p>
          </div>
          <div class="small_picture2">
            <img class="d-block w-100" src="{{ asset('/images/single.png') }}" alt="">
            <p class="s18 m-0 gold-2">シングルレバー水栓</p>
          </div>
          <div class="small_picture2">
            <img class="d-block w-100" src="{{ asset('/images/収納棚.jpg') }}" alt="">
            <p class="s18 m-0 gold-2">収納棚</p>
          </div>
          <div class="lavatory401">
            <img class="d-block w-100" src="{{ asset('/images/洗面室401.png') }}" alt="">
            <p class="s14 m-0 model-text-end">洗面室(2)401号室(Cﾀｲﾌﾟ)</p>
          </div>
          <div class="small_picture1 pc_hid">
            <img class="d-block w-100" src="{{ asset('/images/洗面人造大理石カウンター天板.png') }}" alt="" style="margin-bottom:5px; aspect-ratio:4/3; object-fit:cover; object-position: 50% 50%;">
            <p class="s18 m-0 gold-2">洗面人造大理石カウンター天板</p>
          </div>
          <div class="small_picture1 pc_hid">
            <img class="d-block w-100" src="{{ asset('/images/bowl.png') }}" alt="" style="margin-bottom:5px; aspect-ratio:4/3; object-fit:cover; object-position: 50% 85%;">
            <p class="s18 m-0 gold-2">洗面ボウル</p>
          </div>
        </div>
      </div>
    </div>

    <!-- STORAGE -->
    <div class="storage w-100">
      <div class="storage-content">
        <div class="entrance">
          <img class="d-block w-100" src="{{ asset('/images/玄関.png') }}" alt="">
          <p class="s14" style="margin-bottom:6px;">玄関</p>
        </div>
        <!-- PC表示 -->
        <div class="right sp_hid" style="width:calc(50% - 10px); height:100%;">
          <div class="w-100" style="margin-bottom:100px;">
            <img class="d-block mx-auto" src="{{ asset('/images/storage.svg') }}" alt="" style="width:50%; margin:10px;">
            <p class="s10 m-0 text-center">※掲載の写真は401号室(Cﾀｲﾌﾟ)を2022年6月に撮影したものです｡</p>
          </div>
          <div class="d-flex justify-content-between w-100" style="margin-top:20px;" style="align-items:flex-end;">
            <div class="" style="width:calc(32.6% - 10px);">
              <div class="w-100" style="margin-bottom: min(calc(4vw - 27px), 29px);">
                <img class="d-block w-100" src="{{ asset('/images/寝室WIC.jpg') }}" alt="" style="aspect-ratio:17/26; object-fit:cover; margin-bottom:10px;">
                <p class="s18 m-0 gold-2">寝室WIC</p>
              </div>
              <div class="w-100">
                <img class="d-block w-100" src="{{ asset('/images/コート掛け・収納棚.png') }}" alt="" style="aspect-ratio:17/26; object-fit:cover; margin-bottom:10px;">
                <p class="s18 m-0 gold-2">コート掛け・収納棚</p>
              </div>
            </div>
            <div class="" style="width:calc(67.4% - 10px);" >
              <img class="d-block w-100" src="{{ asset('/images/shoos-closet.jpg') }}" alt="" style="aspect-ratio:5/8; object-fit:cover; margin-bottom:10px;">
              <p class="s18 m-0 gold-2">シューズクローゼット</p>
            </div>
          </div>
        </div>
        
        <!-- SP表示 -->
        <div class="pc_hid">
          <div class="w-100 d-flex justify-content-between align-items-end">
            <div class="" style="width:calc(50% - 5px);">
              <div class="w-100" style="margin-bottom:20px;" >
                <img class="d-block w-100" src="{{ asset('/images/shoos-closet.jpg') }}" alt="" style="aspect-ratio:5/6; object-fit:cover; margin-bottom:5px;">
                <p class="s18 m-0 gold-2">シューズクローゼット</p>
              </div>
              <div class="w-100">
                <img class="d-block w-100" src="{{ asset('/images/コート掛け・収納棚.png') }}" alt="" style="aspect-ratio:5/6; object-fit:cover; margin-bottom:5px;">
                <p class="s18 m-0 gold-2">コート掛け・収納棚</p>
              </div>
            </div>
            <div class="" style="width:calc(50% - 5px);">
              <div class="w-100" style="margin-bottom: 14vw;">
                <img class="d-block mx-auto" src="{{ asset('/images/storage.svg') }}" alt="" style="width:90%; margin-bottom:10px; padding-top:0px;">
                <p class="s10 m-0 text-center">※掲載の写真は401号室(Cﾀｲﾌﾟ)を2022年6月に撮影したものです｡</p>
              </div>
              <div class="w-100" style="margin-bottom:0px;">
                <img class="d-block w-100" src="{{ asset('/images/寝室WIC.jpg') }}" alt="" style="aspect-ratio:4/7; object-fit:cover; margin-bottom:5px;">
                <p class="s18 m-0 gold-2">寝室WIC</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- OTHER -->
    <div class="other w-100">
      <div class="other-content w-100">
        <div class="other-picture1">
          <img class="d-block w-100" src="{{ asset('/images/アクセントタイル.jpg') }}" alt="">
          <p class="s18 m-0 gold-2">アクセントタイル</p>
        </div>
        <div class="other-picture2 sp_hid">
          <img class="d-block w-100" src="{{ asset('/images/door-stopper.jpg') }}" alt="">
          <p class="s18 m-0 gold-2">ドアストッパー</p>
        </div>
        <div class="other-picture3 sp_hid">
          <img class="d-block w-100" src="{{ asset('/images/人感センサー.jpg') }}" alt="">
          <p class="s18 m-0 gold-2">人感センサー</p>
        </div>
        <div class="other-logo sp_hid">
          <img class="d-block other-logo-img" src="{{ asset('/images/other.svg') }}" alt="" style="">
          <p class="s10" style="margin-bottom:15px;">※掲載の写真は401号室(Cﾀｲﾌﾟ)､202号室(Dﾀｲﾌﾟ)を<br class="sp_hid"><span class="pc_indent">&nbsp;&nbsp;&nbsp;</span>2022年6月に撮影したものです｡</p>
        </div>
        <div class="other-logo-sp pc_hid">
          <div style="margin-bottom:calc(6vw - 12px);">
            <img class="d-block other-logo-img" src="{{ asset('/images/other.svg') }}" alt="" style="margin-bottom:10px;">
            <p class="s10 m-0" style="">※掲載の写真は401号室(Cﾀｲﾌﾟ)､202号室(Dﾀｲﾌﾟ)を<br class="sp_hid"><span class="pc_indent">&nbsp;&nbsp;&nbsp;</span>2022年6月に撮影したものです｡</p>
          </div>
          <div>
            <img class="w-100" src="{{ asset('/images/door-stopper.jpg') }}" alt="" style="aspect-ratio: 13/5; object-fit: cover; object-position: 50% 30%; margin:0 0 5px;">
            <p class="s18 m-0 gold-2">ドアストッパー</p>
          </div>
        </div>
        <div class="other-picture3 pc_hid">
          <img class="d-block w-100" src="{{ asset('/images/人感センサー.jpg') }}" alt="">
          <p class="s18 m-0 gold-2">人感センサー</p>
        </div>
        <div class="other-picture4">
          <img class="d-block w-100" src="{{ asset('/images/調光機能付きスイッチ.jpg') }}" alt="">
          <p class="s18 m-0 gold-2">調光機能付きスイッチ</p>
        </div>
        <div class="other-picture5">
          <img class="d-block w-100" src="{{ asset('/images/wide-switch.jpg') }}" alt="">
          <p class="s18 m-0 gold-2">ワイドスイッチ</p>
        </div>
        <div class="other-picture6">
          <img class="d-block w-100" src="{{ asset('/images/室内インターフォン.jpg') }}" alt="">
          <p class="s18 m-0 gold-2">室内インターフォン</p>
        </div>
        <div class="other-picture7">
          <img class="d-block w-100" src="{{ asset('/images/玄関インターフォン.jpg') }}" alt="">
          <p class="s18 m-0 gold-2">玄関インターフォン</p>
        </div>
        <div class="other-picture8">
          <img class="d-block w-100" src="{{ asset('/images/床暖房スイッチ.jpg') }}" alt="">
          <p class="s18 m-0 gold-2">床暖房スイッチ</p>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

