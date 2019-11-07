<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        @if (Sentinel::check())
        <li class="nav-item nav-profile">
            <div class="nav-link">
                <div class="user-wrapper">
                    <div class="profile-image">
                        <img src="{{ asset('assets') }}/images/faces/face1.jpg" alt="profile image">
                    </div>
                <div class="text-wrapper">
                    <p class="profile-name">{{ Sentinel::getUser()->first_name }} {{ Sentinel::getUser()->last_name }}</p>
                    <div>
                    <small class="designation text-muted">{{ Sentinel::getUser()->email }}</small>
                    <span class="status-indicator online"></span>
                    </div>
                </div>
            </div>
        </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('home') }}">
                <i class="menu-icon mdi mdi-television"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        @endif
        @if(Sentinel::check())
            <li class="nav-item">
                <a class="nav-link" href="{{ route('book.index') }}">
                    <i class="menu-icon mdi mdi-book"></i>
                    <span class="menu-title">Buku</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('article.index') }}">
                    <i class="menu-icon mdi mdi-eye"></i>
                    <span class="menu-title">Artikel</span>
                </a>
            </li>
        @else
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                    <i class="menu-icon mdi mdi-restart"></i>
                <span class="menu-title">Login / Register</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}"> Login </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}"> Register </a>
                </li>
                </ul>
            </div>
            </li>
        @endif
    </ul>
    </nav>