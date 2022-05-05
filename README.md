# Ebisu_Realestate
恵比寿不動産のサイト開発 Laravel

## 連絡事項
4/28 Locationページの作成開始、古いREADMEの古い記述は削除  
4/29 Locationページ継続中、Designページ着手  
5/5  
DESIGN：PC・SPともにほぼ完成  
LOCATION：PC・SPともに残りは地図の表示切り替え処理、各所見直し・調整  
BLAND：PCのみ大枠が完成  
ヘッダー：location,design,blandページへのリンク活性化・newマーク付与  
TOP：info部分に情報追加  

ttt

## 調整課題
### Locationページ
#### 不足画像
#### マップ
 
### Designページ



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
・ft4---"Noto Serif JP Regular"
・ft5---"小塚ゴシック Pr6N R"

# フォントサイズ
・基本ベースが16px (smallが14px)
1rem - 16px
0.25remあたり4px

・s15---15px
・s19---19px
