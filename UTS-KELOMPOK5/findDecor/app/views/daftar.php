<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link rel="stylesheet" href="<?= BASE_URL ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>css/style-log.css">

    <title>Daftar Akun</title>
</head>

<body>
    <header>
        <a href="<?= BASE_URL ?>" class="logo title" style="color: #ce8272 !important;">findDécor</a>
    </header>
    <div class="container">
        <div class="row mt-12">
            <div class="row border-box">
                <div class="col-lg-6 p-3" align="center">
                    <img src="<?= URL_IMG ?>svg/undraw_Access_account_re_8spm.svg" width="80%">
                </div>
                <div class="col-lg-6 p-0">
                    <div class="shadow-lg p-2 bg-white rounded">
                        <div class="card">
                            <div class="text-center">
                                <br />
                                <h2><b>DAFTAR</b></h2>
                            </div>
                            <div class="card-body p-3">
                                <form method="post">
                                    <div class="form-group">
                                        <label for="input_email" class="label">Email</label>
                                        <input type="email" class="form-control form " id="input_email">
                                    </div>

                                    <div class="form-group">
                                        <label for="input_nomor" class="label">Nomor Telepon</label>
                                        <input type="tel" class="form-control form " id="input_nomor">
                                    </div>

                                    <div class="form-group">
                                        <label for="input_username" class="label">Username</label>
                                        <input type="text" class="form-control form " id="input_username">
                                    </div>

                                    <div class="form-group">
                                        <label for="input_password" class="label">Password</label>
                                        <input type="password" class="form-control form" id="input_password">
                                    </div>

                                    <div class="form-group">
                                        <label for="input_konfirpassword" class="label">Konfirmasi Password</label>
                                        <input type="password" class="form-control form" id="input_konfirpassword">
                                        <br />
                                    </div>
                                    <a type="button" class="btn btn-secondary btn-lg btn-block masuk" href="<?= BASE_URL ?>login">
                                        DAFTAR
                                    </a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <p class="text-center">&copy; 2020, Kelompok 5</p>
    </footer>

</body>

</html>