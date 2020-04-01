@extends('layout.main')

@section('title', 'Detail Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-7">
            <h1 class="mt-3">Detail Mahasiswa</h1>
            <hr>
            <div class="card">
                <h6 class="card-header">
                    {{ $student->nrp }}
                </h6>
                <div class="card-body">
                    <h5 class="card-title" style="font-weight:bold;">{{ $student->nama }}</h5>
                    <p class="card-text">{{ $student->email.' - '.$student->jurusan }}</p>
                    <a href="/students/edit/{{ $student->id }}" class="btn btn-success">Edit</a>
                    <form action="{{ $student->id }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                    <a href="/students" class="btn btn-secondary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection