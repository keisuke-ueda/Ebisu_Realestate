<!-- ロゴ -->
<div class="index_logo logo_animation absolute logo_p">
  <a href="/">
    @if($logo == "white")
    <img src="{{ asset('/images/ebisulogo.png') }}" alt="ヘッダーロゴ" class="logo_s">
    @elseif($logo == "black")
    <img src="{{ asset('/images/ebisulogo-black.png') }}" alt="ヘッダーロゴ" class="logo_s">
    @endif
  </a>
</div>

<!-- ハンバーガーボタン -->
<button class="menu-trigger menu_animation absolute menu_p" >
  <img class="w-100" src="{{ asset('/images/menu_btn.png') }}" alt="メニューボタン">
</button>


