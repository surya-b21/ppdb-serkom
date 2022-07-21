<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Hasil;
use App\Models\Nilai;
use App\Models\Sekolah;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sekolah = Sekolah::all();
        return view('user.pendaftaran.index', compact('sekolah'));
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            "nama" => "required",
            "tempat_lahir" => "required",
            "tanggal_lahir" => "required",
            "alamat" => "required",
            "foto_path" => "required",
            "matematika" => "required",
            "bahasa_indonesia" => "required",
            "bahasa_inggris" => "required",
            "sekolah_id" => "required",
        ]);

        if ($request->file()) {
            $fotoName = $request->nama . '.' . $request->file('foto_path')->extension();
            $fotoPath = Storage::putFileAs('public/ppdb', $request->file('foto_path'), $fotoName);

            $user = User::findOrFail(Auth::id());
            $user->nama = $request->nama;
            $user->tempat_lahir = $request->tempat_lahir;
            $user->tanggal_lahir = $request->tanggal_lahir;
            $user->alamat = $request->alamat;
            $user->foto_path = $fotoPath;
            $user->save();

            $nilai = new Nilai;
            $nilai->user_id = Auth::user()->id;
            $nilai->sekolah_id = $request->sekolah_id;
            $nilai->matematika = $request->matematika;
            $nilai->bahasa_indonesia = $request->bahasa_indonesia;
            $nilai->bahasa_inggris = $request->bahasa_inggris;
            $nilai->save();

            $hasil = new Hasil;
            $hasil->user_id = Auth::id();
            $hasil->sekolah_id = $request->sekolah_id;
            $hasil->rata_rata = ($request->matematika + $request->bahasa_indonesia + $request->bahasa_inggris) / 3;
            $hasil->save();
        }

        return redirect()->route('user.dashboard')->with('sukses', "Sukses Mendaftar");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
