<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Foodify</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; background: #f8fafc; color: #111827; }
        .topbar { background: #111827; color: white; padding: 16px 24px; display: flex; justify-content: space-between; align-items: center; }
        .topbar a { color: white; text-decoration: none; margin-left: 12px; font-weight: bold; }
        .container { padding: 24px; }
        .card { background: white; border-radius: 12px; padding: 20px; box-shadow: 0 8px 20px rgba(0,0,0,0.06); margin-bottom: 20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        th, td { border: 1px solid #e5e7eb; padding: 8px; text-align: left; }
        th { background: #f3f4f6; }
        input, textarea, button { font-size: 14px; padding: 8px; }
        .alert { background: #ecfdf5; border: 1px solid #34d399; padding: 10px; margin-bottom: 12px; border-radius: 8px; }
        .btn { display: inline-block; padding: 8px 12px; border-radius: 8px; text-decoration: none; background: #111827; color: white; border: none; cursor: pointer; }
        .btn-secondary { background: #f97316; }
        form { display: inline; }
    </style>
</head>
<body>
    <div class="topbar">
        <strong>Admin Foodify</strong>
        <div>
            <a href="{{ url('/admin') }}">Dashboard</a>
            <a href="{{ url('/') }}">Portal</a>
        </div>
    </div>
    <div class="container">
        @if(session('status'))
            <div class="alert">{{ session('status') }}</div>
        @endif
        @yield('content')
    </div>
</body>
</html>
