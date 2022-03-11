<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
    <link rel="stylesheet" href="{{ asset('/css/index.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- CreateJSのライブラリー読み込み -->
    <script src="https://code.createjs.com/1.0.0/createjs.min.js"></script>
    <!-- ParticleJSのライブラリー読み込み -->
    <script src="https://cdn.rawgit.com/ics-creative/ParticleJS/release/1.0.0/libs/particlejs.min.js"></script>

<!-- JS -->
<script type="text/javascript" src="{{ asset('/js/test.js') }}"></script>

</head>

<body>
    <video autoplay muted width="500px" height="300px">
        <source src="{{ asset('/images/video.mp4') }}" type="video/mp4">
    </video>
    <!-- <div id="display-1">
        <canvas width="1500" height="600" id="canvas1"></canvas>
        <img src="{{ asset('/images/logo.png') }}" class="fade1">
    </div> -->

    <!-- <div id="display-2">
        <canvas width="1500" height="600" id="canvas2">
        </canvas>
        <img src="{{ asset('images/logo-black.png') }}" class="fade1">
        <p>恵比寿、その聡明なる選択。<br>一想一邸の確かな結晶。</p>
    </div> -->

    <!-- <div id="display-3">
        <canvas width="1500" height="600"></canvas>
        <img src="images/picture1.png" class="fade2">
    </div> -->

    <!-- <div id="display-4">
        <canvas width="1500" height="600" ></canvas>
        <img src="images/picture2.png" class="fade2">
    </div> -->

    <!-- <div id="display-5">    
        <img src="images/picture3.png" class="fade4">
        <div id="display-5l1"> 
            <img src="images/logo-white.png" class="fade3">
        </div>
        <div id="display-5l2"> 
            <img src="images/logo-1.png" class="fade5">
        </div>
        <div id="display-5l3"> 
            <img src="images/logo-2.png" class="fade6">
        </div>
        <div id="display-5l4"> 
            <img src="images/logo-3.png" class="fade7">
        </div>

        <div id="display-5f"> 
            <img src="images/light.png" class="fade8">
        </div>

    </div> -->

</body>
</html>