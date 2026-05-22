<?php

// Ambil semua data dari form
$nama   = trim($_POST['nama']);
$email  = trim($_POST['email']);
$nohp   = trim($_POST['nohp']);
$alamat = trim($_POST['alamat']);
$jk     = $_POST['jk'];
$tgl    = $_POST['tgl'];
$bln    = $_POST['bln'];
$thn    = $_POST['thn'];
$setuju = isset($_POST['setuju']) ? $_POST['setuju'] : '';

// =====================
// VALIDASI
// =====================
$errors = [];

// 1. Field kosong
if ($nama == '')   $errors[] = "Nama Lengkap tidak boleh kosong.";
if ($email == '')  $errors[] = "Email tidak boleh kosong.";
if ($nohp == '')   $errors[] = "Nomor HP tidak boleh kosong.";
if ($alamat == '') $errors[] = "Alamat tidak boleh kosong.";

// 2. Format email harus valid
if ($email != '' && !filter_var($email, FILTER_VALIDATE_EMAIL))
    $errors[] = "Format Email tidak valid.";

// 3. Nomor HP harus angka
if ($nohp != '' && !is_numeric($nohp))
    $errors[] = "Nomor HP harus berupa angka.";

// 4. Checkbox wajib dicentang
if ($setuju == '') $errors[] = "Anda harus menyetujui syarat dan ketentuan.";

// =====================
// JIKA ADA ERROR = KONEKSI GAGAL
// =====================
if (!empty($errors)) {
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pendaftaran Gagal - Foodify</title>
</head>
<body>

<<<<<<< HEAD
    <table align="center" border="1" style="width:500px; padding:10px;">
        <tr>
            <th style="color:red; font-size:20px;">&#10008; KONEKSI GAGAL</th>
        </tr>
    </table>

    <h2 align="center"><u>PENDAFTARAN DIBATALKAN</u></h2>
    <p align="center">Formulir belum diisi dengan benar. Mohon perbaiki kesalahan berikut:</p>

    <ul align="center" style="list-style:none; text-align:center; padding:0;">
        <?php foreach ($errors as $error): ?>
            <li style="color:red;"><?= $error ?></li>
        <?php endforeach; ?>
    </ul>
=======
    <h2 align="center"><u>PENDAFTARAN DIBATALKAN</u></h2>
    <p align="center">Formulir belum diisi dengan benar. Mohon perbaiki kesalahan berikut:</p>

    <table align="center" cellpadding="5">
    <?php foreach ($errors as $error): ?>
      <tr>
        <td style="color:red;">&#10006;</td>
        <td style="color:red;"><?= $error ?></td>
      </tr>
    <?php endforeach; ?>
    </table>
>>>>>>> 1d60c6d8fa6a37c1dd648f26bd905253ee9cfec5

    <br>
    <p align="center">
        <input type="button" value="&#8592; Kembali ke Form" onclick="history.back()">
    </p>

</body>
</html>
<?php
    exit();
}

// =====================
// JIKA VALID = KONEKSI BERHASIL
// =====================
$tanggal_daftar = strtoupper(date('d F Y'));
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pendaftaran Berhasil - Foodify</title>
</head>
<body>

<<<<<<< HEAD
    <table align="center" border="1" style="width:500px; padding:10px;">
        <tr>
            <th style="color:green; font-size:20px;">&#10004; KONEKSI BERHASIL</th>
        </tr>
    </table>

=======
>>>>>>> 1d60c6d8fa6a37c1dd648f26bd905253ee9cfec5
    <h2 align="center"><u>DATA MEMBER FOODIFY</u></h2>

    <table cellpadding="8" cellspacing="0" align="center">

        <tr>
            <td><b>NAMA LENGKAP</b></td>
            <td>:</td>
            <td><?= $nama ?></td>
        </tr>

        <tr>
            <td><b>EMAIL</b></td>
            <td>:</td>
            <td><?= $email ?></td>
        </tr>

        <tr>
            <td><b>NOMOR HP</b></td>
            <td>:</td>
            <td><?= $nohp ?></td>
        </tr>

        <tr>
            <td><b>ALAMAT</b></td>
            <td>:</td>
            <td><?= strtoupper($alamat) ?></td>
        </tr>

        <tr>
            <td><b>JENIS KELAMIN</b></td>
            <td>:</td>
            <td><?= $jk ?></td>
        </tr>

        <tr>
            <td><b>TANGGAL LAHIR</b></td>
            <td>:</td>
            <td><?= $tgl . "/" . $bln . "/" . $thn ?></td>
        </tr>

    </table>

    <!-- Border box tanggal daftar -->
    <table align="center" border="1" cellpadding="8" style="width:500px; margin-top:10px;">
        <tr>
            <td align="center"><i>Anda mendaftar sebagai member Foodify pada tanggal <?= $tanggal_daftar ?></i></td>
        </tr>
    </table>

</body>
</html>