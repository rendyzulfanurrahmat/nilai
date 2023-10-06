<?php
if(isset($_GET['id'])){
    include_once('koneksi.php');
    $id = $_GET['id'];

    $sql="DELETE FROM mata_diklat WHERE id='$id'";
    $simpan=mysqli_query($koneksi, $sql);
    if($simpan) {
        header('location:index.php');
    } else {
        include "index.php?m=mata_diklat=";
        echo 'script language="JavaScipt">';
        echo 'alert("data gagal dihapus")';
        echo '</script>';
    }
} else {
    echo "<script>window.history.back()</script>";
}
?>