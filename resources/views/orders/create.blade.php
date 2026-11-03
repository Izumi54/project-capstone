@extends('layout')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow-sm mt-4">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Tambah Pesanan Baru</h5>
            </div>
            <div class="card-body">
                <form action="/orders" method="POST">
                    @csrf
                    
                    <div class="mb-3">
                        <label class="form-label">Pilih Pelanggan</label>
                        <select name="customer_id" class="form-select" required>
                            <option value="">-- Pilih Pelanggan --</option>
                            @foreach($customers as $customer)
                                <option value="{{ $customer->id }}">{{ $customer->nama }} ({{ $customer->nomor }})</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Jenis Pakaian</label>
                        <input type="text" name="jenis_pakaian" class="form-control" placeholder="Contoh: Kemeja Pria, Gamis" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Catatan Ukuran</label>
                        <textarea name="catatan_ukuran" class="form-control" rows="4" placeholder="Contoh: Lingkar dada 100cm, panjang 70cm" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Harga (Opsional)</label>
                        <input type="number" name="harga" class="form-control" placeholder="Boleh dikosongkan jika belum ada harga">
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="/orders" class="btn btn-secondary">Batal</a>
                        <button type="submit" class="btn btn-success">Simpan Pesanan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection