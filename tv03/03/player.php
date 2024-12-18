<?php
include("../config.php");

session_start(); 
if (isset($_GET['vid'])) {
  $_SESSION['vid'] = $_GET['vid'];
}else {
	$_SESSION['vid']= 3 ;
}


?>

<body>
	<div>
    <img src="img/bg0.png"  width=100% height=100% style="position: fixed; top: 0; left: 0;">
    </div>
<div><a href="index.php"><img src="../img/icon-Right.png" style="position: absolute; top: <?php echo $top_botton; ?>; left: <?php echo $left1_botton; ?>; transform: rotate(270deg) scale(0.5);" alt="next"></a></div>

 <div><a href="../index.php"><img src="../img/icon-Home.png" style="position: absolute; top: <?php echo $top_botton; ?>; left: <?php echo $left3_botton; ?>; transform: scale(0.5);"  alt="home"></a>
	</div>

<div style="position: absolute; top: 45%; left: 50%; transform: translate(-50%, -50%);">

	<video width="100%" controls poster="<?php echo "img/thumb/IMG" .$_SESSION['vid'] .".png" ; ?>" >
  <source src="../vedio/<?php echo "3-" .$_SESSION['vid'] .".mp4" ?>" type="video/mp4">
  </video>
	</div>

	</body>
    

</html>