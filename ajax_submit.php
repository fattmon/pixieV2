<?php
include 'koneksi.php';
$kucing = $_POST['files'];
mysqli_query($konek, "INSERT INTO sn_table (id, sn, tanggal) VALUES(NULL,  '".$kucing."', NOW())");
?>