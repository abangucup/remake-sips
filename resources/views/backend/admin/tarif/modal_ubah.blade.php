{{-- Modal Edit --}}
<div class="modal fade" id="ubahData-{{ $tarif->id }}" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('tarif.update', $tarif->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title">Ubah Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="mb-3 col-md-12">
                            <label class="form-label">Sumber Sampah</label>
                            <input type="text" class="form-control" placeholder="Pertokoan" name="sumber_sampah"
                                value="{{ $tarif->sumber_sampah }}" required>
                        </div>
                        <div class="mb-3 col-md-12">
                            <label class="form-label">Biaya</label>
                            <input type="text" id="harga" class="form-control" placeholder="Biaya" name="biaya"
                                value="{{ 'Rp '.number_format($tarif->biaya, 0, ',', '.') }}" required>
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