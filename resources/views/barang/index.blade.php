@extends('layouts.app')

@section('content')
    <h2>Daftar Barang</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($barang as $barang)
                <tr>
                    <td>{{ $barang->nama_barang }}</td>
                    <td>{{ $barang->price }}</td>
                    <td>{{ $barang->stock }}</td>
                    <td>
                        <a href="{{ route('barang.show', $barang->id) }}" class="btn btn-info">Detail</a>
                        <a href="{{ route('barang.edit', $barang->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('barang.destroy', $barang->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('barang.create') }}" class="btn btn-success">Tambah Baru</a>
@endsection
