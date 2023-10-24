@extends('layouts.app')

@section('content')
    <h2>Tambah Barang Baru</h2>
    <form action="{{ route('barang.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama_barang">Nama barang:</label>
            <input type="text" class="form-control" id="nama_barang" name="nama_barang" required>
        </div>
        <div class="form-group">
            <label for="price">Harga:</label>
            <input type="number" class="form-control" id="price" name="price" required>
        </div>
        <div class="form-group">
            <label for="stock">Stok:</label>
            <input type="number" class="form-control" id="stock" name="stock" required>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection