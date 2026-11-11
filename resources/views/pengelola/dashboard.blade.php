@extends('layouts.app')

@section('content')

<h3 class="fw-bold">Dashboard Pengelola</h3>
<p class="text-muted">
    Ringkasan perkembangan usaha Syauqi Solution.
</p>

<div class="row g-3">

    <div class="col-md-3">
        <div class="card shadow-sm p-3">
            <h6>Total Pendapatan</h6>
            <h2>Rp0</h2>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card shadow-sm p-3">
            <h6>Total Transaksi</h6>
            <h2>0</h2>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card shadow-sm p-3">
            <h6>Produk Terjual</h6>
            <h2>0</h2>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card shadow-sm p-3">
            <h6>Produk Terdaftar</h6>
            <h2>0</h2>
        </div>
    </div>

</div>

<div class="card shadow-sm p-3 mt-4">
    <h5>Laporan Penjualan</h5>

    <table class="table table-bordered mt-3">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Jumlah Terjual</th>
                <th>Total Penjualan</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td colspan="4" class="text-center">
                    Belum ada data penjualan.
                </td>
            </tr>
        </tbody>
    </table>
</div>

@endsection