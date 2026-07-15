<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodify - Website Penjualan Makanan</title>
</head>
<body bgcolor="#fff7ed" text="#111827" style="font-family: Arial, sans-serif; margin: 0; padding: 0;">
    <!-- Header -->
    <table width="100%" border="0" cellpadding="20" cellspacing="0" bgcolor="#f97316">
        <tr>
            <td align="center">
                <font color="#ffffff" face="Arial, sans-serif">
                    <h1 style="margin: 0;">FOODIFY</h1>
                    <p style="margin-top: 5px; margin-bottom: 0;">Website Penjualan Makanan Online</p>
                </font>
            </td>
        </tr>
    </table>

    <table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
            <!-- Sidebar -->
            <td width="200" valign="top" bgcolor="#111827">
                <table width="100%" border="0" cellpadding="15" cellspacing="0">
                    <tr><td><a href="{{ url('/beranda') }}" style="text-decoration:none;"><font color="#ffffff" face="Arial, sans-serif"><b>Beranda</b></font></a></td></tr>
                    <tr><td><a href="{{ url('/kategori') }}" style="text-decoration:none;"><font color="#ffffff" face="Arial, sans-serif"><b>Kategori</b></font></a></td></tr>
                    <tr><td><a href="{{ url('/produk') }}" style="text-decoration:none;"><font color="#ffffff" face="Arial, sans-serif"><b>Produk</b></font></a></td></tr>
                    <tr><td><a href="{{ url('/profil') }}" style="text-decoration:none;"><font color="#ffffff" face="Arial, sans-serif"><b>Profil</b></font></a></td></tr>
                    <tr><td><a href="{{ url('/pendaftaran') }}" style="text-decoration:none;"><font color="#ffffff" face="Arial, sans-serif"><b>Pendaftaran</b></font></a></td></tr>
                    <tr><td><hr color="#4b5563"></td></tr>
                    <tr><td><a href="{{ url('/') }}" style="text-decoration:none;"><font color="#ffffff" face="Arial, sans-serif"><b>Portal Utama</b></font></a></td></tr>
                    <tr><td><a href="{{ route('login') }}" style="text-decoration:none;"><font color="#f87171" face="Arial, sans-serif"><b>Login Admin</b></font></a></td></tr>
                </table>
            </td>
            
            <!-- Main Content -->
            <td valign="top" bgcolor="{{ $pageBgColor ?? '#ffffff' }}">
                <table width="100%" border="0" cellpadding="30" cellspacing="0">
                    <tr>
                        <td>
                            @if(session('status'))
                                <table width="100%" border="1" cellpadding="15" cellspacing="0" bgcolor="#e6ffed" bordercolor="#86efac">
                                    <tr><td><font face="Arial, sans-serif" color="#166534"><b>Berhasil:</b> {{ session('status') }}</font></td></tr>
                                </table>
                                <br><br>
                            @endif

                            @yield('content')
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

    <!-- Footer -->
    <table width="100%" border="0" cellpadding="20" cellspacing="0" bgcolor="#111827">
        <tr>
            <td align="center">
                <font color="#9ca3af" face="Arial, sans-serif"><i>&copy; 2026 Foodify - Food Marketplace</i></font>
            </td>
        </tr>
    </table>
</body>
</html>
