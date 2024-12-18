<style type="text/css">
<!--
#bg_0{
    position:absolute;
    top:10px;
    left:10px;
    z-index:1;
}

#icon_1{
    position:absolute;
    top:70%;
    left:40%;    
    z-index:2;
}

#icon_2{
    position:absolute;
    top:70%;
    left:51%;   
    z-index:2;
}

#icon_3{
    position:absolute;
    top:70%;
    left:62%;    
    z-index:2;
}

#icon_4{
    position:absolute;
    top:70%;
    left:73%;    
    z-index:2;
}

-->
</style>


<?php


include("config.php");



?>


<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tv03 回首來時路</title>

</head>

<body>
<div>
    <img src="img/bg.png" width=" <?php echo $width ."%"; ?>" height="<?php echo $height ."%"; ?>"  style="position: fixed; top: 0; left: 0;" >
    </div>
	
	<div><a href="01/index.php"><img src="img/icon-01.png" width=10% id="icon_1"></a> </div>
	<div><a href="02/index.php"><img src="img/icon-02.png" width=10% id="icon_2"></a> </div>
	<div><a href="03/index.php"><img src="img/icon-03.png" width=10% id="icon_3"></a> </div>
	<div><a href="04/index.php"><img src="img/icon-04.png" width=10% id="icon_4"></a> </div>
	


</body>
</html>
