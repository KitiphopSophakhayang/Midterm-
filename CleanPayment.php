<?php
session_start();
$objConnect = mysqli_connect("localhost","root","")or die("Can't connect to database");
$db = mysqli_select_db($objConnect, "DBClean");
mysqli_query($objConnect, "SET NAMES utf8");

if($objConnect->connect_error) {
    die("Connection failed". $conn->connect_error);
}

$strSQL = "SELECT * FROM Clean";
$objQuery = mysqli_query($objConnect, $strSQL);
$objResult = mysqli_fetch_array($objQuery);
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Clean</title>
        <link rel="stylesheet" href="css/styles-Profile.css">
        <link rel="stylesheet" href="bootstrap.min.css">

    </head>

    <body style="background-color:lightblue">
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
            <form method="get" action="CleanPaymentSuccess.php">
                <table>
                <h2 style="text-align: center;">ชำระเงิน</h2>
                <p class="login-text" style="font-size: 2rem; font-weight: 800;">ทำความสะอาดทั่วไป</p>
                    <tr>
                        <td>ชื่อ-นามสกุล</td>
                        <td><input type="text" name="c_Fullname" id="c_Fullname" value="<?="$_GET[c_Fullname]";?>" readonly="readonly"/></td>
                    </tr>
                    <tr>
                        <td>วัน</td>
                        <td><input type="date" name="c_Date" id="c_Date" value="<?="$_GET[c_Date]";?>" readonly="readonly"/></td>
                    </tr>
                    <tr>
                        <td>เวลา</td>
                        <td><input type="time" name="c_Time" id="c_Time" value="<?="$_GET[c_Time]";?>" readonly="readonly"/></td>
                    </tr>
                    <tr>
                        <td>ระยะเวลา(ชั่วโมง)</td>
                        <td><input type="text" name="c_Duration" id="c_Duration" value="<?="$_GET[c_Duration]";?>" readonly="readonly"/></td>
                    </tr>
                    <tr>
                        <td>สถานที่ใช้บริการ</td>
                        <td><input type="text" name="c_Location" id="c_Location" value="<?="$_GET[c_Location]";?>" readonly="readonly"/></td>
                    </tr>
                    <tr>
                        <td>บ้านเลขที่</td>
                        <td><input type="text" name="c_nbHome" id="c_nbHome" value="<?="$_GET[c_nbHome]";?>" readonly="readonly"/></td>
                    </tr>
                    <tr>
                        <td>จังหวัด</td>
                        <td><input type="text" name="c_Province" id="c_Province" value="<?="$_GET[c_Province]";?>" readonly="readonly"/></td>
                    </tr>
                    <tr>
                        <td>อำเภอ</td>
                        <td><input type="text" name="c_District" id="c_District" value="<?="$_GET[c_District]";?>" readonly="readonly"/></td>
                    </tr>
                    <tr>
                        <td>ตำบล</td>
                        <td><input type="text" name="c_Parish" id="c_Parish" value="<?="$_GET[c_Parish]";?>" readonly="readonly"/></td>
                    </tr>
                    <tr>
                        <td>รหัสไปรษณีย์</td>
                        <td><input type="text" name="c_Zip" id="c_Zip" value="<?="$_GET[c_Zip]";?>" readonly="readonly"/></td>
                    </tr>
                    <tr>
                        <td>รายละเอียดที่อยู่</td>
                        <td><input type="text" name="c_Address" id="c_Address" value="<?="$_GET[c_Address]";?>" readonly="readonly"/></td>
                    </tr>
                </table>
                <table>
                <hr>
                    <td>ชำระเงินโดย</td>
                        <td><input type="text" name="c_Pay" id="c_Pay" value="<?="$_GET[c_Pay]";?>" readonly="readonly"/></td>
                    </tr>
                    <tr>
                        <td>รวมราคาสุทธิ</td>
                        <?php $price = 500*$_GET["c_Duration"]?>
                        <td><input type="text" name="" id="" value="<?="$price";?>" readonly="readonly"/></td>
                    </tr>
                    <tr>
                        <td>ภาษีมูลค่าเพิ่ม(7%)</td>
                        <?php $vat = $price*0.07;?>
                        <td><input type="text" name="" id="" value="<?="$vat";?>" readonly="readonly"/></td>
                    </tr>
                    <tr>
                        <td>ราคารวมภาษีมูลค่าเพิ่ม</td>
                        <?php $total = $price+$vat;?>
                        <td><input type="text" name="c_Price" id="c_Price" value="<?="$total";?>" readonly="readonly"/></td>
                    </tr>
                </table>
                <br>
                <button class="btn btn-info" type="submit">ตกลง</button>
                <a class="btn btn-warning" href="index.php">ยกเลิก</a>
            </form>
        </div>
    </body>
</html>