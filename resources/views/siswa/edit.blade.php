@extends('layouts.app')

@section('content')

<div class="card shadow">
    <div class="card-header">
        <h4>Edit Siswa</h4>
    </div>
    <div class="card-body">

        <form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" 
                       value="{{ $siswa->nama }}" required>
            </div>

            <div class="mb-3">
                <label>Umur</label>
                <input type="number" name="umur" class="form-control" 
                       value="{{ $siswa->umur }}" required>
            </div>

            <div class="mb-3">
                <label>Nilai</label>
                <input type="number" name="nilai" class="form-control" 
                       value="{{ $siswa->nilai }}" required>
            </div>

            <button class="btn btn-primary">Update</button>
            <a href="{{ route('siswa.index') }}" class="btn btn-secondary">Kembali</a>

        </form>

    </div>
</div>

@endsection