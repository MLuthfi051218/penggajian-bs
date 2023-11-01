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

<?php
$id = $_GET['id'];

$data = $koneksi->query("select * from karyawan where nik = '$id'")->fetch_array();
?>

<body>
    <h2 style="margin-top: 20px; margin-bottom:20px; text-align: center;">Edit Data Karyawan</h2>


    


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
                                <input name="nik" class="form-control" type="text"
                                 placeholder="Isikan NIK." value="<?=$data['nik'] ?>">
                            
                            </div>
                        </div>
                        <!-- end input -->

                        <!-- input -->
                        <div class="row mb-3">
                            <label class="col-2" style="color: white;">NAMA</label>
                            <div class="col-6">
                                <input name="nama" class="form-control" type="text" 
                                placeholder="Isikan NIK." value="<?=$data['nama'] ?>">
                            </div>
                        </div>
                        <!-- end input -->

                        <!-- input -->
                        <div class="row mb-3">
                            <label class="col-2" style="color: white;">TanggaL MULAI</label>
                            <div class="col-6">
                                <input name="tanggal_mulai" class="form-control" type="date" 
                                placeholder="Isikan TANGGAL MULAI" value="<?=$data['tanggal_mulai'] ?>">
                                
                            </div>
                        </div>
                        <!-- end input -->

                        <!-- input -->
                        <div class="row mb-3">
                            <label class="col-2" style="color: white;">GAJI POKOK</label>
                            <div class="col-6">
                                <input name="gaji_pokok" class="form-control" type="number" 
                                placeholder="Isikan GAJI POKOK" value="<?=$data['gaji_pokok'] ?>">
                                
                            </div>
                        </div>
                        <!-- end input -->

                        <!-- input -->
                            <div class="row mb-3">
                            <label class="col-2" style="color: white;">STATUS KARYAWAN</label>
                            <div class="col-6">
                                <select name="status_karyawan" id="">
                                    <option value="TETAP" <?=$data
                                ['status_karyawan'] == 'TETAP' ? "selected" : "" ?>>TETAP</option>

                                    <option value="KONTRAK" <?=$data
                                ['status_karyawan'] == 'KONTRAK' ? "selected" : "" ?>>KONTRAK</option>

                                    <option value="MAGANG" <?=$data
                                ['status_karyawan'] == 'MAGANG' ? "selected" : "" ?>>MAGANG</option>
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
                                    <option value="<?= $row['id'] ?>"
                                    <?php if ($row['id']== $data['bagian_id']) {
                                        echo "selected";
                                    } ?>
                                    ><?= $row ['nama'] ?></option>
                                    <?php }?>
                                </select>
                            </div>
                        </div>
                        <!-- end input -->
                    </div>
                 </div>
                 <div class="card-footer">
                    <button type="submit" name="edit" class="btn btn-success">Edit</button>
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