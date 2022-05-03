@extends('layout')

@section('title',"Location｜【公式】ラ・アトレ恵比寿グランガーデン")

@section('content')

<div class="location-top">
    <img src="{{ asset('/images/the LOCATION.svg') }}">
</div>
<div style="height:50px; background-color:#000;"></div>

<div class="dark-area">
  <div class="d-flex justify-content-between align-items-center w-100">
      <div class="animation-1-zm" style="width:60%;">
          <img class="w-100" src="{{ asset('/images/location_map.png') }}">
          <p class="ft2 s10">※掲載の現地周辺概念図は、航空写真などを基に作成したもので、実際とは異なります。周辺の道路・建物・街路図などは一部簡略化しており<br>
          実際とは異なります。</p>
      </div>
      <div class="text-white animation d-flex flex-column justify-content-center ft2 s18" style="width:calc(40% - 45px);">
          <p class="gold-2" style="margin-bottom:10px;">一想一邸の確かな結晶。</p>
          <p class="gold-2" style="margin-bottom:20px;">「ラ・アトレ恵比寿グランガーデン」</p>
          <p class="s14" style="margin:0;">恵比寿、それも「恵比寿ガーデンプレイス」<br>
          「ウェスティンホテル東京」を間近とする住宅地。<br>
          その静謐なる佇まいはそのまま、住まわれる方の誇りとなる。<br>
          多くを語らずとも本物を知る人を魅了するレジデンス。<br>
          「ラ・アトレ恵比寿グランガーデン」ゆるぎなき矜持が<br>
          ここにある。</p>
      </div>
  </div>

  <img class="animation d-block w-100 my-5" src="{{ asset('/images/航空写真.jpg') }}" alt="">

  <div class="life_information animation" style="">
    <img class="d-block mx-auto" src="{{ asset('/images/life information.png') }}" alt="" style="width:40%;">
  </div>

  <div class="d-flex flex-column justify-content-end ft2" style="width:100%; margin-bottom:40px;">
      <div class="d-flex justify-content-between w-100">
          <div style="width: calc(33% - 13px);">
              <img class="animation-0-zm w-100" src="{{ asset('/images/ebisupage_atreebisu.png') }}" style="object-fit: cover; object-position: 100% 100%">
              <p class="text-center m-0">「アトレ恵比寿」</p>
              <p class="text-center s11">(約1000m・徒歩13分)</p>
          </div>
          <div style="width: calc(33% - 13px);" style="margin-left:20px;">
              <img class="animation-0-zm w-100" src="{{ asset('/images/ebisupage_恵比寿ガーデンプレイス.png') }}" style="object-fit: cover; object-position: 100% 100%">
              <p class="text-center m-0">「恵比寿ガーデンプレイス」</p>
              <p class="text-center s11">(約260m・徒歩4分)</p>
          </div>
          <div style="width: calc(33% - 13px);" style="margin-left:20px;">
              <img class="animation-0-zm w-100" src="{{ asset('/images/ebisupage_ウエスティンホテル.png') }}" style="object-fit: cover; object-position: 100% 100%">
              <p class="text-center m-0">「ウエスティンホテル東京」</p>
              <p class="text-center s11">(約300m・徒歩4分)</p>
          </div>
      </div>
      <div class="d-flex justify-content-between">
          <div style="width: calc(33% - 13px);" >
              <img class="animation-1-zm w-100" src="{{ asset('/images/ebisupage_国立博物館付属自然教育園.png') }}" style="object-fit: cover; object-position: 100% 100%">
              <p class="text-center m-0">「国立科学博物館付属 自然教育園」</p>
              <p class="text-center s11">(約1000m・徒歩13分)</p>
          </div>
          <div style="width: calc(33% - 13px);" style="margin-left:20px;">
              <img class="animation-1-zm w-100" src="{{ asset('/images/ebisupage_東京大学医療課付属研究所.png') }}" style="object-fit: cover; object-position: 100% 100%">
              <p class="text-center m-0">「東京大学医療科学研究附属病院」</p>
              <p class="text-center s11">(約630m・徒歩8分)</p>
          </div>
          <div style="width: calc(33% - 13px);" style="margin-left:20px;">
              <img class="animation-1-zm w-100" src="{{ asset('/images/ebisupage_サッポロ広場.png') }}" style="object-fit: cover; object-position: 100% 100%">
              <p class="text-center m-0">「サッポロ広場」</p>
              <p class="text-center s11">(約260m・徒歩4分)</p>
          </div>
      </div>
  </div>
