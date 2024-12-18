<?php
//這是TV02 [看見菩薩典範] 設定值
//螢幕底圖呈現百分比
$width = 100;
$height= 100;

$resize_botton = 0.4 ; //導覽列按鈕的縮小比例，用transform: scale(XXX)來處理
$top_botton = "87%" ; //導覽列按鈕距離上方的比例
$left1_botton = "73%" ;//導覽列按鈕距離左方的比例(第1顆)
$left2_botton = "78%" ;//導覽列按鈕距離左方的比例(第2顆)
$left3_botton = "90%" ;//導覽列按鈕距離左方的比例(第3顆)

//計算醫護類檔案數量
//$dr_path="dr/img/";
$filelist_dr=scandir($dr_path);
$dr_count=count($filelist_dr)-2;
$limitpage_dr = $dr_count; //設定有多少張醫師圖片要輪播


//計算志工類檔案數量
//$dr_path="volunteers/img";
$filelist_volunteers=scandir($dr_path);
$volunteers_count=count($filelist_volunteers)-2;
$limitpage_volunteers = $volunteers_count; //設定有多少張志工圖片要輪播



//計算大德類檔案數量
//$donor_path="donor/img";
$filelist_donor=scandir($donor_path);
$donor_count=count($filelist_donor)-2;
$limitpage_donor = $donor_count; //設定有多少張大德圖片要輪播



?>
