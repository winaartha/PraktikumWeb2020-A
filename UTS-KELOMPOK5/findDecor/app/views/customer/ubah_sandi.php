<!-- CONTENT START -->
<section class="content mb-5">
    <div class="container">
        <div class="row ">
            <div class="col-lg-2 mt-5 ml-5">
                <div class="menu">
                    <ul class="nav mt-3">
                        <?php include "sidebar.php" ?>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card mt-5 p-3 mb-5">
                    <div class="container">
                        <p class="font">UBAH KATA SANDI</p>
                        <hr class="mt-n2">
                        <form action="" method="POST">
                            <div class="form-group row">
                                <label for="password_lama" class="col-sm-4 col-form-label ">Password Lama</label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control" name="password_lama" id="password_lama" value="123456" autocapitalize="off">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password_baru" class="col-sm-4 col-form-label ">Password baru</label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control" name="password_baru" id="password_baru" value="123456" autocapitalize="off">
                                </div>
                            </div>
                            <div class="form-group row mt-5">
                                <label for="konfir_password" class="col-sm-4 col-form-label ">Konfirmasi Password</label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control" name="konfir_password" id="konfir_password" value="123456" autocapitalize="off">
                                </div>
                            </div>
                            <a href="profilcustomer.php" class="btn btn-lg tombol mb-3 mt-3">KEMBALI</a>
                            <button type="submit" class="btn btn-lg tombol mb-3 mt-3 float-right" name="setsandi">SIMPAN</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>