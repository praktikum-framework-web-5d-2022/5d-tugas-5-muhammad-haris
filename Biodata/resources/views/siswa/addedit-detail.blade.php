@extends('layouts.app')

@section('content')

<div class="container mt-4">
    @if (session('message'))
        <h4 class="alert alert-success">{{ session('message') }}</h4>
    @endif
    <div class="row">
        <div class="card">
            <div class="card-header">
                <h4>Tambah/Edit Data Detail Siswa <a href="{{ url('siswas') }}" class="btn btn-primary float-end">Kembali</a></h4>
            </div>
            <div class="card-body">
                <form action="{{ url('siswas/'.$id_siswa.'/updatedetail') }}" method="POST">
                    @csrf

                    

                    <div class="row">
                        <h4>Detail Siswa</h4>
                        <div class="mb-3 col-md-4">
                            <label>No Telepon Rumah</label>
                            <input type="text" name="no_telp_rumah" value="{{ $siswa->no_telp_rumah ?? ""}}" class="form-control" />
                        </div>
                        <div class="mb-3 col-md-4">
                            <label>Kelas</label>
                            <input type="text" name="kelas" value="{{ $siswa->kelas ?? "" }}" class="form-control" />
                        </div>
                        <div class="mb-3 col-md-4">
                            <label>Alamat</label>
                            <input type="text" name="alamat" value="{{ $siswa->alamat ?? "" }}" class="form-control" />
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