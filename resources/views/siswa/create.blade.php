@extends('layouts.app')

@section('content')

<div class="card shadow">
    <div class="card-header">
        <h4>Tambah Siswa</h4>
    </div>
    <div class="card-body">

        <form action="{{ route('siswa.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Umur</label>
                <input type="number" name="umur" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Nilai</label>
                <input type="number" name="nilai" class="form-control" required>
            </div>

            <button class="btn btn-primary">Simpan</button>
            <a href="{{ route('siswa.index') }}" class="btn btn-secondary">Kembali</a>

        </form>

    </div>
</div>

@endsection