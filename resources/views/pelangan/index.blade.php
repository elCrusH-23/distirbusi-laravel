@extends('layouts.app')

@section('content')
    <h2>Daftar Pelangan</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Kontak</th>
                <th>Asal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pelangan as $pelangan)
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
    <a href="{{ route('pelangan.create') }}" class="btn btn-success">Tambah Baru</a>
@endsection
