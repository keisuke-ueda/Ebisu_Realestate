<header class="header text-white position-fixed top-0 start-0 d-none">
  <div class="header_content">

    <div class="header_title">
      <a href="/" class="">
        <img src="{{ asset('/images/ebisulogo.png') }}" alt="ヘッダーロゴ" class="mh-parts logo_s">
      </a>
    </div>

    <div class="header_links">
      <div class="header_link ms-3">
        <div style="padding-bottom:5px;">&nbsp;</div>
        <div class="d-flex align-items-auto">
          <p class="s10 ft1 new-mark">NEW</p>
        </div>
        <a href="/concept" class="small mh-parts white_link s14">EBISU</a>
      </div>

      <div class="header_link ms-3">
        <div style="padding-bottom:5px;">&nbsp;</div>
        <div class="d-flex align-items-auto">
          <p class="s10 ft1 blank">&nbsp;</p>
        </div>
        <a href="/location" style="pointer-events:none;" class="small mh-parts gray_link s14">LOCATION</a>
      </div>

      <div class="header_link ms-3">
        <div style="padding-bottom:5px;">&nbsp;</div>
        <div class="d-flex align-items-auto"><p class="s10 ft1 new-mark" style="margin-left:5px;">NEW</p></div>
        <a href="/access" class="small mh-parts white_link s14" style="margin-left:5px;">ACCESS</a>
      </div>

      <div class="header_link ms-3">
        <div style="padding-bottom:5px;">&nbsp;</div>
        <div class="d-flex align-items-auto">
          <p class="s10 ft1 blank">&nbsp;</p>
        </div>
        <a href="/design" style="pointer-events:none;" class="small mh-parts gray_link s14">DESIGN</a>
      </div>

      <div class="header_link ms-3">
        <div style="padding-bottom:5px;">&nbsp;</div>
        <div class="d-flex align-items-auto">
          <p class="s10 ft1 blank">&nbsp;</p>
        </div>
        <a href="/model_room" style="pointer-events:none; white-space:nowrap;" class="small mh-parts gray_link s14">MODEL ROOM</a>
      </div>

      <div class="header_link ms-3">
        <div style="padding-bottom:5px;"><a href="/overview" class="ft2 s10 mh-parts white_link" style="white-space:nowrap;">>物件概要</a></div>
        <div class="d-flex align-items-auto">
          <p class="s10 ft1 blank">&nbsp;</p>
        </div>
        <a href="/plan" style="pointer-events:none;" class="small mh-parts gray_link s14">PLAN</a>
      </div>

      <div class="header_link ms-3">
        <div style="padding-bottom:5px;"><a href="/map" class="ft2 s10 mh-parts white_link" style="white-space:nowrap;">>現地案内図</a></div>
        <div class="d-flex align-items-auto">
          <p class="s10 ft1 blank">&nbsp;</p>
        </div>
        <a href="/blanding" style="pointer-events:none;" class="small mh-parts gray_link s14">BLAND</a>
      </div>

      <div class="header_link ms-3">
        <a href="/entry" class="mh-parts">
          <button type="button" class="s13 entry_btn text-white" style="height: 40px; width: 140px;"><span class="ft2">物件エントリー</span></button>
        </a>
      </div>

      <div class="header_link ms-3">
        <a href="/reserve" style="pointer-events:none;">
          <button type="button" class="s13 questionnaire_btn mh-parts ts2" style="height: 40px; width: 140px; color:gray;"><span class="ft2">来場予約</span></button>
        </a>
      </div>

      <button class="header_menu_trigger ms-3 mh-parts" type="button" style="height: 60px; width: 60px;">
        <span class="batsu"></span>
      </button>
    </div>

  </div>

  <!-- スマホ -->
  <div class="header_content2">
      <div class="d-flex justify-content-end">
        <button class="header_menu_trigger mh-parts" type="button" style="height: 50px; width: 50px;">
          <span class="batsu"></span>
        </button>
      </div>

      <div class="link_groups">
        <div class="link_group1">
          <div>
            <a href="/">
              <p>TOP</p>
              <p class="s10">トップ</p>
            </a>
          </div>
          <div>
            <a href="/location" style="pointer-events:none; color:gray;">
              <p>LOCATION</p>
              <p class="s10">ロケーション</p>
            </a>
          </div>
          <div>
            <a href="/design" style="pointer-events:none; color:gray;">
              <p>DESIGN</p>
              <p class="s10">デザイン</p>
            </a>
          </div>
          <div>
            <a href="/plan" style="pointer-events:none; color:gray;">
              <p>PLAN</p>
              <p class="s10">プラン</p>
            </a>
          </div>
          <div>
            <a href="/overview">
              <p>物件概要</p>
            </a>
          </div>
        </div>

        <div class="link_group2">
          <div>
            <a href="/concept">
              <p>EBISU</p>
              <p class="s10">恵比寿</p>
            </a>
          </div>
          <div>
            <a href="/access">
              <p>ACCESS</p>
              <p class="s10">アクセス</p>
            </a>
          </div>
          <div>
            <a href="/model_room" style="pointer-events:none; color:gray;">
              <p>MODEL ROOM</p>
              <p class="s10">モデルルーム</p>
            </a>
          </div>
          <div>
            <a href="/blanding" style="pointer-events:none; color:gray;">
              <p>BLAND</p>
              <p class="s10">ブランド</p>
            </a>
          </div>
          <div>
            <a href="/map">
              <p>現地案内図</p>
            </a>
          </div>
        </div>
      </div>

      <button type="button" class="s13 entry_btn text-white mx-auto d-block" style="height: 40px; width: 80%;">
        <a href="/entry">物件エントリー</a>
      </button>

      <button type="button" class="s13 questionnaire_btn text-white mx-auto d-block" style="height: 40px; width: 80%; pointer-events:none;">
        <a href="/reserve" style="color:gray;">来場予約</a>
      </button>
     
  </div>
</header>