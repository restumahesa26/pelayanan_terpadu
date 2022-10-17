@extends('layouts.admin')

@section('content')
<h1 class="h3 mb-3">Ubah Data Informasi & Pengaduan</h1>
<div class="row">
    <div class="col-md-12 d-flex">
        <div class="w-100">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('informasi-pengaduan.update', $item->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="jenis">Jenis Informasi & Pengaduan</label>
                            <select name="jenis" id="jenis" class="form-control @error('jenis') is-invalid @enderror">
                                <option value="" hidden>--Pilih Jenis Informasi & Pengaduan</option>
                                <option value="Informasi Administrasi Layanan" @if(old('jenis', $item->jenis) == 'Informasi Administrasi Layanan') selected @endif>Informasi Administrasi Layanan</option>
                                <option value="Informasi Humas" @if(old('jenis', $item->jenis) == 'Informasi Humas') selected @endif>Informasi Humas</option>
                                <option value="Pengaduan Melalui Sikomo Dua" @if(old('jenis', $item->jenis) == 'Pengaduan Melalui Sikomo Dua') selected @endif>Pengaduan Melalui Sikomo Dua</option>
                                <option value="Pengaduan Melalui Siwas" @if(old('jenis', $item->jenis) == 'Pengaduan Melalui Siwas') selected @endif>Pengaduan Melalui Siwas</option>
                                <option value="Pengaduan Gratifikasi" @if(old('jenis', $item->jenis) == 'Pengaduan Gratifikasi') selected @endif>Pengaduan Gratifikasi</option>
                                <option value="Pengaduan Terkait Layanan" @if(old('jenis', $item->jenis) == 'Pengaduan Terkait Layanan') selected @endif>Pengaduan Terkait Layanan</option>
                            </select>
                            @error('jenis')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <label for="link">Link</label>
                            <input type="text" name="link" class="form-control @error('link') is-invalid @enderror" id="link" placeholder="Masukkan Link" value="{{ old('link', $item->link) }}">
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
