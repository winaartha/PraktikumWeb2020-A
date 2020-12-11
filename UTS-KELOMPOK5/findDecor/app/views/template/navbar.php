<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand ml-5" href="<?= BASE_URL ?>">findDécor</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <form action="" class="mt-3 p-1">
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Cari Dekorasi" name="cari">
                </form>
            </form>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <ul class="navbar-nav ml-auto">
                    <a class="navbar-brand" href="<?= BASE_URL ?>login"><i class="icon fas fa-shopping-cart shop ml-2 mr-2"></i></a>
                    <p class="batas mr-4 mt-1">|</p>
                    <?php if (isset($_SESSION['id_user'])) : ?>
                        <div class="dropdown">
                            <button class="btn btn masuk mt-3 dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?= $data['user']['username']; ?>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                <a class="dropdown-item" href="<?= BASE_URL; ?>customer">Akun Customer</a>
                                <?php if ($data['user']['role_id'] == 2) : ?>
                                    <a class="dropdown-item" href="<?= BASE_URL; ?>vendor">Akun Vendor</a>
                                <?php elseif ($data['user']['role_id'] == 3) : ?>
                                    <a class="dropdown-item" href="<?= BASE_URL; ?>vendor/daftar_vendor/<?= $data['user']['id_user']; ?>">Daftar Vendor</a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <a class="nav-item btn tombol mt-3 font-weight-bold border" href="<?= BASE_URL ?>auth/logout">Logout</a>
                    <?php else : ?>
                        <a class="nav-item btn masuk mt-3 mr-1 font-weight-bold" href="<?= BASE_URL ?>auth">Masuk</a>
                        <a class="nav-item btn tombol mt-3 font-weight-bold border" href="<?= BASE_URL ?>auth/registrasi">Daftar</a>
                    <?php endif; ?>
                </ul>
            </div>

        </div>
    </div>
</nav>
<!-- NAVBAR END -->