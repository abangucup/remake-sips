{{-- Modal Edit --}}
<div class="modal fade" id="ubahData-{{ $pengelola->id }}" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form action="{{ route('pengelola.update', $pengelola->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title">Ubah Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Desa</label>
                            <select name="desa_id" class="default-select form-control" required>
                                <option value="{{ $pengelola->desa_id }}">{{ $pengelola->desa->nama_desa }}</option>
                                <option value="">-- Pilih Desa --</option>
                                @foreach ($desas as $desa)
                                <option value="{{ $desa->id }}">{{ $desa->nama_desa }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama_lengkap"
                                value="{{ $pengelola->user->biodata->nama_lengkap }}" required>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Alamat</label>
                            <input type="text" class="form-control" placeholder="Alamat" name="alamat"
                                value="{{ $pengelola->user->biodata->alamat }}" required>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">No. Hp</label>
                            <input type="text" class="form-control" placeholder="0821xxxxxx" name="no_hp"
                                value="{{ $pengelola->user->biodata->no_hp }}" required>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="default-select form-control" required>
                                <option value="{{ $pengelola->user->biodata->jenis_kelamin }}">{{
                                    $pengelola->user->biodata->jenis_kelamin == 'l' ? 'Laki Laki (L)' : 'Perempuan (P)'
                                    }}</option>
                                <option value="">-- Jenis Kelamin --</option>
                                <option value="l">Laki-Laki (L)</option>
                                <option value="p">Perempuan (P)</option>
                            </select>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Username</label>
                            <input type="text" class="form-control" placeholder="Username" name="username" value="{{ 
                                $pengelola->user->username }}" required>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" placeholder="Password" name="password">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Status</label>
                            <select name="status" class="default-select form-control" required>
                                <option value="{{ $pengelola->status }}">{{ Str::ucfirst($pengelola->status) }}</option>
                                <option value="">-- Ubah Status --</option>
                                <option value="active">Active</option>
                                <option value="disabled">Non Aktive / Disabled</option>
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