@extends('admin')

@section('admin')
<div id="app">
    <div class="main-wrapper">
        <div class="navbar-bg" style="background-color: blue"></div>
        <nav class="navbar navbar-expand-lg main-navbar">
            <form class="form-inline mr-auto">
                <ul class="navbar-nav mr-3">
                    <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i
                                class="fas fa-bars"></i></a></li>
                    <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i
                                class="fas fa-search"></i></a></li>
                </ul>
            </form>
            <ul class="navbar-nav navbar-right">
                <li class="dropdown"><a href="#" data-toggle="dropdown"
                        class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                        <img alt="image" src="../../../assets/admin/img/avatar/avatar-1.png"
                            class="rounded-circle mr-1">
                        <div class="d-sm-none d-lg-inline-block">Hi, {{ Auth::user()->namalengkap }}</div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="{{ route('logout') }}" class="dropdown-item has-icon text-danger">
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
        <div class="main-sidebar">
            <aside id="sidebar-wrapper">
                <div class="sidebar-brand">
                    <a>SMK WIKRAMA BOGOR</a>
                </div>
                <ul class="sidebar-menu">
                    <li class="nav-item dropdown">
                        <a href="/student"><i class="fas fa-home"></i><span>Dashboard</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="/pembayaran"><i class="fas fa-money-bill"></i><span>Pembayaran</span></a>
                    </li>
                </ul>
            </aside>
        </div>

        <div class="main-content">
            <section class="content">
                <div class="card" style="">
                    <div class="card-body text-center">
                      <h3 class="card-title fw-bold">Selamat Datang di Dashboard Siswa</h3>
                      <h5>{{ Auth::user()->namalengkap }}</h5>
                    </div>
                  </div>
                  @yield('pembayaran')
            </section>
        </div>
        </section>
    </div>
    <footer class="main-footer">
        <div class="footer-left">
            Copyright &copy; 2022, <span><a>SMK Wikrama Bogor</a></span>
        </div>
    </footer>
</div>
</div>
@endsection