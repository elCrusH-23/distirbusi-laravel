@extends('layouts.app')

@section('content')
    <h2>Edit Barang</h2>
    <form action="{{ route('barang.update', $barang->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama_barang">Nama Barang:</label>
            <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="{{ $barang->nama_barang }}" required>
        </div>
        <div class="form-group">
            <label for="price">Harga:</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ $barang->price }}" required>
        </div>
        <div class="form-group">
            <label for="stock">Stok:</label>
            <input type="number" class="form-control" id="stock" name="stock" value="{{ $barang->stock }}" required>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
@endsection