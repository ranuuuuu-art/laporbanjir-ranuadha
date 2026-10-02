@extends('layouts.app')

@section('title', 'Daftar Laporan Banjir')

@section('content')

<div class="container">
    <h2>Daftar Laporan Banjir</h2>

    @foreach ($laporan as $data)
        @include('partials.laporan-card', ['data' => $data])
    @endforeach
</div>

@endsection