@extends('layouts.app')

@section('title', 'Edit Buku')

@section('content')
    <div class="card soft-card">
        <div class="card-body p-4 p-md-5">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h1 class="h3 fw-bold mb-1">Edit Buku</h1>
                    <p class="text-muted mb-0">Perbarui data buku yang sudah tersimpan.</p>
                </div>
                <a href="{{ route('books.index') }}" class="btn btn-outline-secondary">Kembali</a>
            </div>

            <form action="{{ route('books.update', $book) }}" method="POST">
                @csrf
                @method('PUT')
                @include('books._form', ['book' => $book])
                <button class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection