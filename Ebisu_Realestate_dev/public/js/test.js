//ディべロップサイト
//https://ics-creative.github.io/project-particle-develop/

var particleSystem = null;
var stage = null;

//  ウィンドウのロードが終わり次第、初期化コードを呼び出す。
window.addEventListener("load", function () {
  // Stageオブジェクトを作成します。表示リストのルートになります。
  stage = new createjs.Stage("canvas2");

  // パーティクルシステム作成します。
  particleSystem = new particlejs.ParticleSystem();

  // パーティクルシステムの描画コンテナーを表示リストに登録します。
  stage.addChild(particleSystem.container);

  // Particle Develop( http://ics-web.jp/projects/particle-develop/ ) から書きだしたパーティクルの設定を読み込む
  particleSystem.importFromJson(
    // パラメーターJSONのコピー＆ペースト ここから--
    {
      "bgColor": "#c2c2c2",
      "width": 1047,
      "height": 584,
      "emitFrequency": "100",
      "startX": 524,
      "startXVariance": 2000,
      "startY": 292,
      "startYVariance": 1024,
      "initialDirection": "0",
      "initialDirectionVariance": "360",
      "initialSpeed": "2",
      "initialSpeedVariance": "3.7",
      "friction": "0.038",
      "accelerationSpeed": "0.13",
      "accelerationDirection": "273.3",
      "startScale": 0.17,
      "startScaleVariance": 0.89,
      "finishScale": 0.48,
      "finishScaleVariance": 0.23,
      "lifeSpan": 342,
      "lifeSpanVariance": 129,
      "startAlpha": 0.52,
      "startAlphaVariance": 0.3,
      "finishAlpha": 0.59,
      "finishAlphaVariance": 0.5,
      "shapeIdList": [
          "blur_circle",
          "kirakira2"
      ],
      "startColor": {
          "hue": 179,
          "hueVariance": 0,
          "saturation": 30,
          "saturationVariance": "78",
          "luminance": 88,
          "luminanceVariance": 7
      },
      "blendMode": true,
      "alphaCurveType": "1",
      "VERSION": "1.0.0"
  }
    // パラメーターJSONのコピー＆ペースト ここまで---
  );

  // フレームレートの設定
  createjs.Ticker.framerate =50;
  // requestAnimationFrameに従った呼び出し
  createjs.Ticker.timingMode = createjs.Ticker.RAF;
  // 定期的に呼ばれる関数を登録
  createjs.Ticker.addEventListener("tick", handleTick);
});

function handleTick() {
  // パーティクルの発生・更新
  particleSystem.update();

  // 描画を更新する
  stage.update();
}

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
  });

  $(window).on('load',function (){
    var movie_height = $('.movie').height();
    $('.first_view').css('height', movie_height);
  });
});