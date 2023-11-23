{{-- Modal Tambah Data --}}
<div class="modal fade" id="tambahData" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form action="{{ route('kenderaan.store') }}" method="post">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="mb-3 col-md-12">
                            <label class="form-label">Jenis Kenderaan</label>
                            <select name="jenis_id" class="default-select form-control" required>
                                @foreach ($jenisKenderaan as $jenis)
                                <option value="{{ $jenis->id }}">{{ $jenis->jenis_kenderaan }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3 col-md-12">
                            <label class="form-label">Nama Kenderaan</label>
                            <input type="text" class="form-control" placeholder="Nama Kenderaan" name="nama_kenderaan"
                                required>
                        </div>
                        <div class="mb-3 col-md-12">
                            <label class="form-label">Nomor Polisi</label>
                            <input type="text" class="form-control" placeholder="Nomor Polisi" name="nomor_polisi"
                                required>
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