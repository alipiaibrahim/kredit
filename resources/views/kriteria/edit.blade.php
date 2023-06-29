@extends('adminlte::page')

@section('title', 'Hitung')

@section('content_header')
    <h1>Hitung</h1>
@stop

@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <form action="{{ route('kriteria.update', $subkriteria->id) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="box-body">

            <div class="form-group">
                <label for="kriteria_id">Nama Kriteria</label>
                <input type="number" class="form-control" id="kriteria_id" name="kriteria_id"
                    value="{{ $subkriteria->kriteria_id }}" required>
            </div>
            <div class="form-group">
                <label for="nama">Nama Subkriteria</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $subkriteria->nama }}"
                    required>
            </div>
            <div class="form-group">
                <label for="bobot_subkriteria">Bobot Subkriteria</label>
                <input type="number" class="form-control" id="bobot_subkriteria" name="bobot_subkriteria"
                    value="{{ $subkriteria->bobot_subkriteria }}" required>
            </div>
            <div class="form-group">
                <label for="bobot_kriteria">Bobot SK</label>
                <input type="number" class="form-control" id="bobot_kriteria" name="bobot_kriteria"
                    value="{{ $subkriteria->bobot_kriteria }}" readonly>
            </div>
            <div class="form-group">
                <label for="hasil">Hasil</label>
                <input type="number" class="form-control" id="hasil" name="hasil" value="{{ $subkriteria->hasil }}"
                    readonly>
            </div>
        </div>
        <div class="box-footer">
            <button type="button" class="btn btn-primary" onclick="hitung()">Hitung</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
@stop

@section('js')
    <script>
        function hitung() {
            let bobotSubkriteria = document.getElementById('bobot_subkriteria').value;
            let bobotKriteria = document.getElementById('bobot_kriteria').value;

            if (bobotSubkriteria && bobotKriteria) {
                let hasil = bobotSubkriteria / bobotKriteria;
                document.getElementById('hasil').value = hasil;
            } else {
                console.log("Please enter valid numeric values for Bobot Subkriteria and Bobot Kriteria.");
            }
        }
    </script>
@stop
