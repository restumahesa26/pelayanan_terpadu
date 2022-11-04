@extends('layouts.admin')

@section('content')
<h1 class="h3 mb-3">Tambah Data Pidana</h1>
<div class="row">
    <div class="col-md-12 d-flex">
        <div class="w-100">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('pidana.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="jenis">Jenis Pidana</label>
                            <select name="jenis" id="jenis" class="form-control @error('jenis') is-invalid @enderror">
                                <option value="" hidden>--Pilih Jenis Pidana</option>
                                <option value="Cek Denda Tilang" @if(old('jenis') == 'Cek Denda Tilang') selected @endif>Cek Denda Tilang</option>
                                <option value="Izin Penggeledahan" @if(old('jenis') == 'Izin Penggeledahan') selected @endif>Izin Penggeledahan</option>
                                <option value="Izin Penyitaan" @if(old('jenis') == 'Izin Penyitaan') selected @endif>Izin Penyitaan</option>
                                <option value="Perpanjangan Penahanan" @if(old('jenis') == 'Perpanjangan Penahanan') selected @endif>Perpanjangan Penahanan</option>
                                <option value="Pelimpahan Berkas Pidana" @if(old('jenis') == 'Pelimpahan Berkas Pidana') selected @endif>Pelimpahan Berkas Pidana</option>
                                <option value="Pinjam Pakai Barang Bukti" @if(old('jenis') == 'Pinjam Pakai Barang Bukti') selected @endif>Pinjam Pakai Barang Bukti</option>
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
