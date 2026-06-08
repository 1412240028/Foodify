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

<body bgcolor="lightyellow">

    <center>
        <h1>FOODIFY</h1>
        <h3>Data Produk Makanan dan Minuman</h3>
        <hr width="80%">
    </center>

    <center>
        <a href="../index.html">Home</a> |
        <a href="produk.php">Produk</a> |
        <a href="contact.html">Kontak</a>
    </center>

    <br>

    <center>
        <table border="1" cellpadding="10" cellspacing="0" width="80%" bgcolor="white">
            <tr bgcolor="orange">
                <th colspan="2">
                    <?php echo $edit_mode ? "FORM EDIT PRODUK" : "FORM TAMBAH PRODUK"; ?>
                </th>
            </tr>

            <form method="POST" action="">
                <?php if ($edit_mode): ?>
                    <input type="hidden" name="id_produk" value="<?php echo $data_edit['id_produk']; ?>">
                <?php endif; ?>

                <tr>
                    <td>Nama Produk</td>
                    <td>
                        <input type="text" name="nama_produk" size="50" required
                               value="<?php echo $edit_mode ? $data_edit['nama_produk'] : ''; ?>">
                    </td>
                </tr>

                <tr>
                    <td>Kategori</td>
                    <td>
                        <select name="kategori" required>
                            <option value="">-- Pilih Kategori --</option>

                            <option value="Makanan"
                                <?php echo ($edit_mode && $data_edit['kategori'] == 'Makanan') ? 'selected' : ''; ?>>
                                Makanan
                            </option>

                            <option value="Minuman"
                                <?php echo ($edit_mode && $data_edit['kategori'] == 'Minuman') ? 'selected' : ''; ?>>
                                Minuman
                            </option>

                            <option value="Snack"
                                <?php echo ($edit_mode && $data_edit['kategori'] == 'Snack') ? 'selected' : ''; ?>>
                                Snack
                            </option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>Harga</td>
                    <td>
                        <input type="number" name="harga" size="50" required
                               value="<?php echo $edit_mode ? $data_edit['harga'] : ''; ?>">
                    </td>
                </tr>

                <tr>
                    <td>Deskripsi</td>
                    <td>
                        <textarea name="deskripsi" rows="5" cols="52" required><?php echo $edit_mode ? $data_edit['deskripsi'] : ''; ?></textarea>
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
    </center>

    <br><br>

    <center>
        <h2>DAFTAR PRODUK</h2>

        <table border="1" cellpadding="8" cellspacing="0" width="90%" bgcolor="white">
            <tr bgcolor="orange">
                <th>No</th>
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
                    <tr>
                        <td align="center"><?php echo $no++; ?></td>
                        <td><?php echo $produk['nama_produk']; ?></td>
                        <td align="center"><?php echo $produk['kategori']; ?></td>
                        <td>Rp <?php echo number_format($produk['harga'], 0, ',', '.'); ?></td>
                        <td><?php echo $produk['deskripsi']; ?></td>
                        <td align="center">
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
    </center>

    <br>

    <center>
        <hr width="80%">
        <p>&copy; 2026 Foodify</p>
    </center>

</body>
</html>