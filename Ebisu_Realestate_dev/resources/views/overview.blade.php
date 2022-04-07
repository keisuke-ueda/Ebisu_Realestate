@extends('layout2')

@section('content')

<!-- 物件概要ページ -->
<div class="ov-m">
    <div style="margin: 0 200px;">
        <h1 class="gold-title-4 ft4 s24">OUTLINE</h1>
    </div>
    <h2 class="ft2 s14 ov-t1">物件概要</h2>
    <div class="ft2 s13">
        <table class="ov_gold_table animation ">
            <tbody>
                <tr>
                    <th>【全体物件概要】</th>
                </tr>
                <tr>
                    <th>名称</th>
                    <td>ラ・アトレ恵比寿グランガーデン</td>
                </tr>
                <tr>
                    <th>所在地</th>
                    <td>東京都目黒区三田1丁目248番地-2 (地番)</td>
                </tr>
                <tr>
                    <th>交通</th>
                    <td>JR山手線・ 埼京線・湘南新宿ライン「恵比寿」駅徒歩11分、東京メトロ日比谷線「恵比寿」駅徒歩13分<br>
                        JR山手線・都営地下鉄三田線・東京メトロ南北線・東急目黒線・「目黒」駅徒歩13分
                    </td>
                </tr>
                <tr>
                    <th>総戸数</th>
                    <td>21戸</td>
                </tr>
                <tr>
                    <th>敷地面積</th>
                    <td>1,068.69㎡（セットバック部分約26㎡含む）</td>
                </tr>
                <tr>
                    <th>建築面積</th>
                    <td>558.22㎡（令和2年9月建築時建築確認面積）</td>
                </tr>
                <tr>
                    <th>建築延床面積</th>
                    <td>2,602.05㎡（令和2年9月建築時建築確認面積）</td>
                </tr>
                <tr>
                    <th>間取り</th>
                    <td>1LDK・2LDK</td>
                </tr>
                <tr>
                    <th>構造・規模</th>
                    <td>鉄筋コンクリート造陸屋根地下1階付5階建</td>
                </tr>
                <tr>
                    <th>用途地域・地区</th>
                    <td>第１種中高層住居専用地域・準防火地域・第2種高度地区</td>
                </tr>
                <tr>
                    <th>地目</th>
                    <td>宅地</td>
                </tr>
                <tr>
                    <th>既存建物竣工日</th>
                    <td>平成2年9月</td>
                </tr>
                <tr>
                    <th>改修工事完了予定日</th>
                    <td>令和5年3月末</td>
                </tr>
                <tr>
                    <th>分譲後の権利形態</th>
                    <td>敷地：専有面積割合による所有権の共有<br>
                        建物：専有部分・区分所有権、共用部分・<span class="bl">専有面積割合による所有権の共有</span>
                    </td>
                </tr>
                <tr>
                    <th>既存建物建築確認番号</th>
                    <td>目都建検第137号</td>
                </tr>
                <tr>
                    <th>建ぺい率・容積率</th>
                    <td>60%・200%</td>
                </tr>
                <tr>
                    <th>既存建物施工会社</th>
                    <td>鹿島建設株式会社</td>
                </tr>
                <tr>
                    <th>既存建物分譲会社</th>
                    <td>非分譲の住宅となります</td>
                </tr>
                <tr>
                    <th>改修施工会社</th>
                    <td>株式会社アップス</td>
                </tr>
                <tr>
                    <th>管理形態</th>
                    <td>管理会社に全部委託</td>
                </tr>
                <tr>
                    <th>管理会社</th>
                    <td>株式会社モリモトクオリティ</td>
                </tr>
                <tr>
                    <th>リノベーション<span class="bl">（改修）</span></th>
                    <td>屋上防水・エントランスドア交換</td>
                </tr>
                <tr>
                    <th>駐車場</th>
                    <td>専用使用権付屋内平置式3台・屋内機械式4台・専用使用権付屋外平置式4台・カーシェア屋外平置式1台</td>
                </tr>
                <tr>
                    <th>売主</th>
                    <td>株式会社ラ・アトレ<br>
                        東京都港区海岸1-9-18国際浜松町ビル7F TEL：03-5405-7300<br>
                        国土交通大臣（3）第8425号<br>
                        （公社）全国宅地建物取引業保証協会会員<br>
                        （公社）東京都宅地建物取引業協会会員<br>
                        （公社）首都圏不動産公正取引協議会加盟
                    </td>
                </tr>
                <tr>
                    <th>販売（媒介）</th>
                    <td>株式会社ラ・アトレレジデンシャル<br>
                        東京都港区海岸1-9-18国際浜松町ビル7F TEL：03-5425-2780<br>
                        東京都知事（3）第90611号<br>
                        （公社）全国宅地建物取引業保証協会会員<br>
                        （公社）東京都宅地建物取引業協会会員<br>
                        （公社）首都圏不動産公正取引協議会加盟
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="ov_gold_table ov_m1 animation">
            <tbody>

                <tr>
                    <th>【第一期販売概要】</th>
                </tr>
                <tr>
                    <th>販売戸数</th>
                    <td>5戸</td>
                </tr>
                <tr>
                    <th>販売価格</th>
                    <td>11,980万円～17,980万円</td>
                </tr>
                <tr>
                    <th>間取り</th>
                    <td>1LDK・2LDK</td>
                </tr>
                <tr>
                    <th>専有面積</th>
                    <td>58.28㎡～88.96㎡</td>
                </tr>
                <tr>
                    <th>バルコニー面積</th>
                    <td>2.20㎡～5.20㎡</td>
                </tr>
                <tr>
                    <th>管理費（月額）</th>
                    <td>22,300円 ～ 32,470円</td>
                </tr>
                <tr>
                    <th>修繕積立金（月額）</th>
                    <td>21,270円～32,470円</td>
                </tr>
                <tr>
                    <th>室内リノベーション完了日</th>
                    <td>令和4年8月末</td>
                </tr>
                <tr>
                    <th>販売スケジュール</th>
                    <td>令和4年6月25日（土）より先着順受付開始</td>
                </tr>
                <tr>
                    <th>入居予定時期</th>
                    <td>令和4年8月末日</td>
                </tr>
                <tr>
                    <th>広告有効期限</th>
                    <td>令和4年6月末日</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="ov_comment ov_m2 animation">
        <p class="ft2 s11">※先着順につき、ご希望の住戸が売却済みの場合が御座います。予めご了承ください。<br>
        また、申込の際には、2020年・2021年分の収入証明書、身分証明書（健康保険証・運転免許証）および認印が必要です。<br>
        ※坪表示は1㎡=0.3025坪で換算した約表示です。<br>
        ※敷地面積表示は、実測によるものです。<br>
        ※記載の区画図・間取り図は概略図で大凡の広さ・縮尺・方位で若干誤差があります。畳数は約表示です。<br>
        ※家具・調度品は販売価格に含まれません。<br>
        ※記載の図面・方位などが現況と相違する場合は現況を優先させていただきます。現地案内の際にお確かめください。<br>
        ※日照・眺望・通風・周辺環境については将来に渡り保証するものではありません。徒歩分数は現地を起点として80mを1分とした概算です。<br>
        ※記載事項は変更となる場合がございます。予めご了承ください。<br>
        ※完成予定日・引渡予定日は、天災地変、天候不順、社会情勢・施工環境の急変など、やむを得ない事情により変更となる場合があります。予めご了承ください。<br>
        ※掲載の情報は令和4年4月21日現在のもので変更になる場合があります。</br>
        </p>
    </div>
</div>


@endsection
