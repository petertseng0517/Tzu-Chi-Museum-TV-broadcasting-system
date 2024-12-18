<?php



//這是TV01 [慈濟醫療志業] 設定值
//螢幕解析度
$width = 100;
$height= 100;

$resize_botton = 0.4 ; //導覽列按鈕的縮小比例，用transform: scale(XXX)來處理
$top_botton = "87%" ; //導覽列按鈕距離上方的比例
$left1_botton = "73%" ;//導覽列按鈕距離左方的比例(第1顆)
$left2_botton = "78%" ;//導覽列按鈕距離左方的比例(第2顆)
$left3_botton = "90%" ;//導覽列按鈕距離左方的比例(第3顆)

//計算-精神理念圖片檔案數量
//$concept_path = "01concept/img"; //linux
//$concept_path = "img"; //windows
$concept_list=scandir($concept_path);
$limitpage_concept = count($concept_list)-2; //圖片數量即網頁上限數


//計算-醫療簡介圖片檔案數量
//$introduction_path = "02introduction/img";
$introduction_list=scandir($introduction_path);
$limitpage_introduction = count($introduction_list)-2; //圖片數量即網頁上限數

//計算-成果貢獻圖片檔案數量

//計算-認證/榮耀圖片檔案數量
$award_list=scandir($award_path);
$limitpage_award = count($award_list)-2; //圖片數量即網頁上限數
//計算-東部首創圖片檔案數量
$originate_list=scandir($originate_path);
$limitpage_originate = count($originate_list)-2; //圖片數量即網頁上限數


//計算-研發創新圖片檔案數量
//$innovation_path = "04innovation/img";
$innovation_list=scandir($innovation_path);
$limitpage_innovation = count($innovation_list)-2; //圖片數量即網頁上限數







?>
