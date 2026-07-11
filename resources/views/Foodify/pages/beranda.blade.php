@extends('Foodify.layouts.app')

@section('content')
    <div class="page-header">
        <h2>HALAMAN BERANDA</h2>
        <hr>
    </div>

    <p>Halo, selamat datang di <b>Foodify</b>!</p>
    <p>
        Lagi bingung mau makan apa? Tenang, Foodify hadir buat bantu kamu nemuin makanan dan minuman yang enak,
        murah, dan nggak bikin kantong nangis. Dari nasi goreng yang ngangenin sampe kopi yang bikin melek?
        semuanya ada di sini.
    </p>

    <hr>

    <h3>Promo Spesial</h3>
    <table>
        <tr><th>Promo</th><th>Keterangan</th></tr>
        <tr><td><b>Gratis Ongkir</b></td><td>Khusus pembelian pertama, ongkir gratis dengan minimal order Rp 15.000.</td></tr>
        <tr><td><b>Mulai Dari Lima Ribu</b></td><td><b>Ada menu minuman mulai Rp 5.000</b> cocok buat yang lagi irit di akhir bulan.</td></tr>
    </table>

    <h3>Kenapa Pilih Foodify?</h3>
    <table>
        <tr><th>No</th><th>Keunggulan</th><th>Keterangan</th></tr>
        <tr><td>1</td><td><b>Halal & Terjamin</b></td><td><b>Semua menu udah dicek kehalalannya</b> jadi kamu bisa makan dengan tenang.</td></tr>
        <tr><td>2</td><td><b>Bahan Segar</b></td><td><b>Bahan dipilih fresh tiap hari</b></td></tr>
        <tr><td>3</td><td><b>Ramah di Kantong</b></td><td>Harga disesuaikan buat pelajar dan mahasiswa.</td></tr>
        <tr><td>4</td><td><b>Prosesnya Cepet</b></td><td><b>Pesanan diproses langsung</b> nggak perlu nunggu lama.</td></tr>
    </table>

    <h3>Menu Unggulan</h3>
    <table>
        <tr><th>No</th><th>Nama Produk</th><th>Kategori</th><th>Harga</th></tr>
        <tr><td>1</td><td><b>Nasi Goreng</b><br>Yang paling sering di-reorder pelanggan</td><td>Makanan Berat</td><td>Rp 20.000</td></tr>
        <tr><td>2</td><td><b>Kopi</b><br>Teman begadang yang nggak pernah gagal</td><td>Minuman</td><td>Rp 10.000</td></tr>
    </table>

    <h3>Foodify dalam Angka</h3>
    <table>
        <tr><th>Total Menu</th><th>Total Kategori</th><th>Harga Mulai</th><th>Status</th></tr>
        <tr><td>5+ Menu</td><td>3 Kategori</td><td>Rp 5.000</td><td><b>Halal & Segar</b></td></tr>
    </table>
@endsection
