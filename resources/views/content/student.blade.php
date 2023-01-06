@extends('dashboard.student')

@section('admin')
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a>
                        </li>
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
                            <a href="/logout" class="dropdown-item has-icon text-danger">
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
                </section>
                <div class="d-flex justify-items-between">
                    <div class="col-md-4">
                        <div class="card-body bg-light m-3 shadow">
                            <h5 class="card-title fw-bold text-center">NISN :</h5>
                            <h6 class="text-center">{{ Auth::user()->nisn }}</h6>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-body bg-light m-3 shadow">
                            <h5 class="card-title fw-bold text-center">Jenis Kelamin :</h5>
                            <h6 class="text-center">{{ Auth::user()->jk }}</h6>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-body bg-light m-3 shadow">
                            <h5 class="card-title fw-bold text-center">Nama Lengkap :</h5>
                            <h6 class="text-center">{{ Auth::user()->namalengkap }}</h6>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-items-between">
                    <div class="col-md-4">
                        <div class="card-body bg-light m-3 shadow">
                            <h5 class="card-title fw-bold text-center">Email :</h5>
                            <h6 class="text-center">{{ Auth::user()->email }}</h6>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-body bg-light m-3 shadow">
                            <h5 class="card-title fw-bold text-center">No. hp :</h5>
                            <h6 class="text-center">{{ Auth::user()->no_hp }}</h6>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-body bg-light m-3 shadow">
                            <h5 class="card-title fw-bold text-center">No. hp Ayah :</h5>
                            <h6 class="text-center">{{ Auth::user()->no_hp_ayah }}</h6>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="col-md-4">
                        <div class="card-body bg-light m-3 shadow">
                            <h5 class="card-title fw-bold text-center">No. hp Ibu :</h5>
                            <h6 class="text-center">{{ Auth::user()->no_hp_ibu }}</h6>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-body bg-light m-3 shadow">
                            <h5 class="card-title fw-bold text-center">Referensi :</h5>
                            <h6 class="text-center">{{ Auth::user()->referensi }}</h6>
                        </div>
                    </div>
                </div>
            </div>
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
