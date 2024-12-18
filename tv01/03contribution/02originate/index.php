<?php
$originate_path = "img";
include("../../config.php");

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

//如果變數大於圖片總數量，代表超過邊界，應該要跳出alert，然後跳回首頁。

if ($page == $limitpage_originate ) {
    //echo "<script>alert('將前往瀏覽最後一位');</script>";
}elseif($page > $limitpage_originate ){
    unset($_SESSION); // 清除會話數據
	header('Location: ../index.php');
    exit(); // 終止當前腳本以確保順利重定向
}

?>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>成果貢獻</title>
    
  

</head>


<body>
	<div>
    <img src="img/<?php echo $page .".png"?>" width="<?php echo $width ."%"; ?>" height="<?php echo $height ."%"; ?>" style="position: fixed; top: 0; left: 0;">
    </div>
	
	<div><a href="<?php echo 'index.php?p=' .$pre ; ?>"><img src="../../img/icon-Left.png" style="position: absolute; top: <?php echo $top_botton; ?>; left: <?php echo $left1_botton; ?>; transform: scale(0.5);" alt="pre"></a></div>
 <div><a href="<?php echo 'index.php?p=' .$next ; ?>"><img src="../../img/icon-Right.png" style="position: absolute; top: <?php echo $top_botton; ?>; left: <?php echo $left2_botton; ?>; transform: scale(0.5);" alt="next"></a></div>
 <div><a href="../index.php"><img src="../../img/icon-Left.png" style="position: absolute; top: <?php echo $top_botton; ?>; left: <?php echo $left3_botton; ?>; transform: scale(0.5) rotate(90deg);"  alt="home"></a></div>
    
    
</body>
    

</html>
