@extends('backend.template.app')

@section('title', 'Kenderaan')

@section('content')
<div class="row page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active">
            <a href="javascript:void(0)">Transaksi Data</a>
        </li>
        <li class="breadcrumb-item">
            <a href="#">Kenderaan</a>
        </li>
        <div class="ms-auto text-end">
            <button class="btn btn-primary btn-sm sharp" data-bs-toggle="modal" data-bs-target="#tambahData"><i
                    class="fa fa-plus"></i></button>
        </div>

    </ol>
</div>
@include('backend.admin.kenderaan.modal_tambah')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Kenderaan Pengangkut</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="display" style="width: 100%">
                        <thead>
                            <tr class="text-center">
                                <th>#</th>
                                <th>Kode Kenderaan</th>
                                <th>Jenis Kenderaan</th>
                                <th>Nama Kenderaan</th>
                                <th>Nomor Polisi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kenderaans as $kenderaan)
                            <tr class="text-center">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $kenderaan->kode_kenderaan }}</td>
                                <td>{{ $kenderaan->jenis->jenis_kenderaan }}</td>
                                <td>{{ $kenderaan->nama_kenderaan }}</td>
                                <td>{{ $kenderaan->nomor_polisi }}</td>
                                <td>
                                    <button data-bs-toggle="modal" data-bs-target="#ubahData-{{ $kenderaan->id }}"
                                        class="btn btn-primary shadow btn-xs sharp me-1"><i
                                            class="fas fa-pencil-alt"></i></button>
                                    <button type="button" data-bs-toggle="modal"
                                        data-bs-target="#hapusData-{{ $kenderaan->id }}" class="btn-xs sharp me-1
                                            btn btn-danger"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>

                            {{-- modal ubah --}}
                            @include('backend.admin.kenderaan.modal_ubah')

                            {{-- modal hapus --}}
                            @include('backend.admin.kenderaan.modal_hapus')

                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr class="text-center">
                                <th>#</th>
                                <th>Kode Kenderaan</th>
                                <th>Jenis Kenderaan</th>
                                <th>Nama Kenderaan</th>
                                <th>Nomor Polisi</th>
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