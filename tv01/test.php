<?php
session_start();

// 存入上次當次瀏覽時間
if (!isset($_SESSION['LAST_ACTIVITY'])) {
    $_SESSION['LAST_ACTIVITY'] = time();
}

// 判斷是否已閒置超過 30 秒，若有則跳回首頁
if (time() - $_SESSION['LAST_ACTIVITY'] > 30) {
    // 超過閒置時間，導向首頁
    header("Location: index.php");
    session_destroy();
    exit;
}

// 更新上一次訪問時間
$_SESSION['LAST_ACTIVITY'] = time();
?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="refresh" content="10">
</head>
<body>
    <!-- 網頁內容 -->
</body>
</html>