</div>

<!-- スマホ表示 -->
<div class="dark-area2 ft2 s14">
    <div style="width: calc(100% - 40px); margin: 0 auto; padding: 20px 0;">
        <p class="gold-2 text-center m-0">一想一邸の確かな結晶。</p>
        <p class="gold-2 text-center" style="margin-bottom:25px;">「ラ・アトレ恵比寿グランガーデン」</p>
        <p class="s10 text-center">恵比寿、それも「恵比寿ガーデンプレイス」<br>
          「ウェスティンホテル東京」を間近とする住宅地。<br>
          その静謐なる佇まいはそのまま、住まわれる方の誇りとなる。<br>
          多くを語らずとも本物を知る人を魅了するレジデンス。<br>
          ｢ラ･アトレ恵比寿グランガーデン｣ゆるぎなき矜持がここにある。
        </p>
        <img class="d-block w-100" src="{{ asset('/images/location_map.png') }}" >
        <p class="ft2 s10" style="margin-bottom:45px;">※掲載の現地周辺概念図は、航空写真などを基に作成したもので、<br>実際とは異なります。<br>
        周辺の道路･建物･街路図などは一部簡略化しており<br>実際とは異なります。</p>
        <div class="d-flex justify-content-between">
            <div style="width: calc(50% - 5px);">
                <img class="animation 0-zm w-100" src="{{ asset('/images/ebisupage_atreebisu.png') }}" style="object-fit: cover; object-position: 100% 100%">
                <p class="text-center s9">｢アトレ恵比寿｣<br>(約1000m・徒歩13分)</p>
            </div>
            <div style="width: calc(50% - 5px);" style="margin-left:20px;">
                <img class="animation-0-zm w-100" src="{{ asset('/images/ebisupage_恵比寿ガーデンプレイス.png') }}" style="object-fit: cover; object-position: 100% 100%">
                <p class="text-center s9">｢恵比寿ガーデンプレイス｣<br>(約260m・徒歩4分)</p>
            </div>
        </div>
        <div class="d-flex justify-content-between">
            <div style="width: calc(50% - 5px);">
                <img class="animation-0-zm w-100" src="{{ asset('/images/ebisupage_ウエスティンホテル.png') }}" style="object-fit: cover; object-position: 100% 100%">
                <p class="text-center s9">｢ウエスティンホテル東京｣<br>(約300m・徒歩4分)</p>
            </div>
            <div style="width: calc(50% - 5px);" style="margin-left:20px;">
                <img class="animation-1-zm w-100" src="{{ asset('/images/ebisupage_国立博物館付属自然教育園.png') }}" style="object-fit: cover; object-position: 100% 100%">
                <p class="text-center s9 m-0">｢国立科学博物館付属 自然教育園｣<br>(約1000m・徒歩13分)</p>
            </div>
        </div>
        <div class="d-flex justify-content-between">
            <div style="width: calc(50% - 5px);">
                <img class="animation-1-zm w-100" src="{{ asset('/images/ebisupage_東京大学医療課付属研究所.png') }}" style="object-fit: cover; object-position: 100% 100%">
                <p class="text-center s9 m-0">｢東京大学医療科学研究附属病院｣<br>(約630m・徒歩8分)</p>
            </div>
            <div style="width: calc(50% - 5px);" style="margin-left:20px;">
                <img class="animation-1-zm w-100" src="{{ asset('/images/ebisupage_サッポロ広場.png') }}" style="object-fit: cover; object-position: 100% 100%">
                <p class="text-center s9 m-0">｢サッポロ広場｣<br>(約260m・徒歩4分)</p>
            </div>
        </div>
    </div>
</div>

