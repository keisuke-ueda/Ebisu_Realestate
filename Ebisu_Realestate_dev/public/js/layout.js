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

  // $(window).on('load', function() {
  //   var movie_height = $('.movie-1').height();
  //   $('.first_view').css('height', movie_height);
  // });

  // 動画の連続再生
  $('.movie-1').on("ended", function() {
    // $(this).hide();
    $(this).css('opacity', 0);
    $('.movie-2').removeClass('d-none')
    $('.movie-2').css('opacity', 1);
    $('.movie-2').get(0).play();
    $('.movie_skip').addClass('d-none')
  });

  // スキップボタンクリック
  $('.movie_skip_btn').on('click', function() {
    $('.movie-2').removeClass('d-none')
    $('.movie-2').get(0).play();
    $('.movie_skip').addClass('d-none')
  })

  // ハンバーガーボタンをクリック
  $('.menu-trigger').on('click', function() {
    // if ($('.overlay').css('opacity') == 0 && $('.overlay').css('z-index') == 0) {
    if ($('.overlay').hasClass('d-none')) {
      // メニューが閉じていたら開く
      // $('.overlay').css({'opacity':'1','z-index':'999'});
      $('.overlay').removeClass('d-none')
      $('.menu_content').removeClass('slide_out');
      $('.menu_content').addClass('slide_in');
    } else {
      // メニューが開いていたら閉じる
      $('.menu_content').removeClass('slide_in');
      $('.menu_content').addClass('slide_out');
      $('.overlay').delay(500).queue(function(){
        // $(this).css({'opacity':'0','z-index':'0'});
        $(this).addClass('d-none')
        $(this).dequeue();
      });
    };

    $('.menu-trigger').toggleClass('open');
  })

  // メニューエリア外をクリックでハンバーガーメニューを閉じる
  $(document).on('click', function(e) {
    console.log('click!!!')
    if(!$(e.target).closest('.menu_content').length && !$(e.target).closest('.menu-trigger').length){
      if ($('.menu-trigger').hasClass('open')) {
        $('.menu_content').removeClass('slide_in');
        $('.menu_content').addClass('slide_out');
        $('.menu-trigger').removeClass('open')
        $('.overlay').delay(500).queue(function(){
          // $(this).css({'opacity':'0','z-index':'0'});
          $(this).addClass('d-none')
          $(this).dequeue();
        });
      }
    };
  });

});