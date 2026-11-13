
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Syauqi Solution</title>

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <!-- Bootstrap Icons CDN -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        /* BODY */
        body {
            background: #f4f6f9;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        /* SIDEBAR */
        .sidebar {
            min-height: 100vh;
            background: #212529;
            padding: 20px 15px;
        }

        /* JUDUL SIDEBAR */
        .sidebar h5 {
            font-weight: bold;
            font-size: 20px;
        }

        /* MENU SIDEBAR */
        .sidebar a {
            color: #ced4da;
            text-decoration: none;
            display: flex;
            align-items: center;
            padding: 12px 15px;
            border-radius: 6px;
            margin-bottom: 5px;
            transition: all 0.2s ease;
            font-size: 15px;
        }

        /* IKON SIDEBAR */
        .sidebar a i {
            font-size: 18px;
            width: 28px;
            display: inline-block;
        }

        /* HOVER SIDEBAR */
        .sidebar a:hover {
            background: #343a40;
            color: #ffffff;
        }

        /* MENU AKTIF */
        .sidebar a.active {
            background: #0d6efd;
            color: #ffffff;
        }

        /* LABEL MENU */
        .sidebar .menu-title {
            color: #8b949e;
            font-size: 12px;
            margin-top: 15px;
            margin-bottom: 15px;
            text-transform: uppercase;
        }

        /* MAIN CONTENT */
        .content {
            padding: 25px;
        }

        /* NAVBAR */
        .navbar {
            min-height: 60px;
        }

        /* STATISTIK CARD */
        .stat-card {
            border: none;
            border-radius: 12px;
        }

        /* RESPONSIVE SIDEBAR */
        @media (max-width: 767px) {
            .sidebar {
                min-height: auto;
            }

            .content {
                padding: 15px;
            }
        }
    </style>

</head>

<body>

    <div class="container-fluid">
        <div class="row">

            <!-- SIDEBAR -->
            <div class="col-md-2 sidebar">

                <!-- LOGO -->
                <h5 class="text-white mb-4">
                    <i class="bi bi-shop me-2"></i>
                    Syauqi Solution
                </h5>

                <!-- MENU ROLE -->
                <p class="menu-title">
                    MENU {{ strtoupper($role) }}
                </p>

                <!-- DASHBOARD -->
                <a href="{{ url('/'.$role.'/dashboard') }}"
                    class="{{ request()->is($role.'/dashboard') ? 'active' : '' }}">

                    <i class="bi bi-speedometer2"></i>
                    Dashboard
                </a>

                @if($role == 'admin')

                    <!-- MENU ADMIN -->

                    <!-- KATEGORI -->
                    <a href="{{ route('admin.categories.index') }}"
                        class="{{ request()->routeIs('admin.categories.*') ? 'active' : '' }}">

                        <i class="bi bi-tags"></i>
                        Kategori
                    </a>

                    <!-- PRODUK -->
                    <a href="#">
                        <i class="bi bi-box-seam"></i>
                        Produk
                    </a>

                    <!-- STOK PRODUK -->
                    <a href="#">
                        <i class="bi bi-boxes"></i>
                        Stok Produk
                    </a>

                    <!-- PELANGGAN -->
                    <a href="#">
                        <i class="bi bi-people"></i>
                        Pelanggan
                    </a>

                    <!-- PESANAN -->
                    <a href="#">
                        <i class="bi bi-cart-check"></i>
                        Pesanan
                    </a>

                    <!-- PEMBAYARAN -->
                    <a href="#">
                        <i class="bi bi-credit-card"></i>
                        Pembayaran
                    </a>

                    <!-- PENGIRIMAN -->
                    <a href="#">
                        <i class="bi bi-truck"></i>
                        Pengiriman
                    </a>

                @elseif($role == 'pelanggan')

                    <!-- MENU PELANGGAN -->

                    <a href="#">
                        <i class="bi bi-bag"></i>
                        Katalog Produk
                    </a>

                    <a href="#">
                        <i class="bi bi-cart3"></i>
                        Keranjang
                    </a>

                    <a href="#">
                        <i class="bi bi-clock-history"></i>
                        Riwayat Pesanan
                    </a>

                    <a href="#">
                        <i class="bi bi-person-circle"></i>
                        Profil Saya
                    </a>

                @elseif($role == 'pengelola')

                    <!-- MENU PENGELOLA -->

                    <a href="#">
                        <i class="bi bi-box-seam"></i>
                        Data Produk
                    </a>

                    <a href="#">
                        <i class="bi bi-people"></i>
                        Data Pelanggan
                    </a>

                    <a href="#">
                        <i class="bi bi-receipt"></i>
                        Data Transaksi
                    </a>

                    <a href="#">
                        <i class="bi bi-bar-chart-line"></i>
                        Laporan Penjualan
                    </a>

                @endif

            </div>

            <!-- MAIN CONTENT -->
            <div class="col-md-10">

                <!-- NAVBAR -->
                <nav class="navbar bg-white shadow-sm px-4">

                    <span class="navbar-brand">
                        <i class="bi bi-grid me-2"></i>
                        Dashboard {{ ucfirst($role) }}
                    </span>

                    <span class="text-secondary">
                        <i class="bi bi-shop me-1"></i>
                        Syauqi Solution
                    </span>

                </nav>

                <!-- CONTENT -->
                <div class="content">

                    @yield('content')

                </div>

            </div>

        </div>
    </div>

    <!-- Bootstrap JavaScript CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
