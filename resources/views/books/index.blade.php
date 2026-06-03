@extends('layouts.app')

@section('title', 'Data Buku')

@section('content')
    <div class="card hero-card mb-4">
        <div class="card-body p-4 p-md-5">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">
                <div>
                    <span class="badge badge-soft mb-3">CRUD Perpustakaan</span>
                    <h1 class="display-6 fw-bold mb-2">Data Buku Perpustakaan</h1>
                    <p class="mb-0 text-white-50">Tambah, ubah, lihat, dan hapus data buku dengan tampilan sederhana.</p>
                </div>
                <div class="d-flex gap-2">
                    <a href="{{ route('books.create') }}" class="btn btn-light btn-lg">+ Tambah Buku</a>
                    <a href="{{ url('/healthz') }}" class="btn btn-outline-light btn-lg">Health</a>
                </div>
            </div>
        </div>
    </div>

    <div class="card soft-card">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead>
                        <tr>
                            <th style="width: 70px;">#</th>
                            <th>Judul</th>
                            <th>Penulis</th>
                            <th>Penerbit</th>
                            <th>Tahun</th>
                            <th>Stok</th>
                            <th class="text-end" style="width: 220px;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($books as $book)
                            <tr>
                                <td>{{ $book->id }}</td>
                                <td class="fw-semibold">{{ $book->title }}</td>
                                <td>{{ $book->author }}</td>
                                <td>{{ $book->publisher ?: '-' }}</td>
                                <td>{{ $book->year ?: '-' }}</td>
                                <td><span class="badge text-bg-success">{{ $book->stock }}</span></td>
                                <td class="text-end">
                                    <a href="{{ route('books.show', $book) }}" class="btn btn-sm btn-outline-secondary">Detail</a>
                                    <a href="{{ route('books.edit', $book) }}" class="btn btn-sm btn-primary">Edit</a>
                                    <form action="{{ route('books.destroy', $book) }}" method="POST" class="d-inline" onsubmit="return confirm('Hapus data buku ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center py-5 text-muted">
                                    Belum ada data buku. Klik tombol <strong>Tambah Buku</strong> untuk mulai.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="mt-4">
        {{ $books->links('pagination::bootstrap-5') }}
    </div>
@endsection