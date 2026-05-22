<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pendaftaran Member - Foodify</title>
</head>
<body bgcolor="lightyellow">

<<<<<<< HEAD
    <h2>PENDAFTARAN </h2>
=======
    <h2>PENDAFTARAN MEMBER FOODIFY</h2>
>>>>>>> 1d60c6d8fa6a37c1dd648f26bd905253ee9cfec5
    <hr>
    <p>Daftarkan diri kamu sebagai member Foodify dan nikmati berbagai keuntungan eksklusif!</p>

    <form action="proses_member.php" method="post">
    <table cellpadding="6" cellspacing="0">

        <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td><input type="text" name="nama" size="30"></td>
        </tr>

        <tr>
            <td>Email</td>
            <td>:</td>
            <td><input type="text" name="email" size="30"></td>
        </tr>

        <tr>
            <td>Nomor HP</td>
            <td>:</td>
            <td><input type="text" name="nohp" size="20"></td>
        </tr>

        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><textarea name="alamat" rows="3" cols="30"></textarea></td>
        </tr>

        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>
                <input type="radio" name="jk" value="Laki-laki" checked> Laki-laki &nbsp;
                <input type="radio" name="jk" value="Perempuan"> Perempuan
            </td>
        </tr>

        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td>
                <select name="tgl">
                    <?php for ($i = 1; $i <= 31; $i++): ?>
                        <option value="<?= str_pad($i, 2, '0', STR_PAD_LEFT) ?>"><?= $i ?></option>
                    <?php endfor; ?>
                </select>

                <select name="bln">
                    <option value="Januari">Januari</option>
                    <option value="Februari">Februari</option>
                    <option value="Maret">Maret</option>
                    <option value="April">April</option>
                    <option value="Mei">Mei</option>
                    <option value="Juni">Juni</option>
                    <option value="Juli">Juli</option>
                    <option value="Agustus">Agustus</option>
                    <option value="September">September</option>
                    <option value="Oktober">Oktober</option>
                    <option value="November">November</option>
                    <option value="Desember">Desember</option>
                </select>

                <select name="thn">
                    <?php for ($y = 1990; $y <= 2030; $y++): ?>
                        <option value="<?= $y ?>"><?= $y ?></option>
                    <?php endfor; ?>
                </select>
            </td>
        </tr>

        <tr>
            <td colspan="3">
                <input type="checkbox" name="setuju" value="1">
                Saya menyetujui syarat dan ketentuan yang berlaku di Foodify
            </td>
        </tr>

        <tr>
            <td colspan="3" align="right">
                <input type="submit" name="daftar" value="Daftar Sekarang">
                &nbsp;
                <input type="reset" value="Reset">
            </td>
        </tr>

    </table>
    </form>

</body>
</html>