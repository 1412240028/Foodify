<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Foodify</title>
</head>
<body>
    <table width="100%" border="1" cellpadding="8" cellspacing="0">
        <tr>
            <td align="center">
                <h1>ADMIN FOODIFY</h1>
                <p>Halaman Administrator</p>
            </td>
        </tr>
    </table>

    <table width="100%" border="1" cellpadding="0" cellspacing="0">
        <tr>
            <td width="150" valign="top" bgcolor="orange">
                <table width="100%" border="0" cellpadding="8" cellspacing="0">
                    <tr><td><a href="{{ url('/admin') }}"><b>Dashboard</b></a></td></tr>
                    <tr><td><a href="{{ url('/admin/products') }}"><b>Produk</b></a></td></tr>
                    <tr><td><a href="{{ url('/admin/members') }}"><b>Member</b></a></td></tr>
                    <tr><td><a href="{{ url('/') }}"><b>Portal Utama</b></a></td></tr>
                    <tr><td><hr></td></tr>
                    <tr>
                        <td>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <b>Logout</b>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                            </form>
                        </td>
                    </tr>
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
                <i>&copy; 2026 Admin Foodify - Food Marketplace</i>
            </td>
        </tr>
    </table>
</body>
</html>
