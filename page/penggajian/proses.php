<?php
require '../../config/config.php';
require '../../config/koneksi.php';

if(isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $karyawan_nik = $_POST['karyawan_nik'];
    $tahun = $_POST['tahun'];
    $bulan = $_POST['bulan'];
    $gaji_bayar = $_POST['gaji_bayar'];
    

    $submit = $koneksi->query("INSERT INTO penggajian VALUES(
        '$id',
        '$karyawan_nik',
        '$tahun',
        '$bulan',
        '$gaji_bayar'
        
    )");


    if ($submit) {
        echo "<script>alert('data berhasil disimpan');location.href='../penggajian';</script>";
    }else {
        echo "<script>alert('data gagal disimpan');location.href='../penggajian/tambah.php';</script>"; 
    }
}else if(isset($_POST['edit'])) {
    $id = $_POST['id'];
    $karyawan_nik = $_POST['karyawan_nik'];
    $tahun = $_POST['tahun'];
    $bulan = $_POST['bulan'];
    $gaji_bayar = $_POST['gaji_bayar'];
    

    $submit = $koneksi->query("UPDATE penggajian SET
        id = '$id',
        karyawan_nik ='$karyawan_nik',
        tahun ='$tahun',
        bulan ='$bulan',
        gaji_bayar='$gaji_bayar'

        where
        id = '$id';
    ");


    if ($submit) {
        echo "<script>alert('data berhasil diubah');location.href='../penggajian';</script>";
    }else {
        echo "<script>alert('data gagal diubah');location.href='../penggajian/edit';</script>"; 
    }
}else if(isset($_GET['id'])) {

    $delete= $koneksi->query("DELETE from penggajian where id='$_GET[id]'");
    if ($delete) {
        echo "<script>alert('data berhasil diubah');location.href='../penggajian/';</script>";
    }else {
        echo "<script>alert('data gagal diubah');location.href='../penggajian/';</script>"; 
    }

}


?>