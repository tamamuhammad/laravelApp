@extends('layout.main')

@section('title', 'Daftar Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-7">
            <h1 class="mt-3">Daftar Mahasiswa</h1>
            <hr>
            @if (session('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>
            @endif
            <a href="/students/create" class="btn btn-info">Tambah Data Mahasiswa</a>
            <ul class="list-group list-group-flush">
                @foreach( $students as $student )
                <a href="/students/{{ $student->id }}">
                    <li class="list-group-item">{{ $student->nama }}</li>
                </a>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection