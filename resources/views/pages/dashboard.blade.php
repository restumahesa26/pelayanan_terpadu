@extends('layouts.admin')

@section('content')
<h1 class="h3 mb-3"><strong>Dashboard</strong></h1>
<div class="row">
    <div class="col-md-12 d-flex">
        <div class="w-100">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mt-0">
                                    <h5 class="card-title text-dark">Selamat Datang di Halaman Dashboard {{ Auth::user()->nama }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
