<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;

class PageController extends Controller
{
    public function beranda()
    {
        return View::make('Foodify.pages.beranda', [
            'pageBgColor' => 'lightgreen',
        ]);
    }

    public function kategori()
    {
        return View::make('Foodify.pages.kategori', [
            'pageBgColor' => 'red',
        ]);
    }

    public function profil()
    {
        return View::make('Foodify.pages.profil', [
            'pageBgColor' => 'pink',
        ]);
    }
}
