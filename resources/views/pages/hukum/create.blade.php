@extends('layouts.admin')

@section('content')
<h1 class="h3 mb-3">Tambah Data Hukum</h1>
<div class="row">
    <div class="col-md-12 d-flex">
        <div class="w-100">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('hukum.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="jenis">Jenis Hukum</label>
                            <select name="jenis" id="jenis" class="form-control @error('jenis') is-invalid @enderror">
                                <option value="" hidden>--Pilih Jenis Hukum</option>
                                <option value="Permohonan Izin Magang dan Penelitian" @if(old('jenis') == 'Permohonan Izin Magang dan Penelitian') selected @endif>Permohonan Izin Magang dan Penelitian</option>
                                <option value="Surat Tidak Pernah Dipidana Sebagai Terpidana" @if(old('jenis') == 'Surat Tidak Pernah Dipidana Sebagai Terpidana') selected @endif>Surat Tidak Pernah Dipidana Sebagai Terpidana</option>
                                <option value="Surat Tidak Sedang Dicabut Hak Pilih" @if(old('jenis') == 'Surat Tidak Sedang Dicabut Hak Pilih') selected @endif>Surat Tidak Sedang Dicabut Hak Pilih</option>
                                <option value="Surat Sedang Tidak Dinyatakan Pailit" @if(old('jenis') == 'Surat Sedang Tidak Dinyatakan Pailit') selected @endif>Surat Sedang Tidak Dinyatakan Pailit</option>
                                <option value="Surat Tidak Memiliki Tanggungan Hutang" @if(old('jenis') == 'Surat Tidak Memiliki Tanggungan Hutang') selected @endif>Surat Tidak Memiliki Tanggungan Hutang</option>
                            </select>
                            @error('jenis')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <label for="link">Link</label>
                            <input type="text" name="link" class="form-control @error('link') is-invalid @enderror" id="link" placeholder="Masukkan Link" value="{{ old('link') }}">
                            @error('link')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
