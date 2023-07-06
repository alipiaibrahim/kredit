@extends('adminlte::page')
@section('title', 'Data Diri')
@section('content_header')
    <h1>Data Diri</h1>
@stop
@section('content')
    <div class="container-fluid">
        <div>
            <a href="/nasabah/create">Tambah Data</a>

            <div>
                <div class="card card-default">
                    <div class="card-header">{{ __('Data Diri') }}</div>
                    <div class="card-body">
                        <table id="table-data" class="table table-white">
                            <thead>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>No KTP</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Alamat</th>
                                    <th>Pekerjaan</th>
                                    <th>No Telepon</th>
                                    <th>Email</th>
                                    <th>Tujuan Pinjaman</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no=1; @endphp
                                @foreach ($nasabahs as $row)
                                    <tr>
                                        <td class="text-center">{{ $no++ }}</td>
                                        <td class="text-center">{{ $row->nama }}</td>
                                        <td class="text-center">{{ $row->no_ktp }}</td>
                                        <td class="text-center">{{ $row->tgl_lahir }}</td>
                                        <td class="text-center">{{ $row->alamat }}</td>
                                        <td class="text-center">{{ $row->pekerjaan }}</td>
                                        <td class="text-center">{{ $row->tlpn }}</td>
                                        <td class="text-center">{{ $row->email }}</td>
                                        <td class="text-center">{{ $row->tujuan_pinjaman }}</td>
                                        <td>
                                            <a href="{{ route('nasabah.edit', $row->id) }}"> <i class="fa fa-edit"></i></a>
                                            <a href="nasabah/delete/{{ $row->id }}"
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

