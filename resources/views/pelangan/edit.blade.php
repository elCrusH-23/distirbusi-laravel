@extends('layouts.app')

@section('content')
    <h2>Edit Pelangan</h2>
    <form action="{{ route('pelangan.update', $pelangan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama">Nama Pelangan:</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $pelangan->nama }}" required>
        </div>
        <div class="form-group">
            <label for="kontak">kontak:</label>
            <input type="text" class="form-control" id="kontak" name="kontak" value="{{ $pelangan->kontak }}" required>
        </div>
        <div class="form-group">
            <label for="asal">asal:</label>
            <input type="text" class="form-control" id="asal" name="asal" value="{{ $pelangan->asal }}" required>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
@endsection