<?php
include 'control/action_form.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Mahasiswa</title>
    <link rel="icon" href="img/site-logo.png">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="card-form">
        <div class="title">FORM NILAI MAHASISWA</div>
        <form action="" method="post">
            <div class="row">
                <div class="col-25">
                    <label for="nim">NIM</label>
                </div>
                <div class="col-75">
                    <input type="text" name="nim" required>
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="nama">Nama</label>
                </div>
                <div class="col-75">
                    <input type="text" name="nama" required>
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="nilai1">Nilai 1</label>
                </div>
                <div class="col-25">
                    <input type="text" name="nilai1" required>
                </div>

                <div class="col-25" style="margin-left: 15%;">
                    <label for="nilai2">Nilai 2</label>
                </div>
                <div class="col-25">
                    <input type="text" name="nilai2" required>
                </div>

            </div>


            <?php if (isset($_POST['submit'])) : ?>
                <?php for ($i = 0; $i < count($nims); $i++) : ?>
                    <input type="hidden" name="nims[<?= $i ?>]" value="<?= $nims[$i] ?>">
                    <input type="hidden" name="namas[<?= $i ?>]" value="<?= $namas[$i] ?>">
                    <input type="hidden" name="nilai1s[<?= $i ?>]" value="<?= $nilai1s[$i] ?>">
                    <input type="hidden" name="nilai2s[<?= $i ?>]" value="<?= $nilai2s[$i] ?>">
                    <input type="hidden" name="jumlahnilais[<?= $i ?>]" value="<?= $jumlahnilais[$i] ?>">
                    <input type="hidden" name="reratas[<?= $i ?>]" value="<?= $reratas[$i] ?>">
                <?php endfor; ?>
            <?php endif; ?>
            <div class="row">
                <button type="submit" class="btn" name="submit">Submit</button>
            </div>
        </form>
    </div>

    <hr>
    <div class="title" style="font-size: 25px; color:#404040">List Nilai Mahasiswa</div>

    <?php if (isset($list)) : ?>
        <input type="hidden" class="listed" value='<?= $list ?>'>
    <?php endif; ?>
    <div class="list">

    </div>

    <hr>
    <!-- include javascript -->
    <script src="js/jquery.js"></script>
    <script>
        $(document).ready(function() {
            $(".list").append($(".listed").val());
        });
    </script>
</body>

</html>