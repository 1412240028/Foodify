<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\View;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('id_produk', 'desc')->get();

        return View::make('Foodify.products.index', [
            'products' => $products,
            'pageBgColor' => 'lightblue',
        ]);
    }

    public static function imageForProduct(string $name): string
    {
        $lower = strtolower($name);

        if (str_contains($lower, 'nasi goreng')) {
            return 'images/nasi-goreng.png';
        }

        if (str_contains($lower, 'kopi')) {
            return 'images/kopi.png';
        }

        if (str_contains($lower, 'ayam')) {
            return 'images/ayam-geprek.png';
        }

        if (str_contains($lower, 'burger')) {
            return 'images/burger.png';
        }

        if (str_contains($lower, 'es teh') || str_contains($lower, 'teh')) {
            return 'images/es-teh.png';
        }

        return 'images/logo.png';
    }
}
