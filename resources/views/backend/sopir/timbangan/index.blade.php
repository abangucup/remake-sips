@extends('backend.template.app')

@section('title', 'Timbangan')

@section('content')
<div class="row page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active">
            <a href="javascript:void(0)">Transaksi Data</a>
        </li>
        <li class="breadcrumb-item">
            <a href="#">Timbangan Sampah</a>
        </li>
        <div class="ms-auto text-end">
            <button class="btn btn-primary btn-sm sharp" data-bs-toggle="modal" data-bs-target="#tambahData"><i
                    class="fa fa-plus"></i></button>
        </div>

    </ol>
</div>
@include('backend.sopir.timbangan.modal_tambah')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Timbangan</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="display" style="width: 100%">
                        <thead>
                            <tr class="text-center">
                                <th>#</th>
                                <th>Berat Sampah</th>
                                <th>Tanggal Timbang</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($timbangans as $timbangan)
                            <tr class="text-center">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $timbangan->berat_sampah. ' Kg' }}</td>
                                <td>{{ \Carbon\Carbon::parse($timbangan->created_at)->isoFormat('LLLL') }}</td>
                                <td>
                                    <button data-bs-toggle="modal" data-bs-target="#ubahData-{{ $timbangan->id }}"
                                        class="btn btn-primary shadow btn-xs sharp me-1"><i
                                            class="fas fa-pencil-alt"></i></button>
                                    <button type="button" data-bs-toggle="modal"
                                        data-bs-target="#hapusData-{{ $timbangan->id }}" class="btn-xs sharp me-1
                                            btn btn-danger"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>

                            {{-- modal ubah --}}
                            @include('backend.sopir.timbangan.modal_ubah')

                            {{-- modal hapus --}}
                            @include('backend.sopir.timbangan.modal_hapus')

                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr class="text-center">
                                <th>#</th>
                                <th>Berat Sampah</th>
                                <th>Tanggal Timbang</th>
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