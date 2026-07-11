<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodify - Website Penjualan Makanan</title>
    <style>
        body { font-family: 'Times New Roman', Times, serif; margin: 0; padding: 0; }
        table { width: 100%; border-collapse: collapse; border: 1px solid #000; }
        th, td { padding: 8px; border: 1px solid #000; }
        a { color: #000; text-decoration: none; display: block; margin-bottom: 10px; font-weight: bold; }
        a:hover { color: #fff; }
        .navbar { background: orange; }
        .navbar a { color: #000; }
        .navbar a:hover { color: #fff; }
        .page-header { text-align: center; margin: 0 0 10px; }
        .alert { background: #e6ffed; border: 1px solid #8bc34a; padding: 12px; margin-bottom: 20px; }
    </style>
</head>
<body>
    <table border="1">
        <tr>
            <td align="center">
                <h1>FOODIFY</h1>
                <p>Website Penjualan Makanan Online</p>
            </td>
        </tr>
    </table>

    <table border="1">
        <tr>
            <td width="150" valign="top" bgcolor="orange" class="navbar">
                <a href="{{ url('/') }}">Beranda</a>
                <a href="{{ url('/kategori') }}">Kategori</a>
                <a href="{{ url('/produk') }}">Produk</a>
                <a href="{{ url('/profil') }}">Profil</a>
                <a href="{{ url('/pendaftaran') }}">Pendaftaran</a>
            </td>
            <td valign="top" bgcolor="{{ $pageBgColor ?? 'white' }}">
                @if(session('status'))
                    <div class="alert">{{ session('status') }}</div>
                @endif
                @yield('content')
            </td>
        </tr>
    </table>

    <table border="1">
        <tr>
            <td align="center">
                <i>&copy; 2026 Foodify - Food Marketplace</i>
            </td>
        </tr>
    </table>
</body>
</html>
