<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Manajement Penjahit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="/">SMP sederhana</a>
            <div>
                <a href="/cutomers" class="btn btn-outline-light btn-sm me-2">Data Pelanggan</a>
                <a href="/orders/create" class="btn btn-primary btn-sm">Tambah Pesanan</a>
            </div>
        </div>
    </nav>

    <div class="'container">
        @yield('content')
    </div>
</body>
</html>