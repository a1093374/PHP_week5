<head>
<meta charset="utf8">
<style>
  body {
    background-color: #ddd;
    font-family: "標楷體", "KaiTi", serif;
  }
</style>

<center>
<?php
echo "<style>body { font-size: 20px; }</style>";
echo "登入失敗<br/>";
echo "3秒鐘之後回登入畫面";
header("Refresh:3;url=login.php");

?>
</center>