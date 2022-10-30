<?php
session_start();
$objConnect = mysqli_connect("localhost","root","")or die("Can't connect to database");
$db = mysqli_select_db($objConnect, "DBClean");
mysqli_query($objConnect, "SET NAMES utf8");

if($objConnect->connect_error) {
    die("Connection failed". $conn->connect_error);
}

$strSQL = "SELECT * FROM users WHERE username = '".$_SESSION['username']."' ";
$objQuery = mysqli_query($objConnect, $strSQL);
$objResult = mysqli_fetch_array($objQuery);
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Profile Edit</title>
        <link rel="stylesheet" href="css/styles-Data.css">
        <link rel="stylesheet" href="bootstrap.min.css">
    </head>

    <body style="background-color:lightcoral">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Clear&Clean</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="index.php">หน้าหลัก
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Profile.php">โปรไฟล์</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="History.php">ดูรายการ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">ออกจากระบบ</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-sm-2" type="text" placeholder="Search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
        <div class="frame">
            <form method="get" action="ProfileEditSuccess.php">
                <img src="pic/6.jpg" class="imgLogo">
                <p class="login-text" style="font-size: 2rem; font-weight: 800;">แก้ไขข้อมูลส่วนตัว</p>
                <table>
                    <tr>
                        <td><label for="exampleInputPassword1" class="form-label mt-2">ชื่อผู้ใช้</label></td>
                        <td>
                            <input type="text" class="form-control" name="username" id="username" value="<?=$objResult['username'];?>"/>
                        </td>
                    </tr>
                    <tr>
                    <td><label for="exampleInputPassword1" class="form-label mt-2">ชื่อนาสกุล</label></td>
                        <td>
                            <input type="text" class="form-control" name="fullname" id="fullname" value="<?=$objResult['fullname'];?>"/>
                        </td>
                    </tr>
                    <tr>
                    <td><label for="exampleInputPassword1" class="form-label mt-2">เบอร์โทร</label></td>
                        <td>
                            <input type="text" class="form-control" name="tel" id="tel" value="<?=$objResult['tel'];?>"/>
                        </td>
                    </tr>
                    <tr>
                    <td><label for="exampleInputPassword1" class="form-label mt-2">อีเมล</label></td>
                        <td>
                            <input type="text" class="form-control" name="email" id="email" value="<?=$objResult['email'];?>"/>
                        </td>
                    </tr>
                    <tr>
                    <td><label for="exampleInputPassword1" class="form-label mt-2">รหัสผ่าน</label></td>
                        <td>
                            <input type="text" class="form-control" name="pw" id="pw" value="<?=$objResult['pw'];?>"/>
                        </td>
                    </tr>
                    <tr>
                    <td><label for="exampleInputPassword1" class="form-label mt-2">บ้านเลขที่</label></td>
                        <td>
                            <input type="text" class="form-control" name="nbhome" id="nbhome" value="<?=$objResult['nbhome'];?>"/>
                        </td>
                    </tr>
                    <tr>
                    <td><label for="exampleInputPassword1" class="form-label mt-2">จังหวัด</label></td>
                        <td>
                            <input type="text" class="form-control" name="province" id="province" value="<?=$objResult['province'];?>"/>
                        </td>
                    </tr>
                    <tr>
                    <td><label for="exampleInputPassword1" class="form-label mt-2">อำเภอ</label></td>
                        <td>
                            <input type="text" class="form-control" name="district" id="district" value="<?=$objResult['district'];?>"/>
                        </td>
                    </tr>
                    <tr>
                    <td><label for="exampleInputPassword1" class="form-label mt-2">ตำบล</label></td>
                        <td>
                            <input type="text" class="form-control" name="parish" id="parish" value="<?=$objResult['parish'];?>"/>
                        </td>
                    </tr>
                    <tr>
                    <td><label for="exampleInputPassword1" class="form-label mt-2">รหัสไปรษณี</label></td>
                        <td>
                            <input type="text" class="form-control" name="zip" id="zip" value="<?=$objResult['zip'];?>"/>
                        </td>
                    </tr>
                    <tr>
                    <td><label for="exampleInputPassword1" class="form-label mt-2">รายละเอียด</label></td>
                        <td>
                            <input type="text" class="form-control" name="address" id="address" value="<?=$objResult['address'];?>"/>
                        </td>
                    </tr>
                </table>
                <br><br>
                <button class="btn btn-info" type="submit">ยืนยัน</button>
                <button class="btn btn-danger" type="cancel" onclick="window.location='Profile.php';return false;">ยกเลิก</button>
            </form>
        </div>
    </body>
</html>