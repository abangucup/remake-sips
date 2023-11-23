@extends('backend.template.app')

@section('title', 'Laporan Jalur')

@section('content')
<div class="row page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active">
            <a href="javascript:void(0)">Laporan</a>
        </li>
        <li class="breadcrumb-item">
            <a href="#">Jalur</a>
        </li>

        @if (auth()->user()->role->level !== 'sopir')
        <div class="ms-auto text-end">
            <button href="{{ route('cetak.jalur') }}" class="btn btn-outline-danger btn-sm sharp" data-bs-toggle="modal"
                data-bs-target="#cetak"><i class="fa fa-print me-2"></i>Cetak Laporan</button>
        </div>
        {{-- Modal Tambah Data --}}
        <div class="modal fade" id="cetak" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form action="{{ route('cetak.jalur') }}" method="post">
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title">Cetak Laporan</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="mb-3 col-md-12">
                                    <label class="form-label">Tampilan Cetak</label>
                                    <select name="tampilan" class="default-select form-control" required>
                                        <option value="">-- Pilih Hasil Tampilan Cetak --</option>
                                        <option value="jenis">Berdarakan Jenis Kenderaan</option>
                                        <option value="hari">Berdasarkan Hari</option>
                                        <option value="tabel">Sesuaikan Dengan Tabel</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">
                                Batal
                            </button>
                            <button type="submit" class="btn btn-info light">
                                Cetak
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{-- END MODAL --}}
        @endif

    </ol>
</div>



<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Laporan Jalur Pengangkutan</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    @if (auth()->user()->role->level === 'admin')
                    <table id="example" class="table table-striped" style="width: 100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th class="text-center">Jenis</th>
                                <th>Kenderaan</th>
                                <th>Nama Sopir</th>
                                <th>Hari</th>
                                <th>Jalur</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kenderaans as $kenderaan)
                            @php
                            $rowspan = $kenderaan->jalurs->pluck('hari')->unique()->count();
                            @endphp
                            <tr>
                                <td rowspan="{{ $rowspan }}">{{ $loop->iteration }}</td>
                                <td class="text-center" rowspan="{{ $rowspan }}">{{
                                    $kenderaan->jenis->jenis_kenderaan }}</td>
                                <td rowspan="{{ $rowspan }}">{{ $kenderaan->nama_kenderaan.' -
                                    '.$kenderaan->nomor_polisi }}</td>
                                <td rowspan="{{ $rowspan }}">{{ $kenderaan->sopir->user->biodata->nama_lengkap
                                    }}</td>
                                @foreach ($kenderaan->jalurs->groupBy('hari') as $hari => $jalurs)
                                @if ($loop->first)
                                <td>{{ $hari }}</td>
                                <td>
                                    {{ implode(', ', $jalurs->pluck('lokasi.nama_lokasi')->toArray()) }}
                                </td>
                                @else
                            <tr>
                                <td>{{ $hari }}</td>
                                <td>
                                    {{ implode(', ', $jalurs->pluck('lokasi.nama_lokasi')->toArray()) }}
                                </td>
                            </tr>
                            @endif
                            @endforeach
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th class="text-center">Jenis</th>
                                <th>Kenderaan</th>
                                <th>Nama Sopir</th>
                                <th>Hari</th>
                                <th>Jalur</th>
                            </tr>
                        </tfoot>
                    </table>

                    @elseif (auth()->user()->role->level === 'sopir')
                    <table id="example" class="display" style="width: 100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Sopir</th>
                                <th>Hari</th>
                                <th>Jalur</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kenderaan->jalurs->groupBy('hari') as $hari => $jalurs)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $kenderaan->sopir->user->biodata->nama_lengkap }}</td>
                                <td>{{ $hari }}</td>
                                <td>
                                    @foreach ($jalurs->groupBy('lokasi_id') as $lokasiId => $lokasiJalurs)
                                    {{ implode(', ', $lokasiJalurs->pluck('lokasi.nama_lokasi')->toArray()) }}
                                    @endforeach
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Nama Sopir</th>
                                <th>Hari</th>
                                <th>Jalur</th>
                            </tr>
                        </tfoot>
                    </table>

                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection