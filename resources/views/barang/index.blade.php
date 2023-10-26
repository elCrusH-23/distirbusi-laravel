@extends('layouts.app')

@section('content')
    <h2>Daftar Barang</h2>
        <form action="{{ route('barang.search') }}" method="GET">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Cari barang..." name="query" value="{{ request('query') }}">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit">Cari</button>
                    <a href="{{ route('barang.index') }}" class="btn btn-outline-secondary">Clear</a>
                </div>
            </div>
        </form>
    <table class="table">
        <thead>
            <tr>
                <th>Nama Barang
                    <a href="{{ route('barang.index', ['sort' => 'asc','order' => 'nama_barang']) }}">
                        <i class="fas fa-arrow-up"></i>
                    </a>
                    <a href="{{ route('barang.index', ['sort' => 'desc','order' => 'nama_barang']) }}">
                        <i class="fas fa-arrow-down"></i>
                    </a>
                </th>
                <th>Harga
                    <a href="{{ route('barang.index', ['sort' => 'asc','order' => 'price']) }}">
                        <i class="fas fa-arrow-up"></i>
                    </a>
                    <a href="{{ route('barang.index', ['sort' => 'desc','order' => 'price']) }}">
                        <i class="fas fa-arrow-down"></i>
                    </a>
                </th>
                <th>Stok
                    <a href="{{ route('barang.index', ['sort' => 'asc','order' => 'stock']) }}">
                        <i class="fas fa-arrow-up"></i>
                    </a>
                    <a href="{{ route('barang.index', ['sort' => 'desc','order' => 'stock']) }}">
                        <i class="fas fa-arrow-down"></i>
                    </a>
                </th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($barangs as $barang)
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
    {{ $barangs->links() }}
    <a href="{{ route('barang.create') }}" class="btn btn-success">Tambah Baru</a>
@endsection
