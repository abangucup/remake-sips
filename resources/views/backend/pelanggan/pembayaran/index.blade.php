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
    </ol>
</div>

<div class="row">
    {{-- @if (\Carbon\Carbon::parse($tagihan->tanggal_bayar)->isoFormat('MMMM') ==
    \Carbon\Carbon::parse(now())->isoFormat('MMMM')) --}}
    @if (!$tagihan)
    <div class="col-xl-4">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Pembayaran Saya</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('tagihan.bayar') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="mb-3 col-md-12">
                            <label class="form-label">No Register</label>
                            <input type="text" class="form-control" placeholder="Nomor Register" name="no_register"
                                value="{{ $pelanggan->no_register }}" readonly>
                        </div>
                        <div class="mb-3 col-md-12">
                            <label class="form-label">Tanggal</label>
                            <input type="text" class="form-control" placeholder="Tanggal" name="tanggal_bayar"
                                value="{{ \Carbon\Carbon::parse(now())->isoFormat('LL') }}" readonly>
                        </div>
                        <div class="mb-3 col-md-12">
                            <label class="form-label">Tagihan</label>
                            <input type="text" class="form-control text-danger"
                                value="{{ 'Rp '. number_format($pelanggan->tarif->biaya, 0, ',', '.') }}" disabled>
                        </div>
                        <div class="mb-3 col-md-12">
                            <label class="form-label">Status Bayar</label>
                            <input type="text" class="form-control text-danger" value="pending" disabled>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success"><i class="fa fa-money-check-alt me-2"></i>
                        Bayar
                    </button>
                </form>
            </div>
        </div>
    </div>
    @endif
    <div class="col-xl-{{ !$tagihan ? '8' : '12' }}">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Pembayaran Saya</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="display" style="width: 100%">
                        <thead>
                            <tr class="text-center">
                                <th>#</th>
                                <th>No Regis</th>
                                <th>Tanggal Pembayaran</th>
                                <th>Sumber Sampah</th>
                                <th>Status Pembayaran</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pembayarans as $pembayaran)
                            <tr class="text-center">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $pembayaran->pelanggan->no_register }}</td>
                                <td>{{ $pembayaran->tanggal_bayar }}</td>
                                <td>{{ $pembayaran->pelanggan->tarif->sumber_sampah }}</td>
                                <td class="text-{{ $pembayaran->status_bayar == 'lunas' ? 'success' : 'danger' }}">{{
                                    $pembayaran->status_bayar }}</td>
                                <td>
                                    <button type="button" data-bs-toggle="modal"
                                        data-bs-target="#hapusData-{{ $pembayaran->id }}" class="btn-xs sharp me-1
                                            btn btn-danger"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>

                            @include('backend.pelanggan.pembayaran.modal_hapus')


                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr class="text-center">
                                <th>#</th>
                                <th>No Regis</th>
                                <th>Tanggal Pembayaran</th>
                                <th>Sumber Sampah</th>
                                <th>Status Pembayaran</th>
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