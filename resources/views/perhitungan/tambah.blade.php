@extends('adminlte::page')

@section('title', 'Form Perhitungan Kredit')

@section('content_header')
    <h1>Form Perhitungan Kredit</h1>
@stop

@section('content')
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Input Data Kredit</h3>
        </div>
        <div class="box-body">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form method="POST" action="{{ route('perhitungan.store') }}">
                @csrf
{{-- 
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" required>
                </div> --}}

                <div class="form-group">
                    <label for="penghasilan">Penghasilan</label>
                    <select class="form-control" id="penghasilan" name="penghasilan" required>
                        <option selected>Pilih</option>
                        {{-- <option value="0.5">2jt-4jt</option>
                        <option value="0.75">5jt-8jt</option>
                        <option value="1.00">9jt></option> --}}
                        <option value="">Pilih Penghasilan</option>
                        @foreach ($penghasilan as $penghasilan)
                            <option value="{{ $penghasilan->hasil }}">{{ $penghasilan->nama }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="usia">Usia</label>
                    <select class="form-control" id="usia" name="usia" required>
                        {{-- <option selected>Pilih</option>
                        <option value="0.34">20-30</option>
                        <option value="0.67">41-50</option>
                        <option value="1.00">31-40</option> --}}
                        <option value="">Pilih Usia</option>
                        @foreach ($usia as $usia)
                            <option value="{{ $usia->hasil }}">{{ $usia->nama }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="status_pekerjaan">Status Pekerjaan</label>
                    <select class="form-control" id="status_pekerjaan" name="status_pekerjaan" required>
                        {{-- <option selected>Pilih</option>
                        <option value="0.34">Swasta</option>
                        <option value="0.67">PNS</option>
                        <option value="1.00">Wirausaha</option> --}}
                        <option value="">Pilih Status Pekerjaan</option>
                        @foreach ($statusPekerjaan as $statusPekerjaan)
                            <option value="{{ $statusPekerjaan->hasil }}">{{ $statusPekerjaan->nama }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="keluarga">Keluarga</label>
                    <select class="form-control" id="keluarga" name="keluarga" required>
                        {{-- <option selected>Pilih</option>
                        <option value="0.34">5>=</option>
                        <option value="0.67">3-4</option>
                        <option value="1.00">1-2</option> --}}
                        <option value="">Pilih Keluarga</option>
                        @foreach ($keluarga as $keluarga)
                            <option value="{{ $keluarga->hasil }}">{{ $keluarga->nama }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="status_rumah">Status Rumah</label>
                    <select class="form-control" id="status_rumah" name="status_rumah" required>
                        {{-- <option selected>Pilih</option>
                        <option value="0.2">Kontrakan</option>
                        <option value="0.67">Milik Keluarga</option>
                        <option value="1.00">Milik Pribadi</option> --}}
                        <option value="">Pilih Status Rumah</option>
                        @foreach ($statusRumah as $statusRumah)
                            <option value="{{ $statusRumah->hasil }}">{{ $statusRumah->nama }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="penjamin">Penjamin</label>
                    <select class="form-control" id="penjamin" name="penjamin" required>
                        {{-- <option selected>Pilih</option>
                        <option value="0.2">Orang Lain</option>
                        <option value="0.67">Kerabat Jauh</option>
                        <option value="1.00">Keluarga</option> --}}
                        <option value="">Pilih Penjamin</option>
                        @foreach ($penjamin as $penjamin)
                            <option value="{{ $penjamin->hasil }}">{{ $penjamin->nama }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="cicilan">Cicilan</label>
                    <select class="form-control" id="cicilan" name="cicilan" required>
                        {{-- <option selected>Pilih</option>
                        <option value="0.13">Ada</option>
                        <option value="1.00">Tidak</option> --}}
                        <option value="">Pilih Cicilan</option>
                        @foreach ($cicilan as $cicilan)
                            <option value="{{ $cicilan->hasil }}">{{ $cicilan->nama }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="bpkb_kendaraan">BPKB Kendaraan</label>
                    <select class="form-control" id="bpkb_kendaraan" name="bpkb_kendaraan" required>
                        {{-- <option selected>Pilih</option>
                        <option value="0.2">Milik Orang Lain</option>
                        <option value="0.67">Milik Keluarga</option>
                        <option value="1.00">Milik Sendiri</option> --}}
                        <option value="">Pilih BPKB Kendaraan</option>
                        @foreach ($bpkbKendaraan as $bpkbKendaraan)
                            <option value="{{ $bpkbKendaraan->hasil }}">{{ $bpkbKendaraan->nama }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="lama_bekerja">Lama Bekerja</label>
                    <select class="form-control" id="lama_bekerja" name="lama_bekerja" required>
                        {{-- <option selected>Pilih</option>
                        <option value="0.2">>=16 Tahun</option>
                        <option value="0.67">1-5 Tahun</option>
                        <option value="1.00">6-15 Tahun</option> --}}
                        <option value="">Pilih Lama Bekerja</option>
                        @foreach ($lamaBekerja as $lamaBekerja)
                            <option value="{{ $lamaBekerja->hasil }}">{{ $lamaBekerja->nama }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection
