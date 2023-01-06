@extends('admin')

@section('admin')
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg" style="background-color: blue"></div>
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
                            <div class="d-sm-none d-lg-inline-block">Hi, Admin</div>
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
                            <a href="/admin"><i class="fas fa-home"></i><span>Dashboard</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="/transaksi"><i class="fas fa-money-bill"></i><span>Transaksi</span></a>
                        </li>
                    </ul>
                </aside>
            </div>

            <div class="main-content">
                <section class="content">
                    <div class="card" style="">
                        <div class="card-body text-center">
                            <h3 class="card-title fw-bold">Hello! Banyuu</h3>
                            <h5>Selamat Datang di Dashboard Siswa</h5>
                        </div>
                    </div>
                </section>
                <div class="d-flex">
                    <div class="card col-md-4 mx-2" style="">
                        <div class="card-body text-center">
                            <h3 class="card-title fw-bold">Siswa</h3>
                            <h5>5</h5>
                        </div>
                    </div>
                    <div class="card col-md-4 mx-2" style="">
                        <div class="card-body text-center">
                            <h3 class="card-title fw-bold">Siswa</h3>
                            <h5>5</h5>
                        </div>
                    </div>
                    <div class="card col-md-4 mx-2" style="">
                        <div class="card-body text-center">
                            <h3 class="card-title fw-bold">Siswa</h3>
                            <h5>5</h5>
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
