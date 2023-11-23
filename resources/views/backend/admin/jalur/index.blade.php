@extends('backend.template.app')

@section('title', 'Jalur')

@section('content')
<div class="row page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active">
            <a href="javascript:void(0)">Transaksi Data</a>
        </li>
        <li class="breadcrumb-item">
            <a href="#">Jalur</a>
        </li>
        <div class="ms-auto text-end">
            <button class="btn btn-primary btn-sm sharp" data-bs-toggle="modal" data-bs-target="#tambahData"><i
                    class="fa fa-plus"></i></button>
        </div>

    </ol>
</div>
@include('backend.admin.jalur.modal_tambah')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Jalur Desa</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="display" style="width: 100%">
                        <thead>
                            <tr class="text-center">
                                <th>#</th>
                                <th>Jenis Kenderaan</th>
                                <th>Kenderaan</th>
                                <th>Lokasi</th>
                                <th>Hari</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($jalurs as $jalur)
                            <tr class="text-center">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $jalur->kenderaan->jenis->jenis_kenderaan }}</td>
                                <td>{{ $jalur->kenderaan->nama_kenderaan.' - '.$jalur->kenderaan->nomor_polisi }}</td>
                                <td>{{ $jalur->lokasi->nama_lokasi }}</td>
                                <td>{{ $jalur->hari }}</td>
                                <td>
                                    <button data-bs-toggle="modal" data-bs-target="#ubahData-{{ $jalur->id }}"
                                        class="btn btn-primary shadow btn-xs sharp me-1"><i
                                            class="fas fa-pencil-alt"></i></button>
                                    <button type="button" data-bs-toggle="modal"
                                        data-bs-target="#hapusData-{{ $jalur->id }}" class="btn-xs sharp me-1
                                            btn btn-danger"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>

                            {{-- modal ubah --}}
                            @include('backend.admin.jalur.modal_ubah')

                            {{-- modal hapus --}}
                            @include('backend.admin.jalur.modal_hapus')

                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr class="text-center">
                                <th>#</th>
                                <th>Jenis Kenderaan</th>
                                <th>Kenderaan</th>
                                <th>Lokasi</th>
                                <th>Hari</th>
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