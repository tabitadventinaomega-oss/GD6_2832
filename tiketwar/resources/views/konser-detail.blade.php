
@extends('layouts.main')

@section('title', $konser->nama)

@section('content')
<a href="{{ route('konser.index') }}"
   class="btn btn-outline-secondary mb-3">
    &larr; Kembali ke daftar
</a>

<div class="card">
    <div class="card-body">
        <h1 class="card-title h3">{{ $konser->nama }}</h1>

        <p class="text-muted mb-1">
            Promotor: {{ $konser->promotor->nama }}
        </p>

        <p class="text-muted mb-1">
            Kota: {{ $konser->kota }}
        </p>

        <p class="mb-1">
            Tanggal: {{ date('d-m-Y', strtotime($konser->tanggal)) }}
        </p>

        <p class="mb-1">
            Harga: Rp{{ number_format($konser->harga, 0, ',', '.') }}
        </p>

        <p class="mb-1">
            Sisa Tiket: {{ $konser->sisa }}
        </p>

        @if ($konser->sisa > 0)
            <span class="badge bg-success">Tersedia</span>
        @else
            <span class="badge bg-danger">Sold Out</span>
        @endif

        {{-- BARU: Deskripsi Konser --}}
        @if ($konser->deskripsi)
            <hr>

            <h5>Deskripsi Konser</h5>

            <p style="white-space: pre-line;">{{ $konser->deskripsi }}</p>
        @endif

    </div>
</div>
@endsection
