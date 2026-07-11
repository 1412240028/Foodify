<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class MemberController extends Controller
{
    public function index()
    {
        $members = Member::orderBy('id_member', 'desc')->get();

        return View::make('Foodify.members.index', [
            'members' => $members,
            'pageBgColor' => 'lightyellow',
        ]);
    }

    public function edit(Member $member)
    {
        $members = Member::orderBy('id_member', 'desc')->get();
        $editMode = true;

        return View::make('Foodify.members.index', [
            'members' => $members,
            'member' => $member,
            'editMode' => $editMode,
            'pageBgColor' => 'lightyellow',
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:member,email',
            'nohp' => 'required|string|max:25',
            'alamat' => 'required|string',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'tanggal_lahir' => 'required|date',
        ]);

        Member::create($data);

        return Redirect::route('members.index')->with('status', 'Member berhasil ditambahkan.');
    }

    public function update(Request $request, Member $member)
    {
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:member,email,' . $member->getKey() . ',id_member',
            'nohp' => 'required|string|max:25',
            'alamat' => 'required|string',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'tanggal_lahir' => 'required|date',
        ]);

        $member->update($data);

        return Redirect::route('members.index')->with('status', 'Member berhasil diubah.');
    }

    public function destroy(Member $member)
    {
        $member->delete();

        return Redirect::route('members.index')->with('status', 'Member berhasil dihapus.');
    }
}
