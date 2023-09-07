<?php
require_once "koneksi.php";

$nama=$_POST["nama"];
$laboratorium=$_POST["laboratorium"];
$dosen=$_POST["dosen"];
$praktikum=$_POST["praktikum"];
$catatan=$_POST["catatan"];


$sql="insert into fill (nama, laboratorium, dosen, praktikum, catatan, time) values ('".$nama."', '".$laboratorium."', '".$dosen."', '".$praktikum."', '".$catatan."', now())";

$hasil=mysqli_query($conn, $sql);
if(!$hasil){
    die ("Query failed".mysqli_error($conn));
}else {
    header('Location: ' . "monitoring.php?data=1");
}
?>