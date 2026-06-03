@extends('layouts.app')

@section('title', 'Tambah Buku')

@section('content')
    <div class="card soft-card">
        <div class="card-body p-4 p-md-5">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h1 class="h3 fw-bold mb-1">Tambah Buku</h1>
                    <p class="text-muted mb-0">Isi data buku perpustakaan baru.</p>
                </div>
                <a href="{{ route('books.index') }}" class="btn btn-outline-secondary">Kembali</a>
            </div>

            <form action="{{ route('books.store') }}" method="POST">
                @csrf
                @include('books._form')
                <button class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
@endsection