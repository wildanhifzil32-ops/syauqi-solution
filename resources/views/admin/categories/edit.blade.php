
@extends('layouts.app')

@section('content')

<div class="container-fluid">

    <h3 class="mb-4">Edit Kategori</h3>

    <div class="card shadow-sm stat-card">
        <div class="card-body">

            <form action="{{ route('admin.categories.update', $category->id) }}"
                  method="POST">

                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Nama Kategori</label>

                    <input type="text"
                           name="name"
                           class="form-control @error('name') is-invalid @enderror"
                           value="{{ old('name', $category->name) }}"
                           required>

                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>

                    <textarea name="description"
                              class="form-control"
                              rows="4">{{ old('description', $category->description) }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-save"></i> Update
                </button>

                <a href="{{ route('admin.categories.index') }}"
                   class="btn btn-secondary">
                    Kembali
                </a>

            </form>

        </div>
    </div>

</div>

@endsection
