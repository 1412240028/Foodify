<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Pendaftaran Member - Foodify</title>
</head>

<body bgcolor="lightyellow">

    <h2>HALAMAN PENDAFTARAN MEMBER</h2>
    <hr>

    <p>Halo! Selamat datang di halaman pendaftaran <b>Foodify</b>.</p>
    <p>
        Daftar sekarang dan jadi bagian dari komunitas Foodify.
        Member dapat info promo duluan, rekomendasi menu personal,
        dan pengalaman belanja yang lebih mudah ke depannya.
        Isi formnya — cuma semenit kok.
    </p>

    <hr>

    <h3 align="center">Form Pendaftaran Member</h3>

    <form action="proses_member.php" method="post">
        <table border="1" width="700" align="center" cellpadding="6" cellspacing="0">
            <tr>
                <th width="180">Nama Lengkap</th>
                <td>
                    <input type="text" name="nama" size="50" required>
                </td>
            </tr>

            <tr>
                <th>Email</th>
                <td>
                    <input type="email" name="email" size="50" required>
                </td>
            </tr>

            <tr>
                <th>Nomor HP</th>
                <td>
                    <input type="text" name="nohp" size="30" required>
                </td>
            </tr>

            <tr>
                <th>Alamat</th>
                <td>
                    <textarea name="alamat" rows="4" cols="52" required></textarea>
                </td>
            </tr>

            <tr>
                <th>Jenis Kelamin</th>
                <td>
                    <input type="radio" name="jk" value="Laki-laki" checked>
                    Laki-laki

                    &nbsp;&nbsp;

                    <input type="radio" name="jk" value="Perempuan">
                    Perempuan
                </td>
            </tr>

            <tr>
                <th>Tanggal Lahir</th>
                <td>
                    <select name="tgl">
                        <?php for ($i = 1; $i <= 31; $i++): ?>
                            <option value="<?= $i ?>">
                                <?= $i ?>
                            </option>
                        <?php endfor; ?>
                    </select>

                    <select name="bln">
                        <option value="1">Januari</option>
                        <option value="2">Februari</option>
                        <option value="3">Maret</option>
                        <option value="4">April</option>
                        <option value="5">Mei</option>
                        <option value="6">Juni</option>
                        <option value="7">Juli</option>
                        <option value="8">Agustus</option>
                        <option value="9">September</option>
                        <option value="10">Oktober</option>
                        <option value="11">November</option>
                        <option value="12">Desember</option>
                    </select>

                    <select name="thn">
                        <?php for ($y = 1990; $y <= 2030; $y++): ?>
                            <option value="<?= $y ?>">
                                <?= $y ?>
                            </option>
                        <?php endfor; ?>
                    </select>
                </td>
            </tr>

            <tr>
                <th>Persetujuan</th>
                <td>
                    <input type="checkbox" name="setuju" value="1" required>
                    Saya setuju sama syarat dan ketentuan yang berlaku di Foodify.
                </td>
            </tr>

            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="daftar" value="Daftar Sekarang">
                    &nbsp;
                    <input type="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>

    <br>

    <h3 align="center">Keuntungan Jadi Member Foodify</h3>

    <table border="1" width="700" align="center" cellpadding="6" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Keuntungan</th>
            <th>Keterangan</th>
        </tr>

        <tr align="center">
            <td>1</td>
            <td><b>Info Promo Duluan</b></td>
            <td align="left">Member dapet notifikasi promo sebelum diumumin ke publik.</td>
        </tr>

        <tr align="center">
            <td>2</td>
            <td><b>Rekomendasi Personal</b></td>
            <td align="left">Saran menu yang disesuaikan sama preferensi dan riwayat ordermu.</td>
        </tr>

        <tr align="center">
            <td>3</td>
            <td><b>Proses Order Lebih Cepet</b></td>
            <td align="left">Data tersimpan, jadi nggak perlu isi ulang info tiap mau pesan.</td>
        </tr>
        
    </table>

    <br>

    <p align="center">
        <a href="profil.html" target="konten">&larr; Profil</a>
        &nbsp;
        <a href="beranda.html" target="konten">Beranda &rarr;</a>
    </p>

</body>

</html>