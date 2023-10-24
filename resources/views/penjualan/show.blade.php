@extends('layouts.app')

@section('content')
    <h2>Detail Penjualan</h2>
    <div>
        <strong>Jumlah Barang:</strong> {{ $penjualan->jumlah_barang }}<br>
        <strong>Harga Satuan:</strong> {{ $penjualan->harga_satuan }}<br>
    </div>
    <br>
    <a href="{{ route('penjualan.index') }}" class="btn btn-primary">Kembali ke Daftar Penjualan</a>
@endsection