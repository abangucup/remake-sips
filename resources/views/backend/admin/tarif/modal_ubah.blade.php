{{-- Modal Edit --}}
<div class="modal fade" id="ubahData-{{ $desa->id }}" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('desa.update', $desa->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title">Ubah Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="mb-3 col-md-12">
                            <label class="form-label">Nama Desa</label>
                            <input type="text" class="form-control" placeholder="Desa Kenangan" name="nama_desa"
                                value="{{ $desa->nama_desa }}" required>
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