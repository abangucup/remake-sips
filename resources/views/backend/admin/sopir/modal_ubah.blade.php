{{-- Modal Edit --}}
<div class="modal fade" id="ubahData-{{ $sopir->id }}" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form action="{{ route('sopir.update', $sopir->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title">Ubah Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Kenderaan</label>
                            <select name="kenderaan_id" class="default-select form-control" required>
                                <option value="{{ $sopir->kenderaan_id }}">{{ $sopir->kenderaan->nama_kenderaan.' (
                                    '.$sopir->kenderaan->nomor_polisi.' )' }}</option>
                                <option value="">-- Pilih Kenderaan --</option>
                                @foreach ($kenderaans as $kenderaan)
                                <option value="{{ $kenderaan->id }}">{{ $kenderaan->nama_kenderaan.' (
                                    '.$kenderaan->nomor_polisi.' )' }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama_lengkap"
                                value="{{ $sopir->user->biodata->nama_lengkap }}" required>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Alamat</label>
                            <input type="text" class="form-control" placeholder="Alamat" name="alamat"
                                value="{{ $sopir->user->biodata->alamat }}" required>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">No. Hp</label>
                            <input type="text" class="form-control" placeholder="0821xxxxxx" name="no_hp"
                                value="{{ $sopir->user->biodata->no_hp }}" required>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="default-select form-control" required>
                                <option value="{{ $sopir->user->biodata->jenis_kelamin }}">{{
                                    $sopir->user->biodata->jenis_kelamin == 'l' ? 'Laki Laki (L)' : 'Perempuan (P)'
                                    }}</option>
                                <option value="">-- Jenis Kelamin --</option>
                                <option value="l">Laki-Laki (L)</option>
                                <option value="p">Perempuan (P)</option>
                            </select>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Username</label>
                            <input type="text" class="form-control" placeholder="Username" name="username" value="{{ 
                                $sopir->user->username }}" required>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" placeholder="Password" name="password">
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