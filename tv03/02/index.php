<?php
$dir_path = "../vedio"; // 指定影片目錄路徑
include("../config.php");


?>
<style type="text/css">
<!--


#IMG_1{
    position:absolute;
    top:7%;
    left:17%;
    width:20%;
    height:23%;    
   
}

#IMG_2{
    position:absolute;
    top:7%;
    left:40%;
    width:20%;
    height:23%;    
    
}

#IMG_3{
    position:absolute;
    top:7%;
	left:63%;
    width:20%;
    height:23%;    
    
}


#IMG_4{
    position:absolute;
    top:35%;
    left:17%;
    width:20%;
    height:23%;    
    
}

#IMG_5{
    position:absolute;
    top:35%;
    left:40%;
    width:20%;
    height:23%;    
    
}

#IMG_6{
    position:absolute;
    top:35%;
    left:63%;
    width:20%;
    height:23%;    
    
}

#IMG_7{
    position:absolute;
    top:63%;
    left:17%;
    width:20%;
    height:23%;    
   
}

#IMG_8{
    position:absolute;
    top:63%;
    left:40%;
    width:20%;
    height:23%;    
    
}

#IMG_9{
    position:absolute;
    top:63%;
   left:63%;
    width:20%;
    height:23%;    
    
}



-->
</style>

<?php


session_start(); 
if (isset($_GET['p'])) {
  $_SESSION['page'] = $_GET['p'];
}else {
	$_SESSION['page']= 1 ;
}

$page = $_SESSION['page'];
$pre =$page -1;
$next =$page+1;

//如果變數小於0或超過上傳影片所需頁面，代表超過邊界，直接跳回首頁`
if($pre<0 or $next>($limitpage_02+1)){
	session_destroy();
	header('Location: ../index.php');
}


$vedio_id = 1;
?>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>建院開示</title>
    
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

  <link rel="stylesheet" type="text/css" href="/css/font-awesome.css? <?php echo $css_id; ?>">
</head>


<body>
<!-- 中間縮圖區 -->
<div><img src="img/bg0.png"  width=100% height=100% style="position: fixed; top: 0; left: 0;">
</div>

<div><a href="<?php echo 'index.php?p=' .$pre ; ?>"><img src="../img/icon-Left.png" style="position: absolute; top: <?php echo $top_botton; ?>; left: <?php echo $left1_botton; ?>; transform: scale(0.5);" alt="pre"></a></div>
 <div><a href="<?php echo 'index.php?p=' .$next ; ?>"><img src="../img/icon-Right.png" style="position: absolute; top: <?php echo $top_botton; ?>; left: <?php echo $left2_botton; ?>; transform: scale(0.5);" alt="next"></a></div>
 <div><a href="../index.php"><img src="../img/icon-Home.png" style="position: absolute; top: <?php echo $top_botton; ?>; left: <?php echo $left3_botton; ?>; transform: scale(0.5);"  alt="home"></a></div>


<?php
$vedio_id = 0;
$img_location_id = 0;
echo "page=" .$page;

for ($i = 1; $i <= 3; $i++) {
	for ($j = 1; $j <= 3; $j++) {
  $vedio_id = $vedio_id + 1;
  $img_location_id = 9*($page-1)+$vedio_id;
  
  if($img_location_id>$category2_vedio_amount){
	  //要顯示在網頁的縮圖，已經超過影片總數量，則停止顯示
	  exit();
  }
  
  ?>
  <div class="thumb-container">
  <a href="player.php?vid=<?php echo $img_location_id; ?>"><img src="<?php echo "img/thumb/thumb" .$img_location_id .".png" ; ?>" id="<?php echo "IMG_" .$vedio_id ;?>"  width=" <?php echo $width_thumb; ?>"></a>
<?php 
}
echo "</p>";

}
?>





</body>

</html>
