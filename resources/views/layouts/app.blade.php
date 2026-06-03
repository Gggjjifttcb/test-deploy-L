<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Perpustakaan')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(180deg, #f8fafc 0%, #eef2ff 100%);
            min-height: 100vh;
        }

        .page-shell {
            max-width: 1100px;
        }

        .hero-card {
            background: linear-gradient(135deg, #0f172a, #1e293b);
            color: white;
            border: 0;
            box-shadow: 0 20px 50px rgba(15, 23, 42, 0.18);
        }

        .soft-card {
            border: 0;
            box-shadow: 0 14px 40px rgba(15, 23, 42, 0.08);
        }

        .table thead th {
            background: #0f172a;
            color: white;
            border-color: #0f172a;
        }

        .badge-soft {
            background: rgba(255, 255, 255, 0.12);
            color: #e2e8f0;
        }
    </style>
</head>
<body>
    <div class="container py-5 page-shell">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show shadow-sm" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>