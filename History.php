<?php
session_start();
$objConnect = mysqli_connect("localhost","root","")or die("Can't connect to database");
$db = mysqli_select_db($objConnect, "DBClean");
mysqli_query($objConnect, "SET NAMES utf8");

if($objConnect->connect_error) {
    die("Connection failed". $conn->connect_error);
}

$strSQL_Clean = "SELECT * FROM Clean";
$objQuery = mysqli_query($objConnect, $strSQL_Clean);
$objResult = mysqli_fetch_array($objQuery);
$resultClean = $objConnect->query($strSQL_Clean);

$strSQL_Virus = "SELECT * FROM Virus";
$objQuery = mysqli_query($objConnect, $strSQL_Virus);
$objResult = mysqli_fetch_array($objQuery);
$resultVirus = $objConnect->query($strSQL_Virus);
?>

<html>
    <head class="navbar">
        <meta charset="UTF-8">
        <title>History</title>
        <link rel="stylesheet" href="css/styles-History.css">
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
        <p class="login-text" style="font-size: 2rem; font-weight: 800;">ทำความสะอาดทั่วไป</p>
            <table>
            <?php
            if ($resultClean->num_rows > 0) {
                ?>
                <tr>
                    <th>ลำดับ</th>
                    <th>ชื่อ-นามสกุล</th>
                    <th>วัน</th>
                    <th>ระยะเวลา</th>
                    <th>เวลา</th>
                    <th>สถานที่</th>
                    <th>บ้านเลขที่</th>
                    <th>จังหวัด</th>
                    <th>อำเภอ</th>
                    <th>ตำบล</th>
                    <th>รหัสไปรษณีย์</th>
                    <th>รายละเอียดที่อยู่</th>
                    <th>ราคา</th>
                </tr>

                <tr>
                <?php
                while($row = $resultClean->fetch_assoc()) {
                    ?>
                    <td><?php echo $row["c_ID"]?></td>
                    <td><?php echo $row["c_Fullname"]?></td>
                    <td><?php echo $row["c_Date"]?></td>
                    <td><?php echo $row["c_Time"]?></td>
                    <td><?php echo $row["c_Duration"]?></td>
                    <td><?php echo $row["c_Location"]?></td>
                    <td><?php echo $row["c_nbHome"]?></td>
                    <td><?php echo $row["c_Province"]?></td>
                    <td><?php echo $row["c_District"]?></td>
                    <td><?php echo $row["c_Parish"]?></td>
                    <td><?php echo $row["c_Zip"]?></td>
                    <td><?php echo $row["c_Address"]?></td>
                    <td><?php echo $row["c_Price"]?></td>   
                    <tr><br>
                <?php
                }
            } else {
                echo "ไม่มีข้อมูลรายการ";
            } 
            ?>
            </table>
        </div>

        <br>

        <div class="frame">
        <p class="login-text" style="font-size: 2rem; font-weight: 800;">บริการฆ่าเชื้อและไวรัส</p>
            <table>
            <?php
            if ($resultVirus->num_rows > 0) {
                ?>
                <tr>
                    <th>ลำดับ</th>
                    <th>ชื่อ-นามสกุล</th>
                    <th>วัน</th>
                    <th>ระยะเวลา</th>
                    <th>เวลา</th>
                    <th>สถานที่</th>
                    <th>บ้านเลขที่</th>
                    <th>จังหวัด</th>
                    <th>อำเภอ</th>
                    <th>ตำบล</th>
                    <th>รหัสไปรษณีย์</th>
                    <th>รายละเอียดที่อยู่</th>
                    <th>ราคา</th>
                </tr>
                
                <tr>
                <?php
                while($row = $resultVirus->fetch_assoc()) {
                    ?>
                    <td><?php echo $row["v_ID"]?></td>
                    <td><?php echo $row["v_Fullname"]?></td>
                    <td><?php echo $row["v_Date"]?></td>
                    <td><?php echo $row["v_Time"]?></td>
                    <td><?php echo $row["v_Duration"]?></td>
                    <td><?php echo $row["v_Location"]?></td>
                    <td><?php echo $row["v_nbHome"]?></td>
                    <td><?php echo $row["v_Province"]?></td>
                    <td><?php echo $row["v_District"]?></td>
                    <td><?php echo $row["v_Parish"]?></td>
                    <td><?php echo $row["v_Zip"]?></td>
                    <td><?php echo $row["v_Address"]?></td>
                    <td><?php echo $row["v_Price"]?></td>   
                    <tr><br>
                <?php
                }
            } else {
                echo "ไม่มีข้อมูลรายการ";
            } 
            ?>
            </table>
        </div>
    </body>
</html>