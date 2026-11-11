<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syauqi Solution</title>

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <style>
        body {
            background: #f4f6f9;
        }

        .sidebar {
            min-height: 100vh;
            background: #212529;
        }

        .sidebar a {
            color: #ced4da;
            text-decoration: none;
            display: block;
            padding: 12px 15px;
            border-radius: 6px;
            margin-bottom: 5px;
        }

        .sidebar a:hover {
            background: #343a40;
            color: white;
        }

        .content {
            padding: 25px;
        }

        .stat-card {
            border: none;
            border-radius: 12px;
        }
    </style>
</head>

<body>

    <div class="container-fluid">
        <div class="row">

            <!-- SIDEBAR -->
            <div class="col-md-2 sidebar p-3">

                <h5 class="text-white mb-4">
                    Syauqi Solution
                </h5>

                <p class="text-secondary small">
                    MENU {{ strtoupper($role) }}
                </p>

                <a href="{{ url('/'.$role.'/dashboard') }}">
                    Dashboard
                </a>

                @if($role == 'admin')
                <a href="#">Kategori</a>
                <a href="#">Produk</a>
                <a href="#">Stok Produk</a>
                <a href="#">Pelanggan</a>
                <a href="#">Pesanan</a>
                <a href="#">Pembayaran</a>
                <a href="#">Pengiriman</a>
                @elseif($role == 'pelanggan')
                <a href="#">Katalog Produk</a>
                <a href="#">Keranjang</a>
                <a href="#">Riwayat Pesanan</a>
                <a href="#">Profil Saya</a>
                @elseif($role == 'pengelola')
                <a href="#">Data Produk</a>
                <a href="#">Data Pelanggan</a>
                <a href="#">Data Transaksi</a>
                <a href="#">Laporan Penjualan</a>
                @endif

            </div>

            <!-- MAIN CONTENT -->
            <div class="col-md-10">

                <nav class="navbar bg-white shadow-sm px-4">
                    <span class="navbar-brand">
                        Dashboard {{ ucfirst($role) }}
                    </span>

                    <span class="text-secondary">
                        Syauqi Solution
                    </span>
                </nav>

                <div class="content">

                    @yield('content')

                </div>

            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>