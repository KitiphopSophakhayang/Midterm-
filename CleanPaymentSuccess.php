<html>
    <head>
        <meta charset="UTF-8">
        <title>Clean Insert</title>
        <link rel="stylesheet" href="css/styles-Data.css">
        <link rel="stylesheet" href="bootstrap.min.css">
    </head>
    <body style="background-color:lightcoral">

        <div class="frameSuccess">
        <?php
        $objConnect=mysqli_connect("localhost","root","") or die("can't connect to database");
        mysqli_select_db($objConnect,"DBClean");
        mysqli_query($objConnect ,"SET NAMES utf8");

        $sql_insert ="INSERT INTO clean(c_Fullname, c_Date, c_Time, c_Duration, c_Location, c_nbHome, c_Province, c_District, c_Parish, c_Zip, c_Address, c_Pay, c_Price) 
                        VALUES ('$_GET[c_Fullname]','$_GET[c_Date]','$_GET[c_Time]','$_GET[c_Duration]','$_GET[c_Location]','$_GET[c_nbHome]',
                                '$_GET[c_Province]','$_GET[c_District]','$_GET[c_Parish]','$_GET[c_Zip]','$_GET[c_Address]','$_GET[c_Pay]','$_GET[c_Price]')";

        $result = mysqli_query($objConnect, $sql_insert);

        if(!$result) {
            echo "Can't insert!!!<br>";
            echo "<br>";
        } else {
            echo "สำเร็จ <br>";
        }
        ?>
        <br>
        <a class="btn btn-success" href='index.php'>กลับสู่หน้าหลัก</a>
        </div>
    </body>
</html>