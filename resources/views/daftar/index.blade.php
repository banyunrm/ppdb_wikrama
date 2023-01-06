@extends('daftar')

@section('daftar')
    <div class="container d-flex align-items-center justify-content-center" style="margin-top: 50px;margin-bottom:50px">
        <div class="card w-50 shadow" style="opacity: 90%">
            <div class="card-header">
                <h3 class="text-center">Form Pendaftaran PPDB</h3>
                <h4 class="text-center">SMK Wikrama Bogor TP. 2023-2024</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('daftar.store') }}" method="POST" class="form-group">
                    @csrf
                    @if ($errors->any())
                        <span class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <p>{{ $error }}</p>
                                @endforeach
                            </ul>
                        </span>
                    @endif
                    <div class="row">
                        <div class="col-md-6 mt-2">
                            <label class="form-label" for="">NISN</label>
                            <input class="form-control" type="text" placeholder="NISN" name="nisn">
                        </div>
                        <div class="col-md-6 mt-2">
                            <label class="form-label" for="">Jenis Kelamin</label>
                            <select class="form-select" name="jk" id="">
                                <option value="Jenis Kelamin" hidden>Jenis Kelamin</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="col-md-12 mt-3">
                            <label class="form-label" for="">Nama Lengkap</label>
                            <input class="form-control" type="text" placeholder="Nama Lengkap" name="namalengkap">
                        </div>
                        <div class="col-md-12 mt-3">
                            <label class="form-label" for="">Asal Sekolah</label>
                            <select name="asalsekolah" id="" class="search-daftarsmp form-select">
                                <option value="Nama Sekolah" hidden>Nama Sekolah</option>
                                @foreach ($daftarsmp as $item)
                                    <option value="{{$item['nama_sekolah']}}">{{$item['nama_sekolah']}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-12 mt-3">
                            <label class="form-label" for="">Email</label>
                            <input class="form-control" type="text" placeholder="Email" name="email">
                        </div>
                        <div class="col-md-12 mt-3">
                            <label class="form-label" for="">No.hp</label>
                            <input class="form-control" type="text" placeholder="08_______" name="no_hp">
                        </div>
                        <div class="col-md-6 mt-2">
                            <label class="form-label" for="">No.hp Ayah</label>
                            <input class="form-control" type="text" placeholder="08_______" name="no_hp_ayah">
                        </div>
                        <div class="col-md-6 mt-2">
                            <label class="form-label" for="">No.hp Ibu</label>
                            <input class="form-control" type="text" placeholder="08_______" name="no_hp_ibu">
                        </div>
                        <div class="col-md-12 mt-2">
                            <label class="form-label" for="">Referensi</label>
                            <select class="form-select" type="text" placeholder="Pilih Referensi" name="referensi">
                                <option value="Pilih" hidden>Pilih</option>
                                <option value="Guru/Staff/Laboran/Pegawai Wikrama">Guru/Staff/Laboran/Pegawai Wikrama</option>
                                <option value="Siswa SMK Wikrama">Siswa SMK Wikrama</option>
                                <option value="Alumni SMK Wikrama">Alumni SMK Wikrama</option>
                                <option value="Guru SMP">Guru SMP</option>
                                <option value="Calon Siswa SMK Wikrama">Calon Siswa SMK Wikrama</option>
                                <option value="Sosial Media">Sosial Media</option>
                                <option value="Referensi Langsung">Referensi Langsung</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-danger w-50 mx-auto mt-3">Daftar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
