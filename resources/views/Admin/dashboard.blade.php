@extends('Admin.layouts.app')

@section('content')
    <h2 align="center">Dashboard Admin Foodify</h2><hr>

    @if(session('status'))
        <table width="100%" border="1" cellpadding="8" cellspacing="0" bgcolor="#e6ffed"><tr><td>{{ session('status') }}</td></tr></table><br>
    @endif

    <p>Halo, <b>Admin</b>! Selamat datang di panel administrasi Foodify.</p>
    <p>Dari sini Anda bisa:</p>
    <table border="0" cellpadding="4" cellspacing="0">
        <tr><td>&bull; <a href="{{ url('/admin/products') }}">Mengelola Katalog Produk</a></td></tr>
        <tr><td>&bull; <a href="{{ url('/admin/members') }}">Mengelola Data Member</a></td></tr>
    </table>

    <br>
    <p>Pilih salah satu menu di bilah kiri atau link di atas untuk mulai bekerja.</p>
@endsection
