@extends('adminlte::page')
@section('title', 'Data Kriteria')
@section('content_header')
    <h1>Data Akun</h1>
@stop
@section('content')
    <div class="container-fluid">
        <div class="card card-default">
            <div class="card-header">{{ __('Data Kriteria') }}</div>
            <div class="card-body">
                <table id="table-data" class="table table-white">
                    <thead>
                        <tr class="text-center">
                            <th>No</th>
                            <th>Nama Kriteria</th>
                            <th>Faktor Penilaian</th>
                            <th>Bobot Nilai</th>
                            <th>Bobot Maksimal</th>
                            <th>Evaluasi Faktor</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no=1; @endphp
                        @foreach ($subkriterias as $key)
                            <tr>
                                <td class="text-center">{{ $no++ }}</td>
                                <td class="text-center">{{ $key->kriteria->nama }}</td>
                                <td class="text-center">{{ $key->nama }}</td>
                                <td class="text-center">{{ $key->bobot_subkriteria }}</td>
                                <td class="text-center">{{ $key->bobot_kriteria }}</td>
                                <td class="text-center">{{ $key->hasil }}</td>
                                <td>
                                    <a href="{{ route('kriteria.edit', $key->id) }}"> <i class="fa fa-edit"></i></a>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>

@stop


@section('js')

@stop
