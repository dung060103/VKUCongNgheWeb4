<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUA</title>
</head>

<body>
    <?php
    include("connect.php");

    if (isset($_GET['idTL'])) {
        $sl = "select * from theloai where idTL=" . $_GET['idTL'];
    }
    //$kq=mysql_query($sl);
    //$d=mysql_fetch_array($kq);
    //mysqli
    $results = mysqli_query($connect, $sl);
    $d = mysqli_fetch_array($results);
    ?>
    <form action="" method="post" enctype="multipart/form-data" name="form1">
        <table align="left" width="400">
            <tr>
                <td align="right">
                    Ten The Loai
                </td>
                <td>
                    <input type="text" name="TenTL" value="<?php echo $d['TenTL']; ?>" />
                </td>
            </tr>
            <tr>
                <td align="right">
                    Thu Tu
                </td>
                <td>
                    <input type="text" name="ThuTu" value="<?php echo $d['ThuTu']; ?>" />
                </td>
            </tr>
            <tr>
                <td align="right">
                    An Hien
                </td>
                <td>
                    <select name="AnHien">
                        <option value="0" <?php if ($d['AnHien'] == 0) echo "selected"; ?>>An</option>
                        <option value="1" <?php if ($d['AnHien'] == 1) echo "selected"; ?>>Hien</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td align="right">icon</td>
                <td> <img src="images/<?php echo $d['icon'] ?>" width="40" height="40" /></td>

            </tr>
            <tr>
                <td align="right">&nbsp;</td>
                <td> <input type="file" name="image" id="image" /> </td>
            </tr>
            <tr>
                <td align="right">
                    <input type="hidden" name="idTL" value="<?php echo $_GET['idTL']; ?>" />
                    <input type="submit" name="Sua" value="Sua" />
                </td>
                <td>
                    <input type="reset" name="Huy" value="Huy" />
                </td>
            </tr>
        </table>
    </form>
    <?php
    include("connect.php");


    // upload hinh anh
    if (isset($_FILES["image"]["name"]))     $icon = $_FILES["image"]["name"];
   
    if (isset($_FILES['image']['tmp_name'])) {
        $anhminhhoa_tmp = $_FILES['image']['tmp_name'];
        if (isset($_GET['idTL'])) {
            $sl = "select icon from theloai where idTL=" . $_GET['idTL'];
        }
        $results = mysqli_query($connect, $sl);
        $d = mysqli_fetch_array($results);
        if ($d['icon'] != $icon) {
            move_uploaded_file($anhminhhoa_tmp, "images/" . $icon);
            unlink('images/'.$d['icon']);
        }
    }



    //lay gia tri cho tham so
    $tam = "";
    if (isset($_POST["TenTL"]))    $theloai = $_POST['TenTL'];
    if (isset($_POST["ThuTu"]))    $thutu = $_POST['ThuTu'];
    if (isset($_POST["AnHien"]))    $an = $_POST['AnHien'];
    if (isset($_POST['Sua'])) {
        if (isset($_GET["idTL"])) {
            $key = $_GET["idTL"];
        }

        if ($icon == "") {
            $sl = "update theloai set TenTL='$theloai',ThuTu='$thutu',AnHien='$an' where idTL='$key'";
        } else {
            $sl = "update theloai set TenTL='$theloai',ThuTu='$thutu',AnHien='$an',icon='$icon' where idTL ='$key'";
        }
        //$uup=mysql_query($sl);


        if (mysqli_query($connect, $sl)) {
            echo "<script language='javascript'>alert('sua thanh cong');";
            echo "location.href='theloai.php';</script>";
        }
    }
    ?>

</body>

</html>