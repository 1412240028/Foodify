@extends('Foodify.layouts.app')

@section('content')
    <h2 align="center">HALAMAN KATEGORI</h2><hr>

    <p>Ini dia semua kategori menu yang ada di <b>Foodify</b>.</p>
    <p>
        Biar kamu nggak bingung milih, menu di Foodify udah dibagi jadi tiga kategori besar.
        Mau yang ngenyangein, yang santai buat nyemil, atau sekadar minum sesuatu yang seger,
        tinggal pilih sesuai mood kamu.
    </p>

    <hr>

    <h3>Daftar Kategori</h3>
    <table width="100%" border="1" cellpadding="8" cellspacing="0">
        <tr><th>No</th><th>Nama Kategori</th><th>Deskripsi</th><th>Jumlah Menu</th></tr>
        <tr><td>1</td><td><b>Makanan Berat</b></td><td>Buah yang lagi beneran lapar. Ada nasi goreng, ayam geprek, dan pilihan lain yang bikin kenyang tahan lama.</td><td>2 Menu</td></tr>
        <tr><td>2</td><td><b>Snack</b></td><td>Pas buat nemenin nonton atau ngobrol santai. Burger dan kentang goreng jadi favorit di kategori ini.</td><td>1 Menu</td></tr>
        <tr><td>3</td><td><b>Minuman</b></td><td>Dari es teh yang simpel sampai kopi yang bikin fokus balik lagi. Cocok diminum kapan aja.</td><td>2 Menu</td></tr>
    </table>

    <h3>Range Harga per Kategori</h3>
    <table width="100%" border="1" cellpadding="8" cellspacing="0">
        <tr><th>Kategori</th><th>Harga Termurah</th><th>Harga Termahal</th><th>Status</th></tr>
        <tr><td>Makanan Berat</td><td>Rp 18.000</td><td>Rp 20.000</td><td>Tersedia</td></tr>
        <tr><td>Snack</td><td>Rp 25.000</td><td>Rp 25.000</td><td>Tersedia</td></tr>
        <tr><td>Minuman</td><td>Rp 5.000</td><td>Rp 10.000</td><td>Tersedia</td></tr>
    </table>

    <h3>Ringkasan Menu Foodify</h3>
    <table width="100%" border="1" cellpadding="8" cellspacing="0">
        <tr><th>Total Menu</th><th>Total Kategori</th><th>Harga Mulai</th><th>Keterangan</th></tr>
        <tr><td>5 Menu</td><td>3 Kategori</td><td>Rp 5.000</td><td>Halal & Segar</td></tr>
    </table>

    <h3>Ringkasan Kategori</h3>
    <table width="100%" border="1" cellpadding="8" cellspacing="0">
        <tr><th>No</th><th>Kategori</th><th>Contoh Produk</th></tr>
        <tr><td>1</td><td>Makanan Berat</td><td>Nasi Goreng, Ayam Geprek</td></tr>
        <tr><td>2</td><td>Snack</td><td>Burger</td></tr>
        <tr><td>3</td><td>Minuman</td><td>Es Teh, Kopi</td></tr>
    </table>
@endsection
