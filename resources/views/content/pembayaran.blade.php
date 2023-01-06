@extends('dashboard.student')

@section('pembayaran')

    @if($siswa==null)
<form action="{{ route('pembayaran.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card">
        <div class="card-header">
            <h3>Form Pembayaran</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <label for="">Nama bank :</label>
                    <select name="nama_bank" id="" class="form-select">
                        <option value="Nama Bank" hidden>Nama Bank</option>
                        <option value="BCA">BCA</option>
                        <option value="Mandiri">Mandiri</option>
                        <option value="BRI">BRI</option>
                        <option value="Permata">Permata</option>
                        <option value="BNI">BNI</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <label for="">Pemilik Rekening :</label>
                    <input type="text" placeholder="Pemilik Rekening" class="form-control" name="pemilik_rekening">
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <label for="">Nominal :</label>
                    <input type="text" placeholder="Nominal" class="form-control" name="nominal">
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <label for="">Bukti Pembayaran :</label>
                    <input type="file" placeholder="Nominal" class="form-control" name="bukti">
                </div>
            </div>
        </div>
        <input type="submit" class="btn btn-primary w-25 m-3">
    </div>
</form>
@elseif($siswa->status == 1)
<p>Pembayaran Sukses</p>
@elseif($siswa->status == 0)
<p>Pembayaran Diterima</p>
@else
<p>Pembayaran Ditolak</p>
@endif
@endsection
