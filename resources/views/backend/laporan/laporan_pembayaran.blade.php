@extends('backend.template.app')

@section('title', 'Laporan Pembayaran')

@section('content')
<div class="row page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active">
            <a href="javascript:void(0)">Laporan</a>
        </li>
        <li class="breadcrumb-item">
            <a href="#">Pembayaran</a>
        </li>
        <div class="ms-auto text-end">
            <a href="{{ route('cetak.pembayaran') }}" class="btn btn-outline-danger btn-sm sharp"><i
                    class="fa fa-print me-2"></i>Cetak Laporan</a>
        </div>
    </ol>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Laporan Pembayaran Retribusi Sampah</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="display" style="width: 100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Desa</th>
                                <th>Lokasi</th>
                                <th>Nama Lengkap</th>
                                <th>Alamat</th>
                                <th>Jenis Kelamin</th>
                                <th>No HP</th>
                                <th>Total Bayar</th>
                                <th>Status Bayar</th>
                                <th>Tanggal Bayar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pembayarans as $pembayaran)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $pembayaran->pelanggan->lokasi->desa->nama_desa ?? '-' }}</td>
                                <td>{{ $pembayaran->pelanggan->lokasi->nama_lokasi }}</td>
                                <td>{{ $pembayaran->pelanggan->user->biodata->nama_lengkap }}</td>
                                <td>{{ $pembayaran->pelanggan->user->biodata->alamat }}</td>
                                <td>{{ $pembayaran->pelanggan->user->biodata->jenis_kelamin }}</td>
                                <td>{{ $pembayaran->pelanggan->user->biodata->no_hp }}</td>
                                <td>{{ $pembayaran->pelanggan->tarif->biaya }}</td>
                                <td>{{ $pembayaran->status_bayar }}</td>
                                <td>{{ $pembayaran->tanggal_bayar }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Desa</th>
                                <th>Lokasi</th>
                                <th>Nama Lengkap</th>
                                <th>Alamat</th>
                                <th>Jenis Kelamin</th>
                                <th>No HP</th>
                                <th>Total Bayar</th>
                                <th>Status Bayar</th>
                                <th>Tanggal Bayar</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection