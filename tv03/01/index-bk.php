<?php
$dir_path = "../vedio"; // 指定影片目錄路徑
include("../config.php");

session_start(); 
if (isset($_GET['p'])) {
  $_SESSION['page'] = $_GET['p'];
}else {
	$_SESSION['page']= 1 ;
}

$page = $_SESSION['page'];
$pre =$page -1;
$next =$page+1;

//如果變數小於0，代表超過邊界，直接跳回首頁`
if($pre<0){
	session_destroy();
	header('Location: ../index.php');

}


// ****因為建院心路僅有一張，所以不需要判斷page數值
//如果變數大於圖片總數量，代表超過邊界，應該要跳出alert，然後跳回首頁。
//if ($page == $limitpage_dr) {
//    echo "<script>alert('已經是最後一張');</script>";
//}elseif($page > $limitpage_dr){
//    unset($_SESSION); // 清除會話數據
//	header('Location: ../index.php');
//    exit(); // 終止當前腳本以確保順利重定向
//}

?>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>doctor</title>
    
  

</head>


<body>
	<div>
    <img src="img/bg0.png" width=100% height=100% style="position: fixed; top: 0; left: 0;" id="bg_0;" >
    </div>
	
	
	<div style="position: absolute; top: 40%; left: 50%; transform: translate(-50%, -50%);">
	<video width="105%" controls poster="img/bg01.png" >
  <source src="../vedio/1-1.mp4" type="video/mp4">
  </video>
	</div>
	
	<div><a href="../index.php"><img src="img/icon-Left.png" style="position: absolute; top: <?php echo $top_botton; ?>; left: <?php echo $left1_botton; ?>; transform: scale(0.5);" alt="pre"></a></div>
	<div><a href="../index.php"><img src="img/icon-Right.png" style="position: absolute; top: <?php echo $top_botton; ?>; left: <?php echo $left2_botton; ?>; transform: scale(0.5);" alt="next"></a></div>
	<div><a href="../index.php"><img src="img/icon-Home.png" style="position: absolute; top: <?php echo $top_botton; ?>; left: <?php echo $left3_botton; ?>; transform: scale(0.5);"  alt="home"></a></div>
    
</body>
    

</html>
