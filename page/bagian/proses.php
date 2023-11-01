<?php
require '../../config/config.php';
require '../../config/koneksi.php';

if(isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    

    $submit = $koneksi->query("INSERT INTO bagian VALUES(
       '$id',
        '$nama'
        
    )");


    if ($submit) {
        echo "<script>alert('data berhasil disimpan');location.href='../bagian';</script>";
    }else {
        echo "<script>alert('data gagal disimpan');location.href='../bagian/tambah.php';</script>"; 
    }
}else if(isset($_POST['edit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    

    $submit = $koneksi->query("UPDATE bagian SET
        id = '$id',
        nama ='$nama'
        
        where
        id = '$id';
    ");


    if ($submit) {
        echo "<script>alert('data berhasil diubah');location.href='../karyawan';</script>";
    }else {
        echo "<script>alert('data gagal diubah');location.href='../karyawan/edit';</script>"; 
    }
}else if(isset($_GET['id'])) {

    $delete= $koneksi->query("DELETE from bagian where id='$_GET[id]'");
    if ($delete) {
        echo "<script>alert('data berhasil diubah');location.href='../bagian/';</script>";
    }else {
        echo "<script>alert('data gagal diubah');location.href='../bagian/';</script>"; 
    }

}


?>