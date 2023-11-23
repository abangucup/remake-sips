@extends('backend.template.app')

@section('title', 'Tarif')

@section('content')
<div class="row page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active">
            <a href="javascript:void(0)">Master Data</a>
        </li>
        <li class="breadcrumb-item">
            <a href="#">Tarif</a>
        </li>
        <div class="ms-auto text-end">
            <button class="btn btn-primary btn-sm sharp" data-bs-toggle="modal" data-bs-target="#tambahData"><i
                    class="fa fa-plus"></i></button>
        </div>

    </ol>
</div>
@include('backend.admin.tarif.modal_tambah')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Data Tarif</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="display" style="width: 100%">
                        <thead>
                            <tr class="text-center">
                                <th>#</th>
                                <th>Sumber Sampah</th>
                                <th>Biaya</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tarifs as $tarif)
                            <tr class="text-center">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $tarif->sumber_sampah }}</td>
                                <td>{{ 'Rp '.number_format($tarif->biaya, 0, ',', '.') }}</td>
                                <td>
                                    <button data-bs-toggle="modal" data-bs-target="#ubahData-{{ $tarif->id }}"
                                        class="btn btn-primary shadow btn-xs sharp me-1"><i
                                            class="fas fa-pencil-alt"></i></button>
                                    <button type="button" data-bs-toggle="modal"
                                        data-bs-target="#hapusData-{{ $tarif->id }}" class="btn-xs sharp me-1
                                            btn btn-danger"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>

                            {{-- modal ubah --}}
                            @include('backend.admin.tarif.modal_ubah')

                            {{-- modal hapus --}}
                            @include('backend.admin.tarif.modal_hapus')

                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr class="text-center">
                                <th>#</th>
                                <th>Sumber Sampah</th>
                                <th>Biaya</th>
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
    // INPUT HARGA BERUPA ANGKA
    document.addEventListener('input', function (e) {
        if (e.target && e.target.id === 'harga') {
            const input = e.target;
            const value = input.value.replace(/[^0-9]/g, ''); // Hanya menerima digit
            input.value = formatCurrency(value);
        }
    });

    // MATA UANG
    function formatCurrency(value) {
        if (value.length === 0) return '';
        
        const number = parseInt(value);
        const formatted = new Intl.NumberFormat('id-ID', {
            style: 'currency',
            currency: 'IDR',
            minimumFractionDigits: 0,
        }).format(number);

        return formatted.replace('IDR', '');

    }
</script>
@endpush