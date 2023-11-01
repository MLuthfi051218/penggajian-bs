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

$data = $koneksi->query("select * from penggajian where id = '$id'")->fetch_array();
?>

<body>
    <h2 style="margin-top: 20px; margin-bottom:20px; text-align: center;">Edit Data Penggajian</h2>


    


    <!--card-->
    <section class="container">
        <form action="proses" method="post">
            <div class="card">
                <div class="card-body bg-dark" style="background-color:grey">
                    <div class="form-group row">

                        <!-- input -->
                        <div class="row mb-3">
                            <label class="col-2" style="color: white;">ID</label>
                            <div class="col-6">
                                <input name="id" class="form-control" type="text"
                                 placeholder="Isikan ID." value="<?=$data['id'] ?>">
                            
                            </div>
                        </div>
                        <!-- end input -->

                        <!-- input -->
                        <div class="row mb-3">
                            <label class="col-2" style="color: white;">KARYAWAN NIK</label>
                            <div class="col-6">
                                <input name="karyawan_nik" class="form-control" type="text" 
                                placeholder="Isikan NIK." value="<?=$data['karyawan_nik'] ?>">
                            </div>
                        </div>
                        <!-- end input -->

                        <!-- input -->
                        <div class="row mb-3">
                            <label class="col-2" style="color: white;">Tahun</label>
                            <div class="col-6">
                                <input name="tahun" class="form-control" type="number" 
                                placeholder="Isikan TAHUN" value="<?=$data['tahun'] ?>">
                                
                            </div>
                        </div>
                        <!-- end input -->

                        <!-- input -->
                        <div class="row mb-3">
                            <label class="col-2" style="color: white;">BULAN</label>
                            <div class="col-6">
                                <input name="bulan" class="form-control" type="number" 
                                placeholder="Isi BULAN" value="<?=$data['bulan'] ?>">
                                
                            </div>
                        </div>
                        <!-- end input -->

                        <!-- input -->
                            <div class="row mb-3">
                            <label class="col-2" style="color: white;">GAJI BAYAR</label>
                            <div class="col-6">
                            <input name="gaji_bayar" class="form-control" type="number" 
                                placeholder="Isi Gaji" value="<?=$data['gaji_bayar'] ?>">
                            </div>
                        </div>
                        <!-- end input -->

                        
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