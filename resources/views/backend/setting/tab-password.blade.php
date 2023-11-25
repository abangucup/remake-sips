<div class="tab-pane {{ Request::is('akun/setting#tab-password') ? 'show active' : '' }}" id="tab-password"
    role="tabpanel" aria-labelledby="profile-tab-3">
    <div class="row">
        <div class="col-md-12 col-xxl-12">
            <div class="card border">
                <div class="card-header">
                    <h5>Ubah Password</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('changePassword', $user->id) }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="form-label">Password Saat Ini</label>
                                    <input type="password" class="form-control" name="password" required
                                        placeholder="Password Saat Ini" />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label">Password Baru</label>
                                    <input type="password" class="form-control" name="newPassword" required
                                        placeholder="Password Baru" id="newPassword" />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label">Konfirmasi Password Baru</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="passwordMatchIcon"></span>
                                        <input type="password" class="form-control" name="samePassword" required
                                            placeholder="input kembali Password Baru" id="reEnterPassword" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <button class="btn btn-warning" type="submit">
                                    Ubah Password
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>