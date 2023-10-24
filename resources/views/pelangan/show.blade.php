@extends('layouts.app')

@section('content')
    <h2>Detail Pelangan</h2>
    <div>
        <strong>Nama:</strong> {{ $pelangan->nama }}<br>
        <strong>Kontak:</strong> {{ $pelangan->kontak }}<br>
        <strong>Asal:</strong> {{ $pelangan->asal }}<br>
    </div>
    <br>
    <a href="{{ route('pelangan.index') }}" class="btn btn-primary">Kembali ke Daftar Pelangan</a>
@endsection