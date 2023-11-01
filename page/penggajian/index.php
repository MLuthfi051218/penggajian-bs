<?php
require '../../config/config.php';
require '../../config/koneksi.php';
?>

<!doctype html>
<html lang="en">

<?php
include '../../templates/head.php';
?>



<!-- Navbar -->
<?php
include '../../templates/navbar.php';
?>
<!-- End Navbar -->

<body>
    <h2 style="margin-top: 20px; margin-bottom: 20px; text-align: center;">Penggajian</h2>

    


    <!--card-->
    <section class="container">
        <div class="card">
            <div class="card-header">
                <a href="tambah" class="btn bg-primary" 
                style="color:white;">Tambah</a>
        </div>
        <div class="card-body">
        <table style="width:100%;" id="example" class="table table-striped">
                <thead class="table-dark">
                    <tr>
                    <th scope="col">NO</th>
                    <th scope="col">ID</th>
                    <th scope="col">KARYAWAN NIK</th>
                    <th scope="col">TAHUN</th>
                    <th scope="col">BULAN</th>
                    <th scope="col">GAJI BAYAR</th>
                    <th scope="col">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $no = 1;                    
                        $penggajian = $koneksi->query('SELECT * FROM penggajian order by id desc');
                        while ($data = $penggajian->fetch_array()) {
                    ?>
                    <tr>
                        <td><?= $no++;  ?></td>
                        <td><?= $data['id'] ?></td>
                        <td><?= $data['karyawan_nik'] ?></td>
                        <td><?= $data['tahun'] ?></td>
                        <td><?= $data['bulan'] ?></td>
                        <td><?= $data['gaji_bayar'] ?></td>
                        
                        <td>
                        <a href="edit?id=<?=$data['id']?>" class="btn 
                        bg-success" style="color:white;">Edit</a>
                        <a href="proses?id=<?= $data['id']?>" class="btn 
                        bg-danger" style="color:white;">Hapus</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        </div>
    </section>
    
   

    <!--End card-->
    <?php
    include '../../templates/script.php';
    ?>
</html>

<script>
    new DataTable('#example');
</script>