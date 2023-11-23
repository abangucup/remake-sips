{{-- Modal Edit --}}
<div class="modal fade" id="ubahData-{{ $pelanggan->id }}" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form action="{{ route('pelanggan.update', $pelanggan->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title">Ubah Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Lokasi Rumah</label>
                            <select name="lokasi_id" class="default-select form-control" required>
                                <option value="{{ $pelanggan->lokasi_id }}">{{ $pelanggan->lokasi->nama_lokasi }}
                                </option>
                                <option value="">-- Pilih Lokasi --</option>
                                @foreach ($lokasis as $lokasi)
                                <option value="{{ $lokasi->id }}">{{ $lokasi->nama_lokasi }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama_lengkap"
                                value="{{ $pelanggan->user->biodata->nama_lengkap }}" required>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Alamat</label>
                            <input type="text" class="form-control" placeholder="Alamat" name="alamat"
                                value="{{ $pelanggan->user->biodata->alamat }}" required>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">No. Hp</label>
                            <input type="text" class="form-control" placeholder="0821xxxxxx" name="no_hp"
                                value="{{ $pelanggan->user->biodata->no_hp }}" required>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="default-select form-control" required>
                                <option value="{{ $pelanggan->user->biodata->jenis_kelamin }}">{{
                                    $pelanggan->user->biodata->jenis_kelamin == 'l' ? 'Laki Laki (L)' : 'Perempuan (P)'
                                    }}</option>
                                <option value="">-- Jenis Kelamin --</option>
                                <option value="l">Laki-Laki (L)</option>
                                <option value="p">Perempuan (P)</option>
                            </select>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Username</label>
                            <input type="text" class="form-control" placeholder="Username" name="username" value="{{ 
                                $pelanggan->user->username }}" required>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" placeholder="Password" name="password">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Sumber Sampah</label>
                            <select name="tarif_id" class="default-select form-control" required>
                                <option value="{{ $pelanggan->tarif_id }}">{{ $pelanggan->tarif->sumber_sampah. ' - Rp
                                    '.number_format($pelanggan->tarif->biaya, 0, ',', '.') }}</option>
                                <option value="">-- Pilih Sumber --</option>
                                @foreach ($tarifs as $tarif)
                                <option value="{{ $tarif->id }}">{{ $tarif->sumber_sampah. ' - Rp
                                    '.number_format($tarif->biaya, 0, ',', '.') }}</option>
                                @endforeach
                            </select>
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