@extends('layout')

<!-- バリデーション作る -->

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1" />
<meta name="format-detection" content="telephone=no">
<title>新たな価値を創造したプレミアムリノベーションマンション｜株式会社ラ・アトレ</title>

@section('content')
<body>
    <div class="container text-white" style="padding-top: 100px;">
        <h1 class="p-title row">資料請求フォーム</h1>
        <div class="main-content row">
            <form class="mailformpro" method="POST" action="/questionnaire_mail">
            @csrf
                <div class="mfp_phase" summary="個人情報">
                    <div class="mailfield">
                        <dl class="mailform">
                            <input type="hidden" name="お名前" data-unjoin="姓+ +名+（+セイ+ +メイ+）" value="" />
                            <dt class="row">必 お名前</dt>
                            <dd>
                                <input type="text" name="姓" data-kana="セイ" placeholder="姓" required />
                                <input type="text" name="名" data-kana="メイ" placeholder="名" required />
                            </dd>
                            <dt class="row">必 フリガナ</dt>
                            <dd>
                                <input type="text" name="セイ" data-charcheck="kana" placeholder="セイ" required />
                                <input type="text" name="メイ" data-charcheck="kana" placeholder="メイ" required />
                            </dd>

                            <dt class="row">ご年齢</dt>
                            <dd><input type="text" name="ご年齢" size="5"/> 歳</dd>                                                                                        

                            <dt class="row">ご家族数</dt>
                            <dd><input type="text" name="ご家族数" size="5" /> 人</dd>
                    
                            <dt class="row">必 郵便番号</dt>
                            <dd>
                            <input type="number" name="郵便番号1" size="4" maxlength="3" required> － <input type="number" name="郵便番号2" size="5" maxlength="4" onKeyUp="AjaxZip3.zip2addr('郵便番号1','郵便番号2','都道府県','市区町村');" required="required">
                            <p>※郵便番号を入力いただくと自動的に住所が入力されます。</p>
                            </dd>
                        
                            <dt class="row">必 住所</dt>
                            <dd>
                                <ol>
                                    <li>
                                        都道府県
                                        <input type="text" name="都道府県" required="required">
                                    </li>
                                    <li>
                                        <span>市区町村　  <input type="text" name="市区町村" required="required">
                                    </li>
                                    <li>
                                        <span>丁目番地　  <input type="text" name="丁目番地" required="required"/>
                                    </li>
                                    <li>
                                        <span>建物名など  <input type="text" name="建物名など"/>
                                    </li>
                                </ol>
                            </dd>
                            <dt class="row">電話番号</dt>
                            <dd>
                                <input type="tel" data-type="tel" name="電話番号"/>
                            </dd>                           
                            <dt class="row">必 メール<br>
                                アドレス
                            </dt>
                            <dd>
                                <input type="email" data-type="email" data-parent="mailfield" name="email" id="email" required/>
                                <p>※ 確認のためもう一度ご入力ください</p>
                                <input type="email" data-type="email" data-parent="mailfield" name="confirm_email" id="confirm_email" required/>
                            </dd>

                            <div>
                                <input type="checkbox">
                                <label for="tab-one">アンケートにご協力お願いいたします。</label>

                                <div>
                                    <p>■ご希望の物件についてお聞かせください。</p>    
                                    <dt class="row">（複数回答可）</dt>
                                    <dd>
                                        <ul>
                                            <li><label><input type="checkbox" name="ご希望の物件" value="神宮ハイツ 504号室" /> 神宮ハイツ 504号室</label></li>
                                            <li><label><input type="checkbox" name="ご希望の物件" value="クリスタルコート鳥居坂 403号室" /> クリスタルコート鳥居坂 403号室</label></li>
                                            <li><label><input type="checkbox" name="ご希望の物件" value="パークマンション白金台サンク 501号室" /> パークマンション白金台サンク 501号室</label></li>
                                            <li><label><input type="checkbox" name="ご希望の物件" value="赤坂アーバンライフ 305号室" /> 赤坂アーバンライフ 305号室</label></li>
                                            <li><label><input type="checkbox" name="ご希望の物件" value="ハイ・トリオ赤坂八丁目 106号室" /> ハイ・トリオ赤坂八丁目 106号室</label></li>
                                            <li><label><input type="checkbox" name="ご希望の物件" value="マノー乃木坂 803号室" /> マノー乃木坂 803号室</label></li>
                                            <li><label><input type="checkbox" name="ご希望の物件" value="シャトー東洋南青山 202号室" /> シャトー東洋南青山 202号室</label></li>
                                            <li><label><input type="checkbox" name="ご希望の物件" value="シャトー東洋南青山 414号室" /> シャトー東洋南青山 414号室</label></li>		
                                        </ul>
                                    </dd>

                                    <p>■ご希望の間取りと広さとご予算についてお聞かせください。</p>    
                                    <dt class="row">広さについて</dt>
                                    <dd>
                                        <ul>
                                            <li><label><input type="radio" name="ご希望の広さ" value="100m2未満" /> 100m<sup>2</sup>未満</label></li>
                                            <li><label><input type="radio" name="ご希望の広さ" value="～150m2" /> ～150m<sup>2</sup></label></li>
                                            <li><label><input type="radio" name="ご希望の広さ" value="～200m2" /> ～200m<sup>2</sup></label></li>
                                            <li><label><input type="radio" name="ご希望の広さ" value="200m2以上" /> 200m<sup>2</sup>以上</label></li>
                                        </ul>
                                    </dd>
                                                
                                    <dt class="row">ご予算について</dt>
                                    <dd>
                                        <ul>
                                            <li><label><input type="radio" name="ご予算" value="1億円未満" /> 1億円未満</label></li>
                                            <li><label><input type="radio" name="ご予算" value="～1億5千万円" /> ～1億5千万円</label></li>
                                            <li><label><input type="radio" name="ご予算" value="～2億円" /> ～2億円</label></li>
                                            <li><label><input type="radio" name="ご予算" value="～2億5千万円" /> ～2億5千万円</label></li>
                                            <li><label><input type="radio" name="ご予算" value="～3億円" /> ～3億円</label></li>
                                            <li><label><input type="radio" name="ご予算" value="3億円以上" /> 3億円以上</label></li>
                                        </ul>
                                    </dd>

                                    <dt class="row">間取りについて</dt>
                                    <dd>
                                        <ul>
                                            <li><label><input type="radio" name="間取りについて" value="2LDK" /> 2LDK</label></li>
                                            <li><label><input type="radio" name="間取りについて" value="3LDK" /> 3LDK</label></li>
                                            <li><label><input type="radio" name="間取りについて" value="4LDK" /> 4LDK</label></li>
                                            <li><label><input type="radio" name="間取りについて" value="それ以上" />それ以上</label></li>
                                        </ul>
                                    </dd>

                                    <p>■現地モデルルームで実際のお部屋をご覧になれますがご参加の希望をお聞かせください。</p>    
                                    <dt class="row"></dt>
                                    <dd>
                                        <ul>
                                            <li><label><input type="radio" name="現地案内会予定" value="内覧したい" /> 内覧したい</label></li>
                                            <li><label><input type="radio" name="現地案内会予定" value="どちらか迷っている" /> どちらか迷っている</label></li>
                                            <li><label><input type="radio" name="現地案内会予定" value="資料を見てから参加したい" /> 資料を見てから内覧したい</label></li>
                                        </ul>
                                    </dd>

                                    <p>■本物件を何で知りましたか？</p>    
                                    <dt class="row">（複数回答可）</dt>
                                    <dd>
                                        <ul>
                                            <p>新聞折込</p>
                                            <li><label><input type="checkbox" name="本物件を何で知りましたか？" value="朝日新聞" />朝日新聞</label></li>
                                            <li><label><input type="checkbox" name="本物件を何で知りましたか？" value="読売新聞" />読売新聞</label></li>
                                            <li><label><input type="checkbox" name="本物件を何で知りましたか？" value="日経新聞" />日経新聞</label></li>
                                            <li><label><input type="checkbox" name="本物件を何で知りましたか？" value="産経新聞" />産経新聞</label></li>
                                            <li><label><input type="checkbox" name="本物件を何で知りましたか？" value="東京新聞" />東京新聞</label></li>
                                            <p>ポータルサイト</p>
                                            <li><label><input type="checkbox" name="本物件を何で知りましたか？" value="SUUMO" />SUUMO</label></li>
                                            <li><label><input type="checkbox" name="本物件を何で知りましたか？" value="Yahoo!不動産" />Yahoo!不動産</label></li>
                                            <li><label><input type="checkbox" name="本物件を何で知りましたか？" value="athome" />athome</label></li>
                                            <li><label><input type="checkbox" name="本物件を何で知りましたか？" value="Home’s" />Home’s</label></li>
                                            <p>交通広告</p>
                                            <li><label><input type="checkbox" name="本物件を何で知りましたか？" value="駅貼ポスター" />駅貼ポスター</label></li>
                                            <li><label><input type="checkbox" name="本物件を何で知りましたか？" value="車内広告" />車内広告</label></li>
                                            <p>他媒体</p>
                                            <li><label><input type="checkbox" name="本物件を何で知りましたか？" value="現地看板" />現地看板</label></li>
                                            <li><label><input type="checkbox" name="本物件を何で知りましたか？" value="ポスティングチラシ" />ポスティングチラシ</label></li>
                                            <li><label><input type="checkbox" name="本物件を何で知りましたか？" value="その他" />その他（ <input class="nyuryoku02" type="text" name="本物件を何で知りましたか？-その他" id="route_area" /> ）</label></li>
                                        </ul>
                                    </dd>
                                </div>
                            </div>

                            <dt class="row">必 個人情報保護方針の確認 </dt>
                            <dd >個人情報保護方針の確認<br>
                                <label><input type="checkbox"  required="required" data-exc="1" name="個人情報保護方針" value="確認済み" /> 
                                <a href="http://www.lattrait.co.jp/privacy.html" target="_blank">個人情報保護方針</a>を確認したらチェックを入れてください。</label>
                            </dd>
                        
                            <div> 
                                <script type="text/javascript" src="//seal.globalsign.com/SiteSeal/gmogs_image_115-57_ja.js" defer></script>
                            </div>
                            
                            <div>
                                <button type="reset">リセット</button>&nbsp;&nbsp;<button type="submit" id="q_post" data-disabled="入力内容にエラーがあります">送信する</button>
                            </div>
                        </dl>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

@endsection