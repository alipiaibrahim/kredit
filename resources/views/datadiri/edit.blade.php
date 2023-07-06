@extends('adminlte::page')
@section('title', 'nasabah Diri')
@section('content_header')
    <h1>Edit Data</h1>
@stop

@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <form action="{{ route('nasabah.update', $nasabah->id) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama" class="form-control" value="{{ $nasabah->nama }}" required>
        </div>

        <div class="form-group">
            <label for="no_ktp">No. KTP:</label>
            <input type="text" name="no_ktp" id="no_ktp" class="form-control" value="{{ $nasabah->no_ktp }}"
                required>
        </div>
        <div class="form-group">
            <label for="tgl_lahir">Tanggal Lahir:</label>
            <input type="text" name="tgl_lahir" id="tgl_lahir" class="form-control" value="{{ $nasabah->tgl_lahir }}"
                required>
        </div>

        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <input type="text" name="alamat" id="alamat" class="form-control" value="{{ $nasabah->alamat }}"
                required>
        </div>
        <div class="form-group">
            <label for="pekerjaan">Pekerjaan</label>
            <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="{{ $nasabah->tlpn }}"
                required>
        </div>

        <div class="form-group">
            <label for="tlpn">Telepon:</label>
            <input type="text" name="tlpn" id="tlpn" class="form-control" value="{{ $nasabah->tlpn }}" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ $nasabah->email }}" required>
        </div>

        <div class="form-group">
            <label for="tujuan_pinjaman">Tujuan Kunjungan:</label>
            <input type="text" name="tujuan_pinjaman" id="tujuan_pinjaman" class="form-control"
                value="{{ $nasabah->tujuan_pinjaman }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@stop
