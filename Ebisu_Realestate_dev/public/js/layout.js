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
      if ($('.header').hasClass('d-none')) {
        $('.header').removeClass('d-none');
      }
    } 

    // ページ最上部ではヘッダーは非表示
    if ($('.header').offset().top == 0) {
      $('.header').addClass('d-none');
    }
  });

  // トップページのみ、ハンバーガーボタンとロゴがアニメーションで出現
  if (!$('div').hasClass('first_view')) {
    $('.index_logo').removeClass('logo_animation');
    $('.menu-trigger').removeClass('menu_animation');
  }
  

  // 動画の連続再生
  $('.movie-1').on("ended", function() {
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
    $('.header').removeClass('d-none');
  })

  $('.header_menu_trigger').on('click', function(){
    $('.header').addClass('d-none');
  })

  // アンケートフォームの入力バリデーション
  $('.mailformpro').validate({
    rules: {
      sei: {
        required: [true, "苗字を"],
      },
      mei: {
        required: [true, "名前を"],
      },
      sei_kana: {
        required: [true, "苗字をカタカナで"],
      },
      mei_kana: {
        required: [true, "名前をカタカナで"],
      },
      family_size: {
        required: [true, "ご家族人数を"],
        number: true,
      },
      home_post_code: {
        required: [true, "郵便番号を"],
        number: true,
      },
      home_prefectures: {
        required: [true, "都道府県を"],
      },
      home_municipalities: {
        required: [true, "市区町村を"],
      },
      home_chome_address: {
        required: [true, "丁目番地を"],
      },
      years_of_residence: {
        required: [true, "現在のお住いの年数を"],
        number: true,
      },
      phone_number: {
        required: [true, "電話番号を"],
        number: true,
      },
      email: {
        required: [true, "メールアドレスを"],
        email: true,
      },
      office_name: {
        required: [true, "勤務先名を"]
      },
      work_post_code: {
        required: [true, "郵便番号を"],
        number: true,
      },
      work_prefectures: {
        required: [true, "都道府県を"],
      },
      work_municipalities: {
        required: [true, "市区町村を"],
      },
      work_chome_address: {
        required: [true, "丁目番地を"],
      },
      confirm_email: {
        equalTo: "[name=email]"
      }
    }
  });

  // エントリーフォームの入力バリデーション
  $('.entry_form').validate({
    // rules: {
    //   confirm_email: {
    //     equalTo: "#email"
    //   }
    // }
  });

  $.extend($.validator.messages, {
    required: "{1}入力してください。",
    number: "半角数字で入力してください。",
    email: "正しいメールアドレスを入力してください。",
      equalTo: "違う値が入力されています。",
  });

  
  $('.header_link a').each(function(){
    var href = $(this).attr('href');
    if(location.href.match(href)) {
      $(this).addClass('current');
    } else {
      $(this).removeClass('current');
    };
  });
  $('.current').css('color', 'white');
 
});