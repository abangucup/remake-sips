{{-- Modal Hapus --}}
<div id="hapusData-{{ $pengelola->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="hapusData"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('pengelola.destroy', $pengelola->id) }}" method="post">
                @csrf
                @method('DELETE')
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLiveLabel">
                        Hapus Data
                    </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="fw-bold text-danger">Apakah anda yakin ingin menghapus data
                        {{ $pengelola->user->biodata->nama_lengkap }} ??!!!</p><br>
                    <p>Tekan "Ya" untuk hapus dan "Tidak" untuk membatalkan</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning light" data-bs-dismiss="modal">
                        Tidak
                    </button>
                    <button type="submit" class="btn btn-danger">
                        Ya
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>