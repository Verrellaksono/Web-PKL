<?php
include('../config.php');

if (isset($_GET['minggu'])) {
    $minggu = $_GET['minggu'];
    $query = mysqli_query($koneksi, "DELETE FROM data WHERE minggu='$minggu'");
    header("location:data.php");
}
?>