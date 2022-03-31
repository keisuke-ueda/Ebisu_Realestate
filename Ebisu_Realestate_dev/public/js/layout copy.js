$(function () {
  // アニメーション-1
  $(window).on('load scroll', function () {
    $('.animation').each(function () {
      //ターゲットの位置を取得
      var target = $(this).offset().top;
      //ターゲットの高さを取得
      var target_height = $(this).height();
      //スクロール量を取得
      var scroll = $(window).scrollTop();
      //ウィンドウの高さを取得
      var window_height = $(window).height();

      //ターゲットまでスクロールするとフェードインする
      if (scroll > target - window_height) {
        $(this).addClass('active');
        // ターゲットを超えるとフェードアウトする
        if (scroll > target + target_height) {
          $(this).removeClass('active');
        }
      } else {
        // ターゲットまでスクロールしないとフェードインしない
        $(this).removeClass('active');
      }
    });

    // アニメーション-2
    $('.animation-0-zm').each(function () {
      //ターゲットの位置を取得
      var target = $(this).offset().top;
      //ターゲットの高さを取得
      var target_height = $(this).height();
      //スクロール量を取得
      var scroll = $(window).scrollTop();
      //ウィンドウの高さを取得
      var window_height = $(window).height();

      //ターゲットまでスクロールするとフェードインする
      if (scroll > target - window_height) {
        $(this).addClass('active-0-zm');
        // ターゲットを超えるとフェードアウトする
        if (scroll > target + target_height) {
          $(this).removeClass('active-0-zm');
        }
      } else {
        // ターゲットまでスクロールしないとフェードインしない
        $(this).removeClass('active-0-zm');
      }
    });

    // アニメーション-3
    $('.animation-1-zm').each(function () {
      //ターゲットの位置を取得
      var target = $(this).offset().top;
      //ターゲットの高さを取得
      var target_height = $(this).height();
      //スクロール量を取得
      var scroll = $(window).scrollTop();
      //ウィンドウの高さを取得
      var window_height = $(window).height();

      //ターゲットまでスクロールするとフェードインする
      if (scroll > target - window_height) {
        $(this).addClass('active-1-zm');
        // ターゲットを超えるとフェードアウトする
        if (scroll > target + target_height) {
          $(this).removeClass('active-1-zm');
        }
      } else {
        // ターゲットまでスクロールしないとフェードインしない
        $(this).removeClass('active-1-zm');
      }
    });

    // アニメーション-4
    $('.animation-2-zm').each(function () {
      //ターゲットの位置を取得
      var target = $(this).offset().top;
      //ターゲットの高さを取得
      var target_height = $(this).height();
      //スクロール量を取得
      var scroll = $(window).scrollTop();
      //ウィンドウの高さを取得
      var window_height = $(window).height();

      //ターゲットまでスクロールするとフェードインする
      if (scroll > target - window_height) {
        $(this).addClass('active-2-zm');
        // ターゲットを超えるとフェードアウトする
        if (scroll > target + target_height) {
          $(this).removeClass('active-2-zm');
        }
      } else {
        // ターゲットまでスクロールしないとフェードインしない
        $(this).removeClass('active-2-zm');
      }
    });










    // スクロールによるヘッダーの出現・固定
    var position = $('.menu-trigger').offset().top + $('.menu-trigger').height();
    if ($(window).scrollTop() > position) {
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
  $('.movie-1').on("ended", function () {
    $(this).css('opacity', 0);
    $('.movie-2').removeClass('d-none')
    $('.movie-2').css('opacity', 1);
    $('.movie-2').get(0).play();
    $('.movie_skip').addClass('d-none')
    $('.logo_animation').delay(11000).queue(function () {
      $(this).addClass('active')
      $(this).dequeue();
      $('.menu_animation').delay(1000).queue(function () {
        $(this).addClass('active')
        $(this).dequeue();
      });
    });
  });

  // スキップボタンクリック
  $('.movie_skip_btn').on('click', function () {
    $('.movie-2').removeClass('d-none')
    $('.movie-2').get(0).play();
    $('.movie_skip').addClass('d-none')
    $('.logo_animation').delay(11000).queue(function () {
      $(this).addClass('active')
      $(this).dequeue();
      $('.menu_animation').delay(1000).queue(function () {
        $(this).addClass('active')
        $(this).dequeue();
      });
    });
  })

  // ハンバーガーボタンをクリック
  $('.menu-trigger').on('click', function () {
    $('.header').removeClass('d-none');
  })

  $('.header_menu_trigger').on('click', function () {
    $('.header').addClass('d-none');
  })

  // フォームの入力バリデーション
  $('.mailformpro').validate({
    rules: {
      sei: {
        required: [true, "苗字を", "入力"],
      },
      mei: {
        required: [true, "名前を", "入力"],
      },
      sei_kana: {
        required: [true, "苗字をカタカナで", "入力"],
      },
      mei_kana: {
        required: [true, "名前をカタカナで", "入力"],
      },
      gender: {
        required: [true, "性別を", "選択"],
      },
      family_size: {
        required: [true, "ご家族人数を", "入力"],
        number: true,
      },
      home_post_code: {
        required: [true, "郵便番号を", "入力"],
        number: true,
      },
      home_prefectures: {
        required: [true, "都道府県を", "入力"],
      },
      home_municipalities: {
        required: [true, "市区町村を", "入力"],
      },
      home_chome_address: {
        required: [true, "丁目番地を", "入力"],
      },
      years_of_residence: {
        required: [true, "現在のお住いの年数を", "入力"],
        number: true,
      },
      housing_form: {
        required: [true, "現在お住まいの住居形態を", "選択"]
      },
      phone_number: {
        required: [true, "電話番号を", "入力"],
        number: true,
      },
      email: {
        required: [true, "メールアドレスを", "入力"],
        email: true,
      },
      office_name: {
        required: [true, "勤務先名を", "入力"]
      },
      work_post_code: {
        required: [true, "郵便番号を", "入力"],
        number: true,
      },
      work_prefectures: {
      },
      work_municipalities: {
        required: [true, "市区町村を", "入力"],
      },
      work_chome_address: {
        required: [true, "丁目番地を", "入力"],
      },
      confirm_email: {
        required: [true, "メールアドレスを", "入力"],
        equalTo: "[name=email]"
      }
    },
    //エラーメッセージ表示位置指定
    errorPlacement: function (error, element) {
      // data-error_placementで指定された要素に追加
      error.appendTo(element.data('error_placement'));
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

  // フォーム入力バリデーションのエラーメッセージフォーマット
  $.extend($.validator.messages, {
    required: "{1}{2}してください。",
    number: "半角数字で入力してください。",
    email: "正しいメールアドレスを入力してください。",
    equalTo: "違う値が入力されています。",
  });



  $('.header_link a').each(function () {
    var href = $(this).attr('href');
    if (location.href.match(href)) {
      $(this).addClass('current');
    } else {
      $(this).removeClass('current');
    };
  });
  $('.current').css('color', 'white');

});



/*
  以降アンケートフォーム(questionnaire.blade.php)用のチェックボックス制御
  要別ファイルへ移行と思われます
*/
// アンケートフォームチェックボックス制御
function click_cb(limit, class_name) {
  //チェックカウント用変数
  var check_count = 0;
  var lim = limit - 1;
  var target_li = "." + class_name + " ul li";
  // 箇所チェック数カウント
  $(target_li).each(function () {
    var parent_checkbox = $(this).children("input[type='checkbox']");
    if (parent_checkbox.prop('checked')) {
      check_count = check_count + 1;
    }
  });
  // 0個のとき（チェックがすべて外れたとき）
 if (check_count > lim) {
    $(target_li).each(function () {
      // チェックされていないチェックボックスをロックする
      if (!$(this).children("input[type='checkbox']").prop('checked')) {
        $(this).children("input[type='checkbox']").prop('disabled', true);
        $(this).addClass("locked");
      }
    });
  }
  else (check_count == 0) {
    $(target_li).each(function () {
      $(this).find(".locked").removeClass("locked");
    });
    // チェック可能上限数以上の時
  } 
  return false;
}

