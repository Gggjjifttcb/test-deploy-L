@extends('layouts.app')

@section('title', 'Detail Buku')

@section('content')
    <div class="card soft-card">
        <div class="card-body p-4 p-md-5">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h1 class="h3 fw-bold mb-1">Detail Buku</h1>
                    <p class="text-muted mb-0">Informasi lengkap data buku.</p>
                </div>
                <a href="{{ route('books.index') }}" class="btn btn-outline-secondary">Kembali</a>
            </div>

            <div class="row g-4">
                <div class="col-md-6">
                    <div class="border rounded-4 p-4 bg-light">
                        <div class="text-muted small mb-1">Judul</div>
                        <div class="fw-semibold fs-5">{{ $book->title }}</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="border rounded-4 p-4 bg-light">
                        <div class="text-muted small mb-1">Penulis</div>
                        <div class="fw-semibold fs-5">{{ $book->author }}</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="border rounded-4 p-4 bg-light">
                        <div class="text-muted small mb-1">Penerbit</div>
                        <div class="fw-semibold">{{ $book->publisher ?: '-' }}</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="border rounded-4 p-4 bg-light">
                        <div class="text-muted small mb-1">Tahun</div>
                        <div class="fw-semibold">{{ $book->year ?: '-' }}</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="border rounded-4 p-4 bg-light">
                        <div class="text-muted small mb-1">Stok</div>
                        <div class="fw-semibold">{{ $book->stock }}</div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="border rounded-4 p-4 bg-light">
                        <div class="text-muted small mb-1">Deskripsi</div>
                        <div>{!! nl2br(e($book->description ?: 'Tidak ada deskripsi.')) !!}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection