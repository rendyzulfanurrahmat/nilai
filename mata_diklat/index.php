<?php
  $m = (isset($_GET['s'])) ? $_GET['s'] : 'tampil';
    switch ($m) {
        case 'tampil': default :
            include 'mata_diklat/tampil.php'; break;
        case 'tambah':
            include 'mata_diklat/tambah.php'; break;
        case 'simpan':
            include 'mata_diklat/simpan.php'; break;
        case 'edit':
            include 'mata_diklat/edit.php'; break;
        case 'update':
            include 'mata_diklat/update.php'; break;
        case 'hapus':
            include 'mata_diklat/hapus.php'; break;
    }