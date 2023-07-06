@extends('adminlte::page')
@section('title', 'Data Diri')
@section('content_header')
    <h1>Data Diri</h1>
@stop
@section('content')
    <div class="container-fluid">
        <div>
            <a href="/perhitungan/create">Tambah Data</a>

            <div>
                <div class="card card-default">
                    <div class="card-header">{{ __('Data Diri') }}</div>
                    <div class="card-body">
                        <table id="table-data" class="table table-white table-responsive">
                            <thead>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Penghasilan</th>
                                    <th>Usia</th>
                                    <th>Status Pekerjaan</th>
                                    <th>Keluarga</th>
                                    <th>Status Rumah</th>
                                    <th>Penjamin</th>
                                    <th>Cicilan</th>
                                    <th>BPKB Kendaran</th>
                                    <th>Lama Bekerja</th>
                                    <th>Hasil</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no=1; @endphp
                                @foreach ($perhitungans as $row)
                                    <tr>
                                        <td class="text-center">{{ $no++ }}</td>
                                        <td class="text-center">{{ $row->nama }}</td>
                                        <td class="text-center">{{ $row->penghasilan }}</td>
                                        <td class="text-center">{{ $row->usia }}</td>
                                        <td class="text-center">{{ $row->status_pekerjaan }}</td>
                                        <td class="text-center">{{ $row->keluarga }}</td>
                                        <td class="text-center">{{ $row->status_rumah }}</td>
                                        <td class="text-center">{{ $row->penjamin }}</td>
                                        <td class="text-center">{{ $row->cicilan }}</td>
                                        <td class="text-center">{{ $row->bpkb_kendaraan }}</td>
                                        <td class="text-center">{{ $row->lama_bekerja }}</td>
                                        <td class="text-center">{{ $row->hasil }}</td>
                                        <td class="text-center">{{ $row->status }}</td>
                                        <td>
                                            {{-- <a href="{{ route('perhitungan.edit', $row->id) }}"> <i
                                                    class="fa fa-edit"></i></a> --}}
                                            <a href="perhitungan/delete/{{ $row->id }}"
                                                onclick="return confirm('Apakah Anda Yakin Menghapus Data?')"><i
                                                    class="fa fa-trash"></i></a>
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
