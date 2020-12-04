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
                <li class="nav-item active">
                    <a class="nav-link" href="<?= BASE_URL; ?>admin/data_customer">
                        <i aria-hidden="true" class="fa fa-fw fa-bars"></i>
                        List Customer
                    </a>
                </li>
                <li class="nav-item">
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
            <a href="<?= BASE_URL; ?>admin/data_customer">
                Data Customer
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
                                <h4 class="card-title-sm">Data Customer</h4>
                            </div>
                            <div class="card-body table-full-width table-responsive">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>No</th>
                                        <th>Email</th>
                                        <th>Nomor Telepon</th>
                                        <th>Username</th>
                                        <th>Alamat</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>winwin@gmail.com</td>
                                            <td>081987654783</td>
                                            <td>winaartha</td>
                                            <td>Jln. Kenanga, No. 29</td>
                                            <td>
                                                <!-- DELETE -->
                                                <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-fw fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>jaehyunjung@gmail.com</td>
                                            <td>09112321432</td>
                                            <td>jeongjae</td>
                                            <td>Jln. Gunung Agung, No. 23</td>
                                            <td>
                                                <!-- DELETE -->
                                                <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-fw fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>kwonhoshi@gmail.com</td>
                                            <td>087654789000</td>
                                            <td>hoshihosh</td>
                                            <td>Jln. Jepun, No. 1</td>
                                            <td>
                                                <!-- DELETE -->
                                                <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-fw fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>iamjosh@gmail.com</td>
                                            <td>081867890980</td>
                                            <td>johsuajosh</td>
                                            <td>Jln. Pandawa, No. 3</td>
                                            <td>
                                                <!-- DELETE -->
                                                <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-fw fa-trash-alt"></i></a>
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
        <!-- End Content -->

    </div>
</section>