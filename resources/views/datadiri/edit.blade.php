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
            <label for="alamat">Alamat:</label>
            <input type="text" name="alamat" id="alamat" class="form-control" value="{{ $nasabah->alamat }}"
                required>
        </div>

        <div class="form-group">
            <label for="desa">Desa:</label>
            <input type="text" name="desa" id="desa" class="form-control" value="{{ $nasabah->desa }}" required>
        </div>

        <div class="form-group">
            <label for="kecamatan">Kecamatan:</label>
            <input type="text" name="kecamatan" id="kecamatan" class="form-control" value="{{ $nasabah->kecamatan }}"
                required>
        </div>

        <div class="form-group">
            <label for="kabupaten">Kabupaten:</label>
            <input type="text" name="kabupaten" id="kabupaten" class="form-control" value="{{ $nasabah->kabupaten }}"
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
            <input type="email" name="email" id="email" class="form-control" value="{{ $nasabah->email }}"
                required>
        </div>

        <div class="form-group">
            <label for="tujuan_pinjaman">Tujuan Kunjungan:</label>
            <input type="text" name="tujuan_pinjaman" id="tujuan_pinjaman" class="form-control"
                value="{{ $nasabah->tujuan_pinjaman }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@stop
