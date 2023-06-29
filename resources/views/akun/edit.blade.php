@extends('adminlte::page')
@section('title', 'Data Akun')
@section('content_header')
    <h1>Edit Data</h1>
@stop

@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <form action="{{ route('akun.update', $user->id) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="name">Nama:</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" name="email" id="email" class="form-control" value="{{ $user->email }}" required>
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="text" name="password" id="password" class="form-control" value="{{ $user->password }}"
                required>
        </div>

        <div class="form-group">
            <label for="roles_id">Roles ID:</label>
            <input type="text" name="roles_id" id="roles_id" class="form-control" value="{{ $user->roles_id }}"
                required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@stop
