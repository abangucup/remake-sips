@extends('auth.template.app')

@section('title', 'Login')

@section('content')
<div class="row h-100">
    <div class="col-lg-6 h-100">
        <div class="img-bx">
            <img src="{{ asset('assets/images/login.jpg') }}" alt="" class="img-fluid">
        </div>
    </div>
    <div class="col-lg-6">
        <div class="auth-form">
            <h4 class="main-title">Sign in</h4>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="username" class="form-label f-w-600">Username</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa fa-user-shield"></i></span>
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
                        <span class="input-group-text"><i class="fa fa-lock"></i></span>
                        <input type="password" id="password" class="form-control" name="password"
                            placeholder="Masukan Password" value="{{ old('password') }}">
                        <span class="input-group-text" id="togglePassword">
                            <i class="fa fa-eye-slash"></i>
                        </span>
                    </div>
                    @error('password')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block rounded">Sign
                        In</button>
                </div>
            </form>
            <div class="new-account mt-3">
                <p>Belum punya akun? <a class="text-primary" href="{{ route('register') }}">Regiter</a></p>
            </div>
        </div>
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
            togglePasswordButton.innerHTML = '<i class="fa fa-eye"></i>';
        } else {
            passwordInput.type = 'password';
            togglePasswordButton.innerHTML = '<i class="fa fa-eye-slash"></i>';
        }
        feather.replace();

    });
</script>
@endpush