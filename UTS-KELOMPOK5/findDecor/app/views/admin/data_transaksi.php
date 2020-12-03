<!-- CONTENT START -->
<section class="wrapper">
    <!-- Start Sidebar -->
    <div class="sidebar">
        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="<?= BASE_URL ?>">
                    findDecor
                </a>
            </div>
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?= BASE_URL; ?>admin/admin"> 
                        <i aria-hidden="true" class="fa fa-fw fa-desktop"></i>
                        Dashboard                       
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= BASE_URL; ?>admin/profil_admin"> 
                        <i aria-hidden="true" class="fa fa-fw fa-user"></i>
                        User profil                       
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= BASE_URL; ?>admin/data_customer"> 
                        <i aria-hidden="true" class="fa fa-fw fa-bars"></i>
                        List Customer                     
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="<?= BASE_URL; ?>admin/data_vendor"> 
                        <i aria-hidden="true" class="fa fa-fw fa-list"></i>
                        List Vendor                      
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?= BASE_URL; ?>admin/data_transaksi"> 
                        <i aria-hidden="true" class="fa fa-fw fa-shopping-basket"></i>
                        List Transaksi                       
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= BASE_URL; ?>admin/daftar_barang"> 
                        <i aria-hidden="true" class="fa fa-fw fa-truck"></i>
                        Daftar Barang                       
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- End Sidebar -->

    <!-- Start Main Content -->
    <div class="main">
        <!-- Start Navbar -->
        <div class="navbar navbar-admin">           
            <a href="<?= BASE_URL; ?>admin/data_transaksi">
                List Transaksi
            </a>
            <a href="<?= BASE_URL; ?>home/index">
                <i aria-hidden="true" class="fa fa-arrow-circle-right"></i>
                Log out
            </a>
        </div>
        <!-- End Navbar -->

        <!-- Start Content -->
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 mt-4">
                        <div class="card strpied-tabled-with-hover">
                            <div class="card-header ">
                                <h4 class="card-title-sm">Data Transaksi</h4>
                            </div>
                            <div class="card-body">
                                <table class="table table-sm table-bordered">
                                    <tr class="text-center">
                                        <th>Id_Cust</th>
                                        <th>Id_Barang</th>
                                        <th>Id_Invoice</th>
                                        <th>Status</th>
                                        <th>Tanggal Pemesanan</th>
                                        <th>Tanggal Dikirim</th>
                                        <th>Tanggal Kembali</th>
                                        <th>Tanggal Bayar</th>
                                        <th>Total Harga</th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>4</td>
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
                                        <td>20-10-2020</td>
                                        <td>20-10-2020</td>
                                        <td>20-10-2020</td>
                                        <td>24-10-2020</td>
                                        <td>Rp. 250.000</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>4</td>
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
                                        <td>20-10-2020</td>
                                        <td>20-10-2020</td>
                                        <td>20-10-2020</td>
                                        <td>24-10-2020</td>
                                        <td>Rp. 250.000</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>4</td>
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
                                        <td>20-10-2020</td>
                                        <td>20-10-2020</td>
                                        <td>20-10-2020</td>
                                        <td>24-10-2020</td>
                                        <td>Rp. 250.000</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>4</td>
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
                                        <td>20-10-2020</td>
                                        <td>20-10-2020</td>
                                        <td>20-10-2020</td>
                                        <td>24-10-2020</td>
                                        <td>Rp. 250.000</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>4</td>
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
                                        <td>20-10-2020</td>
                                        <td>20-10-2020</td>
                                        <td>20-10-2020</td>
                                        <td>24-10-2020</td>
                                        <td>Rp. 250.000</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>4</td>
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
                                        <td>20-10-2020</td>
                                        <td>20-10-2020</td>
                                        <td>20-10-2020</td>
                                        <td>24-10-2020</td>
                                        <td>Rp. 250.000</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>4</td>
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
                                        <td>20-10-2020</td>
                                        <td>20-10-2020</td>
                                        <td>20-10-2020</td>
                                        <td>24-10-2020</td>
                                        <td>Rp. 250.000</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
        <!-- End Content -->

    </div>
</section>