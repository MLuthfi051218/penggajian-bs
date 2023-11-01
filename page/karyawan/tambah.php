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
    <h2 style="margin-top: 20px; margin-bottom:20px; text-align: center;">Tambah Data Karyawan</h2>


    


    <!--card-->
    <section class="container">
        <form action="proses" method="post">
            <div class="card">
                <div class="card-body bg-dark" style="background-color:grey">
                    <div class="form-group row">

                        <!-- input -->
                        <div class="row mb-3">
                            <label class="col-2" style="color: white;">NIK</label>
                            <div class="col-6">
                                <input name="nik" class="form-control" type="text" placeholder="Isikan NIK">
                            </div>
                        </div>
                        <!-- end input -->

                        <!-- input -->
                        <div class="row mb-3">
                            <label class="col-2" style="color: white;">NAMA</label>
                            <div class="col-6">
                                <input name="nama" class="form-control" type="text" placeholder="Isikan NAMA">
                            </div>
                        </div>
                        <!-- end input -->

                        <!-- input -->
                        <div class="row mb-3">
                            <label class="col-2" style="color: white;">TanggaL MULAI</label>
                            <div class="col-6">
                                <input name="tanggal_mulai" class="form-control" type="date" placeholder="Isikan TANGGAL MULAI">
                            </div>
                        </div>
                        <!-- end input -->

                        <!-- input -->
                        <div class="row mb-3">
                            <label class="col-2" style="color: white;">GAJI POKOK</label>
                            <div class="col-6">
                                <input name="gaji_pokok" class="form-control" type="number" placeholder="Isikan GAJI POKOK">
                            </div>
                        </div>
                        <!-- end input -->

                        <!-- input -->
                            <div class="row mb-3">
                            <label class="col-2" style="color: white;">STATUS KARYAWAN</label>
                            <div class="col-6">
                                <select name="status_karyawan" id="">
                                    <option value="">---PILIH---</option>
                                    <option value="TETAP">TETAP</option>
                                    <option value="KONTRAK">KONTRAK</option>
                                    <option value="MAGANG">MAGANG</option>
                                </select>
                            </div>
                        </div>
                        <!-- end input -->

                        <!-- input -->
                        <div class="row mb-3">
                            <label class="col-2" style="color: white;">BAGIAN</label>
                            <div class="col-6">
                                <select class="form-control" name="bagian_id" >
                                    <option value="">---PILIH---</option>
                                    <?php
                                        $bagian = $koneksi->query("SELECT * FROM bagian");

                                        foreach($bagian as $row){
                                    ?>
                                    <option value="<?= $row['id'] ?>"><?=$row ['nama'] ?></option>
                                    <?php }?>
                                </select>
                            </div>
                        </div>
                        <!-- end input -->
                    </div>
                 </div>
                 <div class="card-footer">
                    <button type="submit" name="simpan" class="btn btn-success">simpan</button>
                 </div>
            </div>
        </form>
    </section>

</body>
    

    <!--End card-->
    <?php
    include '../../templates/script.php';
    ?>
</html>

<script>
    new DataTable('#example');
</script>