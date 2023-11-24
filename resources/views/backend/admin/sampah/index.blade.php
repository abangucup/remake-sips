@extends('backend.template.app')

@section('title', 'Sampah')

@section('content')
<div class="row page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active">
            <a href="javascript:void(0)">Transaksi Data</a>
        </li>
        <li class="breadcrumb-item">
            <a href="#">Sampah</a>
        </li>
        <div class="ms-auto text-end">
            <button class="btn btn-primary btn-sm sharp" data-bs-toggle="modal" data-bs-target="#tambahData"><i
                    class="fa fa-plus"></i></button>
        </div>

    </ol>
</div>
@include('backend.admin.sampah.modal_tambah')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">sampah Diangkut</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="display" style="width: 100%">
                        <thead>
                            <tr class="text-center">
                                <th>#</th>
                                <th>Nama Sampah</th>
                                <th>Kategori</th>
                                <th>Jumlah Sampah</th>
                                <th>Tanggal Lapor</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sampahs as $sampah)
                            <tr class="text-center">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $sampah->nama_sampah }}</td>
                                <td>{{ $sampah->kategori->kategori_sampah }}</td>
                                <td>{{ $sampah->jumlah_sampah. ' Kg' }}</td>
                                <td>{{ \Carbon\Carbon::parse($sampah->tanggal_lapor)->isoFormat('LL') }}</td>
                                <td>
                                    <button data-bs-toggle="modal" data-bs-target="#ubahData-{{ $sampah->id }}"
                                        class="btn btn-primary shadow btn-xs sharp me-1"><i
                                            class="fas fa-pencil-alt"></i></button>
                                    <button type="button" data-bs-toggle="modal"
                                        data-bs-target="#hapusData-{{ $sampah->id }}" class="btn-xs sharp me-1
                                            btn btn-danger"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>

                            {{-- modal ubah --}}
                            @include('backend.admin.sampah.modal_ubah')

                            {{-- modal hapus --}}
                            @include('backend.admin.sampah.modal_hapus')

                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr class="text-center">
                                <th>#</th>
                                <th>Nama Sampah</th>
                                <th>Kategori</th>
                                <th>Jumlah Sampah</th>
                                <th>Tanggal Lapor</th>
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

@push('script')
<script>
    // INPUT KG
    document.addEventListener('input', function (e) {
    if (e.target && e.target.id === 'berat') {
        const input = e.target;
        const value = input.value.replace(/[^0-9]/g, ''); // Hanya menerima digit
        input.value = formatWeight(value);
    }
});

// Format berat menjadi satuan KG
function formatWeight(value) {
    if (value.length === 0) return '';

    const weight = parseInt(value);
    return `${weight} KG`;
}
</script>