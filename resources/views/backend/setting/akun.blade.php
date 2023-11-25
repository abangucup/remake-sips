@extends('backend.template.app')

@section('title', 'Akun Setting')

@section('content')

<div class="row">
	<div class="col-sm-12">
		<div class="card">
			<div class="card-header">
				<h5>Pengaturan Akun</h5>
			</div>
			<div class="card-body">
				<ul class="nav nav-tabs profile-tabs mb-3 border-bottom" id="myTab" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="profile-tab-1" data-bs-toggle="tab" href="akun/setting#tab-biodata"
							role="tab" aria-selected="true">Biodata
						</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" id="profile-tab-2" data-bs-toggle="tab" href="akun/setting#tab-akun" role="tab"
							aria-selected="true">Akun
						</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" id="profile-tab-3" data-bs-toggle="tab" href="akun/setting#tab-password"
							role="tab" aria-selected="true">Password
						</a>
					</li>
				</ul>
				<div class="tab-content">
					<div
						class="tab-pane {{ Request::is('akun/setting#tab-biodata') || Request::is('akun/setting') ? 'show active' : '' }}"
						id="tab-biodata" role="tabpanel" aria-labelledby="profile-tab-1">
						<div class="row">
							<div class="col-md-4 col-xxl-3">
								<div class="card border">
									<div class="card-header">
										<h5>Gambar Profile</h5>
									</div>
									<div class="card-body text-center">
										<img
											src="{{ $user->biodata->gambar ?? ($user->biodata->jenis_kelamin == 'p' ? asset('assets/images/female.svg') : asset('assets/images/male.svg')) }}"
											alt="user-image" class="img-radius img-fluid wid-100">
										<small class="d-block my-3 text-muted">Upload/Change Your Profile Image</small>
										<button class="btn btn-primary">
											Upload Gambar
										</button>
									</div>
								</div>
							</div>
							<div class="col-md-8 col-xxl-9">
								<div class="card border">
									<div class="card-header">
										<h5>Detail Biodata</h5>
									</div>
									<div class="card-body">
										<form action="{{ route('changeBiodata') }}" method="POST">
											@csrf
											<div class="row">
												<div class="col-sm-6">
													<div class="form-group">
														<label class="form-label">Nama Lengkap</label>
														<input type="text" class="form-control"
															value="{{ old('nama_lengkap', $user->biodata->nama_lengkap)}}"
															name="nama_lengkap" required />
													</div>
												</div>
												<div class="col-sm-6">
													<div class="form-group">
														<label class="form-label">Alamat</label>
														<input type="text" class="form-control"
															value="{{ old('alamat', $user->biodata->alamat ?? 'Kosong') }}"
															name="alamat" required />
													</div>
												</div>
												<div class="col-sm-6">
													<div class="form-group">
														<label class="form-label">Jenis Kelamin</label>
														<div class="form-check">
															<input class="form-check-input" type="radio" required name="jenis_kelamin"
																id="radio-1" value="L" {{ old('jenis_kelamin',
																$user->biodata->jenis_kelamin)
															===
															'l' ?
															'checked' : '' }}>
															<label class="form-check-label" for="radio-1">Laki-Laki
																(L)</label>
														</div>
														<div class="form-check">
															<input class="form-check-input" type="radio" required name="jenis_kelamin"
																id="radio-2" value="P" {{ old('jenis_kelamin',
																$user->biodata->jenis_kelamin)
															===
															'p' ?
															'checked' : ''
															}}>
															<label class="form-check-label" for="radio-2">Perempuan
																(P)</label>
														</div>
													</div>
												</div>
												<div class="col-sm-6">
													<div class="form-group">
														<label class="form-label">Telpon Aktif</label>
														<input type="text" class="form-control"
															value="{{ old('no_hp', $user->biodata->no_hp ?? 'Kosong') }}" name="no_hp"
															required />
													</div>
												</div>
												<div class="col-sm-6">
													<div class="form-group">
														<label class="form-label">Lokasi Tempat Tinggal</label>
														<select name="lokasi_id" class="default-select form-control" required>
															@if ($user->pelanggan->lokasi_id !== null)
															<option value="{{ $user->pelanggan->lokasi_id }}">{{
																$user->pelanggan->lokasi->nama_lokasi.' ( Desa
																'.$user->pelanggan->lokasi->desa->nama_desa.' )' }}</option>
															@endif

															<option value="">-- Pilih Lokasi --</option>
															@foreach ($lokasis as $lokasi)
															<option value="{{ $lokasi->id }}">{{ $lokasi->nama_lokasi . ' ( Desa
																'.$lokasi->desa->nama_desa.' )' }}</option>
															@endforeach
														</select>
													</div>
												</div>
												<div class="col-sm-6">
													<div class="form-group">
														<label class="form-label">Kategori Sampah Anda</label>
														<select name="tarif_id" class="default-select form-control" required>
															@if ($user->pelanggan->tarif_id !== null)
															<option value="{{ $user->pelanggan->tarif_id }}">{{
																$user->pelanggan->tarif->sumber_sampah . ' ( Rp
																'.number_format($user->pelanggan->tarif->biaya, 0, ',', '.').' )'
																}}</option>
															@endif

															<option value="">-- Pilih Kategori --</option>
															@foreach ($tarifs as $tarif)
															<option value="{{ $tarif->id }}">{{ $tarif->sumber_sampah . ' ( Rp
																'.number_format($tarif->biaya, 0, ',', '.').' )' }}</option>
															@endforeach
														</select>
													</div>
												</div>
												<button class="btn btn-primary" type="submit">
													Simpan Perubahan
												</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>

					@include('backend.setting.tab-user')

					@include('backend.setting.tab-password')

				</div>
			</div>
		</div>
	</div>
</div>

@endsection

@push('script')
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
	$(document).ready(function () {
        // Fungsi untuk memeriksa kesesuaian password
        function checkPasswordMatch() {
            var password = $("#newPassword").val();
            var confirmPassword = $("#reEnterPassword").val();
            var matchIcon = $("#passwordMatchIcon");

            // Periksa apakah password dan konfirmasi password sama
            if (password != confirmPassword) {
                matchIcon.html('<i class="fa fa-times text-danger"></i>');
            } else {
                matchIcon.html('<i class="fa fa-check text-success"></i>');
            }
        }

        // Event handler saat input berubah pada kolom "Re-enter New Password"
        $("#reEnterPassword").keyup(checkPasswordMatch);
    });
</script>
@endpush