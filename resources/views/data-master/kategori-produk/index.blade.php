@extends('layout.app', ['title' => 'Kategori Produk'])

@section('header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm">
                    <h1 class="m-0"><i class="fas fa-server"></i> Kategori Produk</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">List Data</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('data-master.kategori-produk.create') }}" class="btn btn-sm btn-primary"><i class="fas fa-plus"></i> Kategori Produk</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="dataKategori" class="table table-bordered table-hover">
                <thead class="table-secondary">
                    <tr>
                        <th>Nama</th>
                        <th style="width:20%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kategori_produk as $value)
                        <tr>
                            <td>{{ $value->nama }}</td>
                            <td>
                                <a href="{{ route('data-master.kategori-produk.edit', $value->id) }}" class="btn btn-xs btn-success mr-2 shadow-sm"><i class="fas fa-edit mr-1"></i> Edit</a>
                                <form action="{{ route('data-master.kategori-produk.destroy', $value->id) }}" method="POST" style="display:inline">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-xs btn-danger shadow-sm border-0" onclick="return confirm('Yakin, untuk menghapus kategori produk {{ $value->nama }}?')"><i class="fas fa-trash-alt mr-1"></i> Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection

@push('js')
    <script>
        $(document).ready(function() {
            $('#dataKategori').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": false,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endpush
