<?php
    $logo = "black";
?>
<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="恵比寿GG,恵比寿gg,ラ・アトレ恵比寿グランガーデン,ラ・アトレ恵比寿GG,ラ・アトレ恵比寿マンション,恵比寿リノベーション">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('/css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/layout.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/layout_768.css') }}" media="screen and (max-width:768px)">

    <!-- フォント -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@300&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.typekit.net/ozq5hwu.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- CreateJSのライブラリー読み込み -->
    <script src="https://code.createjs.com/1.0.0/createjs.min.js"></script>
    <!-- ParticleJSのライブラリー読み込み -->
    <script src="https://cdn.rawgit.com/ics-creative/ParticleJS/release/1.0.0/libs/particlejs.min.js"></script>
    <!-- jQueryのライブラリー読み込み -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- AjaxZip3のライブラリー読み込み -->
    <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
    <!-- 入力バリデーション用のライブラリー読み込み -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/localization/messages_ja.min.js"></script>

    <!-- JSファイル読み込み -->
    <script type="text/javascript" src="{{ asset('/js/layout.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/css_browser_selector.js') }}"></script>

</head>

<body>
    <div class="min-vh-100 position-relative common_layout2" style="">
    <!-- ヘッダー -->
    @include('header')

    <!-- ハンバーガーメニュー -->
    @include('menu')

    <!-- 各ページの内容 -->
    @yield('content')

    <!-- SP検索用の非表示h1タグ -->
    <h1 class="d-none">@yield('title')</h1>

    <!-- トップへ戻るボタン -->
    <div class="to-page-top2" style="">
        <a href="#" class="d-inline-block mx-auto my-0 text-white" style="text-decoration: none;">
            <p class="text-center m-0 s12 ft2"><span class="arrow-top d-inline-block mb-1">∧</span><br>TOPへ戻る</p>
        </a>
    </div>

    <!-- フッター -->
    @include('footer')
    </div>

    <!-- リスティング用タグ -->
    <script type="text/javascript">
        (function () {
            var tagjs = document.createElement("script");
            var s = document.getElementsByTagName("script")[0];
            tagjs.async = true;
            tagjs.src = "//s.yjtag.jp/tag.js#site=k5EVl6m";
            s.parentNode.insertBefore(tagjs, s);
        }());
    </script>
    <noscript>
        <iframe src="//b.yjtag.jp/iframe?c=k5EVl6m" width="1" height="1" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
    </noscript>

    @if (isset($entry_thanks) && $entry_thanks == "true")
    <!-- Conversion Pixel - ラ・アトレ恵比寿グランガーデン_物件エントリー - DO NOT MODIFY -->
    <script src='//i.socdm.com/s/so_sg.js?cvid=28502&pb=1' type='text/javascript'></script>
    <script type="text/javascript">(function(d,u){var b=d.getElementsByTagName("script")[0],j=d.createElement("script");j.async=true;j.src=u;b.parentNode.insertBefore(j,b);})(document,"//img.ak.impact-ad.jp/ut/ee863d4b8d59df22_5034.js");</script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-759807502"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'AW-759807502');
    </script>
    <script>
        gtag('event', 'conversion', {'send_to': 'AW-759807502/iJe4CMjE6MwDEI78puoC'});
    </script>
    <!-- End of Conversion Pixel -->
    @endif

    @if (isset($reserve_thanks) && $reserve_thanks == "true")
    <!-- Conversion Pixel - ラ・アトレ恵比寿グランガーデン_来場予約 - DO NOT MODIFY -->
    <script src='//i.socdm.com/s/so_sg.js?cvid=28503&pb=1' type='text/javascript'></script>
    <script type="text/javascript">(function(d,u){var b=d.getElementsByTagName("script")[0],j=d.createElement("script");j.async=true;j.src=u;b.parentNode.insertBefore(j,b);})(document,"//img.ak.impact-ad.jp/ut/ee863d4b8d59df22_5034.js");</script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-759807502"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'AW-759807502');
    </script>
    <script>
        gtag('event', 'conversion', {'send_to': 'AW-759807502/5p4PCMvE6MwDEI78puoC'});
    </script>
    <!-- End of Conversion Pixel -->
    @endif
</body>
</html>