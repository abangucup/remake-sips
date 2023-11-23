@extends('backend.template.app')

@section('title', 'Sopir')

@section('content')
<div class="row page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active">
            <a href="javascript:void(0)">Transaksi Data</a>
        </li>
        <li class="breadcrumb-item">
            <a href="#">Sopir</a>
        </li>
        <div class="ms-auto text-end">
            <button class="btn btn-primary btn-sm sharp" data-bs-toggle="modal" data-bs-target="#tambahData"><i
                    class="fa fa-plus"></i></button>
        </div>

    </ol>
</div>
@include('backend.admin.sopir.modal_tambah')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Sopir Kenderaan</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="display" style="width: 100%">
                        <thead>
                            <tr class="text-center">
                                <th>#</th>
                                <th>Nama Sopir</th>
                                <th>Kenderaan</th>
                                <th>Nomor Polisi</th>
                                <th>Username</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sopirs as $sopir)
                            <tr class="text-center">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $sopir->user->biodata->nama_lengkap }}</td>
                                <td>{{ $sopir->kenderaan->nama_kenderaan }}</td>
                                <td>{{ $sopir->kenderaan->nomor_polisi }}</td>
                                <td>{{ $sopir->user->username }}</td>
                                <td>
                                    <button data-bs-toggle="modal" data-bs-target="#ubahData-{{ $sopir->id }}"
                                        class="btn btn-primary shadow btn-xs sharp me-1"><i
                                            class="fas fa-pencil-alt"></i></button>
                                    <button type="button" data-bs-toggle="modal"
                                        data-bs-target="#hapusData-{{ $sopir->id }}" class="btn-xs sharp me-1
                                            btn btn-danger"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>

                            {{-- modal ubah --}}
                            @include('backend.admin.sopir.modal_ubah')

                            {{-- modal hapus --}}
                            @include('backend.admin.sopir.modal_hapus')

                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr class="text-center">
                                <th>#</th>
                                <th>Nama Sopir</th>
                                <th>Kenderaan</th>
                                <th>Nomor Polisi</th>
                                <th>Username</th>
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