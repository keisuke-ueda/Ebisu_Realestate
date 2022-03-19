$(function(){
  $(window).on('load scroll',function (){
    $('.animation').each(function(){
      //ターゲットの位置を取得
      var target = $(this).offset().top;
      //ターゲットの高さを取得
      var target_height = $(this).height();
      //スクロール量を取得
      var scroll = $(window).scrollTop();
      //ウィンドウの高さを取得
      var window_height = $(window).height();

      //ターゲットまでスクロールするとフェードインする
      if (scroll > target - window_height){
        $(this).addClass('active');
        // ターゲットを超えるとフェードアウトする
        if (scroll > target + target_height){
          $(this).removeClass('active');
        } 
      } else {
        // ターゲットまでスクロールしないとフェードインしない
        $(this).removeClass('active');
      }
    });

    // スクロールによるヘッダーの出現・固定
    var position = $('.menu-trigger').offset().top + $('.menu-trigger').height();
    if($(window).scrollTop() > position) {
      $('.header_content').removeClass('d-none');
    } else {
      $('.header_content').addClass('d-none');
    };
  });

  $(window).on('load', function() {
    var movie_height = $('.movie').height();
    $('.first_view').css('height', movie_height);
  });

  $('.movie_skip_btn').on('click', function() {
    $('.after_movie').css('animation-delay', '0s')
    $('.movie_skip').css('display', 'none')
  })

  $('.menu-trigger').on('click', function() {
    if ($('.overlay').css('opacity') == 0 && $('.overlay').css('z-index') == 0) {
      // 閉じていたら開く
      $('.overlay').css({'opacity':'1','z-index':'999'});
      // $('.menu_content').fadeIn();
      $('.menu_content').removeClass('slide_out');
      $('.menu_content').addClass('slide_in');
    } else {
      // 開いていたら閉じる
      $('.menu_content').removeClass('slide_in');
      $('.menu_content').addClass('slide_out');
      $('.overlay').delay(500).queue(function(){
        $(this).css({'opacity':'0','z-index':'0'});
        $(this).dequeue();
      });
    };

    $('.menu-trigger').toggleClass('open');
  })

  // ハンバーガーメニュー開閉
  $(document).on('click', function(e) {
    console.log('click!!!')
    if(!$(e.target).closest('.menu_content').length && !$(e.target).closest('.menu-trigger').length){
      if ($('.menu-trigger').hasClass('open')) {
        // メニューエリア外をクリックしたら閉じる
        $('.menu_content').removeClass('slide_in');
        $('.menu_content').addClass('slide_out');
        $('.menu-trigger').removeClass('open')
        $('.overlay').delay(500).queue(function(){
          $(this).css({'opacity':'0','z-index':'0'});
          $(this).dequeue();
        });
      }
    };
  });

});