<div class="container mt-3 mb-3">
    <div class="row d-flex justify-content-center">
        <div class="col-sm-4 offset-sm-3">
            <img src="<?= URL_IMG ?>logovendor/logo1.png" alt="" width="70%">
        </div>
        <div class="col-sm-5">
            <div class="keterangan">
                <h4 class="mt-5">Vendor Eufloria</h4>
                <p>08123456789</p>
                <p class="mt-n3">Jl. Kampus Unud Bukit Jimbaran</p>
            </div>
        </div>
    </div>
    <hr class="mb-3">
</div>

<div class="container mb-5 sewa">
    <h4 class="sub-tittle text-center mb-4">Sewa Produk</h4>
    <div class="row">
        <div class="col-lg-4">
            <img src="<?= URL_IMG ?>toko/gambar1.jpg" alt="" width="90%" class="mb-4">
            <p class="text-center">DESKRIPSI PRODUK</p>
            <div style="width: 20rem;">
                <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis nihil quidem, in recusandae sunt modi voluptatum. Velit incidunt beatae explicabo.</p>
            </div>
        </div>
        <div class="col-lg-8">
            <h5 class="judbar">Lorem ipsum dolor sit amet.</h5>
            <p>Rp. 300.000</p>
            <form action="" method="">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="tglawal">Tanggal Pinjam</label>
                        <input type="date" class="form-control" id="tglawal" name="tglawal">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="tglakhir">Tanggal Selesai</label>
                        <input type="date" class="form-control" id="tglakhir" name="tglakhir">
                    </div>
                </div>
                <hr>
                <p class="text-center mb-3">Alamat Pengiriman</p>
                <div class="row">
                    <div class="col-lg-6 pr-2">
                        <div class="form-group">
                            <label for="kecamatan">Kecamatan</label>
                            <input type="text" class="form-control" id="kecamatan" name="kecamatan" value="Kuta Selatan">
                        </div>
                    </div>
                    <div class="col-lg-6 pl-2">
                        <div class="form-group">
                            <label for="kabupaten">Kabupaten</label>
                            <input type="text" class="form-control" id="kabupaten" name="kabupaten" value="Badung">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" value="Jl. Kampus Unud Bukit Jimbaran No. II">
                </div>
                <div class="form-group">
                    <label for="catatan">Catatan</label>
                    <textarea class="form-control" id="catatan" name="catatan" rows="3"></textarea>
                </div>
                <button type="submit" name="sewa" class="btn btn-md tombol mb-3 float-right pr-3 pl-3">SEWA</button>
            </form>
        </div>
    </div>
</div>