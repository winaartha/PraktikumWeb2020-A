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
                        <p class="font">DAFTAR INVOICE VENDOR</p>
                        <hr class="mt-n2">
                        <div class="row">
                            <div class="table-responsive">
                                <table class="table table-hover table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th>Pembeli</th>
                                            <th scope="col">Barang</th>
                                            <th scope="col">Subtotal</th>
                                            <th scope="col">Tanggal Pemesanan</th>
                                            <th scope="col">Tanggal Selesai</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Firdaus</td>
                                            <td>Tenda</td>
                                            <td>Rp. 150.000</td>
                                            <td>20-10-2020</td>
                                            <td>22-10-2020</td>
                                            <td>
                                                <!-- DETAIL INVOICE -->
                                                <a href="<?= BASE_URL ?>customer/detail_invoice" class="btn btn-warning btn-sm">
                                                    <i class="fas fa-fw fa-info-circle"></i>
                                                </a>
                                            </td>
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