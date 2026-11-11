@extends('layouts.app')

@section('content')

<h3 class="fw-bold">Dashboard Pelanggan</h3>
<p class="text-muted">
    Selamat datang di Syauqi Solution.
    Temukan produk thrift favoritmu.
</p>

<div class="row g-3">

    <div class="col-md-4">
        <div class="card shadow-sm p-3">
            <h6>Produk Tersedia</h6>
            <h2>0</h2>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card shadow-sm p-3">
            <h6>Keranjang Saya</h6>
            <h2>0</h2>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card shadow-sm p-3">
            <h6>Pesanan Saya</h6>
            <h2>0</h2>
        </div>
    </div>

</div>

<div class="card shadow-sm p-3 mt-4">
    <h5>Riwayat Pesanan</h5>

    <table class="table table-bordered mt-3">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Produk</th>
                <th>Total</th>
                <th>Status</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td colspan="4" class="text-center">
                    Belum ada pesanan.
                </td>
            </tr>
        </tbody>
    </table>
</div>

@endsection