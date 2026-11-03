@extends('layout')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h3>Daftar Antrean Pesanan</h3>
    <a href="/orders/create" class="btn btn-primary">Tambah Pesanan</a>
</div>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="card shadow-sm">
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama Pelanggan</th>
                    <th>Jenis Baju</th>
                    <th>Ukuran / Catatan</th>
                    <th>Harga</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @forelse($orders as $index => $order)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $order->customer->nama ?? 'Pelanggan Dihapus' }}</td>
                    <td>{{ $order->jenis_pakaian }}</td>
                    <td>{{ $order->catatan_ukuran }}</td>
                    <td>Rp {{ number_format($order->harga, 0, ',', '.') }}</td>
                    <td>
                        <span class="badge bg-{{ $order->status == 'antre' ? 'warning' : ($order->status == 'dikerjakan' ? 'info' : 'success') }}">
                            {{ strtoupper($order->status) }}
                        </span>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="text-center text-muted">Belum ada pesanan saat ini.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection