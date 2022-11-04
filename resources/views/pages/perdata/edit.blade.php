@extends('layouts.admin')

@section('content')
<h1 class="h3 mb-3">Ubah Data Perdata</h1>
<div class="row">
    <div class="col-md-12 d-flex">
        <div class="w-100">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('perdata.update', $item->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="jenis">Jenis Perdata</label>
                            <select name="jenis" id="jenis" class="form-control @error('jenis') is-invalid @enderror">
                                <option value="" hidden>--Pilih Jenis Perdata</option>
                                <option value="Pendaftaran Gugatan" @if(old('jenis', $item->jenis) == 'Pendaftaran Gugatan') selected @endif>Pendaftaran Gugatan</option>
                                <option value="Pendaftaran Gugatan Sederhana" @if(old('jenis', $item->jenis) == 'Pendaftaran Gugatan Sederhana') selected @endif>Pendaftaran Gugatan Sederhana</option>
                                <option value="Pendaftaran Permohononan / Volountair" @if(old('jenis', $item->jenis) == 'Pendaftaran Permohononan / Volountair') selected @endif>Pendaftaran Permohononan / Volountair</option>
                                <option value="Pendaftaran Bantahan" @if(old('jenis', $item->jenis) == 'Pendaftaran Bantahan') selected @endif>Pendaftaran Bantahan</option>
                                <option value="Pendaftaran Upaya Hukum Banding" @if(old('jenis', $item->jenis) == 'Pendaftaran Upaya Hukum Banding') selected @endif>Pendaftaran Upaya Hukum Banding</option>
                                <option value="Permohonan Izin Keterlambatan Sidang Perdata Gugatan Dari Para Pihak" @if(old('jenis', $item->jenis) == 'Permohonan Izin Keterlambatan Sidang Perdata Gugatan Dari Para Pihak') selected @endif>Permohonan Izin Keterlambatan Sidang Perdata Gugatan Dari Para Pihak</option>
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
