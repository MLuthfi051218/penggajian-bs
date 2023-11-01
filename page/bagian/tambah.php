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
    <h2 style="margin-top: 20px; margin-bottom:20px; text-align: center;">Tambah Data Bagian</h2>


    


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
                                <input name="id" class="form-control" type="text" placeholder="Isikan ID">
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