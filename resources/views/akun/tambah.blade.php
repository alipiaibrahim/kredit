@extends('adminlte::page')
@section('title', 'Data Akun')
@section('content_header')
    <h1>Data Akun</h1>
@stop
@section('content')
    <div class="container-fluid">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div>
            <table id="table-data" class="table table-white">
                <form action="{{ route('akun.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="name">Nama:</label>
                                <input type="text" name="name" id="name" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" name="email" id="email" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" name="password" id="password" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="roles_id">Roles ID</label>
                                <select id="roles_id" name="roles_id">
                                    <option selected>Pilih</option>
                                    <option value="1">Admin</option>
                                    <option value="2">Nasabah</option>
                                    <option value="3">Petugas</option>
                                    <option value="4">Pengawas</option>
                                </select>
                            </div>
                            <button type="submit">Simpan</button>
                        </div>
                    </div>
                </form>
            </table>
        </div>
    </div>
@stop
