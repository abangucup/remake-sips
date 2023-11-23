{{-- Modal Edit --}}
<div class="modal fade" id="ubahData-{{ $kenderaan->id }}" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form action="{{ route('kenderaan.update', $kenderaan->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title">Ubah Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="mb-3 col-md-12">
                            <label class="form-label">Kode Kenderaan</label>
                            <input type="text" class="form-control" disabled value="{{ $kenderaan->kode_kenderaan }}">
                        </div>
                        <div class="mb-3 col-md-12">
                            <label class="form-label">Jenis</label>
                            <select name="jenis_id" class="default-select form-control" required>
                                <option value="{{ $kenderaan->jenis_id }}">{{ $kenderaan->jenis->jenis_kenderaan }}
                                </option>
                                <option value="">-- Pilih jenis --</option>
                                @foreach ($jenisKenderaan as $jenis)
                                <option value="{{ $jenis->id }}">{{ $jenis->jenis_kenderaan }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3 col-md-12">
                            <label class="form-label">Nama Kenderaan</label>
                            <input type="text" class="form-control" placeholder="Nama Kenderaan" name="nama_kenderaan"
                                value="{{ $kenderaan->nama_kenderaan }}" required>
                        </div>
                        <div class="mb-3 col-md-12">
                            <label class="form-label">Nomor Polisi</label>
                            <input type="text" class="form-control" placeholder="Nomor Polisi" name="nomor_polisi"
                                value="{{ $kenderaan->nomor_polisi }}" required>
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