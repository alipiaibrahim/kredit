@extends('adminlte::page')

@section('title', 'Simulasi Pinjaman')

@section('content_header')
    <h1>Hasil Simulasi Pinjaman</h1>
@stop

@section('content')
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Detail Simulasi</h3>
        </div>
        <div class="box-body">
            <p>Jumlah Pinjaman: {{ $jumlah_pinjaman }}</p>
            <p>Bunga Pinjaman: {{ $bunga }}%</p>
            <p>Durasi Pinjaman: {{ $bulan }} bulan</p>
            <p>Bunga yang harus dibayar: {{ $interest }}</p>
            <p>Total Pinjaman + Bunga: {{ $total_pinjaman }}</p>
        </div>
    </div>
@stop
