@extends('layouts.app')

@section('content')
    <h2>Edit Penjualan</h2>
    <form action="{{ route('penjualan.update', $penjualan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="jumlah_barang">Jumlah Barang:</label>
            <input type="number" class="form-control" id="jumlah_barang" name="jumlah_barang" value="{{ $penjualan->jumlah_barang }}" required>
        </div>
        <div class="form-group">
            <label for="harga_satuan">Harga Satuan:</label>
            <input type="number" class="form-control" id="harga_satuan" name="harga_satuan" value="{{ $penjualan->harga_satuan }}" required>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
@endsection