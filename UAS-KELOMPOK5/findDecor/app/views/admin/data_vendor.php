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
            <a href="<?= BASE_URL; ?>auth/logout">
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
                                <table class="table table-hover table-md table-bordered">
                                    <tr class="text-center">
                                        <th>No</th>
                                        <th>Nama Toko</th>
                                        <th>Username</th>
                                        <th width="30%">Alamat</th>
                                        <th> No. Telp</th>
                                        <th>Rekening Bank</th>
                                        <th>Action</th>
                                    </tr>
                                    <?php $no = 1;
                                    foreach ($data["vendor"] as $vn) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $vn['nama_vendor'] ?></td>
                                            <td><?= $vn['username'] ?></td>
                                            <td>
                                                <?= $vn['alamat'] ?> <span class="badge badge-secondary pt-1 pb-1"><?= $vn['kecamatan'] ?></span>
                                                <span class="badge badge-dark pt-1 pb-1"><?= $vn['kabupaten'] ?></span>
                                            </td>
                                            <td><?= $vn['notelp'] ?></td>
                                            <td>
                                                <?= $vn['bca'] ?> <span class="badge badge-primary text-dark">BCA</span><br>
                                                <?= $vn['bni'] ?> <span class="badge badge-warning">BNI</span><br>
                                                <?= $vn['bri'] ?> <span class="badge badge-info text-dark">BRI</span<br>
                                            </td>
                                            <td>
                                                <!-- DELETE -->
                                                <a href="<?= BASE_URL ?>admin/hapusvendor/<?= $vn['id_user'] ?>" class="btn btn-danger btn-sm"><i class="fas fa-fw fa-trash-alt"></i></a>
                                            </td>

                                        </tr>
                                    <?php endforeach; ?>
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