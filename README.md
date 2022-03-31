# Ebisu_Realestate
恵比寿不動産のサイト開発 Laravel

#### 連絡事項
2022/3/16 物件概要ページ、アンケートページベース完成(上田)
2022/3/16 テストサーバー環境整備完了(上田)
2022/3/16 アクセスページ完成(上田)  
2022/3/19 ハンバーガーメニュー作成（現時点でハンバーガーボタンはフェードインではなく固定で表示しています。スクロールでハンバーガーボタンを超えると固定ヘッダーが表示されます。）  
2022/3/21 動画完成。はんえいよろしく。ebisu_ato_0321.mp4 Public内にあります
2022/3/21 メール送信機能の実装を開始
### 2022/3/21　デプロイ時の.envファイルの記載注意(31~38行目)　＊上田覚書
2022/3/21 物件概要調整　上田→中野　TOPページのボタンデザインCSS作成依頼(bootstrapで表現不可のため)
ゴールドのグラデーションとテキストのシャドウ
2022/3/23 ヘッダー、トップページを修正中
### 2022/3/24 背景白のlayout2.brade.phpを追加(各種ページで使用)
2022/3/25　画像完成
==TOP==
・theplan.png
・theplan.png
・theebisu.png
・thedesign.png
・theaccess.png
・恵比寿ガーデンプレイス1.png
・ウエスティンホテル1.png
・アメリカ橋公園1.png
・国立科学博物館付属自然教育園1.png
・4区.png
・デザイン1.png
・TOP_7.png

==EBISU==
・Ebisu_1.png
・Ebisu_2.png
・ガーデンプレイス2.jpg
・ウエスティン2.jpg
・国立付属1.jpg
・医療科学研究所.jpg
・東急ストア.jpg
・Ebisu_3.png

==ACCESS==
・ACCESS_1.png
・ACCESS_2.png
・ACCESS_3.png
・ACCESS_4.png
・ACCESS_5.png
・ACCESS_6.png
・ACCESS_7.png


# 調整課題
## 全体
ロゴとかの画像-上田

## TOP
・完成
・白テキストにするかも
・グレーテキスト

## EBISU
・完成

## ACCESS
・完成

## 物件概要
・完成

## アンケート
・レイアウト調整-横田
・バリデーションチェック-横田
・メール送信機能作成-横田


## 物件エントリー
・余白の取り方修正-横田
・必須近くの余白-横田
・番号に初期テキスト-横田
・家族人数のインプットボックス小さく-横田
・入力内容確認のボタン-横田
・バリデーションチェック-横田
・メール送信機能作成-横田


## 現地案内
・完成



## Class管理表
### Layout : 共通レイアウト(テンプレート)
page_layout : ページを囲む最大のdivタグ。この中にヘッダー、フッター、各ページの内容を格納する。  

### Header : ヘッダー
header : ヘッダー全体を示すheaderタグ
header_link : 各リンクのaタグを格納するdivタグ(リンクの数だけ存在)  

### Footer : フッター
footer : フッター全体を示すfooterタグ  
footer_link ： 各リンクのaタグを格納するdivタグ(リンクの数だけ存在)  
sans-serif : このクラスが付与されたタグは書体をsans-serifにする。  

### Top : トップページ
first_view : 動画およびマップを背景とする箇所をまとめたdivタグ  
movie : 動画を格納するvideoタグ  
after_movie : 動画終了時に表示されるマップ部分をまとめたdivタグ  
display-5l1 : マップ上、白の「GrandGarden」ロゴ  
display-5l2 : マップ上、ゴールドの「THE」ロゴ  
display-5l3 : マップ上、ゴールドの「REAL」ロゴ  
display-5l4 : マップ上、ゴールドの「ONE」ロゴ  
display-5f : マップ上、光の画像

second_view : アクセス情報やエントリー情報など黒い背景の箇所をまとめたdivタグ  

third_view : 「Read More」のボタンが複数ある白背景の箇所をまとめたdivタグ  

### Overview : 物件概要ページ(一旦完成 2022/3/16)
p-title:ページタイトル
main-content:メインコンテンツ
PropertyTable:物件概要テーブル
comment:コメント

### Guidance_Page : 現地案内ページ
p-title:ページタイトル
main-content:メインコンテンツ

### DocumentRequest_Page : 資料請求ページ


### Questionnaire_Page : アンケートページ(一旦完成 2022/3/16)
p-title:ページタイトル
main-content:メインコンテンツ
mailformpro:メールフォーム(情報名)
mfp_phase:メールフォームフェーズ
mailfield:メールフィールド
mailform:メールフォーム(本体)


### :CONCEPT
p-title:ページタイトル
main-content:メインコンテンツ


# animationパーツ
Class名-開始タイミング[s]-方向または拡縮
・animation-0-b
・animation-1-b
・animation-2-b
・animation-0-zm
・animation-1-zm
・animation-2-zm

# hover animation
ホバーアニメーション
・mh-parts

# フォントパーツ
・ft1---"Roboto Thin"
・ft2---"Noto Serif JP ExtraLight"
・ft3---"Adobe Garamond Pro Regular"
・ft4---"Adobe Garamond Pro Regular"
・ft5---"小塚ゴシック Pr6N R"

# フォントサイズ
・基本ベースが16px (smallが14px)
1rem - 16px
0.25remあたり4px

・s15---15px
・s19---19px

