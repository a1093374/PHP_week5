<head>
<meta charset="utf8">
</head>


<style>
  body {
    background-color: #ADD8E6;
    font-family: "標楷體", "KaiTi", serif;
    font-size: 25px;
  }
</style>


<center>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = $_POST["fullName"];
    $studentID = $_POST["studentID"];
    $department = $_POST["department"];
    $gender = $_POST["gender"];
    $birthdate = $_POST["birthdate"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $class = $_POST["class"];
    $withPartner = isset($_POST["withPartner"]) ? $_POST["withPartner"] : "否";
    $partnerName = isset($_POST["partnerName"]) ? $_POST["partnerName"] : "";
    $numAttendees = $_POST["numAttendees"];
    $dietaryPreference = isset($_POST["dietaryPreference"]) ? implode(", ", $_POST["dietaryPreference"]) : "無";
    $transportation = $_POST["transportation"];
    $dressCode = $_POST["dressCode"];
    $activities = isset($_POST["activity"]) ? implode(", ", $_POST["activity"]) : "無";
    $alcohol = $_POST["alcohol"];
    $specialRequest = isset($_POST["specialRequest"]) ? $_POST["specialRequest"] : "";
    $imagePath = "個人照.jpg";


    echo "姓名：$fullName<br/>";
    echo "學號：$studentID<br/>";
    echo "系級：$department<br/>";
    echo "性別：$gender<br/>";
    echo "出生年月日：$birthdate<br/>";
    echo "電子郵件：$email<br/>";
    echo "手機號碼：$phone<br/>";
    echo "年級：$class<br/>";
    echo "是否有伴：$withPartner<br/>";
    if ($withPartner == "是") {
        echo "伴侶姓名：$partnerName<br/>";
    }
    echo "參加人數：$numAttendees<br/>";
    echo "飲食種類：$dietaryPreference<br/>";
    echo "交通選擇：$transportation<br/>";
    echo "服裝選擇：$dressCode<br/>";
    echo "活動選擇：$activities<br/>";
    echo "含酒精飲料：$alcohol<br/>";
    echo "其他事項問題：$specialRequest<br/>";
    echo "<img src=\"$imagePath\" alt=\"個人照片：\"><br/>";
}
?>
</center>