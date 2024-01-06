{{-- Modal Hapus --}}
<div id="ubahData-{{ $pembayaran->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="hapusData"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('pembayaran.update', $pembayaran->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLiveLabel">
                        Bayar Tagihan
                    </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="fw-bold text-danger">Biaya tagihan senilai <strong>{{ $pembayaran->pelanggan->tarif->biaya
                            }}</strong>
                    <p>Tekan "Ya" untuk bayar dan "Tidak" untuk membatalkan</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">
                        Tidak
                    </button>
                    <button type="submit" class="btn btn-success">
                        Ya
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>