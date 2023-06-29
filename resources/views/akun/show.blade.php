@extends('adminlte::page')
@section('title', 'Data Akun')
@section('content_header')
    <h1>Data Akun</h1>
@stop
@section('content')
    <div class="container-fluid">
        <div>
            <a href="/akun/create">Tambah Akun</a>

            <div>
                <div class="card card-default">
                    <div class="card-header">{{ __('Data Akun') }}</div>
                    <div class="card-body">
                        <table id="table-data" class="table table-white">
                            <thead>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Roles ID</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            
                                @php $no=1; @endphp
                                @foreach ($users as $key)
                                    <tr>
                                        <td class="text-center">{{ $no++ }}</td>
                                        <td class="text-center">{{ $key->name }}</td>
                                        <td class="text-center">{{ $key->email }}</td>
                                        <td class="text-center">{{ $key->password }}</td>
                                        <td>{{ $key->roles->name }}</td>
                                        <td>
                                            <a href="{{ route('akun.edit', $key->id) }}"> <i class="fa fa-edit"></i></a>
                                            <a href="{{ route('akun.delete', $key->id) }}"
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
