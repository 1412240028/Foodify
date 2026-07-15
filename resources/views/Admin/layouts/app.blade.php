<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Foodify</title>
</head>
<body bgcolor="#fff7ed" text="#111827">
    <table width="100%" border="0" cellpadding="20" cellspacing="0" bgcolor="#f97316">
        <tr>
            <td align="center">
                <font color="#ffffff" face="Arial, sans-serif">
                    <h1 style="margin: 0;">ADMIN FOODIFY</h1>
                    <p style="margin-top: 5px; margin-bottom: 0;">Halaman Administrator</p>
                </font>
            </td>
        </tr>
    </table>

    <table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
            <td width="200" valign="top" bgcolor="#111827">
                <table width="100%" border="0" cellpadding="15" cellspacing="0">
                    <tr><td><a href="{{ url('/admin') }}" style="text-decoration: none;"><font color="#ffffff" face="Arial, sans-serif"><b>Dashboard</b></font></a></td></tr>
                    <tr><td><a href="{{ url('/admin/products') }}" style="text-decoration: none;"><font color="#ffffff" face="Arial, sans-serif"><b>Produk</b></font></a></td></tr>
                    <tr><td><a href="{{ url('/admin/members') }}" style="text-decoration: none;"><font color="#ffffff" face="Arial, sans-serif"><b>Member</b></font></a></td></tr>
                    <tr><td><a href="{{ url('/') }}" style="text-decoration: none;"><font color="#ffffff" face="Arial, sans-serif"><b>Portal Utama</b></font></a></td></tr>
                    <tr><td><hr color="#4b5563"></td></tr>
                </table>
            </td>
            <td valign="top" bgcolor="{{ $pageBgColor ?? '#ffffff' }}">
                <table width="100%" border="0" cellpadding="20" cellspacing="0">
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

    <table width="100%" border="0" cellpadding="15" cellspacing="0" bgcolor="#111827">
        <tr>
            <td align="center">
                <font color="#9ca3af" face="Arial, sans-serif"><i>&copy; 2026 Admin Foodify - Food Marketplace</i></font>
            </td>
        </tr>
    </table>
</body>
</html>
