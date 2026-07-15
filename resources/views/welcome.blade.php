<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portal Foodify</title>
</head>
<body bgcolor="#fff7ed" text="#111827">
    <br><br><br>
    <table align="center" width="800" border="1" cellpadding="0" cellspacing="0" bgcolor="#ffffff" bordercolor="#cccccc">
        <tr>
            <td bgcolor="#f97316" align="center">
                <br><br>
                <font color="#ffffff" size="6" face="Arial, sans-serif"><b>Portal Foodify</b></font><br><br>
                <font color="#ffffff" face="Arial, sans-serif">Pilih area yang ingin Anda buka: Foodify untuk pelanggan atau Admin untuk mengelola data.</font>
                <br><br>
            </td>
        </tr>
        <tr>
            <td>
                <br>
                <table width="100%" border="0" cellpadding="20" cellspacing="20">
                    <tr>
                        <td width="50%" valign="top" bgcolor="#fffaf5" align="center">
                            <font face="Arial, sans-serif" size="5"><b>Masuk ke Foodify</b></font><br><br>
                            <font color="#4b5563" face="Arial, sans-serif">Jelajahi katalog produk, lihat kategori, dan ikuti alur pendaftaran member.</font><br><br><br>
                            <table border="0" cellpadding="15" cellspacing="0" bgcolor="#f97316">
                                <tr>
                                    <td align="center">
                                        <a href="{{ url('/beranda') }}"><font color="#ffffff" face="Arial, sans-serif"><b>Buka Foodify</b></font></a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td width="50%" valign="top" bgcolor="#fffaf5" align="center">
                            <font face="Arial, sans-serif" size="5"><b>Masuk ke Admin</b></font><br><br>
                            <font color="#4b5563" face="Arial, sans-serif">Kelola produk dan data member dari dashboard admin yang terpisah.</font><br><br><br>
                            <table border="0" cellpadding="15" cellspacing="0" bgcolor="#111827">
                                <tr>
                                    <td align="center">
                                        <a href="{{ url('/admin') }}"><font color="#ffffff" face="Arial, sans-serif"><b>Buka Admin</b></font></a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <br>
            </td>
        </tr>
    </table>
    <br><br>
    <table align="center" width="800" border="1" cellpadding="10" cellspacing="0" bgcolor="#ffffff" bordercolor="#cccccc">
        <tr>
            <td colspan="2" bgcolor="#111827" align="center">
                <font color="#ffffff" face="Arial, sans-serif"><b>DATA MAHASISWA</b></font>
            </td>
        </tr>
        <tr>
            <td width="30%" bgcolor="#fffaf5"><font face="Arial, sans-serif" color="#4b5563"><b>Nama</b></font></td>
            <td><font face="Arial, sans-serif" color="#111827">Dhoni Prasetya</font></td>
        </tr>
        <tr>
            <td bgcolor="#fffaf5"><font face="Arial, sans-serif" color="#4b5563"><b>NPM</b></font></td>
            <td><font face="Arial, sans-serif" color="#111827">1412240028</font></td>
        </tr>
        <tr>
            <td bgcolor="#fffaf5"><font face="Arial, sans-serif" color="#4b5563"><b>Kelas</b></font></td>
            <td><font face="Arial, sans-serif" color="#111827">TIF 24 B</font></td>
        </tr>
        <tr>
            <td bgcolor="#fffaf5"><font face="Arial, sans-serif" color="#4b5563"><b>Dosen Pengampu</b></font></td>
            <td><font face="Arial, sans-serif" color="#111827">Asfan Muqtadir, S.Kom., M.Kom</font></td>
        </tr>
        <tr>
            <td bgcolor="#fffaf5"><font face="Arial, sans-serif" color="#4b5563"><b>Mata Kuliah</b></font></td>
            <td><font face="Arial, sans-serif" color="#111827">Pemrograman Web</font></td>
        </tr>
    </table>
    <br><br>
</body>
</html>
