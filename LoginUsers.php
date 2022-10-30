<html>
    <head>
        <meta charset="UTF-8">
        <title>Users Login</title>
        <link rel="stylesheet" href="css/styles-LoginUsers.css">
        <link rel="stylesheet" href="bootstrap.min.css">
    </head>

    <body style="background-color:powderblue;">
        <div class="frame" >
        <p class="login-text" style="font-size: 2rem; font-weight: 800;">ผู้ใช้เข้าสู่ระบบ</p>
            <img src="pic/3.png" width="40%"><br><br>
            <form name="formLogin"  method="post" action="LoginUsersCheck.php">
            <div class="form-group">
            <label for="exampleInputPassword1" class="form-label mt-2">ชื่อผู้ใช้</label>
            <input type="text" name="username" class="form-control" id="username" placeholder="username">
            </div>
            <label for="exampleInputPassword1" class="form-label mt-4">รหัสผ่าน</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="password">
            </div>

                <center><button type="submit" class="btn btn-primary">เข้าสู่ระบบ</button></center>
                <center><a class="btn btn-secondary" href="RegisterForm.php">ลงทะเบียน</a></center>
            </form>
            
        </div>
    </body>
</html>

