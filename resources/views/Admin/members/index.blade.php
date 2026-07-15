@extends('Admin.layouts.app')

@section('content')
    <h2 align="center">Manajemen Member</h2>
    <hr>

    <h3>{{ isset($editingMember) ? 'Edit Member' : 'Tambah Member' }}</h3>
    <form action="{{ isset($editingMember) ? route('admin.members.update', $editingMember) : route('admin.members.store') }}" method="post">
        @csrf
        @if(isset($editingMember))
            @method('PUT')
        @endif

        <table width="100%" border="1" cellpadding="8" cellspacing="0">
            <tr><th align="left" width="150">Nama Lengkap</th><td><input type="text" name="nama" value="{{ old('nama', $editingMember->nama ?? '') }}" size="50" required></td></tr>
            <tr><th align="left">Email</th><td><input type="email" name="email" value="{{ old('email', $editingMember->email ?? '') }}" size="50" required></td></tr>
            <tr><th align="left">Nomor HP</th><td><input type="text" name="nohp" value="{{ old('nohp', $editingMember->nohp ?? '') }}" size="30" required></td></tr>
            <tr><th align="left">Alamat</th><td><textarea name="alamat" rows="4" cols="50" required>{{ old('alamat', $editingMember->alamat ?? '') }}</textarea></td></tr>
            <tr><th align="left">Jenis Kelamin</th><td>
                <label><input type="radio" name="jenis_kelamin" value="Laki-laki" {{ old('jenis_kelamin', $editingMember->jenis_kelamin ?? 'Laki-laki') == 'Laki-laki' ? 'checked' : '' }}> Laki-laki</label>
                &nbsp;
                <label><input type="radio" name="jenis_kelamin" value="Perempuan" {{ old('jenis_kelamin', $editingMember->jenis_kelamin ?? '') == 'Perempuan' ? 'checked' : '' }}> Perempuan</label>
            </td></tr>
            <tr><th align="left">Tanggal Lahir</th><td><input type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir', isset($editingMember) ? $editingMember->tanggal_lahir->format('Y-m-d') : '') }}" required></td></tr>
            <tr><td colspan="2" align="center"><input type="submit" value="{{ isset($editingMember) ? 'Update Member' : 'Simpan Member' }}"></td></tr>
        </table>
    </form>

    <br>
    <h3>Daftar Member</h3>
    <table width="100%" border="1" cellpadding="8" cellspacing="0">
        <tr bgcolor="orange">
            <th>No</th><th>Nama</th><th>Email</th><th>No. HP</th><th>Aksi</th>
        </tr>
        @forelse($members as $index => $member)
            <tr align="center">
                <td>{{ $index + 1 }}</td>
                <td align="left"><b>{{ $member->nama }}</b></td>
                <td>{{ $member->email }}</td>
                <td>{{ $member->nohp }}</td>
                <td>
                    <a href="{{ route('admin.members.edit', $member) }}">[Edit]</a>
                    &nbsp;
                    <form action="{{ route('admin.members.destroy', $member) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="[Hapus]" onclick="return confirm('Hapus member ini?')">
                    </form>
                </td>
            </tr>
        @empty
            <tr><td colspan="5" align="center">Belum ada member.</td></tr>
        @endforelse
    </table>
@endsection
