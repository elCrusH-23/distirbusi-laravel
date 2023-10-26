@extends('layouts.app')

@section('content')
    <h2>Daftar Penjualan</h2>
            <form action="{{ route('penjualan.search') }}" method="GET">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cari penjualan..." name="query" value="{{ request('query') }}">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit">Cari</button>
                        <a href="{{ route('penjualan.index') }}" class="btn btn-outline-secondary">Clear</a>
                    </div>
                </div>
            </form>
    <table class="table">
        <thead>
            <tr>
                <th>Jumlah
                    <a href="{{ route('penjualan.index', ['sort' => 'asc','order' => 'jumlah_barang']) }}">
                        <i class="fas fa-arrow-up"></i>
                    </a>
                    <a href="{{ route('penjualan.index', ['sort' => 'desc','order' => 'jumlah_barang']) }}">
                        <i class="fas fa-arrow-down"></i>
                    </a>
                </th>
                <th>Harga
                    <a href="{{ route('penjualan.index', ['sort' => 'asc','order' => 'harga_satuan']) }}">
                        <i class="fas fa-arrow-up"></i>
                    </a>
                    <a href="{{ route('penjualan.index', ['sort' => 'desc','order' => 'harga_satuan']) }}">
                        <i class="fas fa-arrow-down"></i>
                    </a>
                </th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($penjualans as $penjualan)
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
    {{$penjualans->links()}}
    <a href="{{ route('penjualan.create') }}" class="btn btn-success">Tambah Baru</a>
@endsection
