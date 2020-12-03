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
                <li class="nav-item active">
                    <a class="nav-link" href="<?= BASE_URL; ?>admin/data_vendor"> 
                        <i aria-hidden="true" class="fa fa-fw fa-list"></i>
                        List Vendor                      
                    </a>
                </li>
                <li class="nav-item">
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
            <a href="<?= BASE_URL; ?>admin/data_vendor">
                Data Vendor
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
                                <h4 class="card-title-sm">Data Vendor</h4>
                            </div>
                            <div class="card-body">
                                <table class="table table-hover table-sm table-bordered">
                                    <tr class="text-center">
                                        <th rowspan="2" ><br>ID</th>
                                        <th rowspan="2" ><br>Nama Toko</th>
                                        <th rowspan="2" ><br>Alamat</th>
                                        <th rowspan="2" ><br>Kecamatan</th>
                                        <th rowspan="2" ><br>Kabupaten</th>
                                        <th rowspan="2" ><br>No. Telp</th>
                                        <th rowspan="2" >Username<br>Pemilik</th>
                                        <th colspan="3">Rekening Bank</th>
                                    </tr>
                                    <tr class="text-center">
                                        <th>BCA</th>
                                        <th>BNI</th>
                                        <th>BRI</th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Solusi Murah</td>
                                        <td>Jl. Kampus Unud Bukit Jimbaran No. II</td>
                                        <td>Kuta Selatan</td>
                                        <td>Badung</td>
                                        <td>0812345678</td>
                                        <td>shxhss</td>
                                        <td>032 900 977 9</td>
                                        <td>010 642 703 5</td>
                                        <td>111-00-0459047-3</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Solusi Murah</td>
                                        <td>Jl. Kampus Unud Bukit Jimbaran No. II</td>
                                        <td>Kuta Selatan</td>
                                        <td>Badung</td>
                                        <td>0812345678</td>
                                        <td>shxhss</td>
                                        <td>032 900 977 9</td>
                                        <td>010 642 703 5</td>
                                        <td>111-00-0459047-3</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Solusi Murah</td>
                                        <td>Jl. Kampus Unud Bukit Jimbaran No. II</td>
                                        <td>Kuta Selatan</td>
                                        <td>Badung</td>
                                        <td>0812345678</td>
                                        <td>shxhss</td>
                                        <td>032 900 977 9</td>
                                        <td>010 642 703 5</td>
                                        <td>111-00-0459047-3</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Solusi Murah</td>
                                        <td>Jl. Kampus Unud Bukit Jimbaran No. II</td>
                                        <td>Kuta Selatan</td>
                                        <td>Badung</td>
                                        <td>0812345678</td>
                                        <td>shxhss</td>
                                        <td>032 900 977 9</td>
                                        <td>010 642 703 5</td>
                                        <td>111-00-0459047-3</td>
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