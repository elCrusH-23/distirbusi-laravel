@extends('layouts.app')

@section('content')
    <h2>Daftar Penjualan</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($penjualan as $penjualan)
                <tr>
                    <td>{{ $penjualan->jumlah_barang}}</td>
                    <td>{{ $penjualan->harga_satuan }}</td>
                    <td>
                        <a href="{{ route('penjualan.show', $penjualan->id) }}" class="btn btn-info">Detail</a>
                        <a href="{{ route('penjualan.edit', $penjualan->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('penjualan.destroy', $penjualan->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('penjualan.create') }}" class="btn btn-success">Tambah Baru</a>
@endsection
