@extends('layouts.app')

@section('content')

<div class="container mt-4">
    @if (session('message'))
        <h4 class="alert alert-success">{{ session('message') }}</h4>
    @endif
    <div class="row">
        <div class="card">
            <div class="card-header">
                <h4>Edit Data Siswa <a href="{{ url('siswas') }}" class="btn btn-primary float-end">Kembali</a></h4>
            </div>
            <div class="card-body">
                <form action="{{ url('siswas/'.$siswa->id) }}" method="POST">
                    @csrf

                    @method('PUT')

                    <div class="row">
                        <h4>Data Siswa</h4>
                        <div class="col-md-4 mb-3">
                            <label>Nama Lengkap</label>
                            <input type="text" name="nama" value="{{ $siswa->nama }}" class="form-control" />
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>Email</label>
                            <input type="text" name="email" value="{{ $siswa->email }}" class="form-control" />
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>No Telepon</label>
                            <input type="text" name="no_telp" value="{{ $siswa->no_telp }}" class="form-control" />
                        </div>
                    </div>
                    <div class="row">
                        <h4>Detail Siswa</h4>
                        <div class="mb-3 col-md-4">
                            <label>No Telepon Rumah</label>
                            <input type="text" name="no_telp_rumah" value="{{ $siswa->detailSiswa->no_telp_rumah }}" class="form-control" />
                        </div>
                        <div class="mb-3 col-md-4">
                            <label>Kelas</label>
                            <input type="text" name="kelas" value="{{ $siswa->detailSiswa->kelas }}" class="form-control" />
                        </div>
                        <div class="mb-3 col-md-4">
                            <label>Alamat</label>
                            <input type="text" name="alamat" value="{{ $siswa->detailSiswa->alamat }}" class="form-control" />
                        </div>
                        <div class="mb-3 col-md-12">
                            <button type="submit" class="btn btn-primary">Ubah</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection