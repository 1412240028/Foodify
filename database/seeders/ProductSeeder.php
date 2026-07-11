<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::insert([
            [
                'nama_produk' => 'Nasi Goreng',
                'kategori' => 'Makanan Berat',
                'harga' => 20000,
                'deskripsi' => 'Yang paling sering di-reorder pelanggan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_produk' => 'Kopi',
                'kategori' => 'Minuman',
                'harga' => 10000,
                'deskripsi' => 'Teman begadang yang nggak pernah gagal',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_produk' => 'Burger',
                'kategori' => 'Snack',
                'harga' => 25000,
                'deskripsi' => 'Burger enak buat cemilan santai',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_produk' => 'Es Teh',
                'kategori' => 'Minuman',
                'harga' => 5000,
                'deskripsi' => 'Minuman segar buat nemenin aktivitasmu',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
