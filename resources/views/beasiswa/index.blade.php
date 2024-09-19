<!-- resources/views/beasiswa/index.blade.php -->
@extends('layouts.main')

@section('content')
    <h1 class="title">Daftar Beasiswa</h1>
    <div class="columns is-multiline">
        @foreach ($beasiswas as $beasiswa)
            <div class="column is-one-third">
                <div class="beasiswa-card">
                    <img src="{{ asset('images/' . $beasiswa->gambar) }}" alt="{{ $beasiswa->nama }}">
                    <div class="beasiswa-content">
                        <h2 class="title is-4">{{ $beasiswa->nama }}</h2>
                        <p><strong>Penyedia:</strong> {{ $beasiswa->penyedia }}</p>
                        <p><strong>Negara:</strong> {{ $beasiswa->negara }}</p>
                        <p><strong>Level:</strong> {{ $beasiswa->level }}</p>
                        <p>{{ Str::limit($beasiswa->deskripsi, 100) }}</p>
                        <p><strong>Registrasi Mulai:</strong> {{ $beasiswa->registrasi_mulai }}</p>
                        <p><strong>Registrasi Akhir:</strong> {{ $beasiswa->registrasi_akhir }}</p>
                        <a href="{{ route('beasiswa.show', $beasiswa->id) }}" class="button is-link">Detail</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
