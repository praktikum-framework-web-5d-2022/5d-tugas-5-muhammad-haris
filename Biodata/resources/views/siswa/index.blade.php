@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">

            @if (session('message'))
                <h4 class="alert alert-success">{{ session('message') }}</h4>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4>
                        Daftar Siswa <a href="{{ url('siswas/create') }}" class="btn btn-primary float-end">Tambah Data Siswa</a>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Id_Siswa</th>
                                <th>Nama Lengkap</th>
                                <th>Email</th>
                                <th>Tambah/Edit Siswa</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($siswas as $siswa)
                            <tr>
                                <td>{{ $siswa->id }}</td>
                                <td>{{ $siswa->nama }}</td>
                                <td>{{ $siswa->email }}</td>
                                <td>
                                    <a href="{{ url('siswas/'. $siswa->id.'/detail') }}" class="btn btn-success btn-sm">Tambah/Edit Detail Siswa</a>
                                </td>
                                <td>
                                    <a href="{{ url('siswas/'. $siswa->id.'/edit') }}" class="btn btn-success btn-sm">Edit</a>
                                    <form action="{{ url('siswas/'.$siswa->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                    </form>
                                </td>                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection