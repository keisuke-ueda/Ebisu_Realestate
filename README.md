# Ebisu_Realestate
恵比寿不動産のサイト開発 Laravel

#### 連絡事項
2022/3/16 物件概要ページ、アンケートページベース完成(上田)
2022/3/16 テストサーバー環境整備完了(上田)
2022/3/16 アクセスページ完成(上田)


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



