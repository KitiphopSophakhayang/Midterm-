<html>
    <head>
        <meta charset="UTF-8">
        <title>Profile Edit</title>
        <link rel="stylesheet" href="css/styles-Data.css">
        <link rel="stylesheet" href="bootstrap.min.css">
    </head>

    <body style="background-color:#f3969a;"  >        
        <div class="frameSuccess">
            <?php
            $objConnect = mysqli_connect("localhost","root","")or die("Can't connect to database");
            $db = mysqli_select_db($objConnect, "DBClean");
            mysqli_query($objConnect, "SET NAMES utf8");

            $sql_update="UPDATE users 
                            SET username='$_GET[username]',
                                fullname='$_GET[fullname]',
                                tel='$_GET[tel]',
                                email='$_GET[email]',
                                pw='$_GET[pw]',
                                nbhome='$_GET[nbhome]',
                                province='$_GET[province]',
                                district='$_GET[district]',
                                parish='$_GET[parish]',
                                zip='$_GET[zip]',
                                address='$_GET[address]'";

            $result= mysqli_query($objConnect, $sql_update);

            if(!$result) {
                echo "<br><center>Can't Update!!!</center><br>";
            } else {
                echo "<br><center>แก้ไขสำเร็จ </center><br>";
            }
            ?>
            <center><a class="btn btn-success" href='Profile.php'>กลับสู่หน้าโปรไฟล์</a></center>
        </div>
    </body>
</html>