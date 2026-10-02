@extends('layouts.app')

@section('title', 'Form Laporan Banjir')

@section('content')

<div class="container">
    <h2>Form Laporan Banjir</h2>

    <p>Silakan isi data banjir yang terjadi di wilayah Anda.</p>

    <form action="{{ route('laporan.kirim') }}" method="POST">
        @csrf

        <label for="nama">Nama Pelapor</label>
        <input type="text" id="nama" name="nama" placeholder="Masukkan nama Anda" required>

        <label for="lokasi">Lokasi Kejadian</label>
        <input type="text" id="lokasi" name="lokasi" placeholder="Contoh: Dayeuhkolot" required>

        <label for="tinggi">Tinggi Genangan (cm)</label>
        <input type="number" id="tinggi" name="tinggi" placeholder="Contoh: 50" min="1" required>

        <button type="submit">Kirim Laporan</button>
    </form>
</div>

@endsection