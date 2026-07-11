@extends('Admin.layouts.app')

@section('content')
    <div class="page-header">
        <h2>Dashboard Admin Foodify</h2>
        <hr>
    </div>

    <p>Kelola produk dan data member Foodify dari satu panel terpusat.</p>

    @if(session('status'))
        <div class="alert">{{ session('status') }}</div>
    @endif

    <h3>Tambah Produk</h3>
    <form action="{{ isset($editingProduct) ? route('admin.products.update', $editingProduct) : route('admin.products.store') }}" method="post">
        @csrf
        @if(isset($editingProduct))
            @method('PUT')
        @endif

        <table>
            <tr><th>Nama Produk</th><td><input type="text" name="nama_produk" value="{{ old('nama_produk', $editingProduct->nama_produk ?? '') }}" size="50" required></td></tr>
            <tr><th>Kategori</th><td><input type="text" name="kategori" value="{{ old('kategori', $editingProduct->kategori ?? '') }}" size="30" required></td></tr>
            <tr><th>Harga</th><td><input type="number" name="harga" value="{{ old('harga', $editingProduct->harga ?? '') }}" min="0" required></td></tr>
            <tr><th>Deskripsi</th><td><textarea name="deskripsi" rows="4" cols="50">{{ old('deskripsi', $editingProduct->deskripsi ?? '') }}</textarea></td></tr>
            <tr><td colspan="2" align="center"><button type="submit">{{ isset($editingProduct) ? 'Update Produk' : 'Simpan Produk' }}</button></td></tr>
        </table>
    </form>

    <h3>Daftar Produk</h3>
    <table>
        <tr><th>No</th><th>Nama Produk</th><th>Kategori</th><th>Harga</th><th>Deskripsi</th><th>Aksi</th></tr>
        @forelse($products as $index => $product)
            <tr align="center">
                <td>{{ $index + 1 }}</td>
                <td align="left"><b>{{ $product->nama_produk }}</b></td>
                <td>{{ $product->kategori }}</td>
                <td>Rp {{ number_format($product->harga, 0, ',', '.') }}</td>
                <td align="left">{{ $product->deskripsi }}</td>
                <td>
                    <a href="{{ route('admin.products.edit', $product) }}">Edit</a>
                    |
                    <form action="{{ route('admin.products.destroy', $product) }}" method="post" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Hapus produk ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr><td colspan="6" align="center">Belum ada produk.</td></tr>
        @endforelse
    </table>

    <h3>Tambah Member</h3>
    <form action="{{ isset($editingMember) ? route('admin.members.update', $editingMember) : route('admin.members.store') }}" method="post">
        @csrf
        @if(isset($editingMember))
            @method('PUT')
        @endif

        <table>
            <tr><th>Nama Lengkap</th><td><input type="text" name="nama" value="{{ old('nama', $editingMember->nama ?? '') }}" size="50" required></td></tr>
            <tr><th>Email</th><td><input type="email" name="email" value="{{ old('email', $editingMember->email ?? '') }}" size="50" required></td></tr>
            <tr><th>Nomor HP</th><td><input type="text" name="nohp" value="{{ old('nohp', $editingMember->nohp ?? '') }}" size="30" required></td></tr>
            <tr><th>Alamat</th><td><textarea name="alamat" rows="4" cols="50" required>{{ old('alamat', $editingMember->alamat ?? '') }}</textarea></td></tr>
            <tr><th>Jenis Kelamin</th><td>
                <label><input type="radio" name="jenis_kelamin" value="Laki-laki" {{ old('jenis_kelamin', $editingMember->jenis_kelamin ?? 'Laki-laki') == 'Laki-laki' ? 'checked' : '' }}> Laki-laki</label>
                <label><input type="radio" name="jenis_kelamin" value="Perempuan" {{ old('jenis_kelamin', $editingMember->jenis_kelamin ?? '') == 'Perempuan' ? 'checked' : '' }}> Perempuan</label>
            </td></tr>
            <tr><th>Tanggal Lahir</th><td><input type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir', isset($editingMember) ? $editingMember->tanggal_lahir->format('Y-m-d') : '') }}" required></td></tr>
            <tr><td colspan="2" align="center"><button type="submit">{{ isset($editingMember) ? 'Update Member' : 'Simpan Member' }}</button></td></tr>
        </table>
    </form>

    <h3>Daftar Member</h3>
    <table>
        <tr><th>No</th><th>Nama</th><th>Email</th><th>No. HP</th><th>Aksi</th></tr>
        @forelse($members as $index => $member)
            <tr align="center">
                <td>{{ $index + 1 }}</td>
                <td align="left"><b>{{ $member->nama }}</b></td>
                <td>{{ $member->email }}</td>
                <td>{{ $member->nohp }}</td>
                <td>
                    <a href="{{ route('admin.members.edit', $member) }}">Edit</a>
                    |
                    <form action="{{ route('admin.members.destroy', $member) }}" method="post" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Hapus member ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr><td colspan="5" align="center">Belum ada member.</td></tr>
        @endforelse
    </table>
@endsection
