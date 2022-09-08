<?php
include("connect.php");
if(isset($_GET["idTL"]))
{
	$key=$_GET["idTL"];

}
    $sql = "select icon from theloai where idTL =".$_GET["idTL"];
    $row = mysqli_query($connect, $sql);
    $result = mysqli_fetch_assoc($row);

    unlink("images/".$result['icon']);
	$sl="delete from theloai where idTL=".$_GET["idTL"];
//if(mysql_query($sl))
if(mysqli_query($connect,$sl))
{
	echo "<script language='javascript'>alert('Xoa thanh cong');";
		echo "location.href='theloai.php';</script>";
}


?>
