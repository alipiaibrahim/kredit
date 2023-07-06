@extends('adminlte::page')
@section('title', 'Data Diri')
@section('content_header')
    <h1>Form Ubah Data</h1>
@stop
@section('content')
    <div class="container-fluid">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div>
            <div class="card card-default">
                <div class="card-body">
                    <table id="table-data" class="table table-white">
                        <form action="{{ route('nasabah.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" class="form-control" id="nama" name="nama" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="no_ktp">No KTP</label>
                                        <input type="text" class="form-control" id="no_ktp" name="no_ktp" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="tgl_lahir">Tanggal Lahir</label>
                                        <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <input type="text" class="form-control" id="alamat" name="alamat" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="pekerjaan">Pekerjaan</label>
                                        <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="tlpn">Nomor Telepon</label>
                                        <input type="text" class="form-control" id="tlpn" name="tlpn" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="tujuan_pinjaman">Tujuan</label>
                                        <input type="tujuan_pinjaman" class="form-control" id="tujuan_pinjaman"
                                            name="tujuan_pinjaman" required>
                                    </div>
                                    <div class="text-center">
                                    <button type="submit" class="btn btn-primary acenter">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </table>
                </div>
            </div>
        @stop
