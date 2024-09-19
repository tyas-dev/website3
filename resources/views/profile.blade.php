<!-- resources/views/profile.blade.php -->
@extends('layouts.main')

@section('content')
    <div class="profile">
        <h1 class="title">Profil Mahasiswa</h1>
        <div class="card">
            <div class="card-content">
                <div class="media">
                    <div class="media-left">
                        <figure class="image is-128x128">
                            <img src="{{ asset('images/profile.jpg') }}" alt="Profile picture">
                        </figure>
                    </div>
                    <div class="media-content">
                        <p class="title is-4">Dwi Wahyuningtyas</p>
                        <p class="subtitle is-6">Alamat: Surakarta</p>
                        <p class="subtitle is-6">Kewarganegaraan: Indonesia</p>
                    </div>
                </div>
            </div>
        </div>
        <a href="{{ route('beasiswa.index') }}" class="button is-link">Kembali ke Home</a>
    </div>
@endsection
