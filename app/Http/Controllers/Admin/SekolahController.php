<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sekolah;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class SekolahController extends Controller
{
    /**
     * Display view sekolah index
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.sekolah.index');
    }

    /**
     * Show the form for creating a new sekolah.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sekolah.create');
    }

    /**
     * Store a newly created sekolah in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate(
            [
                "nama" => "required",
                "alamat" => "required",
                "limit" => "required",
            ],
            [
                'required' => ':attribute harus diisi !!!'
            ]
        );

        if (!$validate) {
            // error
        }

        $sekolah = new Sekolah;
        $sekolah->nama = $request->nama;
        $sekolah->alamat = $request->alamat;
        $sekolah->limit = $request->limit;
        $sekolah->save();

        return redirect()->route('admin.sekolah.index')->with('sukses', "Sukses Menambahkan Data");
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

    // get sekolah
    public function getsekolah()
    {
        $sekolah = Sekolah::select(['id', 'nama', 'alamat', 'limit']);

        return DataTables::of($sekolah)
            ->addIndexColumn()
            ->toJson();
    }
}
