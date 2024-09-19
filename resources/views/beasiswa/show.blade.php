<!-- resources/views/beasiswa/show.blade.php -->
@extends('layouts.main')

@section('content')
    <h1 class="title">{{ $beasiswa->nama }}</h1>
    <div class="beasiswa-detail">
        <img src="{{ asset('images/' . $beasiswa->gambar) }}" alt="{{ $beasiswa->nama }}" style="width: 50%; height: auto;">
        <p><strong>Penyedia:</strong> {{ $beasiswa->penyedia }}</p>
        <p><strong>Negara:</strong> {{ $beasiswa->negara }}</p>
        <p><strong>Level:</strong> {{ $beasiswa->level }}</p>
        <p>{{ $beasiswa->deskripsi }}</p>
        <h2 class="title is-4">Syarat</h2>
        <ul>
            @foreach ($beasiswa->details as $detail)
                <li>{{ $detail->syarat }} (Batas waktu: {{ $detail->batas_waktu }})</li>
            @endforeach
        </ul>
        <a href="{{ route('beasiswa.index') }}" class="button is-link">Kembali</a>
    </div>
@endsection
