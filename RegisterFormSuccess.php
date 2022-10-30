<html>
    <head>
        <meta charset="UTF-8">
        <title>Register Form</title>
        <link rel="stylesheet" href="css/styles-Register.css">
        <link rel="stylesheet" href="bootstrap.min.css">
    </head>
    <body style="background-color:lightcoral">
        <div class="frame" style="margin-top: 20%">
        <?php
        $objConnect=mysqli_connect("localhost","root","") or die("can't connect to database");
        mysqli_select_db($objConnect,"DBClean");
        mysqli_query($objConnect ,"SET NAMES utf8");

        $sql_insert ="INSERT INTO users(username, fullname, tel, email, pw, nbhome, province, district, parish, zip, address) 
                        VALUES ('$_GET[username]','$_GET[fullname]','$_GET[tel]','$_GET[email]','$_GET[password]','$_GET[nbhome]',
                                '$_GET[province]','$_GET[district]','$_GET[parish]','$_GET[zip]','$_GET[address]')";

        $result = mysqli_query($objConnect, $sql_insert);

        if(!$result) {
            echo "Can't register!!!<br>";
            echo "<br>";
        } else {
            echo "Register data successfully <br>";
        }
        ?>
        <a class="btn btn-success" href='LoginUsers.php'>กลับหน้าเข้าสู่ระบบ</a>
        </div>
    </body>
</html>