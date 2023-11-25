<div class="tab-pane {{ Request::is('akun/setting#tab-akun') ? 'show active' : '' }}" id="tab-akun" role="tabpanel"
    aria-labelledby="profile-tab-2">
    <div class="row">
        <div class="col-md-8 col-xxl-9">
            <div class="card border">
                <div class="card-header">
                    <h5>Detail Akun</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('changeAccount', $user->id) }}" method="POST">
                        @csrf
                        <div class="row">

                            {{-- KHUSUS PELANGGAN --}}
                            @if ($user->role->level === 'pengguna')
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="form-label">Nomor Register</label>
                                    <input type="text" class="form-control" value="{{ $user->pelanggan->no_register }}"
                                        disabled />
                                </div>
                            </div>
                            @endif
                            {{-- END KHUSUS PELANGGAN --}}

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="form-label">Username</label>
                                    <input type="text" class="form-control" name="username"
                                        value="{{ old('username', $user->username) }}" required
                                        placeholder="Username" />
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email"
                                        value="{{ old('email', $user->email ?? '-') }}" placeholder="Email" />
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="form-label">Level</label>
                                    <input type="text" class="form-control" value="{{ $user->role->name }}" disabled>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-warning">Ubah
                                    Akun</button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
        <div class="col-md-4 col-xxl-3">
            <div class="card border">
                <div class="card-header">
                    <h5>Hapus Akun</h5>
                </div>
                <div class="card-body">
                    <p>
                        Anda bisa menghapus akun anda jika anda merasa tidak ingin
                        menggunakannya
                        lagi
                    </p>
                    <button type="button" data-bs-toggle="modal" data-bs-target="#deleteAccount-{{ $user->id }}"
                        class="btn btn-outline-danger">Hapus Akun</button>
                </div>
            </div>
        </div>
        <div id="deleteAccount-{{ $user->id }}" class="modal fade" tabindex="-1" role="dialog"
            aria-labelledby="deleteAccount" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form action="{{ route('deleteAccount', $user->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLiveLabel">
                                Hapus Akun
                            </h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p class="fw-bold text-danger">Apakah anda yakin ingin menghapus akun
                                {{ $user->username }} ??!!!</p><br>
                            <p>Tekan "Ya" untuk hapus dan "Tidak" untuk membatalkan</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-warning" data-bs-dismiss="modal">
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
    </div>
</div>