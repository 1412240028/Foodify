@extends('Admin.layouts.app')

@section('content')
    <h2 align="center">Manajemen Produk</h2>
    <hr>

    <h3>{{ isset($editingProduct) ? 'Edit Produk' : 'Tambah Produk' }}</h3>
    <form action="{{ isset($editingProduct) ? route('admin.products.update', $editingProduct) : route('admin.products.store') }}" method="post">
        @csrf
        @if(isset($editingProduct))
            @method('PUT')
        @endif

        <table width="100%" border="1" cellpadding="8" cellspacing="0">
            <tr><th align="left" width="150">Nama Produk</th><td><input type="text" name="nama_produk" value="{{ old('nama_produk', $editingProduct->nama_produk ?? '') }}" size="50" required></td></tr>
            <tr><th align="left">Kategori</th><td><input type="text" name="kategori" value="{{ old('kategori', $editingProduct->kategori ?? '') }}" size="30" required></td></tr>
            <tr><th align="left">Harga</th><td><input type="number" name="harga" value="{{ old('harga', $editingProduct->harga ?? '') }}" min="0" required></td></tr>
            <tr><th align="left">Deskripsi</th><td><textarea name="deskripsi" rows="4" cols="50">{{ old('deskripsi', $editingProduct->deskripsi ?? '') }}</textarea></td></tr>
            <tr><td colspan="2" align="center"><input type="submit" value="{{ isset($editingProduct) ? 'Update Produk' : 'Simpan Produk' }}"></td></tr>
        </table>
    </form>

    <br>
    <h3>Daftar Produk</h3>
    <table width="100%" border="1" cellpadding="8" cellspacing="0">
        <tr bgcolor="orange">
            <th>No</th><th>Nama Produk</th><th>Kategori</th><th>Harga</th><th>Deskripsi</th><th>Aksi</th>
        </tr>
        @forelse($products as $index => $product)
            <tr align="center">
                <td>{{ $index + 1 }}</td>
                <td align="left"><b>{{ $product->nama_produk }}</b></td>
                <td>{{ $product->kategori }}</td>
                <td>Rp {{ number_format($product->harga, 0, ',', '.') }}</td>
                <td align="left">{{ $product->deskripsi }}</td>
                <td>
                    <a href="{{ route('admin.products.edit', $product) }}">[Edit]</a>
                    &nbsp;
                    <form action="{{ route('admin.products.destroy', $product) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="[Hapus]" onclick="return confirm('Hapus produk ini?')">
                    </form>
                </td>
            </tr>
        @empty
            <tr><td colspan="6" align="center">Belum ada produk.</td></tr>
        @endforelse
    </table>
@endsection
