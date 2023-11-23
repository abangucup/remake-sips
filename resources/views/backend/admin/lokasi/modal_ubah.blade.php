{{-- Modal Edit --}}
<div class="modal fade" id="ubahData-{{ $lokasi->id }}" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('lokasi.update', $lokasi->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title">Ubah Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="mb-3 col-md-12">
                            <label class="form-label">Desa</label>
                            <select name="desa_id" class="default-select form-control" required>
                                <option value="{{ $lokasi->desa_id }}">{{ $lokasi->desa->nama_desa }}</option>
                                <option value="">-- Pilih Desa --</option>
                                @foreach ($desas as $desa)
                                <option value="{{ $desa->id }}">{{ $desa->nama_desa }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3 col-md-12">
                            <label class="form-label">Nama Lokasi</label>
                            <input type="text" class="form-control" placeholder="Jl Trans Perempatan Toko"
                                name="nama_lokasi" value="{{ $lokasi->nama_lokasi }}" required>
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