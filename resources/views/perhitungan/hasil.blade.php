@extends('adminlte::page')
@section('title', 'Data Diri')
@section('content_header')
    <h1>Data Diri</h1>
@stop
@section('content')
    <div class="container-fluid">
        <div class="card card-default">
            <div class="card-header">{{ __('Data Diri') }}</div>
            <div class="card-body">
                <table id="table-data" class="table table-white table-responsive">
                    <thead>
                        <tr class="text-center">
                            <th>Nama</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no=1; @endphp
                        @foreach ($perhitungans as $row)
                            <tr>
                                <td class="text-center">{{ $row->nama }}</td>
                                <td class="text-center">{{ $row->status }}</td>
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
