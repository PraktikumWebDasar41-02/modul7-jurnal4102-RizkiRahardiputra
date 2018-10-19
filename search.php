<?php
require_once("db7.php");
$nim   = $_GET['nim'];
$query = "SELECT*FROM mahasiswabaru where nim ='$nim'";
mysqli_query($conn, $query);
header("location:view.php");
?>