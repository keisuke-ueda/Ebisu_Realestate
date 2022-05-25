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



    if($(".header_content").css('display') != 'none') {
      // スクロールによるヘッダーの出現・固定(PCのみ)
      var position = $('.menu-trigger').offset().top + $('.menu-trigger').height();
      if ($(window).scrollTop() > position) {
        if ($('.header').hasClass('d-none')) {
          $('.header').removeClass('d-none');
        }
      }

      // ページ最上部ではヘッダーは非表示(PCのみ)
      if ($('.header').offset().top == 0) {
        $('.header').addClass('d-none');
      }

      //予約管理ページではヘッダー・フッターは非表示
      if ($('table').hasClass('reservation_set_table') || $('p').hasClass('no_reservation_msg')) {
        $('.header').addClass('d-none');
        $('.menu-trigger').addClass('d-none');
        $('.index_logo').addClass('d-none');
        $('.footer').addClass('d-none');
        $('.to-page-top2').addClass('d-none');
      }
    }

    // TOPページ Infoを５行だけ表示し、あとはスクロール
    var len = $(".info_tr").length;
    var max = 5;

    if (len > max) {
      var height = 0;
      for(i=1; i<=max; i++) {
        height += $('.tr_' + String(i)).outerHeight();
      }
      height = String(height) + 'px';
      $('.scroll_table').css('height', height);
    }
    
  });


  // リサイズ中にSPメニューが表示されるのを防ぐ
  $(window).on('resize', function() {
    if ($('.header_content').css('display') == 'none') {
      $('.header').addClass('d-none');
    }
  })

  // トップページのみ、ハンバーガーボタンとロゴがアニメーションで出現
  if (!$('div').hasClass('first_view')) {
    $('.index_logo').removeClass('logo_animation');
    $('.menu-trigger').removeClass('menu_animation');
  }

  //予約管理ページではヘッダーは非表示
  // if ($('table').hasClass('reservation_set_table') || $('p').hasClass('no_reservation_msg')) {
  //   $('.header').addClass('d-none');
  //   $('.menu-trigger').addClass('d-none');
  //   $('.index_logo').addClass('d-none');
  // }

  //予約管理ページではヘッダー・フッターは非表示
  if ($('table').hasClass('reservation_set_table') || $('p').hasClass('no_reservation_msg')) {
    $('.header').addClass('d-none');
    $('.menu-trigger').addClass('d-none');
    $('.index_logo').addClass('d-none');
    $('.footer').addClass('d-none');
    $('.to-page-top2').addClass('d-none');
  }

  // 動画の連続再生
  $('.movie-1').on("ended", function () {
    $(this).css('opacity', 0);
    $('.movie-2').removeClass('d-none')
    $('.movie-2').css('opacity', 1);
    $('.movie-2').get(0).play();
    $('.movie_skip').addClass('d-none')
    $('.logo_animation').delay(8000).queue(function () {
      $(this).addClass('active')
      $(this).dequeue();
      $('.menu_animation').delay(1000).queue(function () {
        $(this).addClass('active')
        $(this).dequeue();
      });
    });
  });

  // SP動画再生後のロゴ出現
  $('.sp_movie').on("ended", function() {
    $('.logo_animation').delay(1000).queue(function () {
      $(this).addClass('active')
      $(this).dequeue();
      $('.menu_animation').delay(1000).queue(function () {
        $(this).addClass('active')
        $(this).dequeue();
      });
    });
  })

  // スキップボタンクリック
  $('.movie_skip_btn').on('click', function () {
    $('.movie-2').removeClass('d-none')
    $('.movie-2').get(0).play();
    $('.movie_skip').addClass('d-none')
    $('.logo_animation').delay(8000).queue(function () {
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


  // カレント表示
  $('.header_link a').each(function () {
    var href = $(this).attr('href');
    if (location.href.match(href)) {
      $(this).addClass('current');
    } else {
      $(this).removeClass('current');
    };
  });
  $('.current').css('color', 'white');


  // 来場予約ページ カレンダーの表示切り替え
  $('.period_next').on('click', function() {
    if (!$('.week1').hasClass('d-none')) {
      $('.week1').addClass('d-none');
      $('.week2').removeClass('d-none');
    } else if (!$('.week2').hasClass('d-none')) {
      $('.week2').addClass('d-none');
      $('.week3').removeClass('d-none');
    } else if (!$('.week3').hasClass('d-none')) {
      $('.week3').addClass('d-none');
      $('.week4').removeClass('d-none');
    } else if (!$('.week4').hasClass('d-none')) {
      $('.week4').addClass('d-none');
      $('.week5').removeClass('d-none');
    } else if (!$('.week5').hasClass('d-none')) {
      $('.week5').addClass('d-none');
      $('.week6').removeClass('d-none');
    } else if (!$('.week6').hasClass('d-none')) {
      $('.week6').addClass('d-none');
      $('.week7').removeClass('d-none');
    } else if (!$('.week7').hasClass('d-none')) {
      $('.week7').addClass('d-none');
      $('.week8').removeClass('d-none');
    } 
  })

  $('.period_back').on('click', function() {
    if (!$('.week8').hasClass('d-none')) {
      $('.week8').addClass('d-none');
      $('.week7').removeClass('d-none');
    } else if (!$('.week7').hasClass('d-none')) {
      $('.week7').addClass('d-none');
      $('.week6').removeClass('d-none');
    }  else if (!$('.week6').hasClass('d-none')) {
      $('.week6').addClass('d-none');
      $('.week5').removeClass('d-none');
    } else if (!$('.week5').hasClass('d-none')) {
      $('.week5').addClass('d-none');
      $('.week4').removeClass('d-none');
    } else if (!$('.week4').hasClass('d-none')) {
      $('.week4').addClass('d-none');
      $('.week3').removeClass('d-none');
    } else if (!$('.week3').hasClass('d-none')) {
      $('.week3').addClass('d-none');
      $('.week2').removeClass('d-none');
    } else if (!$('.week2').hasClass('d-none')) {
      $('.week2').addClass('d-none');
      $('.week1').removeClass('d-none');
    }
  })

  // 備考欄文字数カウント
  $('.remarks').on('keydown keyup keypress change', function() {
    var count = $(this).val().length;
    $('.word_count').text(count);
  })


  // 予約キャンセル(管理者機能)
  $('.cancel_btn').on('click', function() {
    if(confirm("こちらの予約をキャンセルしますか？\nキャンセル後はこちらのページで表示されなくなります")) {
      return true;
    } else {
      return false;
    }
  });


  // Locationページ 地図の表示切り替え

  // 教育施設の吹き出しをクリック
  $('.education_select_btn').on('click', function() {
    // 教育施設
    $('.education_map').removeClass('d-none')
    $('.education_selected').removeClass('d-none');
    $('.education_unselected').addClass('d-none')
    $('.education_select_btn').css('background-color','#ffc2a1')
    $('.education_select_btn').addClass('selected')
    // 医療施設
    $('.medical_map').addClass('d-none')
    $('.medical_selected').addClass('d-none');
    $('.medical_unselected').removeClass('d-none')
    $('.medical_select_btn').css('background-color','#fff')
    $('.medical_select_btn').removeClass('selected')
    // 商業施設
    $('.shopping_map').addClass('d-none')
    $('.shopping_selected').addClass('d-none');
    $('.shopping_unselected').removeClass('d-none')
    $('.shopping_select_btn').css('background-color','#fff')
    $('.shopping_select_btn').removeClass('selected')
    // 公共施設
    $('.public_map').addClass('d-none')
    $('.public_selected').addClass('d-none');
    $('.public_unselected').removeClass('d-none')
    $('.public_select_btn').css('background-color','#fff')
    $('.public_select_btn').removeClass('selected')
    // 公園・レジャー施設
    $('.park_map').addClass('d-none')
    $('.park_selected').addClass('d-none');
    $('.park_unselected').removeClass('d-none')
    $('.park_select_btn').css('background-color','#fff')
    $('.park_select_btn').removeClass('selected')
  })
  
  // 医療施設の吹き出しをクリック
  $('.medical_select_btn').on('click', function() {
    // 教育施設
    $('.education_map').addClass('d-none')
    $('.education_selected').addClass('d-none');
    $('.education_unselected').removeClass('d-none')
    $('.education_select_btn').css('background-color','#fff')
    $('.education_select_btn').removeClass('selected')
    // 医療施設
    $('.medical_map').removeClass('d-none')
    $('.medical_selected').removeClass('d-none');
    $('.medical_unselected').addClass('d-none')
    $('.medical_select_btn').css('background-color','#88abda')
    $('.medical_select_btn').addClass('selected')
    // 商業施設
    $('.shopping_map').addClass('d-none')
    $('.shopping_selected').addClass('d-none');
    $('.shopping_unselected').removeClass('d-none')
    $('.shopping_select_btn').css('background-color','#fff')
    $('.shopping_select_btn').removeClass('selected')
    // 公共施設
    $('.public_map').addClass('d-none')
    $('.public_selected').addClass('d-none');
    $('.public_unselected').removeClass('d-none')
    $('.public_select_btn').css('background-color','#fff')
    $('.public_select_btn').removeClass('selected')
    // 公園・レジャー施設
    $('.park_map').addClass('d-none')
    $('.park_selected').addClass('d-none');
    $('.park_unselected').removeClass('d-none')
    $('.park_select_btn').css('background-color','#fff')
    $('.park_select_btn').removeClass('selected')
  })

  // 商業施設の吹き出しをクリック
  $('.shopping_select_btn').on('click', function() {
    // 教育施設
    $('.education_map').addClass('d-none')
    $('.education_selected').addClass('d-none');
    $('.education_unselected').removeClass('d-none')
    $('.education_select_btn').css('background-color','#fff')
    $('.education_select_btn').removeClass('selected')
    // 医療施設
    $('.medical_map').addClass('d-none')
    $('.medical_selected').addClass('d-none');
    $('.medical_unselected').removeClass('d-none')
    $('.medical_select_btn').css('background-color','#fff')
    $('.medical_select_btn').removeClass('selected')
    // 商業施設
    $('.shopping_map').removeClass('d-none')
    $('.shopping_selected').removeClass('d-none');
    $('.shopping_unselected').addClass('d-none')
    $('.shopping_select_btn').css('background-color','#b45cbe')
    $('.shopping_select_btn').addClass('selected')
    // 公共施設
    $('.public_map').addClass('d-none')
    $('.public_selected').addClass('d-none');
    $('.public_unselected').removeClass('d-none')
    $('.public_select_btn').css('background-color','#fff')
    $('.public_select_btn').removeClass('selected')
    // 公園・レジャー施設
    $('.park_map').addClass('d-none')
    $('.park_selected').addClass('d-none');
    $('.park_unselected').removeClass('d-none')
    $('.park_select_btn').css('background-color','#fff')
    $('.park_select_btn').removeClass('selected')
  })

  // 公共施設の吹き出しをクリック
  $('.public_select_btn').on('click', function() {
    // 教育施設
    $('.education_map').addClass('d-none')
    $('.education_selected').addClass('d-none');
    $('.education_unselected').removeClass('d-none')
    $('.education_select_btn').css('background-color','#fff')
    $('.education_select_btn').removeClass('selected')
    // 医療施設
    $('.medical_map').addClass('d-none')
    $('.medical_selected').addClass('d-none');
    $('.medical_unselected').removeClass('d-none')
    $('.medical_select_btn').css('background-color','#fff')
    $('.medical_select_btn').removeClass('selected')
    // 商業施設
    $('.shopping_map').addClass('d-none')
    $('.shopping_selected').addClass('d-none');
    $('.shopping_unselected').removeClass('d-none')
    $('.shopping_select_btn').css('background-color','#fff')
    $('.shopping_select_btn').removeClass('selected')
    // 公共施設
    $('.public_map').removeClass('d-none')
    $('.public_selected').removeClass('d-none');
    $('.public_unselected').addClass('d-none')
    $('.public_select_btn').css('background-color','#89c997')
    $('.public_select_btn').addClass('selected')
    // 公園・レジャー施設
    $('.park_map').addClass('d-none')
    $('.park_selected').addClass('d-none');
    $('.park_unselected').removeClass('d-none')
    $('.park_select_btn').css('background-color','#fff')
    $('.park_select_btn').removeClass('selected')
  })

  // 公園・レジャー施設の吹き出しをクリック
  $('.park_select_btn').on('click', function() {
    // 教育施設
    $('.education_map').addClass('d-none')
    $('.education_selected').addClass('d-none');
    $('.education_unselected').removeClass('d-none')
    $('.education_select_btn').css('background-color','#fff')
    $('.education_select_btn').removeClass('selected')
    // 医療施設
    $('.medical_map').addClass('d-none')
    $('.medical_selected').addClass('d-none');
    $('.medical_unselected').removeClass('d-none')
    $('.medical_select_btn').css('background-color','#fff')
    $('.medical_select_btn').removeClass('selected')
    // 商業施設
    $('.shopping_map').addClass('d-none')
    $('.shopping_selected').addClass('d-none');
    $('.shopping_unselected').removeClass('d-none')
    $('.shopping_select_btn').css('background-color','#fff')
    $('.shopping_select_btn').removeClass('selected')
    // 公共施設
    $('.public_map').addClass('d-none')
    $('.public_selected').addClass('d-none');
    $('.public_unselected').removeClass('d-none')
    $('.public_select_btn').css('background-color','#fff')
    $('.public_select_btn').removeClass('selected')
    // 公園・レジャー施設
    $('.park_map').removeClass('d-none')
    $('.park_selected').removeClass('d-none');
    $('.park_unselected').addClass('d-none')
    $('.park_select_btn').css('background-color','#ff9aae')
    $('.park_select_btn').addClass('selected')
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
      home_post_code2: {
        required: [true, "郵便番号を", "入力"],
        number: true,
      },
      home_prefectures: {
        required: [true, "都道府県を", "選択"],
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
      work_post_code2: {
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
      },
      birth_y: {
        required: [true, "生年月日(年)を", "選択"],
      },
      birth_m: {
        required: [true, "生年月日(月)を", "選択"],
      },
      birth_d: {
        required: [true, "生年月日(日)を", "選択"],
      },
      job: {
        required: [true, "ご職業を", "選択"],
      },
      media: {
        required: [true, "いずれかに", "チェック"],
      },
      price: {
        required: [true, "ご希望条件(価格帯)を", "選択"],
      },
      agree: {
        required: [true, "チェックを", ""],
      },

      q1: {
        required: [true, "選択", ""],
      },
      "q2_1[]": {
        required: [true, "選択", ""],
        minlength: 3,
      },
      "q2_2[]": {
        required: [true, "選択", ""],
        minlength: 3,
      },
      "q2_3[]": {
        required: [true, "選択", ""],
        minlength: 3,
      },
      q3_1: {
        required: [true, "選択", ""],
      },
      q3_2: {
        required: [true, "選択", ""],
      },
      q4: {
        required: [true, "選択", ""],
      },
      q5_num: {
        min: [0, "いずれかを選択", ""]
      },
      q6: {
        required: [true, "選択", ""],
      },
      q7: {
        required: [true, "選択", ""],
      },
      q8: {
        required: [true, "選択", ""],
      },
      q9_1: {
        required: [true, "台数を入力", ""],
        number: true
      },
      q9_2: {
        required: [true, "車種を入力", ""],
      },
      q9_1_sp: {
        required: [true, "台数を入力", ""],
        number: true
      },
      q9_2_sp: {
        required: [true, "車種を入力", ""],
      },
      q10_1: {
        required: [true, "世帯主様を入力", ""],
        number: true
      },
      q10_2: {
        required: [true, "配偶者様を入力", ""],
        number: true
      },
      q10_3: {
        required: [true, "全体を入力", ""],
        number: true
      },
      q10_1_sp: {
        required: [true, "世帯主様を入力", ""],
        number: true
      },
      q10_2_sp: {
        required: [true, "配偶者様を入力", ""],
        number: true
      },
      q10_3_sp: {
        required: [true, "全体を入力", ""],
        number: true
      },
      q11: {
        required: [true, "選択", ""],
      },
      q12_1: {
        required: [true, "選択", ""],
      },
      q12_2: {
        number: true
      },
      q13: {
        required: [true, "入力", ""],
        number: true
      },

      remarks: {
        
      },
    },
    //エラーメッセージ表示位置指定
    errorPlacement: function (error, element) {
      // data-error_placementで指定された要素に追加
      error.appendTo(element.data('error_placement'));
    }
  });

  // フォーム入力バリデーションのエラーメッセージフォーマット
  $.extend($.validator.messages, {
    required: "{1}{2}してください。",
    max: "{1}{2}してください。",
    min: "{1}{2}してください。",
    number: "半角数字で入力してください。",
    email: "正しいメールアドレスを入力してください。",
    equalTo: "違う値が入力されています。",
    minlength: "3つ選択してください",
  });

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
  if (check_count == 0) {
    $(target_li).each(function () {
      $(this).children("input[type='checkbox']").prop('disabled', false);
      $(this).find(".locked").removeClass("locked");
    });
    // チェック可能上限数以上の時
  } else if (check_count > lim){
    $(target_li).each(function () {
      // チェックされていないチェックボックスをロックする
      if (!$(this).children("input[type='checkbox']").prop('checked')) {
        $(this).children("input[type='checkbox']").prop('disabled', true);
        $(this).addClass("locked");
      }
    });
  } else {
    $(target_li).each(function () {
      // チェックされていないチェックボックスを選択可能にする
      if (!$(this).children("input[type='checkbox']").prop('checked')) {
        $(this).children("input[type='checkbox']").prop('disabled', false);
        $(this).removeClass("locked");
      }
    });
  }
  return false;
}

function min_check1() {
  if($('.min_check').prop('checked')) {
    $('.min').prop("disabled", false);
  } else {
    $('.min').prop("checked", false);
    $('.min').prop("disabled", true);
  }
}

function min_check2() {
  if($('.min:checked').length == 1) {
    $('.min:unchecked').prop("disabled", true);
  } else {
    $('.min').prop("disabled", false);
  }
}

// お住まいのアンケート その他にチェックが入った場合のみテキストボックスを活性化
function text_control(class_name) {
  var check = "." + class_name + "_check";
  var text = "." + class_name + "_text";
  if($(check).prop('checked')) {
    $(text).prop("disabled", false);
    console.log("hey")
  } else {
    $(text).val("");
    $(text).prop("disabled", true);
  }
  
}

function plus_q5() {
  var num = $('.q5:checked').length;
  $('.q5_num').val(num);
  if (num > 0) {
    $('#q5').css('display','none');
  } else {
    $('#q5').css('display','block');
  }
}
