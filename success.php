<html>
<head>
<meta charset="utf8">

<style>
  body {
    background-color: #ddd;
    font-family: "標楷體", "KaiTi", serif;
  }
</style>

<body>
</head>

<center>
  <h1 style="font-size: 40px;">國立高雄大學資管系晚會報名系統</h1>
</center>

<center>
  <h2 style="font-size: 30px;">晚會時間:2024/02/28 01:00~23:59</h2>
</center>

<center>
<form action="success-1.php" method="post" style="font-size: 25px;">

姓名：<input type="text" name="fullName" style="font-size: 15px;" value="" placeholder="輸入姓名" required><br/>
學號：<input type="text" name="studentID" style="font-size: 15px;" placeholder="輸入學號" required><br/>
系級：<input type="text" name="department" style="font-size: 15px;" placeholder="輸入系級" required><br/>
性別：
<input type="radio" name="gender" style="font-size: 15px;" value="男">男
<input type="radio" name="gender" style="font-size: 15px;" value="女">女
<br/>
出生日期：
<input type="date" name="birthdate" style="font-size: 15px;" value=""><br/>
電子郵件：
<input type="email" name="email" style="font-size: 15px;" placeholder="輸入電子郵件" value=""><br/>
手機號碼：
<input type="tel" name="phone" style="font-size: 15px;" placeholder="輸入手機號碼" required><br/>
選擇年級：
<select name="class" style="font-size: 15px;">
<option value="大一">大一</option>
<option value="大二">大二</option>
<option value="大三">大三</option>
<option value="大四">大四</option>
</select>
<br/>
是否攜伴：
<input type="radio" name="withPartner" style="font-size: 15px;" value="是">是
<input type="radio" name="withPartner" style="font-size: 15px;" value="否" checked>否
<br/>
攜伴姓名：<input type="text" name="partnerName" style="font-size: 15px;" placeholder="攜伴姓名"><br/>
參加人數：<input type="number" name="numAttendees" style="font-size: 15px;" placeholder="總參加人數" required><br/>

飲食種類：
<input type="checkbox" name="dietaryPreference[]" style="font-size: 15px;" value="素食">素食
<input type="checkbox" name="dietaryPreference[]" style="font-size: 15px;" value="葷食">葷食
<br/>

交通需求：
<input type="radio" name="transportation" style="font-size: 15px;" value="需要">需要
<input type="radio" name="transportation" style="font-size: 15px;" value="不需要" checked>不需要
<br/>

服裝選擇：
<input type="radio" name="dressCode" style="font-size: 15px;" value="西裝">西裝
<input type="radio" name="dressCode" style="font-size: 15px;" value="狂野" checked>狂野
<input type="radio" name="dressCode" style="font-size: 15px;" value="全裸">全裸
<br/>

活動選擇：
<input type="checkbox" name="activity[]" style="font-size: 15px;" value="活動A-聯誼">活動A-聯誼
<input type="checkbox" name="activity[]" style="font-size: 15px;" value="活動B-鬼抓人">活動B-鬼抓人
<input type="checkbox" name="activity[]" style="font-size: 15px;" value="活動C-躲貓貓">活動C-躲貓貓
<br/>

酒精飲品：
<input type="radio" name="alcohol" style="font-size: 15px;" value="飲用">飲用
<input type="radio" name="alcohol" style="font-size: 15px;" value="不飲用" checked>不飲用
<br/>

其他事項問題：<br/>
<textarea name="specialRequest" rows="4" cols="50" style="font-size: 15px;" placeholder="其他問題會輸入會有專人回答"></textarea><br/>

上傳照片：
<input type="file" name="image" style="font-size: 15px;"><br/>

<br/>
<input type="submit" style="font-size: 25px;" value="submit">
<input type="reset" style="font-size: 25px;" value="clear">
</center>

</form>

<?php
session_start();
?>
<html>
<meta charset="utf-8">
<center>
<body>

<?php
if(isset($_SESSION["check"])){
    if($_SESSION["check"]=="Yes"){
        echo "<form action='logout.php' method='post'>";
        echo "<button type='submit' style='font-size: 20px;'>登出</button>";
        echo "</form>";
    }else{
        echo "還想壞壞喔";
        echo "3秒鐘之後回登入畫面";
        header("Refresh:3;url=login.php");
    }
}else{
    header("Refresh:3;url=login.php");
}
?>

</center>
</body>
</html>

