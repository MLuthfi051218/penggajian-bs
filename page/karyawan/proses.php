<?php
require '../../config/config.php';
require '../../config/koneksi.php';

if(isset($_POST['simpan'])) {
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $tanggal_mulai = $_POST['tanggal_mulai'];
    $gaji_pokok = $_POST['gaji_pokok'];
    $status_karyawan = $_POST['status_karyawan'];
    $bagian_id = $_POST['bagian_id'];

    $submit = $koneksi->query("INSERT INTO karyawan VALUES(
       '$nik',
        '$nama',
        '$tanggal_mulai',
        '$gaji_pokok',
        '$status_karyawan',
        '$bagian_id'
    )");
    if ($submit) {
        echo "<script>alert('data berhasil disimpan');location.href='../karyawan';</script>";
    }else {
        echo "<script>alert('data gagal disimpan');location.href='../karyawan/tambah.php';</script>"; 
    }
}else if(isset($_POST['edit'])) {
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $tanggal_mulai = $_POST['tanggal_mulai'];
    $gaji_pokok = $_POST['gaji_pokok'];
    $status_karyawan = $_POST['status_karyawan'];
    $bagian_id = $_POST['bagian_id'];

    $submit = $koneksi->query("UPDATE karyawan SET
        nik = '$nik',
        nama ='$nama',
        tanggal_mulai ='$tanggal_mulai',
        gaji_pokok ='$gaji_pokok',
        status_karyawan ='$status_karyawan',
        bagian_id ='$bagian_id'
        where
        nik = '$nik';
    ");


    if ($submit) {
        echo "<script>alert('data berhasil diubah');location.href='../karyawan';</script>";
    }else {
        echo "<script>alert('data gagal diubah');location.href='../karyawan/edit';</script>"; 
    }
}else if(isset($_GET['id'])) {

    $delete= $koneksi->query("DELETE from karyawan where nik='$_GET[id]'");
    if ($delete) {
        echo "<script>alert('data berhasil diubah');location.href='../karyawan/';</script>";
    }else {
        echo "<script>alert('data gagal diubah');location.href='../karyawan/';</script>"; 
    }

}


?>