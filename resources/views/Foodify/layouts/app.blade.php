<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodify - Website Penjualan Makanan</title>
</head>
<body>
    <table width="100%" border="1" cellpadding="8" cellspacing="0">
        <tr>
            <td align="center">
                <h1>FOODIFY</h1>
                <p>Website Penjualan Makanan Online</p>
            </td>
        </tr>
    </table>

    <table width="100%" border="1" cellpadding="0" cellspacing="0">
        <tr>
            <td width="150" valign="top" bgcolor="orange">
                <table width="100%" border="0" cellpadding="8" cellspacing="0">
                    <tr><td><a href="{{ url('/') }}"><b>Beranda</b></a></td></tr>
                    <tr><td><a href="{{ url('/kategori') }}"><b>Kategori</b></a></td></tr>
                    <tr><td><a href="{{ url('/produk') }}"><b>Produk</b></a></td></tr>
                    <tr><td><a href="{{ url('/profil') }}"><b>Profil</b></a></td></tr>
                    <tr><td><a href="{{ url('/pendaftaran') }}"><b>Pendaftaran</b></a></td></tr>
                    <tr><td><hr></td></tr>
                    <tr><td><a href="{{ route('login') }}"><b>Login Admin</b></a></td></tr>
                </table>
            </td>
            <td valign="top" bgcolor="{{ $pageBgColor ?? 'white' }}">
                <table width="100%" border="0" cellpadding="10" cellspacing="0">
                    <tr>
                        <td>
                            @if(session('status'))
                                <table width="100%" border="1" cellpadding="8" cellspacing="0" bgcolor="#e6ffed">
                                    <tr><td>{{ session('status') }}</td></tr>
                                </table>
                                <br>
                            @endif
                            @yield('content')
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

    <table width="100%" border="1" cellpadding="8" cellspacing="0">
        <tr>
            <td align="center">
                <i>&copy; 2026 Foodify - Food Marketplace</i>
            </td>
        </tr>
    </table>
</body>
</html>
