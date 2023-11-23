@extends('backend.template.app')

@section('title', 'Pelanggan')

@section('content')
<div class="row page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active">
            <a href="javascript:void(0)">Transaksi Data</a>
        </li>
        <li class="breadcrumb-item">
            <a href="#">Masyarakat</a>
        </li>
        <div class="ms-auto text-end">
            <button class="btn btn-primary btn-sm sharp" data-bs-toggle="modal" data-bs-target="#tambahData"><i
                    class="fa fa-plus"></i></button>
        </div>

    </ol>
</div>
@include('backend.pengelola.pelanggan.modal_tambah')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Masyarakat</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="display" style="width: 100%">
                        <thead>
                            <tr class="text-center">
                                <th>#</th>
                                <th>No Regis</th>
                                <th>Nama Lengkap</th>
                                <th>Alamat</th>
                                <th>Lokasi</th>
                                <th>Sumber Sampah</th>
                                <th>Tarif</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pelanggans as $pelanggan)
                            <tr class="text-center">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $pelanggan->no_register }}</td>
                                <td>{{ $pelanggan->user->biodata->nama_lengkap }}</td>
                                <td>{{ $pelanggan->user->biodata->alamat }}</td>
                                <td>{{ $pelanggan->lokasi->nama_lokasi }}</td>
                                <td>{{ $pelanggan->tarif->sumber_sampah }}</td>
                                <td>{{ $pelanggan->tarif->biaya }}</td>
                                <td>
                                    <button data-bs-toggle="modal" data-bs-target="#ubahData-{{ $pelanggan->id }}"
                                        class="btn btn-primary shadow btn-xs sharp me-1"><i
                                            class="fas fa-pencil-alt"></i></button>
                                    <button type="button" data-bs-toggle="modal"
                                        data-bs-target="#hapusData-{{ $pelanggan->id }}" class="btn-xs sharp me-1
                                            btn btn-danger"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>

                            {{-- modal ubah --}}
                            @include('backend.pengelola.pelanggan.modal_ubah')

                            {{-- modal hapus --}}
                            @include('backend.pengelola.pelanggan.modal_hapus')

                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr class="text-center">
                                <th>#</th>
                                <th>No Regis</th>
                                <th>Nama Lengkap</th>
                                <th>Alamat</th>
                                <th>Lokasi</th>
                                <th>Sumber Sampah</th>
                                <th>Tarif</th>
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