<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function form()
    {
        return view('laporan.form');
    }

    public function kirim(Request $request)
    {
        $data = [
            'nama' => $request->nama,
            'lokasi' => $request->lokasi,
            'tinggi' => $request->tinggi,
        ];

        return view('laporan.konfirmasi', compact('data'));
    }

    public function daftar()
    {
        $laporan = [
            [
                'nama' => 'Andi',
                'lokasi' => 'Dayeuhkolot',
                'tinggi' => 25,
            ],
            [
                'nama' => 'Siti',
                'lokasi' => 'Baleendah',
                'tinggi' => 50,
            ],
            [
                'nama' => 'Budi',
                'lokasi' => 'Bojongsoang',
                'tinggi' => 85,
            ],
        ];

        return view('laporan.daftar', compact('laporan'));
    }
}