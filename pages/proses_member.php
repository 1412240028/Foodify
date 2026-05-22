<?php

$nama = trim($_POST['nama'] ?? '');
$email = trim($_POST['email'] ?? '');
$nohp = trim($_POST['nohp'] ?? '');
$alamat = trim($_POST['alamat'] ?? '');
$jk = $_POST['jk'] ?? '';
$tgl = $_POST['tgl'] ?? '';
$bln = $_POST['bln'] ?? '';
$thn = $_POST['thn'] ?? '';
$setuju = isset($_POST['setuju']) ? $_POST['setuju'] : '';

$errors = [];

if ($nama == '') {
    $errors[] = "Nama Lengkap tidak boleh kosong.";
}

if ($email == '') {
    $errors[] = "Email tidak boleh kosong.";
}

if ($nohp == '') {
    $errors[] = "Nomor HP tidak boleh kosong.";
}

if ($alamat == '') {
    $errors[] = "Alamat tidak boleh kosong.";
}

if ($email != '' && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Format Email tidak valid.";
}

if ($nohp != '' && !is_numeric($nohp)) {
    $errors[] = "Nomor HP harus berupa angka.";
}

if (!checkdate((int) $bln, (int) $tgl, (int) $thn)) {
    $errors[] = "Tanggal lahir tidak valid.";
}

if ($setuju == '') {
    $errors[] = "Anda harus menyetujui syarat dan ketentuan.";
}

if (!empty($errors)) {
    ?>

    <!DOCTYPE html>
    <html lang="id">

    <head>
        <meta charset="UTF-8">
        <title>Pendaftaran Gagal - Foodify</title>
    </head>

    <body>

        <table align="center" border="1" style="width:500px; padding:10px;">
            <tr>
                <th style="color:red; font-size:20px;">
                    &#10008; KONEKSI GAGAL
                </th>
            </tr>
        </table>

        <h2 align="center">
            <u>PENDAFTARAN DIBATALKAN</u>
        </h2>

        <p align="center">
            Formulir belum diisi dengan benar.
            Mohon perbaiki kesalahan berikut:
        </p>

        <table align="center" cellpadding="5">

            <?php foreach ($errors as $error): ?>

                <tr>
                    <td style="color:red;">&#10006;</td>
                    <td style="color:red;">
                        <?= htmlspecialchars($error) ?>
                    </td>
                </tr>

            <?php endforeach; ?>

        </table>

        <br>

        <p align="center">
            <input type="button" value="&#8592; Kembali ke Form" onclick="history.back()">
        </p>

    </body>

    </html>

    <?php
    exit();
}

$tanggal_daftar = strtoupper(date('d F Y'));
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Pendaftaran Berhasil - Foodify</title>
</head>

<body>

    <table align="center" border="1" style="width:500px; padding:10px;">
        <tr>
            <th style="color:green; font-size:20px;">
                &#10004; KONEKSI BERHASIL
            </th>
        </tr>
    </table>

    <h2 align="center">
        <u>DATA MEMBER FOODIFY</u>
    </h2>

    <table cellpadding="8" cellspacing="0" align="center">

        <tr>
            <td><b>NAMA LENGKAP</b></td>
            <td>:</td>
            <td><?= htmlspecialchars($nama) ?></td>
        </tr>

        <tr>
            <td><b>EMAIL</b></td>
            <td>:</td>
            <td><?= htmlspecialchars($email) ?></td>
        </tr>

        <tr>
            <td><b>NOMOR HP</b></td>
            <td>:</td>
            <td><?= htmlspecialchars($nohp) ?></td>
        </tr>

        <tr>
            <td><b>ALAMAT</b></td>
            <td>:</td>
            <td><?= strtoupper(htmlspecialchars($alamat)) ?></td>
        </tr>

        <tr>
            <td><b>JENIS KELAMIN</b></td>
            <td>:</td>
            <td><?= htmlspecialchars($jk) ?></td>
        </tr>

        <tr>
            <td><b>TANGGAL LAHIR</b></td>
            <td>:</td>
            <td><?= $tgl . "/" . $bln . "/" . $thn ?></td>
        </tr>

    </table>

    <table align="center" border="1" cellpadding="8" style="width:500px; margin-top:10px;">
        <tr>
            <td align="center">
                <i>
                    Anda mendaftar sebagai member Foodify
                    pada tanggal <?= $tanggal_daftar ?>
                </i>
            </td>
        </tr>
    </table>

</body>

</html>