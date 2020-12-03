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
                <li class="nav-item active">
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
            <a href="<?= BASE_URL; ?>admin/profil_admin">
                Profil User
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
                    <div class="col-md-8 mt-4">
                        <div class="card">
                            <div class="card-header text-left" style="background:rgb(54, 54, 54)">
                                <h4 class="card-title-sm">Edit Profil</h4>
                            </div>
                            <div class="card-body">
                                <form action="" method="POST">
                                    <div class="row">
                                        <div class="col-md-6 pr-1">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" class="form-control" placeholder="Username" value="winaartha">
                                            </div>
                                        </div>
                                        <div class="col-md-6 pl-1">
                                            <div class="form-group">
                                                <label>Email address (disabled)</label>
                                                <input type="email" class="form-control" disabled="" placeholder="Email" value="winaartha@gmail.com">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Nomor Telepon</label>
                                                <input type="text" class="form-control" placeholder="Nomor Telepon" value="08133392893">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 pr-1">
                                            <div class="form-group">
                                                <label for="password_lama">Password Lama</label>
                                                <input type="password" class="form-control" name="password_lama" id="password_lama" value="123456" autocapitalize="off">
                                            </div>
                                        </div>
                                        <div class="col-md-6 pl-1">
                                            <div class="form-group">
                                                <label for="password_baru">Password Baru</label>
                                                    <input type="password" class="form-control" name="password_lama" id="password_baru" value="123456" autocapitalize="off">
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="konfir_password">Konfirmasi Password</label>
                                                <input type="password" class="form-control" name="konfir_password" id="konfir_password" value="123456" autocapitalize="off">
                                            </div>
                                        </div>
                                    </div>   
                                        <button type="submit" class="btn btn-info btn-fill pull-right">UPDATE PROFIL</button>
                            </form>     
                        </div>
                    </div>
                </div>
                <div class="col-4 mt-4">
                    <div class="card card-user">
                        <div class="card-body">
                            <div class="col-13">
                                <div class="card warna mb-3 p-2">
                                    <img src="<?= URL_IMG ?>profile/Default.jpg" class="rounded-circle mx-auto border border-white" width="70%">
                                        <div class="form-group">
                                            <input type="file" class="form-control-file mt-3 border border-light">
                                        </div>
                                </div>
                                        <button type="submit" name="setprofil" class="btn btn-info btn-fill">SIMPAN</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
        <!-- End Content -->

    </div>
</section>