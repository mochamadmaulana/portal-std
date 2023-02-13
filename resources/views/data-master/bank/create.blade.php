@extends('layout.app', ['title'=>'Tambah Bank'])

@section('header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm">
                    <h1 class="m-0"><i class="fas fa-server"></i> Tambah Bank</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('data-master.bank.index') }}">List Data</a></li>
                        <li class="breadcrumb-item active">Tambah Data</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('data-master.bank.index') }}" class="btn btn-sm btn-secondary float-right"><i class="fas fa-arrow-left"></i> Kembali</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <form action="{{ route('data-master.bank.store') }}" method="POST">
                @csrf
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Bank <span class="text-danger">*</span></label>
                            <input type="text" name="bank" class="form-control @error('bank') is-invalid @enderror" value="{{ @old('bank') }}" placeholder="BCA.." autofocus>
                            @error('bank')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Deskripsi <span class="text-danger">*</span></label>
                            <input type="text" name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" value="{{ @old('deskripsi') }}" placeholder="Bank Central Asia..">
                            @error('deskripsi')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-paper-plane"></i> Simpan</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- /.card-body -->
    </div>
@endsection
