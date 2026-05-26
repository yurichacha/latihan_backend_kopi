<?php
include "../security.php";
include "../../koneksi.php";

$sql = "select * from courses";
$query = mysqli_query($conn, $sql);
?>

<table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Kelas</th>
            <th>Deskripsi</th>
            <th>Harga</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>ubah | hapus</td>
        </tr>
    </tbody>
</table>