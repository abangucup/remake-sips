<div class="header">
    <div class="header-content">
        <nav class="navbar navbar-expand">
            <div class="collapse navbar-collapse justify-content-between">
                <div class="header-left">
                </div>

                <ul class="navbar-nav header-right">
                    <li class="nav-item dropdown header-profile">
                        <a class="nav-link" href="index.html#" role="button" data-bs-toggle="dropdown">
                            <div class="header-info">
                                <span>Hello, <strong>{{ $user->biodata->nama_lengkap }}</strong></span>
                            </div>
                            <img src="images/profile/pic1.jpg" width="20" alt="" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="{{ route('akun.setting') }}" class="dropdown-item ai-icon">
                                <i class="text-primary fa fa-user-cog"></i>
                                <span class="ms-2">Profile </span>
                            </a>
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button class="dropdown-item ai-icon" type="submit">
                                    <i class="text-danger fa fa-sign-out-alt"></i>
                                    <span class="ms-2">Logout </span>
                                </button>
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>