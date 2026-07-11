<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class AdminController extends Controller
{
    public function index()
    {
        return $this->dashboard();
    }

    public function dashboard(?Product $editingProduct = null, ?Member $editingMember = null)
    {
        $products = Product::orderBy('id_produk', 'desc')->get();
        $members = Member::orderBy('id_member', 'desc')->get();

        return View::make('Foodify.admin.dashboard', [
            'products' => $products,
            'members' => $members,
            'editingProduct' => $editingProduct,
            'editingMember' => $editingMember,
            'pageBgColor' => 'lightblue',
        ]);
    }

    public function products()
    {
        return $this->dashboard();
    }

    public function editProduct(Product $product)
    {
        return $this->dashboard($product);
    }

    public function storeProduct(Request $request)
    {
        $data = $request->validate([
            'nama_produk' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'harga' => 'required|integer|min:0',
            'deskripsi' => 'nullable|string',
        ]);

        Product::create($data);

        return Redirect::to('/admin/products')->with('status', 'Produk berhasil ditambahkan.');
    }

    public function updateProduct(Request $request, Product $product)
    {
        $data = $request->validate([
            'nama_produk' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'harga' => 'required|integer|min:0',
            'deskripsi' => 'nullable|string',
        ]);

        $product->update($data);

        return Redirect::to('/admin/products')->with('status', 'Produk berhasil diperbarui.');
    }

    public function destroyProduct(Product $product)
    {
        $product->delete();

        return Redirect::to('/admin/products')->with('status', 'Produk berhasil dihapus.');
    }

    public function editMember(Member $member)
    {
        return $this->dashboard(null, $member);
    }

    public function storeMember(Request $request)
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

        return Redirect::to('/admin')->with('status', 'Member berhasil ditambahkan.');
    }

    public function updateMember(Request $request, Member $member)
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

        return Redirect::to('/admin')->with('status', 'Member berhasil diperbarui.');
    }

    public function destroyMember(Member $member)
    {
        $member->delete();

        return Redirect::to('/admin')->with('status', 'Member berhasil dihapus.');
    }
}
