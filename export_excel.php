<?php
    include "koneksi.php";

    header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=SN.xls");
?>

<table border='1'>
    <tr>
        <td>SN</td>
        <td>TANGGAL</td>
    </tr>

    <?php
        $query = "select * from sn_table order by tanggal DESC limit 1 ";
        $result = mysqli_query($konek, $query);
        while($row = mysqli_fetch_assoc($result))
         {
    ?>
        <td><?php echo $row['sn'] ?></td>
        <td><?php echo $row['tanggal'] ?></td>
    <?php
         }
    ?>
</table>