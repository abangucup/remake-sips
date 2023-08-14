@extends('auth.template.app')

@section('title', 'Register - Template')

@section('content')
<div class="col-md-6 d-flex justify-content-center">
    <div class="col-md-9">
        <form action="{{ route('register') }}" method="post">
            @csrf
            <div class="card-body">
                <div class="">
                    <h1 class="mb-3 f-w-700">Register</h1>
                    <p class="mb-4">Silahkan daftarkan akun anda</p>
                </div>
                <div class="text-start">
                    <div class="form-group">
                        <label for="username" class="form-label f-w-600">Username</label>
                        <div class="input-group">
                            <span class="input-group-text"><i data-feather="user"></i></span>
                            <input type="text" id="username" class="form-control" name="username"
                                value="{{ old('username') }}" placeholder="Masukan Username">
                        </div>
                        @error('username')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password" class="form-label f-w-600">Password</label>
                        <div class="input-group">
                            <span class="input-group-text"><i data-feather="lock"></i></span>
                            <input type="password" id="password" class="form-control" name="password"
                                placeholder="Masukan Password" value="{{ old('password') }}">
                            <span class="input-group-text" id="togglePassword">
                                <i data-feather="eye"></i>
                            </span>
                        </div>
                        @error('password')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group my-2">
                        <div class="float-end">
                            <a href="auth-signin-3.html#!" class="text-danger"><span>Forgot
                                    Password?</span></a>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary my-3 f-w-600">Login</button>
                <p>Belum punya akun? silahkan <a href="{{ route('register') }}"
                        class="f-w-600 text-decoration-underline">Daftar</a>
                </p>
                <p>or return to back <a href="{{ route('home') }}" class="f-w-600 text-bold">Home</a></p>


                <footer class="text-center mt-5 f-w-600">
                    <p>Copyright © 2023 P2PL - Dinas Kesehatan Kota Gorontalo</p>
                </footer>
            </div>
        </form>
    </div>
</div>
@endsection

@push('script')
<script>
    const passwordInput = document.getElementById('password');
    const togglePasswordButton = document.getElementById('togglePassword');
    
    togglePasswordButton.addEventListener('click', function() {
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            togglePasswordButton.innerHTML = '<i data-feather="eye-off"></i>';
        } else {
            passwordInput.type = 'password';
            togglePasswordButton.innerHTML = '<i data-feather="eye"></i>';
        }
        feather.replace();

    });
</script>
@endpush