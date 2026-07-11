@extends('Foodify.layouts.app')

@section('content')
    <div class="page-header">
        <h2>HALAMAN PROFIL</h2>
        <hr>
    </div>

    <p>Kenalan dulu sama <b>FOODIFY</b>!</p>
    <p>
      <b>"Foodify tuh lahir dari keresahan sederhana para mahasiswa/pekerja rantau"</b>
      susahnya nyari makanan enak yang harganya masuk akal.
      Mulai dari situ, Foodify dibuat sebagai platform yang ngumpulin berbagai pilihan menu makanan dan minuman dalam satu tempat.
    </p>

    <hr>

    <h3>PROFIL FOODIFY</h3>
    <table>
        <tr><th>NAMA</th><td>Foodify</td></tr>
        <tr><th>JENIS LAYANAN</th><td>Platform Penjualan Makanan & Minuman Online</td></tr>
        <tr><th>BERDIRI SEJAK</th><td>2024</td></tr>
        <tr><th>PENDIRI</th><td>Dhoni Prasetya</td></tr>
        <tr><th>BERBASIS DI</th><td>Tuban, Jawa Timur</td></tr>
        <tr><th>VISI</th><td>Jadi platform makanan paling ramah kantong dan paling gampang diakses di Indonesia.</td></tr>
        <tr><th>MISI</th><td>Nyambungin pembeli dengan pilihan makanan yang jelas, jujur soal harga, dan nggak pake ribet.</td></tr>
    </table>

    <h3>FITUR FOODIFY</h3>
    <table>
        <tr><th>NO.</th><th>FITUR</th><th>KETERANGAN</th></tr>
        <tr><td>1</td><td><b>BERANDA</b></td><td>Menampilkan promo, rekomendasi menu, dan informasi utama dari Foodify.</td></tr>
        <tr><td>2</td><td><b>KATEGORI</b></td><td>Membantu pengguna menemukan menu berdasarkan jenis makanan atau minuman.</td></tr>
        <tr><td>3</td><td><b>PRODUK</b></td><td>Menampilkan pilihan menu Foodify lengkap dengan kategori, harga, dan deskripsi.</td></tr>
        <tr><td>4</td><td><b>PENDAFTARAN</b></td><td>Memberikan akses bagi pengguna untuk bergabung sebagai member Foodify.</td></tr>
    </table>
@endsection
