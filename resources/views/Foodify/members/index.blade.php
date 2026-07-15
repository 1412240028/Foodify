@extends('Foodify.layouts.app')

@section('content')
    <h2 align="center">HALAMAN PENDAFTARAN MEMBER</h2><hr>

    <p>Halo! Selamat datang di halaman pendaftaran <b>Foodify</b>.</p>
    <p>Yuk daftar jadi member Foodify agar kamu bisa mendapatkan pengalaman yang lebih mudah saat memesan makanan.</p>

    <h3>Keuntungan Jadi Member Foodify</h3>
    <table>
        <tr><th>No</th><th>Keuntungan</th><th>Keterangan</th></tr>
        <tr align="center"><td>1</td><td><b>Info Promo Duluan</b></td><td align="left">Member dapet notifikasi promo sebelum diumumin ke publik.</td></tr>
        <tr align="center"><td>2</td><td><b>Rekomendasi Personal</b></td><td align="left">Saran menu yang disesuaikan sama preferensi dan riwayat ordermu.</td></tr>
        <tr align="center"><td>3</td><td><b>Proses Order Lebih Cepet</b></td><td align="left">Data tersimpan, jadi nggak perlu isi ulang info tiap mau pesan.</td></tr>
    </table>

    <h3>{{ isset($editMode) ? 'Form Edit Member' : 'Form Pendaftaran Member' }}</h3>
    <form action="{{ isset($editMode) ? route('members.update', $member) : route('members.store') }}" method="post">
        @csrf
        @if(isset($editMode))
            @method('PUT')
        @endif

        <table>
            @if(isset($editMode))
                <input type="hidden" name="id" value="{{ $member->id }}">
            @endif

            <tr><th>Nama Lengkap</th><td><input type="text" name="nama" value="{{ old('nama', $member->nama ?? '') }}" size="50" required></td></tr>
            <tr><th>Email</th><td><input type="email" name="email" value="{{ old('email', $member->email ?? '') }}" size="50" required></td></tr>
            <tr><th>Nomor HP</th><td><input type="text" name="nohp" value="{{ old('nohp', $member->nohp ?? '') }}" size="30" required></td></tr>
            <tr><th>Alamat</th><td><textarea name="alamat" rows="4" cols="52" required>{{ old('alamat', $member->alamat ?? '') }}</textarea></td></tr>
            <tr><th>Jenis Kelamin</th><td>
                <label><input type="radio" name="jenis_kelamin" value="Laki-laki" {{ old('jenis_kelamin', $member->jenis_kelamin ?? 'Laki-laki') == 'Laki-laki' ? 'checked' : '' }}> Laki-laki</label>
                <label><input type="radio" name="jenis_kelamin" value="Perempuan" {{ old('jenis_kelamin', $member->jenis_kelamin ?? '') == 'Perempuan' ? 'checked' : '' }}> Perempuan</label>
            </td></tr>
            <tr><th>Tanggal Lahir</th><td><input type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir', isset($member) ? $member->tanggal_lahir->format('Y-m-d') : '') }}" required></td></tr>
            <tr><td colspan="2" align="center">
                <button type="submit">{{ isset($editMode) ? 'Update Member' : 'Daftar Member' }}</button>
                @if(isset($editMode)) <a href="{{ route('members.index') }}">Batal</a> @endif
            </td></tr>
        </table>

        @if($errors->any())
            <table width="100%" border="1" cellpadding="8" cellspacing="0" bgcolor="#ffcccc">
                <tr><td><ul>@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></td></tr>
            </table><br>
        @endif
    </form>

    <h3>Daftar Member Foodify</h3>
    <table>
        <tr><th>No</th><th>Nama Lengkap</th><th>Email</th><th>Nomor HP</th><th>Alamat</th><th>Jenis Kelamin</th><th>Tanggal Lahir</th><th>Aksi</th></tr>
        @forelse($members as $index => $memberRow)
            <tr align="center">
                <td>{{ $index + 1 }}</td>
                <td align="left"><b>{{ $memberRow->nama }}</b></td>
                <td>{{ $memberRow->email }}</td>
                <td>{{ $memberRow->nohp }}</td>
                <td align="left">{{ $memberRow->alamat }}</td>
                <td>{{ $memberRow->jenis_kelamin }}</td>
                <td>{{ $memberRow->tanggal_lahir->format('Y-m-d') }}</td>
                <td>
                    <a href="{{ route('members.edit', $memberRow) }}">[Edit]</a>
                    &nbsp;
                    <form action="{{ route('members.destroy', $memberRow) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="[Hapus]" onclick="return confirm('Yakin ingin menghapus member ini?')">
                    </form>
                </td>
            </tr>
        @empty
            <tr><td colspan="8" align="center">Belum ada data member</td></tr>
        @endforelse
    </table>
@endsection
