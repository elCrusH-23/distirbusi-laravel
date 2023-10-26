@extends('layouts.app')

@section('content')
    <h2>Daftar Pelangan</h2>
        <form action="{{ route('pelangan.search') }}" method="GET">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Cari pelangan..." name="query" value="{{ request('query') }}">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit">Cari</button>
                        <a href="{{ route('pelangan.index') }}" class="btn btn-outline-secondary">Clear</a>
                    </div>
            </div>
        </form>
    <table class="table">
        <thead>
            <tr>
                <th>Nama
                    <a href="{{ route('pelangan.index', ['sort' => 'asc','order' => 'nama']) }}">
                        <i class="fas fa-arrow-up"></i>
                    </a>
                    <a href="{{ route('pelangan.index', ['sort' => 'desc','order' => 'nama']) }}">
                        <i class="fas fa-arrow-down"></i>
                    </a>
                </th>
                <th>Kontak
                    <a href="{{ route('pelangan.index', ['sort' => 'asc','order' => 'kontak']) }}">
                        <i class="fas fa-arrow-up"></i>
                    </a>
                    <a href="{{ route('pelangan.index', ['sort' => 'desc','order' => 'kontak']) }}">
                        <i class="fas fa-arrow-down"></i>
                    </a>
                </th>
                <th>Asal
                    <a href="{{ route('pelangan.index', ['sort' => 'asc','order' => 'asal']) }}">
                        <i class="fas fa-arrow-up"></i>
                    </a>
                    <a href="{{ route('pelangan.index', ['sort' => 'desc','order' => 'asal']) }}">
                        <i class="fas fa-arrow-down"></i>
                    </a>
                </th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pelangans as $pelangan)
                <tr>
                    <td>{{ $pelangan->nama }}</td>
                    <td>{{ $pelangan->kontak }}</td>
                    <td>{{ $pelangan->asal }}</td>
                    <td>
                        <a href="{{ route('pelangan.show', $pelangan->id) }}" class="btn btn-info">Detail</a>
                        <a href="{{ route('pelangan.edit', $pelangan->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('pelangan.destroy', $pelangan->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $pelangans -> links() }}
    <a href="{{ route('pelangan.create') }}" class="btn btn-success">Tambah Baru</a>
@endsection
