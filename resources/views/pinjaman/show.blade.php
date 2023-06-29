@extends('adminlte::page')
@section('title', 'Simulasi Pinjaman')
@section('content_header')
    <h1>Simulasi Pinjaman</h1>
@stop
@section('content')
    <div class="container-fluid">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Masukkan Data Pinjaman</h3>
            </div>
            <div class="box-body">
                <form action="{{ route('pinjaman.simulasi') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="jumlah_pinjaman">Jumlah Pinjaman</label>
                        <input type="number" class="form-control" id="jumlah_pinjaman" name="jumlah_pinjaman" required>
                    </div>
                    <div class="form-group">
                        <label for="bunga">Bunga Pinjaman (%)</label>
                        <input type="number" class="form-control" id="bunga" name="bunga">
                    </div>
                    <div class="form-group">
                        <label for="bulan">Durasi Pinjaman (bulan)</label>
                        <input type="number" class="form-control" id="bulan" name="bulan" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Simulasi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@stop


@section('js')

@stop
