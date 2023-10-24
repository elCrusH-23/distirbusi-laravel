@extends('layouts.app')

@section('content')
    <h2>Tambah Baru</h2>
    <form action="{{ route('penjualan.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="jumlah_barang">jumlah barang:</label>
            <input type="number" class="form-control" id="jumlah_barang" name="jumlah_barang" required>
        </div>
        <div class="form-group">
            <label for="harga_satuan">Harga satuan:</label>
            <input type="number" class="form-control" id="harga_satuan" name="harga_satuan" required>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection