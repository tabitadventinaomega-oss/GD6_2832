<?php

namespace App\Http\Controllers;

use App\Models\Konser;
use Illuminate\Http\Request;
use Illuminate\View\View;

class KonserController extends Controller
{
    // BARU: menampilkan konser berdasarkan filter kota
    public function index(Request $request): View
    {
        $daftarKonser = Konser::with('promotor')
            ->when($request->query('kota'), function ($query, $kota) {
                return $query->where('kota', $kota);
            })
            ->orderBy('tanggal')
            ->get();

        // BARU: mengambil daftar kota tanpa duplikat
        $daftarKota = Konser::select('kota')
            ->distinct()
            ->orderBy('kota')
            ->pluck('kota');

        return view('konser', compact('daftarKonser', 'daftarKota'));
    }

    public function show($id): View
    {
        $konser = Konser::with('promotor')->findOrFail($id);

        return view('konser-detail', compact('konser'));
    }
}
