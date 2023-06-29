@extends('adminlte::page')

@section('title', 'Form Perhitungan Kredit')

@section('content_header')
    <h1>Form Perhitungan Kredit</h1>
@stop

@section('content')
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Input Data Kredit</h3>
        </div>
        <div class="box-body">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <a href="/perhitungan/create">Tambah Data</a>
            <form method="POST" action="{{ route('perhitungan.store') }}">
                @csrf

                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" required>
                </div>

                <div class="form-group">
                    <label for="penghasilan">Penghasilan</label>
                    <input type="number" class="form-control" id="penghasilan" name="penghasilan" required>
                </div>

                <div class="form-group">
                    <label for="usia">Usia</label>
                    <input type="number" class="form-control" id="usia" name="usia" required>
                </div>

                <div class="form-group">
                    <label for="status_pekerjaan">Status Pekerjaan</label>
                    <input type="text" class="form-control" id="status_pekerjaan" name="status_pekerjaan" required>
                </div>

                <div class="form-group">
                    <label for="keluarga">Keluarga</label>
                    <input type="number" class="form-control" id="keluarga" name="keluarga" required>
                </div>

                <div class="form-group">
                    <label for="status_rumah">Status Rumah</label>
                    <input type="text" class="form-control" id="status_rumah" name="status_rumah" required>
                </div>

                <div class="form-group">
                    <label for="penjamin">Penjamin</label>
                    <input type="text" class="form-control" id="penjamin" name="penjamin" required>
                </div>

                <div class="form-group">
                    <label for="cicilan">Cicilan</label>
                    <input type="number" class="form-control" id="cicilan" name="cicilan" required>
                </div>

                <div class="form-group">
                    <label for="bpkb_kendaraan">BPKB Kendaraan</label>
                    <select class="form-control" id="bpkb_kendaraan" name="bpkb_kendaraan" required>
                        <option value="0">Tidak Ada</option>
                        <option value="1">Ada</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="lama_bekerja">Lama Bekerja</label>
                    <input type="number" class="form-control" id="lama_bekerja" name="lama_bekerja" required>
                </div>

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
