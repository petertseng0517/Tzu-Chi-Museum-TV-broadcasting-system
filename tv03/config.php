<?php
//這是TV03 [回首來時路] 設定值
//底圖縮放百分比值
$width = 100;
$height= 100;

$resize_botton = 0.4 ; //導覽列按鈕的縮小比例，用transform: scale(XXX)來處理
$top_botton = "87%" ; //導覽列按鈕距離上方的比例
$left1_botton = "73%" ;//導覽列按鈕距離左方的比例(第1顆)
$left2_botton = "78%" ;//導覽列按鈕距離左方的比例(第2顆)
$left3_botton = "90%" ;//導覽列按鈕距離左方的比例(第3顆)

//$dir_path = 'vedio'; // 指定Linux影片目錄路徑
$file_list = scandir($dir_path); // 列出目錄中的所有檔案和子目錄



//計算-分類一「建院心路」所需頁面數
$count_1 = 0; // 計數器初始化
foreach ($file_list as $file) {
    if (substr($file, 0, 1) === '1') { // 判斷檔案名稱的第一個字符是否為 "1"
        $count_1++;
    }
}

if (($count_1 % 9) == 0){
	$total_page1 = intval($count_1 /9);
}else {
$total_page1 = intval($count_1 / 9) +1;
}
$category1_vedio_amount = $count_1 ; //算出有多少分類一的檔案
$limitpage_01 =$total_page1 ; //算出需要多少頁


 
 //計算-分類二「建院開示」所需頁面數
$count_2 = 0; // 計數器初始化
foreach ($file_list as $file) {
    if (substr($file, 0, 1) === '2') { // 判斷檔案名稱的第一個字符是否為 "2"
        $count_2++;
    }
}

if (($count_2 % 9) == 0){
	$total_page2 = intval($count_2 /9);
}else {
$total_page2 = intval($count_2 / 9) +1;
}
$category2_vedio_amount = $count_2 ; //算出有多少分類三的檔案
$limitpage_02 =$total_page2 ; //算出需要多少頁





//計算-分類三「慈院簡介」所需頁面數 (一頁9個影片)
$count_3 = 0; // 計數器初始化
foreach ($file_list as $file) {
    if (substr($file, 0, 1) === '3') { // 判斷檔案名稱的第一個字符是否為 "3"
        $count_3++;
    }
}

if (($count_3 % 9) == 0){
	$total_page3 = intval($count_3 /9);
}else {
$total_page3 = intval($count_3 / 9) +1;
}
$category3_vedio_amount = $count_3 ; //算出有多少分類三的檔案
$limitpage_03 =$total_page3 ; //算出需要多少頁




//計算-志為人醫所需頁面數
$count_4 = 0; // 計數器初始化
foreach ($file_list as $file) {
    if (substr($file, 0, 1) === '4') { // 判斷檔案名稱的第一個字符是否為 "4"
        $count_4++;
    }
}

if (($count_4 % 9) == 0){
	$total_page4 = intval($count_4 /9);
}else {
$total_page4 = intval($count_4 / 9) +1;
}
$category4_vedio_amount = $count_4 ; //算出有多少分類三的檔案
$limitpage_04 =$total_page4 ; //算出需要多少頁



?>
