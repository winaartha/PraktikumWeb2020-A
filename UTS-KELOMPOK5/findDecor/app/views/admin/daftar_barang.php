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
                <li class="nav-item active">
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
            <a href="<?= BASE_URL; ?>admin/daftar_barang">
                Daftar Barang
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
                                <h4 class="card-title-sm">Daftar Barang</h4>
                            </div>
                            <div class="card-body table-full-width table-responsive">
                                <table class="table table-hover table-striped table-bordered">
                                    <thead class="text-center">
                                        <th>No</th>
                                        <th>Nama Barang</th>
                                        <th>Nama Vendor</th>
                                        <th>Harga/Hari</th>
                                        <th>Kategori</th>
                                        <th>Stock(?)</th>
                                        <th>Gambar</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1;
                                        foreach ($data["barang"] as $brg) :
                                        ?>
                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?= $brg['nama_barang']; ?></td>
                                                <td><?= $brg['nama_vendor']; ?></td>
                                                <td>Rp. <?= number_format($brg['harga_barang'], 0, ".", "."); ?></td>
                                                <td>Ini Belum</td>
                                                <td>Ini juga</td>
                                                <td class="text-center">
                                                    <img src="<?= URL_IMG ?>barang/barang1.jpg" width="200" />
                                                </td>
                                                <td>
                                                    <!-- DELETE -->
                                                    <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-fw fa-trash-alt"></i></a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
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