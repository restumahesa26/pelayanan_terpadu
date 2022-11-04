@extends('layouts.admin')

@section('content')
<h1 class="h3 mb-3">Tambah Data Umum</h1>
<div class="row">
    <div class="col-md-12 d-flex">
        <div class="w-100">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('umum.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="jenis">Jenis Umum</label>
                            <select name="jenis" id="jenis" class="form-control @error('jenis') is-invalid @enderror">
                                <option value="" hidden>--Pilih Jenis Umum</option>
                                <option value="Surat & Undangan ELektronik" @if(old('jenis') == 'Surat & Undangan ELektronik') selected @endif>Surat & Undangan ELektronik</option>
                                <option value="Permohonan Pinjam Buku Perpustakaan" @if(old('jenis') == 'Permohonan Pinjam Buku Perpustakaan') selected @endif>Permohonan Pinjam Buku Perpustakaan</option>
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
