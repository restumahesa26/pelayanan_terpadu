@extends('layouts.admin')

@section('content')
<h1 class="h3 mb-3">Tambah Data E-Posbakum</h1>
<div class="row">
    <div class="col-md-12 d-flex">
        <div class="w-100">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('e-posbakum.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="jenis">Jenis E-Posbakum</label>
                            <select name="jenis" id="jenis" class="form-control @error('jenis') is-invalid @enderror">
                                <option value="" hidden>--Pilih Jenis E-Posbakum</option>
                                <option value="Telepon" @if(old('jenis') == 'Telepon') selected @endif>Telepon</option>
                                <option value="Sms" @if(old('jenis') == 'Sms') selected @endif>Sms</option>
                                <option value="Whatsapp" @if(old('jenis') == 'Whatsapp') selected @endif>Whatsapp</option>
                                <option value="Facebook" @if(old('jenis') == 'Facebook') selected @endif>Facebook</option>
                                <option value="Instagram" @if(old('jenis') == 'Instagram') selected @endif>Instagram</option>
                                <option value="Email" @if(old('jenis') == 'Email') selected @endif>Email</option>
                                <option value="Disabilitas / Kaum Renta" @if(old('jenis') == 'Disabilitas / Kaum Renta') selected @endif>Disabilitas / Kaum Renta</option>
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
