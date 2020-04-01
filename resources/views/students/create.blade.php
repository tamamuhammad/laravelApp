@extends('layout.main')

@section('title', 'Daftar Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-7">
            <h1 class="mt-3">Form Tambah Mahasiswa</h1>
            <hr>
            <form action="/students" method="post">
                @csrf
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="input-group col-sm-10">
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="Nama">N</span>
                        </div>
                        @error('nama')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nrp" class="col-sm-2 col-form-label">NRP</label>
                    <div class="input-group col-sm-10">
                        <input type="text" class="form-control @error('nrp') is-invalid @enderror" id="nrp" name="nrp" value="{{ old('nrp') }}">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="Nrp">8</span>
                        </div>
                        @error('nrp')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class=" col-sm-2 col-form-label">Email</label>
                    <div class="input-group col-sm-10">
                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="Email">@</span>
                        </div>
                        @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jurusan" class=" col-sm-2 col-form-label">Jurusan</label>
                    <div class="input-group col-sm-10">
                        <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" name="jurusan" value="{{ old('jurusan') }}">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="Jurusan">^</span>
                        </div>
                        @error('jurusan')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-info">Tambah Data</button>
                <a href="/student" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection