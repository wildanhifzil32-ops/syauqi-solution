@extends('layouts.app')

@section('content')

<h3 class="fw-bold">Dashboard Admin</h3>
<p class="text-muted">
    Selamat datang di panel admin Syauqi Solution.
</p>

<div class="row g-3">

    <div class="col-md-3">
        <div class="card stat-card shadow-sm p-3">
            <h6>Total Produk</h6>
            <h2>0</h2>
            <small class="text-muted">Produk terdaftar</small>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card stat-card shadow-sm p-3">
            <h6>Total Pesanan</h6>
            <h2>0</h2>
            <small class="text-muted">Pesanan masuk</small>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card stat-card shadow-sm p-3">
            <h6>Total Pelanggan</h6>
            <h2>0</h2>
            <small class="text-muted">Pelanggan terdaftar</small>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card stat-card shadow-sm p-3">
            <h6>Pembayaran</h6>
            <h2>0</h2>
            <small class="text-muted">Menunggu verifikasi</small>
        </div>
    </div>

</div>

<div class="card shadow-sm mt-4 p-3">
    <h5>Pesanan Terbaru</h5>

    <table class="table table-bordered mt-3">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Pelanggan</th>
                <th>Tanggal</th>
                <th>Total</th>
                <th>Status</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td colspan="5" class="text-center">
                    Belum ada data pesanan.
                </td>
            </tr>
        </tbody>
    </table>
</div>

@endsection