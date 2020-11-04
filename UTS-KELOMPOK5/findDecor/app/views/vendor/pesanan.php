<!-- CONTENT START -->
<section class="content mb-5">
    <div class="container">
        <div class="row ">
            <div class="col-lg-2 mt-5">
                <div class="vendor">
                    <?php include 'sidebar.php' ?>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="card mt-5 p-3 mb-5">
                    <div class="container">
                        <p class="font">DAFTAR PESANAN VENDOR</p>
                        <hr class="mt-n2">
                        <div class="row">
                            <div class="table-responsive">
                                <table class="table table-hover table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th>Pembeli</th>
                                            <th scope="col">Barang</th>
                                            <th>Qty</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">Status</th>
                                            <td>Action</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <form action="" method="">
                                                <td>1</td>
                                                <td>Firdaus</td>
                                                <td>Tenda</td>
                                                <td>3</td>
                                                <td>Rp. 150.000</td>
                                                <td>
                                                    <div class="form-group">
                                                        <select class="form-control" id="status" name="status">
                                                            <option disabled selected>Set Status</option>
                                                            <option value="Proses">Konfirmasi</option>
                                                            <option value="Proses">Proses</option>
                                                            <option value="Kirim">Kirim</option>
                                                            <option value="Selesai">Selesai</option>
                                                        </select>
                                                    </div>
                                                </td>
                                                <td>
                                                    <!-- DETAIL PESANAN -->
                                                    <a href="detailpesanan.php" class="btn btn-warning btn-sm">
                                                        <i class="fas fa-fw fa-info-circle"></i>
                                                    </a>
                                                    <!-- SET STATUS -->
                                                    <button type="submit" class="btn btn-success btn-sm" name="setstatus">
                                                        SET
                                                    </button>
                                                </td>
                                            </form>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>