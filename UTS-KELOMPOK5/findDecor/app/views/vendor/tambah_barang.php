<!-- CONTENT START -->
<section class="content mb-5">
    <div class="container">
        <div class="row ">
            <div class="col-lg-2 mt-5">
                <div class="vendor">
                    <ul class="nav mt-3">
                        <?php include 'sidebar.php' ?>
                    </ul>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="card mt-5 p-3 mb-5">
                    <div class="container">
                        <p class="font">TAMBAH BARANG VENDOR</p>
                        <hr class="mt-n2">
                        <form action="" method="POST">
                            <div class="row">
                                <div class="col-lg-8 mt-3">
                                    <div class="form-group">
                                        <label for="namabrg">Nama Barang</label>
                                        <input type="text" class="form-control" id="namabrg" name="namabrg">
                                    </div>
                                    <div class="form-group">
                                        <label for="harga">Harga / Hari</label>
                                        <input type="text" class="form-control" id="harga" name="harga">
                                    </div>
                                    <div class="form-group">
                                        <label for="deskripsibrg">Deskripsi</label>
                                        <textarea class="form-control" id="deskripsibrg" rows="4" name="deskripsi"></textarea>
                                    </div>

                                </div>
                                <div class="col-lg-4 mt-5">
                                    <div class="card warna mb-3 p-2">
                                        <img src="<?= URL_IMG ?>barang/barang1.jpg" class="mx-auto border border-white" width="100%">
                                        <div class="form-group">
                                            <input type="file" class="form-control-file mt-3 border border-light">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <a href="daftarbarang.php" class="btn btn-lg tombol">KEMBALI</a>
                            <button type="submit" name="setbarang" class="float-right btn btn-lg tombol mb-3 ">SIMPAN</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>