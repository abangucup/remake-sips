{{-- Modal Tambah Data --}}
<div class="modal fade" id="tambahData" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form action="{{ route('sampah.store') }}" method="post">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="mb-3 col-md-12">
                            <label class="form-label">Kategori</label>
                            <select name="kategori_id" class="default-select form-control" required>
                                @foreach ($kategoris as $kategori)
                                <option value="{{ $kategori->id }}">{{ $kategori->kategori_sampah }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3 col-md-12">
                            <label class="form-label">Nama Sampah</label>
                            <input type="text" class="form-control" placeholder="Nama Sampah" name="nama_sampah"
                                required>
                        </div>
                        <div class="mb-3 col-md-12">
                            <label class="form-label">Jumlah Sampah</label>
                            <input type="text" id="berat" class="form-control" placeholder="600 KG" name="jumlah_sampah"
                                required>
                        </div>
                        <div class="mb-3 col-md-12">
                            <label class="form-label">Tanggal Lapor</label>
                            <input type="date" class="form-control" placeholder="Tanggal" name="tanggal_lapor">
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
        </div>
    </div>
</div>