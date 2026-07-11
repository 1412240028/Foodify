<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;

class PortalController extends Controller
{
    public function index()
    {
        return View::make('welcome', [
            'pageTitle' => 'Portal Foodify',
        ]);
    }
}
