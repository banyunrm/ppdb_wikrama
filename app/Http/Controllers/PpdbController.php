<?php

namespace App\Http\Controllers;

use App\Models\Ppdb;
use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;


class PpdbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('landing.index');
    }

    public function login()
    {
        return view('login.index');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function daftar()
    {
        $daftarsmp=Http::get('https://akmalweb.my.id/api/daftar_smp.php')->json();
        // dd($daftarsmp);
        return view('daftar.index', compact('daftarsmp'));
    }

    public function dashboardStudent()
    {
        return view('dashboard.student');
    }
   
    public function dashboardAdmin()
    {
        return view('dashboard.admin');
    }

    public function contentStudent()
    {
        return view('content.student');
    }

    public function contentPembayaran()
    {
        $siswa = Ppdb::where('user_id', Auth::user()->id)->first();
        return view('content.pembayaran', compact('siswa'));
    }

    public function print()
    {
        return view('daftar.pdf');
    }

    public function transaksi()
    {
        $transaksi = Ppdb::all();
        return view('bukti-pembayaran.transaksi', compact('transaksi'));
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function daftarAkun(Request $request)
    {
        //

        $validated = $request->validate([
            'nisn' => 'required|min:7',
            'jk' => 'required',
            'namalengkap' => 'required|min:4',
            'asalsekolah' => 'required',
            'email' => 'required|unique:users,email',
            'no_hp' => 'required|min:9',
            'no_hp_ayah' => 'required|min:9',
            'no_hp_ibu' => 'required|min:9',
            'referensi' => 'required',
        ], [
            'email.unique' => 'email telah di pakai'
        ]);
        
        User::create([
            'role' => 'user',
            'nisn' => $request->nisn,
            'jk' => $request->jk,
            'namalengkap' => $request->namalengkap,
            'asalsekolah' => $request->asalsekolah,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'no_hp_ayah' => $request->no_hp_ayah,
            'no_hp_ibu' => $request->no_hp_ibu,
            'referensi' => $request->referensi,
            'password' => bcrypt($request->nisn)
        ]);
        
        $pdf = User::latest()->first();
        return view('daftar.pdf', compact('pdf'));
    } 

    public function auth(Request $request)
    {
        $request->validate([
            'email' => 'required|exists:users,email',
            'password' => 'required'
        ], [
            'email.exists' => 'Email ini belum tersedia',
            'email' => 'Email harus diisi',
            'password' => 'password harus diisi'
        ]);

        $user = $request->only('email', 'password');
        if(Auth::attempt($user)){
            if(Auth::user()->role == 'user'){
                return redirect('/student')->with('successLogin', 'Anda berhasil login!!!');
            }else if(Auth::user()->role == 'admin'){
                return redirect('/admin');
            }
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $payment = $request->validate([
            'nama_bank' => 'required',
            'pemilik_rekening' => 'required',
            'nominal' => 'required|min:4',
            'bukti' => 'required|image|mimes:jpg,png,jpeg,svg,gif'
        ]);

        $payment['bukti'] = $request->file('bukti')->store('bukti-img');

        Ppdb::create([
            'user_id' => Auth::user()->id,
            'nama_bank' => $request->nama_bank,
            'pemilik_rekening' => $request->pemilik_rekening,
            'nominal' => $request->nominal,
            'bukti' => $payment['bukti'],
        ]);
        return redirect('/pembayaran');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ppdb  $ppdb
     * @return \Illuminate\Http\Response
     */
    public function show(Ppdb $ppdb)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ppdb  $ppdb
     * @return \Illuminate\Http\Response
     */
    public function edit(Ppdb $ppdb)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ppdb  $ppdb
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        //
        Ppdb::where('id', $id)->update([
            'status' => 0,
        ]);
        return redirect('/transaksi')->with('successUpdate', 'Data berhasil diperbaharui!');
    }
    
    public function reject($id)
    {
        //
        Ppdb::where('id', $id)->update([
            'status' => 2,
        ]);
        return redirect('/transaksi')->with('successReject', 'Data berhasil diperbaharui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ppdb  $ppdb
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ppdb $ppdb)
    {
        //
    }
}
