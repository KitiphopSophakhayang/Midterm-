<?php
include('Session.php');
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
        <title>Main</title>
        <link rel="stylesheet" href="css/styles-Data.css">
        <link rel="stylesheet" href="bootstrap.min.css">
    </head>

    <body style="background-color:#f3969a;">
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
            <form method="get" action="ProfileEdit.php">
                <img src="pic/6.jpg" width="80%" class="imgLogo">
                <p class="login-text" style="font-size: 1rem; font-weight: 800;">ข้อมูลส่วนตัว</p>
                <table>
                    <tr>
                        <td>ชื่อผู้ใช้</td>
                        <td><?php echo $objResult["username"];?></td>
                    </tr>
                    <tr>
                        <td>ชื่อ-นามสกุล</td>
                        <td><?php echo $objResult["fullname"];?></td>
                    </tr>
                    <tr>
                        <td>เบอร์โทร</td>
                        <td><?php echo $objResult["tel"];?></td>
                    </tr>
                    <tr>
                        <td>อีเมลล์</td>
                        <td><?php echo $objResult["email"];?></td>
                    </tr>
                    <tr>
                        <td>รหัสผ่าน</td>
                        <td><?php echo $objResult["pw"];?></td>
                    </tr>
                    <tr>
                        <td>บ้านเลขที่</td>
                        <td><?php echo $objResult["nbhome"];?></td>
                    </tr>
                    <tr>
                        <td>;จังหวัด</td>
                        <td><?php echo $objResult["province"];?></td>
                    </tr>
                    <tr>
                        <td>อำเภอ</td>
                        <td><?php echo $objResult["district"];?></td>
                    </tr>
                    <tr>
                        <td>ตำบล</td>
                        <td><?php echo $objResult["parish"];?></td>
                    </tr>
                    <tr>
                        <td>รหัสไปรษณีย์</td>
                        <td><?php echo $objResult["zip"];?></td>
                    </tr>
                    <tr>
                        <td>รายละเอียดที่อยู่</td>
                        <td><?php echo $objResult["address"];?></td>
                    </tr>
                </table>
                <br><br>
                <button class="btn btn-danger" type="submit">แก้ไข</button>
            </form>
        </div>
    </body>
</html>