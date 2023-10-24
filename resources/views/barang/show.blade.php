@extends('layouts.app')

@section('content')
    <h2>Detail Barang</h2>
    <div>
        <strong>Nama:</strong> {{ $barang->nama_barang }}<br>
        <strong>Harga:</strong> {{ $barang->price }}<br>
        <strong>Stok:</strong> {{ $barang->stock }}<br>
    </div>
    <br>
    <a href="{{ route('barang.index') }}" class="btn btn-primary">Kembali ke Daftar Barang</a>
@endsection