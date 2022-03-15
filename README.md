# Ebisu_Realestate
恵比寿不動産のサイト開発 Laravel


## Class管理表

### Layout : 共通レイアウト(テンプレート)
page_layout : ページを囲む最大のdivタグ。この中にヘッダー、フッター、各ページの内容を格納する。  

### Header : ヘッダー
header container-fluid (2クラス): ヘッダー全体を示すheaderタグ(1つのcontainerとする)  
header_content row justify-content-between align-items-center (4クラス): headerタグの中身を格納するdivタグ(これをcontainerの中の1行とする)  
header_title d-flex col-md-auto (3クラス): ロゴ(img)と「ラ・アトレ...ガーデン」(p)を格納するdivタグ(これを1行の中の1列とする)  
header_links d-flex col-md-auto (3クラス): ページへのリンクを横並びで格納するdivタグ(これを1行の中の1列とする)  
header_link : 各リンクのaタグを格納するdivタグ(リンクの数だけ存在)  

### Footer : フッター
footer container-fluid (2クラス) : フッター全体を示すfooterタグ(1つのcontainerとする)  
footer_links row justify-content-center (3クラス) : フッター上部に横並びで格納するdivタグ(containerの中の1行とする)
footer_link col-md-auto (2クラス) ： 各リンクのaタグを格納するdivタグ(リンクの数だけ存在、footer_links1行の中の1列とする)  
phone_destination : 「ラ・アトレ恵比寿グランガーデン現地販売センター」を格納するpタグ  
phone_num : 電話番号を格納するpタグ  
business_time : 営業時間、定休日(pタグ)を格納するdivタグ  
seller : [売主]株式会社アトレ のpタグ  
group_title : 東京ジャスダック上場企業LAホールディングス(pタグ)  
group_description : ラ・アトレはLAホールディングスのグループ会社です。(pタグ)  
copy_right : 著作権ラベル(pタグ)  
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

### Overview : 物件概要ページ



### Guidance_Page : 現地案内ページ
### DocumentRequest_Page : 資料請求ページ
### Questionnaire_Page : アンケートページ



### :追加ページ1
### :追加ページ2
### :追加ページ3

