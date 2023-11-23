@extends('backend.template.app')

@section('title', 'Kategori Sampah')

@section('content')
<div class="row page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active">
            <a href="javascript:void(0)">Master Data</a>
        </li>
        <li class="breadcrumb-item">
            <a href="#">Kategori</a>
        </li>
        <div class="ms-auto text-end">
            <button class="btn btn-primary btn-sm sharp" data-bs-toggle="modal" data-bs-target="#tambahData"><i
                    class="fa fa-plus"></i></button>
        </div>

    </ol>
</div>
@include('backend.admin.kategori.modal_tambah')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Kategori Sampah</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="display" style="width: 100%">
                        <thead>
                            <tr class="text-center">
                                <th>#</th>
                                <th>Kategori Sampah</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kategoris as $kategori)
                            <tr class="text-center">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $kategori->kategori_sampah }}</td>
                                <td>
                                    <button data-bs-toggle="modal" data-bs-target="#ubahData-{{ $kategori->id }}"
                                        class="btn btn-primary shadow btn-xs sharp me-1"><i
                                            class="fas fa-pencil-alt"></i></button>
                                    <button type="button" data-bs-toggle="modal"
                                        data-bs-target="#hapusData-{{ $kategori->id }}" class="btn-xs sharp me-1
                                            btn btn-danger"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>

                            {{-- modal ubah --}}
                            @include('backend.admin.kategori.modal_ubah')

                            {{-- modal hapus --}}
                            @include('backend.admin.kategori.modal_hapus')

                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr class="text-center">
                                <th>#</th>
                                <th>Kategori Sampah</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection