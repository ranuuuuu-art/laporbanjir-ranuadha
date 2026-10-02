@extends('layouts.app')

@section('title', 'Konfirmasi Laporan')

@section('content')

<div class="container">
    <h2>Laporan Berhasil Dikirim</h2>

    <p>Terima kasih, laporan banjir kamu sudah berhasil dikirim.</p>

    <h3>Data Laporan</h3>

    <p><strong>Nama Pelapor:</strong> {{ $data['nama'] }}</p>
    <p><strong>Lokasi:</strong> {{ $data['lokasi'] }}</p>
    <p><strong>Tinggi Genangan:</strong> {{ $data['tinggi'] }} cm</p>

    <br>

    <a href="{{ route('laporan.form') }}">Kembali ke Form Laporan</a>
</div>

@endsection