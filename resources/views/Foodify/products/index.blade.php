@extends('Foodify.layouts.app')

@section('content')
    <h2 align="center">DAFTAR PRODUK FOODIFY</h2><hr>

    <p>Temukan berbagai pilihan makanan dan minuman favorit di <b>Foodify</b>.</p>
    <p>Mulai dari makanan berat, snack, sampai minuman segar. Semuanya tersedia untuk menemani aktivitas kamu sehari-hari.</p>

    <table width="100%" border="1" cellpadding="8" cellspacing="0">
        <tr><th>No</th><th>Gambar</th><th>Nama Produk</th><th>Kategori</th><th>Harga</th><th>Deskripsi</th><th>Status</th></tr>
        @forelse($products as $index => $product)
            <tr align="center">
                <td>{{ $index + 1 }}</td>
                <td><img src="{{ asset(\App\Http\Controllers\ProductController::imageForProduct($product->nama_produk)) }}" alt="{{ $product->nama_produk }}" width="110" height="80"></td>
                <td align="left"><b>{{ $product->nama_produk }}</b></td>
                <td>{{ $product->kategori }}</td>
                <td><b>Rp {{ number_format($product->harga, 0, ',', '.') }}</b></td>
                <td align="left">{{ $product->deskripsi }}</td>
                <td>Tersedia</td>
            </tr>
        @empty
            <tr><td colspan="7" align="center">Belum ada produk yang tersedia.</td></tr>
        @endforelse
    </table>

    <h3>Kategori Produk</h3>
    <table width="100%" border="1" cellpadding="8" cellspacing="0">
        <tr><th>No</th><th>Kategori</th><th>Keterangan</th></tr>
        <tr align="center"><td>1</td><td><b>Makanan Berat</b></td><td align="left">Menu utama yang cocok untuk makan siang atau makan malam.</td></tr>
        <tr align="center"><td>2</td><td><b>Snack</b></td><td align="left">Cemilan santai buat nemenin ngobrol, belajar, atau nonton.</td></tr>
        <tr align="center"><td>3</td><td><b>Minuman</b></td><td align="left">Pilihan minuman segar dan hangat untuk melengkapi pesanan.</td></tr>
    </table>
@endsection
