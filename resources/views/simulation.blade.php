@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class="text-center text-bold" style="font-family:Arial, Helvetica, sans-serif">APOTEK ALIPIA IBRAHIM</h1>
@stop

@section('content')
    <form action="{{ route('loan.calculate') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="jumlah_pinjaman">Jumlah Pinjaman</label>
            <input type="number" name="jumlah_pinjaman" id="jumlah_pinjaman" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="suku_bunga">Tingkat Bunga</label>
            <input type="number" name="suku_bunga" id="jumlah_pinjaman" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="jangka_waktu">Jangka Waktu Pinjaman (bulan)</label>
            <input type="number" name="jangka_waktu" id="jangka_waktu" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Hitung</button>
    </form>
@endsection

@section('footer')
    <div class="footer" style="text-align: center; color: black;">
        <div class="float-right d-none d-sm-block">
            <b>Version</b> 3.0.0
        </div>
        <strong>&copy;
            <a href="https://www.instagram.com/ibr.pia/" target="_blank">APOLIA {{ date('Y') }}</a>.</strong> All Right
        reserved.
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <!-- LOAD FILE dashboard.js -->
    <script src="{{ asset('js/dashboard.js') }}"></script>
@endsection

@section('js')
    <script>
        console.log('Hi!')
    </script>
@stop