<div class="location_info_area bg-white text-dark ft2">
    <div class="location_info_group">
      <div class="location_info">
        <div class="location_info_photo">
          <div class="location_logo education_logo">
            <img class="" src="{{ asset('/images/education_logo.png') }}" alt="">
          </div>
          <div class="location_photos education_photos">
            <img src="{{ asset('/images/田道小学校.jpg') }}" alt="">
            <p>区立田道小学区</p>
          </div>
          <div class="location_photos education_photos">
            <img src="{{ asset('/images/慶應義塾幼稚舎.jpg') }}" alt="">
            <p>慶応義塾幼稚舎</p>
          </div>
          <div class="location_photos education_photos">
            <img src="{{ asset('/images/白金幼稚園.jpg') }}" alt="">
            <p>白金幼稚園</p>
          </div>
        </div>
        <table class="location_info_table">
          <tbody>
            <tr>
              <td class="name_td">ペガサスインターナショナルスクール</td>
              <td class="minutes_td">徒歩 &nbsp;&nbsp;4分 (約 &nbsp;&nbsp;300m)</td>
            </tr>
            <tr>
              <td>ポピンズアクティブラーニング<br>インターナショナルスクール</td>
              <td>徒歩 &nbsp;&nbsp;4分 (約 &nbsp;&nbsp;310m)</td>
            </tr>
            <tr>
              <td>ニチイキッズ恵比寿保育園</td>
              <td>徒歩 &nbsp;&nbsp;8分 (約 &nbsp;&nbsp;630m)</td>
            </tr>
            <tr>
              <td>渋谷同胞幼稚園</td>
              <td>徒歩 10分 (約 &nbsp;&nbsp;760m)</td>
            </tr>
            <tr>
              <td>白金幼稚園</td>
              <td>徒歩 11分 (約 &nbsp;&nbsp;830m)</td>
            </tr>
            <tr>
              <td>慶應義塾幼稚舎</td>
              <td>徒歩 12分 (約 &nbsp;&nbsp;950m)</td>
            </tr>
            <tr>
              <td>区立目黒保育園</td>
              <td>徒歩 13分 (約 1020m)</td>
            </tr>
            <tr>
              <td>区立田道小学校 [通学区]</td>
              <td>徒歩 14分 (約 1120m)</td>
            </tr>
            <tr>
              <td>目黒日本大学幼稚園</td>
              <td>徒歩 15分 (約 1140m)</td>
            </tr>
            <tr>
              <td>サンタ・セシリア幼稚園</td>
              <td>徒歩 19分 (約 1500m)</td>
            </tr>
            <tr>
              <td>区立大鳥中学校 [通学区]</td>
              <td>徒歩 23分 (約 1830m)</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="location_info">
        <table class="location_info_table">
          <tbody>
            <tr>
              <td class="name_td">恵比寿病院</td>
              <td class="minutes_td">徒歩 &nbsp;&nbsp;3分 (約 &nbsp;&nbsp;220m)</td>
            </tr>
            <tr>
              <td>佐藤クリニック</td>
              <td>徒歩 &nbsp;&nbsp;6分 (約 &nbsp;&nbsp;420m)</td>
            </tr>
            <tr>
              <td>恵比寿ガーデンプレイスクリニック</td>
              <td>徒歩 &nbsp;&nbsp;6分 (約 &nbsp;&nbsp;430m)</td>
            </tr>
            <tr>
              <td>エビス診療所</td>
              <td>徒歩 &nbsp;&nbsp;7分 (約 &nbsp;&nbsp;500m)</td>
            </tr>
            <tr>
              <td>恵比寿こどもクリニック</td>
              <td>徒歩 &nbsp;&nbsp;7分 (約 &nbsp;&nbsp;520m)</td>
            </tr>
            <tr>
              <td>リーメディカルクリニック</td>
              <td>徒歩 &nbsp;&nbsp;7分 (約 &nbsp;&nbsp;540m)</td>
            </tr>
            <tr>
              <td>南和友クリニック</td>
              <td>徒歩 &nbsp;&nbsp;7分 (約 &nbsp;&nbsp;560m)</td>
            </tr>
            <tr>
              <td>東京大学医療科学研究所附属病院</td>
              <td>徒歩 &nbsp;&nbsp;8分 (約 &nbsp;&nbsp;630m)</td>
            </tr>
            <tr>
              <td>厚生中央病院</td>
              <td>徒歩 &nbsp;&nbsp;8分 (約 &nbsp;&nbsp;640m)</td>
            </tr>
            <tr>
              <td>都立広尾病院</td>
              <td>徒歩 12分 (約 &nbsp;&nbsp;910m)</td>
            </tr>
            <tr>
              <td>北里大学北里研究所病院</td>
              <td>徒歩 13分 (約 1040m)</td>
            </tr>
          </tbody>
        </table>
        <div class="location_info_photo">
          <div class="location_logo medical_logo">
            <img class="" src="{{ asset('/images/medical_logo.png') }}" alt="">
          </div>
          <div class="location_photos medical_photos">
            <img src="{{ asset('/images/北里大学病院.jpg') }}" alt="">
            <p>北里大学病院</p>
          </div>
          <div class="location_photos medical_photos">
            <img src="{{ asset('/images/厚生中央病院.jpg') }}" alt="">
            <p>厚生中央病院</p>
          </div>
          <div class="location_photos medical_photos">
            <img src="{{ asset('/images/都立広尾病院.jpg') }}" alt="">
            <p>都立広尾病院</p>
          </div>
        </div>
      </div>
      <div class="location_info">
        <div class="location_info_photo">
          <div class="location_logo shopping_logo">
            <img class="" src="{{ asset('/images/shopping_logo.png') }}" alt="">
          </div>
          <div class="location_photos shopping_photos">
            <img src="{{ asset('/images/ピーコック恵比寿南.jpg') }}" alt="">
            <p>ピーコックストア恵比寿南店</p>
          </div>
          <div class="location_photos shopping_photos">
            <img src="{{ asset('/images/東急ストアプレッセ.jpg') }}" alt="">
            <p>東急ストアプレッセ 目黒店</p>
          </div>
          <div class="location_photos shopping_photos">
            <img src="{{ asset('/images/アトレ恵比寿.jpg') }}" alt="">
            <p>アトレ恵比寿</p>
          </div>
        </div>
        <table class="location_info_table">
          <tbody>
            <tr>
              <td class="name_td">ライフ<br><span>セントラルスクエア恵比寿ガーデンプレイス店</span></td>
              <td class="minutes_td">徒歩 &nbsp;&nbsp;5分 (約 &nbsp;&nbsp;350m)</td>
            </tr>
            <tr>
              <td>明治屋恵比寿ストアー</td>
              <td>徒歩 &nbsp;&nbsp;5分 (約 &nbsp;&nbsp;350m)</td>
            </tr>
            <tr>
              <td>マルエツプチ 白金台プラチナ通り店</td>
              <td>徒歩 &nbsp;&nbsp;6分 (約 &nbsp;&nbsp;480m)</td>
            </tr>
            <tr>
              <td>まいばすけっと 上大崎2丁目店</td>
              <td>徒歩 10分 (約 &nbsp;&nbsp;790m)</td>
            </tr>
            <tr>
              <td>東急ストア 目黒店</td>
              <td>徒歩 12分 (約 &nbsp;&nbsp;910m)</td>
            </tr>
            <tr>
              <td>アトレ恵比寿</td>
              <td>徒歩 13分 (約 1000m)</td>
            </tr>
            <tr>
              <td>成城石井 アトレ恵比寿店</td>
              <td>徒歩 13分 (約 1000m)</td>
            </tr>
            <tr>
              <td>ピーコックストア恵比寿南店</td>
              <td>徒歩 14分 (約 1070m)</td>
            </tr>
            <tr>
              <td>東急ストア プレッセ 目黒店</td>
              <td>徒歩 15分 (約 1090m)</td>
            </tr>
            <tr>
              <td>マルエツ 目黒店</td>
              <td>徒歩 20分 (約 1530m)</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="location_info">
        <table class="location_info_table">
          <tbody>
            <tr>
              <td class="name_td">恵比寿4丁目交番</td>
              <td class="minutes_td">徒歩 &nbsp;&nbsp;4分 (約 &nbsp;&nbsp;270m)</td>
            </tr>
            <tr>
              <td>恵比寿ガーデンプレイス郵便局<br><span>(恵比寿ガーデンプレイス内)</span></td>
              <td>徒歩 &nbsp;&nbsp;6分 (約 &nbsp;&nbsp;430m)</td>
            </tr>
            <tr>
              <td>渋谷消防署恵比寿出張所</td>
              <td>徒歩 &nbsp;&nbsp;6分 (約 &nbsp;&nbsp;450m)</td>
            </tr>
            <tr>
              <td>目黒警察署三田交番</td>
              <td>徒歩 &nbsp;&nbsp;6分 (約 &nbsp;&nbsp;460m)</td>
            </tr>
            <tr>
              <td>東京都写真美術館</td>
              <td>徒歩 &nbsp;&nbsp;7分 (約 &nbsp;&nbsp;510m)</td>
            </tr>
            <tr>
              <td>目黒三田郵便局</td>
              <td>徒歩 &nbsp;&nbsp;8分 (約 &nbsp;&nbsp;620m)</td>
            </tr>
            <tr>
              <td>渋谷区役所 恵比寿駅前出張所</td>
              <td>徒歩 12分 (約 &nbsp;&nbsp;930m)</td>
            </tr>
            <tr>
              <td>国立科学博物館付属自然教育園</td>
              <td>徒歩 13分 (約 1000m)</td>
            </tr>
            <tr>
              <td>目黒区民センター<br><span>(図書館・体育館・屋外プール・テニスコート)</span></td>
              <td>徒歩 18分 (約 1420m)</td>
            </tr>
            <tr>
              <td>目黒区美術館</td>
              <td>徒歩 20分 (約 1550m)</td>
            </tr>
          </tbody>
        </table>
        <div class="location_info_photo">
          <div class="location_logo public_logo">
            <img class="" src="{{ asset('/images/public_logo.png') }}" alt="">
          </div>
          <div class="location_photos public_photos">
            <img src="{{ asset('/images/目黒区美術館.jpg') }}" alt="">
            <p>目黒区美術館</p>
          </div>
          <div class="location_photos public_photos">
            <img src="{{ asset('/images/自然教育園.jpg') }}" alt="">
            <p>国立科学博物館附属 自然教育園</p>
          </div>
          <div class="location_photos public_photos">
            <img src="{{ asset('/images/目黒区民センター.jpg') }}" alt="">
            <p>目黒区民センター</p>
          </div>
        </div>
      </div>
      <div class="location_info">
        <div class="location_info_photo">
          <div class="location_logo park_logo">
            <img class="" src="{{ asset('/images/park_logo.png') }}" alt="">
          </div>
          <div class="location_photos park_photos">
            <img src="{{ asset('/images/三田丘の上公園.jpg') }}" alt="">
            <p>三田丘の上公園</p>
          </div>
          <div class="location_photos park_photos">
            <img src="{{ asset('/images/サッポロ広場.jpg') }}" alt="">
            <p>サッポロ広場</p>
          </div>
          <div class="location_photos park_photos">
            <img src="{{ asset('/images/アメリカ橋公園.jpg') }}" alt="">
            <p>アメリカ橋公園</p>
          </div>
        </div>
        <table class="location_info_table">
          <tbody>
            <tr>
              <td class="name_td">サッポロ広場</td>
              <td class="minutes_td">徒歩 &nbsp;&nbsp;4分 (約 &nbsp;&nbsp;260m)</td>
            </tr>
            <tr>
              <td>三田丘の上公園</td>
              <td>徒歩 &nbsp;&nbsp;4分 (約 &nbsp;&nbsp;310m)</td>
            </tr>
            <tr>
              <td>景丘公園</td>
              <td>徒歩 &nbsp;&nbsp;6分 (約 &nbsp;&nbsp;410m)</td>
            </tr>
            <tr>
              <td>アメリカ橋公園</td>
              <td>徒歩 &nbsp;&nbsp;6分 (約 &nbsp;&nbsp;460m)</td>
            </tr>
            <tr>
              <td>伊達児童遊園地</td>
              <td>徒歩 &nbsp;&nbsp;6分 (約 &nbsp;&nbsp;480m)</td>
            </tr>
            <tr>
              <td>恵比寿南一公園</td>
              <td>徒歩 &nbsp;&nbsp;8分 (約 &nbsp;&nbsp;600m)</td>
            </tr>
            <tr>
              <td>奥三光児童遊園</td>
              <td>徒歩 &nbsp;&nbsp;8分 (約 &nbsp;&nbsp;600m)</td>
            </tr>
            <tr>
              <td>三田公園</td>
              <td>徒歩 &nbsp;&nbsp;8分 (約 &nbsp;&nbsp;610m)</td>
            </tr>
            <tr>
              <td>景丘ちいさい秋公園</td>
              <td>徒歩 &nbsp;&nbsp;9分 (約 &nbsp;&nbsp;690m)</td>
            </tr>
            <tr>
              <td>目黒東児童遊園</td>
              <td>徒歩 13分 (約 &nbsp;&nbsp;990m)</td>
            </tr>
            <tr>
              <td>茶屋坂児童遊園</td>
              <td>徒歩 15分 (約 1140m)</td>
            </tr>
            <tr>
              <td>田道広場公園</td>
              <td>徒歩 15分 (約 1190m)</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
</div>

@endsection
