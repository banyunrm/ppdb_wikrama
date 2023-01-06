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
                            <h5>Selamat Datang di Dashboard</h5>
                        </div>
                    </div>
                </section>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">No. Registrasi</th>
                            <th scope="col">Bukti Pembayaran</th>
                            <th scope="col">Detail Pendaftaran</th>
                            <th scope="col">Pilih</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($transaksi as $a)
                            <tr>
                                <th scope="row">1</th>
                                <td>{{ $a->user->id }}</td>
                                <td>
                                    <button class="btn btn-light">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#exampleModal">
                                            Lihat
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-xl">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <img src="{{ url('app/storage/app/'.$a->bukti) }}" alt="">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </button>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#exampleModel">
                                        Detail
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModel" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-xl">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <ul>
                                                        <li>
                                                            <p> Nama : {{ $a->user->namalengkap }}</p>
                                                        </li>
                                                        <li>
                                                            <p> Nama Bank : {{ $a->nama_bank }}</p>
                                                        </li>
                                                        <li>
                                                            <p> Pemilik Rekening : {{ $a->pemilik_rekening }}</p>
                                                        </li>
                                                        <li>
                                                            <p> Nominal : {{ $a->nominal }}</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    @if($a->status == 1)
                                    <a class="btn btn-primary" href="{{ route('transaksi.update',$a->id ) }}">Terima</a>
                                    <a class="btn btn-danger" href="{{ route('transaksi.reject',$a->id) }}">Tolak</a>
                                    @elseif($a->status == 0)
                                    <p>Sudah di Verifkasi</p>
                                    @else
                                    <p>Pembayaran di Tolak</p>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
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
