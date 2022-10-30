<?php
session_start();
$objConnect = mysqli_connect("localhost","root","")or die("Can't connect to database");
$db = mysqli_select_db($objConnect, "DBClean");
mysqli_query($objConnect, "SET NAMES utf8");

if($objConnect->connect_error) {
    die("Connection failed". $conn->connect_error);
}

$strSQL = "SELECT * FROM Virus";
$objQuery = mysqli_query($objConnect, $strSQL);
$objResult = mysqli_fetch_array($objQuery);
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Virus</title>
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
            <form method="get" action="VirusPayment.php">
                <table>
                <p class="login-text" style="font-size: 2rem; font-weight: 800;">บริการฆ่าเชื้อและไวรัส</p>
                    <tr>
                    <td><label for="exampleInputPassword1" class="form-label mt-2">ชื่อนามสกุล</label></td>
                        <td><input type="text"  class="form-control" name="v_Fullname" id="v_Fullname" size="25" ></td>
                    </tr>
                    <tr>
                    <td><label for="exampleInputPassword1" class="form-label mt-2">วันที่</label></td>
                        <td><input type="Date" name="v_Date" id="v_Date" required></td>
                    </tr>
                    <tr>
                        <td>เวลา</td>
                        <td><input type="time" name="v_Time" id="v_Time" required></td>
                    </tr>
                    <tr>
                    <td><label for="exampleInputPassword1" class="form-label mt-2">ระยะเวลา(ชั่วโมง)</label></td>
                        <td><input type="text" class="form-control" name="v_Duration" id="v_Duration"></td>
                    </tr>
                    <tr>
                    <td><label for="exampleInputPassword1" class="form-label mt-2">สถานที่ใช้บริการทำความสะอาด</label></td>
                        <td><input type="text" class="form-control" name="v_Location" id="v_Location"></td>
                    </tr>
                    <tr>
                    <td><label for="exampleInputPassword1" class="form-label mt-2">บ้านเลขที่</label></td>
                        <td><input type="text" class="form-control" name="v_nbHome" id="v_nbHome"></td>
                    </tr>
                    <tr>
                    <td><label for="exampleInputPassword1" class="form-label mt-2">จังหวัด</label></td>
                        <td><input type="text" class="form-control" name="v_Province" id="v_Province"></td>
                    </tr>
                    <tr>
                    <td><label for="exampleInputPassword1" class="form-label mt-2">อำเภอ</label></td>>
                        <td><input type="text" class="form-control" name="v_District" id="v_District"></td>
                    </tr>
                    <tr>
                    <td><label for="exampleInputPassword1" class="form-label mt-2">ตำบล</label></td>
                        <td><input type="text" class="form-control" name="v_Parish" id="v_Parish"></td>
                    </tr>
                    <tr>
                    <td><label for="exampleInputPassword1" class="form-label mt-2">รหัสไปรษณี</label></td>
                        <td><input type="text" class="form-control" name="v_Zip" id="v_Zip"></td>
                    </tr>
                    <tr>
                    <td><label for="exampleInputPassword1" class="form-label mt-2">รายละเอียดที่อยู่</label></td>
                        <td><input type="text" class="form-control" name="v_Address" id="v_Address"></td>
                    </tr>
                    <tr>
                        <td>ชำระเงินโดย</td>
                        <td><select id="v_Pay" name="v_Pay">
                            <option value="บัญชีธนาคาร">บัญชีธนาคาร</option>
                            <option value="บัตรเครดิต">บัตรเครดิต</option>
                            <option value="บัตรเดบิต">บัตรเดบิต</option>
                        </select><td>
                    </tr>
                    
                </table>
                <br>
                <button class="btn btn-success" type="submit">ตกลง</button>
                <a class="btn btn-danger" href="index.html">ยกเลิก</a>
            </form>
        </div>
    </body>
</html>

