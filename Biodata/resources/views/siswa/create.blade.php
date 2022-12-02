@extends('layouts.app')

@section('content')

<div class="container mt-4">
    @if (session('message'))
        <h4 class="alert alert-success">{{ session('message') }}</h4>
    @endif
    <div class="row">
        <div class="card">
            <div class="card-header">
                <h4>Tambah Data Siswa <a href="{{ url('siswas') }}" class="btn btn-primary float-end">Kembali</a></h4>
            </div>
            <div class="card-body">
                <form action="{{ url('siswas') }}" method="POST">
                    @csrf

                    <div class="row">
                        <h4>Data Siswa</h4>
                        <div class="col-md-4 mb-3">
                            <label>Nama Lengkap</label>
                            <input type="text" name="nama" class="form-control" />
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control" />
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>No Telepon</label>
                            <input type="text" name="no_telp" class="form-control" />
                        </div>
                    </div>
                    <div class="row">
                        <h4>Detail Siswa</h4>
                        <div class="mb-3 col-md-4">
                            <label>No Telepon Rumah</label>
                            <input type="text" name="no_telp_rumah" class="form-control" />
                        </div>
                        <div class="mb-3 col-md-4">
                            <label>Kelas</label>
                            <input type="text" name="kelas" class="form-control" />
                        </div>
                        <div class="mb-3 col-md-4">
                            <label>Alamat</label>
                            <input type="text" name="alamat" class="form-control" />
                        </div>
                        <div class="mb-3 col-md-12">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection