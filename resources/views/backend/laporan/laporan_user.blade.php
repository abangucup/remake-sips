@extends('backend.template.app')

@section('title', 'Laporan User')

@section('content')
<div class="row page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active">
            <a href="javascript:void(0)">Laporan</a>
        </li>
        <li class="breadcrumb-item">
            <a href="#">User</a>
        </li>
        <div class="ms-auto text-end">
            <a href="{{ route('cetak.user') }}" class="btn btn-outline-danger btn-sm sharp"><i
                    class="fa fa-print me-2"></i>Cetak Laporan</a>
        </div>

    </ol>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Laporan Data User</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="display" style="width: 100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Username</th>
                                <th>Nama Lengkap</th>
                                <th>Alamat</th>
                                <th>Jenis Kelamin</th>
                                <th>No HP</th>
                                <th>Level</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->biodata->nama_lengkap }}</td>
                                <td>{{ $user->biodata->alamat }}</td>
                                <td>{{ Str::ucfirst($user->biodata->jenis_kelamin) }}</td>
                                <td>{{ $user->biodata->no_hp }}</td>
                                <td>{{ Str::ucfirst($user->role->level) }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Username</th>
                                <th>Nama Lengkap</th>
                                <th>Alamat</th>
                                <th>Jenis Kelamin</th>
                                <th>No HP</th>
                                <th>Level</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection