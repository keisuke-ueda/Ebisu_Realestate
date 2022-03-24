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
      if ($('.header').removeClass('d-none')) {
        $('.header').hasClass('d-none');
      }
    } 
  });

  // トップページのみ、ハンバーガーボタンとロゴがアニメーションで出現
  if (!$('div').hasClass('first_view')) {
    $('.index_logo').removeClass('logo_animation');
    $('.menu-trigger').removeClass('menu_animation');
  }
  

  // 動画の連続再生
  $('.movie-1').on("ended", function() {
    // $(this).hide();
    $(this).css('opacity', 0);
    $('.movie-2').removeClass('d-none')
    $('.movie-2').css('opacity', 1);
    $('.movie-2').get(0).play();
    $('.movie_skip').addClass('d-none')
    $('.logo_animation').delay(11000).queue(function(){
      $(this).addClass('active')
      $(this).dequeue();
      $('.menu_animation').delay(1000).queue(function(){
        $(this).addClass('active')
        $(this).dequeue();
      });
    });
  });

  // スキップボタンクリック
  $('.movie_skip_btn').on('click', function() {
    $('.movie-2').removeClass('d-none')
    $('.movie-2').get(0).play();
    $('.movie_skip').addClass('d-none')
    $('.logo_animation').delay(11000).queue(function(){
      $(this).addClass('active')
      $(this).dequeue();
      $('.menu_animation').delay(1000).queue(function(){
        $(this).addClass('active')
        $(this).dequeue();
      });
    });
  })

  // ハンバーガーボタンをクリック
  $('.menu-trigger').on('click', function() {
    // if ($('.overlay').hasClass('d-none')) {
    //   // メニューが閉じていたら開く
    //   $('.overlay').removeClass('d-none')
    //   $('.menu_content').removeClass('slide_out');
    //   $('.menu_content').addClass('slide_in');
    // } else {
    //   // メニューが開いていたら閉じる
    //   $('.menu_content').removeClass('slide_in');
    //   $('.menu_content').addClass('slide_out');
    //   $('.overlay').delay(500).queue(function(){
    //     $(this).addClass('d-none')
    //     $(this).dequeue();
    //   });
    // };
    // $('.menu-trigger').toggleClass('open');

    $('.header').removeClass('d-none');
  })

  $('.header_menu_trigger').on('click', function(){
    $('.header').addClass('d-none');
  })

  // メニューエリア外をクリックでハンバーガーメニューを閉じる
  // $(document).on('click', function(e) {
  //   console.log('click!!!')
  //   if(!$(e.target).closest('.menu_content').length && !$(e.target).closest('.menu-trigger').length){
  //     if ($('.menu-trigger').hasClass('open')) {
  //       $('.menu_content').removeClass('slide_in');
  //       $('.menu_content').addClass('slide_out');
  //       $('.menu-trigger').removeClass('open')
  //       $('.overlay').delay(500).queue(function(){
  //         // $(this).css({'opacity':'0','z-index':'0'});
  //         $(this).addClass('d-none')
  //         $(this).dequeue();
  //       });
  //     }
  //   };
  // });


  // アンケートフォームの入力バリデーション
  $('.mailformpro').validate({
    rules: {
      confirm_email: {
        equalTo: "#email"
      }
    }
  });

  $.extend($.validator.messages, {
    required: '*必須',
    equalTo: '*確認対象と一致しません'
  });

  
});