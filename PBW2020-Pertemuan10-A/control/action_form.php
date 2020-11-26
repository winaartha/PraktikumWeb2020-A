<?php
function validasi($data)
{
    $data = trim($data); //hapus spasi kanan kiri
    $data = stripslashes($data); //hapus tanda \
    $data = htmlspecialchars($data); //hilangkan tag html
    return $data;
}

if (isset($_POST['submit'])) {
    $nama = validasi($_POST['nama']);
    $nim = validasi($_POST['nim']);

    //convert jadi integer
    $nilai1 = intval(validasi($_POST['nilai1']));
    $nilai2 = intval(validasi($_POST['nilai2']));

    //variabel array yang nampung semua nilai
    $jumlahnilai = $nilai1 + $nilai2;
    $rerata = $jumlahnilai / 2;
    $nims = [];
    $namas = [];
    $nilai1s = [];
    $nilai2s = [];
    $jumlahnilais = [];
    $reratas = [];

    if (isset($_POST['nims'])) {
        $temp_nim = $_POST['nims'];
        $temp_nama = $_POST['namas'];
        $temp_nilai1 = $_POST['nilai1s'];
        $temp_nilai2 = $_POST['nilai2s'];
        $temp_j = $_POST['jumlahnilais'];
        $temp_r = $_POST['reratas'];
        for ($i = 0; $i < count($temp_nim); $i++) {
            array_push($nims, $temp_nim[$i]);
            array_push($namas, $temp_nama[$i]);
            array_push($nilai1s, $temp_nilai1[$i]);
            array_push($nilai2s, $temp_nilai2[$i]);
            array_push($jumlahnilais, $temp_j[$i]);
            array_push($reratas, $temp_r[$i]);
        }
    }

    //cek nim belum masuk
    if (in_array($nim, $nims)) {
        echo "<script>alert('NIM sudah digunakan'); window.history.back(); </script>";
        die;
    }
    array_push($nims, $nim);
    array_push($namas, $nama);
    array_push($nilai1s, $nilai1);
    array_push($nilai2s, $nilai2);
    array_push($jumlahnilais, $jumlahnilai);
    array_push($reratas, $rerata);


    //dynamic list
    $list = '';
    for ($i = 0; $i < count($nims); $i++) {
        $list =  $list . '<div class="card">
        <table>
        <tr>
            <th style="width:30%"></th>
            <th style="width:5%"></th>
            <th style="width:65%"></th>
        </tr>
        <tr>
            <td>NIM</td>
            <td>: </td>
            <td>' . $nims[$i] . '</td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>: </td>
            <td>' . $namas[$i] . '</td>
        </tr>
        <tr>
            <td>Nilai 1</td>
            <td>: </td>
            <td>' . $nilai1s[$i] . '</td>
        </tr>
        <tr>
            <td>Nilai 2</td>
            <td>: </td>
            <td>' . $nilai2s[$i] . '</td>
        </tr>
        <tr>
            <td>Total Nilai</td>
            <td>: </td>
            <td>' . $jumlahnilais[$i] . '</td>
        </tr>
        <tr>
            <td>Rata-rata</td>
            <td>: </td>
            <td>' . $reratas[$i] . '</td>
        </tr>
        </table>
        </div>';
    }
}
