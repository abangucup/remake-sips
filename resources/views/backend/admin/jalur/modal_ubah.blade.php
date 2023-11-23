{{-- Modal Edit --}}
<div class="modal fade" id="ubahData-{{ $jalur->id }}" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form action="{{ route('jalur.update', $jalur->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title">Ubah Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="mb-3 col-md-12">
                            <label class="form-label">Kenderaan</label>
                            <select name="kenderaan_id" class="default-select form-control" required>
                                <option value="{{ $jalur->kenderaan->id }}">{{ $jalur->kenderaan->nama_kenderaan. ' -
                                    '.$jalur->kenderaan->nomor_polisi }}</option>
                                @foreach ($kenderaans as $kenderaan)
                                <option value="{{ $kenderaan->id }}">{{ $kenderaan->nama_kenderaan. ' -
                                    '.$kenderaan->nomor_polisi }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3 col-md-12">
                            <label class="form-label">Lokasi</label>
                            <select name="lokasi_id" class="default-select form-control" required>
                                <option value="{{ $jalur->lokasi->id }}">{{ $jalur->lokasi->nama_lokasi }}</option>
                                @foreach ($lokasis as $lokasi)
                                <option value="{{ $lokasi->id }}">{{ $lokasi->nama_lokasi }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3 col-md-12">
                            <label class="form-label">Hari</label>
                            <input type="text" name="hari" class="form-control" placeholder="Hari Pelayanan"
                                value="{{ $jalur->hari }}" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">
                        Batal
                    </button>
                    <button type="submit" class="btn btn-warning">
                        Ubah
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>