<?php
include "../koneksi.php";

if (isset($_POST['tambah'])) {
    $nama_produk = mysqli_real_escape_string($conn, $_POST['nama_produk']);
    $kategori    = mysqli_real_escape_string($conn, $_POST['kategori']);
    $harga       = mysqli_real_escape_string($conn, $_POST['harga']);
    $deskripsi   = mysqli_real_escape_string($conn, $_POST['deskripsi']);

    $query = "INSERT INTO produk (nama_produk, kategori, harga, deskripsi)
              VALUES ('$nama_produk', '$kategori', '$harga', '$deskripsi')";

    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Produk berhasil ditambahkan'); window.location='produk.php';</script>";
    } else {
        echo "<script>alert('Gagal menambahkan produk');</script>";
    }
}

if (isset($_POST['update'])) {
    $id_produk   = mysqli_real_escape_string($conn, $_POST['id_produk']);
    $nama_produk = mysqli_real_escape_string($conn, $_POST['nama_produk']);
    $kategori    = mysqli_real_escape_string($conn, $_POST['kategori']);
    $harga       = mysqli_real_escape_string($conn, $_POST['harga']);
    $deskripsi   = mysqli_real_escape_string($conn, $_POST['deskripsi']);

    $query = "UPDATE produk SET
                nama_produk = '$nama_produk',
                kategori = '$kategori',
                harga = '$harga',
                deskripsi = '$deskripsi'
              WHERE id_produk = '$id_produk'";

    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Produk berhasil diubah'); window.location='produk.php';</script>";
    } else {
        echo "<script>alert('Gagal mengubah produk');</script>";
    }
}

if (isset($_GET['hapus'])) {
    $id_produk = mysqli_real_escape_string($conn, $_GET['hapus']);

    $query = "DELETE FROM produk WHERE id_produk = '$id_produk'";

    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Produk berhasil dihapus'); window.location='produk.php';</script>";
    } else {
        echo "<script>alert('Gagal menghapus produk');</script>";
    }
}

$edit_mode = false;
$data_edit = null;

if (isset($_GET['edit'])) {
    $id_produk = mysqli_real_escape_string($conn, $_GET['edit']);
    $query_edit = mysqli_query($conn, "SELECT * FROM produk WHERE id_produk = '$id_produk'");

    if (mysqli_num_rows($query_edit) > 0) {
        $edit_mode = true;
        $data_edit = mysqli_fetch_assoc($query_edit);
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Produk - Foodify</title>
</head>

<body bgcolor="lightblue">

    <h2>HALAMAN PRODUK</h2>
    <hr />

    <p>Selamat datang di <b>Foodify</b>!</p>
    <p>
        Berikut adalah daftar produk makanan dan minuman yang tersedia.
        Pada halaman ini, pengguna dapat menambah, mengubah, dan menghapus data produk.
    </p>

    <hr />

    <h3 align="center">
        <?php echo $edit_mode ? "Form Edit Produk" : "Form Tambah Produk"; ?>
    </h3>

    <table border="1" width="700" align="center" cellpadding="5">
        <form method="POST" action="">
            <?php if ($edit_mode): ?>
                <input type="hidden" name="id_produk" value="<?php echo $data_edit['id_produk']; ?>">
            <?php endif; ?>

            <tr>
                <th width="180">Nama Produk</th>
                <td>
                    <input type="text" name="nama_produk" size="50" required
                           value="<?php echo $edit_mode ? $data_edit['nama_produk'] : ''; ?>">
                </td>
            </tr>

            <tr>
                <th>Kategori</th>
                <td>
                    <select name="kategori" required>
                        <option value="">-- Pilih Kategori --</option>

                        <option value="Makanan Berat"
                            <?php echo ($edit_mode && $data_edit['kategori'] == 'Makanan Berat') ? 'selected' : ''; ?>>
                            Makanan Berat
                        </option>

                        <option value="Snack"
                            <?php echo ($edit_mode && $data_edit['kategori'] == 'Snack') ? 'selected' : ''; ?>>
                            Snack
                        </option>

                        <option value="Minuman"
                            <?php echo ($edit_mode && $data_edit['kategori'] == 'Minuman') ? 'selected' : ''; ?>>
                            Minuman
                        </option>
                    </select>
                </td>
            </tr>

            <tr>
                <th>Harga</th>
                <td>
                    <input type="number" name="harga" size="50" required
                           value="<?php echo $edit_mode ? $data_edit['harga'] : ''; ?>">
                </td>
            </tr>

            <tr>
                <th>Deskripsi</th>
                <td>
                    <textarea name="deskripsi" rows="4" cols="52" required><?php echo $edit_mode ? $data_edit['deskripsi'] : ''; ?></textarea>
                </td>
            </tr>

            <tr>
                <td colspan="2" align="center">
                    <?php if ($edit_mode): ?>
                        <button type="submit" name="update">Update Produk</button>
                        <a href="produk.php">Batal</a>
                    <?php else: ?>
                        <button type="submit" name="tambah">Tambah Produk</button>
                    <?php endif; ?>
                </td>
            </tr>
        </form>
    </table>

    <br />

    <hr />

    <h3 align="center">Daftar Produk</h3>

    <table border="1" width="700" align="center" cellpadding="5">
        <tr>
            <th width="40">No</th>
            <th>Nama Produk</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
        </tr>

        <?php
        $no = 1;
        $query_produk = mysqli_query($conn, "SELECT * FROM produk ORDER BY id_produk DESC");

        if (mysqli_num_rows($query_produk) > 0) {
            while ($produk = mysqli_fetch_assoc($query_produk)) {
        ?>
                <tr align="center">
                    <td><?php echo $no++; ?></td>
                    <td align="left"><b><?php echo $produk['nama_produk']; ?></b></td>
                    <td><?php echo $produk['kategori']; ?></td>
                    <td>Rp <?php echo number_format($produk['harga'], 0, ',', '.'); ?></td>
                    <td align="left"><?php echo $produk['deskripsi']; ?></td>
                    <td>
                        <a href="produk.php?edit=<?php echo $produk['id_produk']; ?>">Edit</a>
                        |
                        <a href="produk.php?hapus=<?php echo $produk['id_produk']; ?>"
                           onclick="return confirm('Yakin ingin menghapus produk ini?')">
                            Hapus
                        </a>
                    </td>
                </tr>
        <?php
            }
        } else {
            echo "<tr>";
            echo "<td colspan='6' align='center'>Belum ada data produk</td>";
            echo "</tr>";
        }
        ?>
    </table>

    <br />

    <p align="center">
        <a href="kategori.html" target="konten">&larr; Kategori</a>
        &nbsp;
        <a href="profil.html" target="konten">Profil &rarr;</a>
    </p>

</body>
</html>