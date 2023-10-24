@extends('layouts.app')

@section('content')
    <h2>Tambah Baru</h2>
    <form action="{{ route('pelangan.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama">Nama Pelangan:</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        <div class="form-group">
            <label for="kontak">kontak:</label>
            <input type="text" class="form-control" id="kontak" name="kontak" required>
        </div>
        <div class="form-group">
            <label for="asal">asal:</label>
            <input type="text" class="form-control" id="asal" name="asal" required>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection