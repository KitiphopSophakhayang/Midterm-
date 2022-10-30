<html>
    <head>
        <meta charset="UTF-8">
        <title>Register Form</title>
        <link rel="stylesheet" href="css/styles-Register.css">
        <link rel="stylesheet" href="bootstrap.min.css">
    </head>

    <body style="background-color:lightcoral" >
        <div class="frame">
            <form method="get" action="RegisterFormSuccess.php">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">สมัครสมาชิก</p>
                <table>
                    <tr>
                        <td><label for="exampleInputPassword1" class="form-label mt-2">ชื่อผู้ใช้</label></td>
                        <td><input type="text" class="form-control" name="username" id="username" size="25" required placeholder="Username"></td>
                    </tr>
                    <tr>
                        <td><label for="exampleInputPassword1" class="form-label mt-2">ชื่อนาสกุล</label></td>
                        <td><input type="text" class="form-control" name="fullname" id="fullname" size="25" required placeholder="Fullname"></td>
                    </tr>
                    <tr>
                        <td><label for="exampleInputPassword1" class="form-label mt-2">เบอร์โทร</label></td>
                        <td><input type="tel"  class="form-control" name="tel" id="tel" size="25" required placeholder="Tel"></td>
                    </tr> 
                    <tr>
                        <td><label for="exampleInputPassword1" class="form-label mt-2">อีเมล</label></td>
                        <td><input type="email" class="form-control" name="email" id="email" size="25" required placeholder="Email"></td>
                    </tr>
                    <tr>
                        <td><label for="exampleInputPassword1" class="form-label mt-2">รหัสผ่าน</label></td>
                        <td><input type="password" class="form-control" name="password" id="password" size="25" required placeholder="Password"></td>
                    </tr>
                    <tr>
                        <td><label for="exampleInputPassword1" class="form-label mt-2">บ้านเลขที่</label></td>
                        <td><input type="text" class="form-control" name="nbhome" id="nbhome" size="25" placeholder="House Number"></td>
                    </tr>
                    <tr>
                        <td><label for="exampleInputPassword1" class="form-label mt-2">จังหวัด</label></td>
                        <td><input type="text" class="form-control" name="province" id="province" size="25" placeholder="Province"></td>
                    </tr>
                    <tr>
                        <td><label for="exampleInputPassword1" class="form-label mt-2">อำเภอ</label></td>
                        <td><input type="text" class="form-control" name="district" id="district" size="25" placeholder="District"></td>
                    </tr>
                    <tr>
                        <td><label for="exampleInputPassword1" class="form-label mt-2">ตำบล</label></td>
                        <td><input type="text" class="form-control" name="parish" id="parish" size="25" placeholder="Parish"></td>
                    </tr>
                    <tr>
                        <td><label for="exampleInputPassword1" class="form-label mt-2">รหัสไปรษณี</label></td>
                        <td><input type="text" class="form-control" name="zip" id="zip" size="25" placeholder="Zip"></td>
                    </tr>
                    <tr>
                        <td><label for="exampleInputPassword1" class="form-label mt-2">รายละเอียด</label></td>
                        <td><input type="text" class="form-control" name="address" id="address" size="25" placeholder="Address"></td>
                    </tr>  
                </table>
                <br>
                <button class="btn btn-danger" type="submit">สมัครสมาชิก</button>
                <a class="btn btn-info" href="main.html">ยกเลิก</a>
            </form>
        </div>
    </body>
</html>