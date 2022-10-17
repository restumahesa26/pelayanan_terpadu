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
                                <option value="" hidden>--Pilih Jenis Hukum</option>
                                <option value="Pendaftaran Gugatan, Bantahan, Gugatan Sederhana, Permohonan Secara Online" @if(old('jenis', $item->jenis) == 'Pendaftaran Gugatan, Bantahan, Gugatan Sederhana, Permohonan Secara Online') selected @endif>Pendaftaran Gugatan, Bantahan, Gugatan Sederhana, Permohonan Secara Online</option>
                                <option value="Pendaftaran Upaya Hukum Banding Secara Online" @if(old('jenis', $item->jenis) == 'Pendaftaran Upaya Hukum Banding Secara Online') selected @endif>Pendaftaran Upaya Hukum Banding Secara Online</option>
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
