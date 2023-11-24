{{-- Modal Edit --}}
<div class="modal fade" id="ubahData-{{ $sampah->id }}" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form action="{{ route('sampah.update', $sampah->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title">Ubah Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="mb-3 col-md-12">
                            <label class="form-label">Kategori Sampah</label>
                            <select name="kategori_id" class="default-select form-control" required>
                                <option value="{{ $sampah->kategori_id }}">{{
                                    $sampah->kategori->kategori_sampah }}
                                </option>
                                <option value="">-- Pilih Kategori --</option>
                                @foreach ($kategoris as $kategori)
                                <option value="{{ $kategori->id }}">{{ $kategori->kategori_sampah }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3 col-md-12">
                            <label class="form-label">Nama sampah</label>
                            <input type="text" class="form-control" placeholder="Nama sampah" name="nama_sampah"
                                value="{{ $sampah->nama_sampah }}" required>
                        </div>
                        <div class="mb-3 col-md-12">
                            <label class="form-label">Jumlah Sampah</label>
                            <input type="text" id="berat" class="form-control" placeholder="1000 kG"
                                name="jumlah_sampah" value="{{ $sampah->jumlah_sampah }}" required>
                        </div>
                        <div class="mb-3 col-md-12">
                            <label class="form-label">Tanggal Lapor</label>
                            <input type="date" class="form-control" value="{{ $sampah->tanggal_lapor }}"
                                placeholder="Tanggal" name="tanggal_lapor">
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