@extends('backend.template.app')

@section('title', 'Pelanggan - Dashboard')

@section('content')
<form action="{{ route('pelanggan.store') }}" method="post">
    @csrf
    <div class="modal-header">
        <h5 class="modal-title">Tambah Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
    </div>
    <div class="modal-body">
        <div class="row">
            <div class="mb-3 col-md-6">
                <label class="form-label">Lokasi Rumah</label>
                <select name="lokasi_id" class="default-select form-control" required>
                    {{-- @foreach ($lokasis as $lokasi)
                    <option value="{{ $lokasi->id }}">{{ $lokasi->nama_lokasi }}</option>
                    @endforeach --}}
                </select>
            </div>
            <div class="mb-3 col-md-6">
                <label class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama_lengkap" required>
            </div>
            <div class="mb-3 col-md-6">
                <label class="form-label">Alamat</label>
                <input type="text" class="form-control" placeholder="Alamat" name="alamat" required>
            </div>
            <div class="mb-3 col-md-6">
                <label class="form-label">No. Hp</label>
                <input type="text" class="form-control" placeholder="0821xxxxxx" name="no_hp" required>
            </div>
            <div class="mb-3 col-md-6">
                <label class="form-label">Jenis Kelamin</label>
                <select name="jenis_kelamin" class="default-select form-control" required>
                    <option value="l">Laki-Laki (L)</option>
                    <option value="p">Perempuan (P)</option>
                </select>
            </div>
            <div class="mb-3 col-md-6">
                <label class="form-label">Username</label>
                <input type="text" class="form-control" placeholder="Username" name="username" required>
            </div>
            <div class="mb-3 col-md-6">
                <label class="form-label">Password</label>
                <input type="text" class="form-control" placeholder="Password" name="password" required>
            </div>
            <div class="mb-3 col-md-6">
                <label class="form-label">Sumber Sampah</label>
                <select name="tarif_id" class="default-select form-control" required>
                    {{-- @foreach ($tarifs as $tarif)
                    <option value="{{ $tarif->id }}">{{ $tarif->sumber_sampah. ' - Rp
                        '.number_format($tarif->biaya, 0, ',', '.') }}</option>
                    @endforeach --}}
                </select>
            </div>

        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">
            Batal
        </button>
        <button type="submit" class="btn btn-primary">
            Tambah
        </button>
    </div>
</form>

@endsection