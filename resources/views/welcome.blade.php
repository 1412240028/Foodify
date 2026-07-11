<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portal Foodify</title>
    <style>
        body { margin:0; font-family:Arial, sans-serif; background:linear-gradient(135deg, #fff7ed, #fff); color:#111827; }
        .container { min-height:100vh; display:flex; align-items:center; justify-content:center; padding:24px; }
        .card { width:100%; max-width:900px; background:white; border-radius:20px; box-shadow:0 20px 45px rgba(0,0,0,0.12); overflow:hidden; }
        .hero { padding:32px; background:#f97316; color:white; text-align:center; }
        .hero h1 { margin:0 0 8px; font-size:2rem; }
        .hero p { margin:0; font-size:1rem; }
        .content { display:grid; grid-template-columns:repeat(2, minmax(0, 1fr)); gap:20px; padding:24px; }
        .panel { border:1px solid #e5e7eb; border-radius:16px; padding:24px; text-align:center; background:#fffaf5; }
        .panel h2 { margin-top:0; }
        .panel p { color:#4b5563; line-height:1.6; }
        .btn { display:inline-block; margin-top:12px; padding:10px 16px; border-radius:999px; text-decoration:none; font-weight:bold; color:white; }
        .btn-foodify { background:#f97316; }
        .btn-admin { background:#111827; }
        @media (max-width: 768px) { .content { grid-template-columns:1fr; } }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="hero">
                <h1>Portal Foodify</h1>
                <p>Pilih area yang ingin Anda buka: Foodify untuk pelanggan atau Admin untuk mengelola data.</p>
            </div>
            <div class="content">
                <div class="panel">
                    <h2>Masuk ke Foodify</h2>
                    <p>Jelajahi katalog produk, lihat kategori, dan ikuti alur pendaftaran member.</p>
                    <a href="{{ url('/beranda') }}" class="btn btn-foodify">Buka Foodify</a>
                </div>
                <div class="panel">
                    <h2>Masuk ke Admin</h2>
                    <p>Kelola produk dan data member dari dashboard admin yang terpisah.</p>
                    <a href="{{ url('/admin') }}" class="btn btn-admin">Buka Admin</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
