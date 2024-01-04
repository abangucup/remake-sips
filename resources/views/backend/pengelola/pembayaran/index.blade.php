@extends('backend.template.app')

@section('title', 'Pembayaran')

@section('content')
<div class="row page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active">
            <a href="javascript:void(0)">Transaksi</a>
        </li>
        <li class="breadcrumb-item">
            <a href="#">Pembayaran</a>
        </li>
        <div class="ms-auto text-end">
            <button class="btn btn-primary btn-sm sharp" data-bs-toggle="modal" data-bs-target="#tambahData"><i
                    class="fa fa-plus"></i></button>
        </div>

    </ol>
</div>
@include('backend.pengelola.pembayaran.modal_tambah')

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
                                <th>Sumber Sampah</th>
                                <th>Tarif</th>
                                <th>Tanggal Bayar</th>
                                <th>Status Bayar</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pembayarans as $pembayaran)
                            <tr class="text-center">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $pembayaran->pelanggan->no_register }}</td>
                                <td>{{ $pembayaran->pelanggan->user->biodata->nama_lengkap }}</td>
                                <td>{{ $pembayaran->pelanggan->tarif->sumber_sampah }}</td>
                                <td>{{ $pembayaran->pelanggan->tarif->biaya }}</td>
                                <td>{{ $pembayaran->tanggal_bayar }}</td>
                                <td class="text-{{ $pembayaran->status_bayar == 'lunas' ? 'success' : 'danger' }}">{{
                                    $pembayaran->status_bayar }}</td>
                                <td>
                                    <button data-bs-toggle="modal" data-bs-target="#ubahData-{{ $pembayaran->id }}"
                                        class="btn btn-primary shadow btn-xs sharp me-1"><i
                                            class="fas fa-pencil-alt"></i></button>
                                    <button type="button" data-bs-toggle="modal"
                                        data-bs-target="#hapusData-{{ $pembayaran->id }}" class="btn-xs sharp me-1
                                            btn btn-danger"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>

                            {{-- modal ubah --}}
                            @include('backend.pengelola.pembayaran.modal_ubah')

                            {{-- modal hapus --}}
                            @include('backend.pengelola.pembayaran.modal_hapus')

                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr class="text-center">
                                <th>#</th>
                                <th>No Regis</th>
                                <th>Nama Lengkap</th>
                                <th>Sumber Sampah</th>
                                <th>Tarif</th>
                                <th>Tanggal Bayar</th>
                                <th>Status Bayar</th>
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